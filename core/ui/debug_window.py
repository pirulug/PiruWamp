# core/ui/debug_window.py

import tkinter as tk
from tkinter import ttk, messagebox
from ..managers.live_monitor import live_monitor
from ..core.config import config

# Vanilla White Theme Palette
BG_WHITE = "#ffffff"
BG_LIGHT = "#f5f5f5"
BORDER_COLOR = "#d0d0d0"
ROW_BORDER = "#e8e8e8"
TEXT_PRIMARY = "#000000"
TEXT_SECONDARY = "#555555"
TEXT_MUTED = "#777777"
BTN_BG = "#e1e1e1"
BTN_HOVER = "#e8e8e8"
BTN_ACTIVE = "#cccccc"
ACTIVE_TAB_BG = "#0078d7"
ACTIVE_TAB_FG = "#ffffff"

class DebugWindow(tk.Toplevel):
    def __init__(self, parent_app=None):
        root = parent_app.root if parent_app else None
        super().__init__(root)
        self.title("PiruWamp - Insights & Depuración en Vivo")
        self.geometry("960x650")
        self.minsize(800, 520)
        self.configure(bg=BG_WHITE)

        self.parent_app = parent_app
        self.active_category = "All"
        self.always_on_top = False
        self.auto_scroll = True
        self.keep_history = True
        self.min_query_duration_ms = 0

        self.enabled_types = {
            "DUMP": True,
            "QUERY": True,
            "HTTP": True,
            "LOG": True
        }

        self.selected_event = None
        self._setup_ui()

        # Iniciar monitor si no está corriendo y suscribirse
        live_monitor.start()
        live_monitor.subscribe(self._on_live_event)
        self.protocol("WM_DELETE_WINDOW", self._on_close)

        self.refresh_list()

    def _setup_ui(self):
        # 1. Barra de Navegación Superior (Tabs: All, Dumps, Queries, HTTP, Logs)
        nav_bar = tk.Frame(self, bg=BG_LIGHT, highlightbackground=BORDER_COLOR, highlightthickness=1, padx=12, pady=6)
        nav_bar.pack(fill=tk.X)

        self.tabs = {}
        tab_names = ["All", "Dumps", "Queries", "HTTP", "Logs"]

        for name in tab_names:
            btn = tk.Button(
                nav_bar,
                text=name,
                font=("Segoe UI", 9, "bold" if name == "All" else "normal"),
                bg=ACTIVE_TAB_BG if name == "All" else BG_LIGHT,
                fg=ACTIVE_TAB_FG if name == "All" else TEXT_PRIMARY,
                activebackground=ACTIVE_TAB_BG,
                activeforeground=ACTIVE_TAB_FG,
                relief="flat",
                padx=14,
                pady=4,
                cursor="hand2",
                command=lambda n=name: self._switch_tab(n)
            )
            btn.pack(side=tk.LEFT, padx=3)
            self.tabs[name] = btn

        # 2. Barra de Herramientas y Búsqueda
        toolbar = tk.Frame(self, bg=BG_WHITE, highlightbackground=BORDER_COLOR, highlightthickness=1, padx=12, pady=8)
        toolbar.pack(fill=tk.X)

        # Campo de búsqueda
        tk.Label(toolbar, text="Buscar:", font=("Segoe UI", 9), bg=BG_WHITE, fg=TEXT_SECONDARY).pack(side=tk.LEFT, padx=(0, 6))

        self.search_var = tk.StringVar()
        self.search_var.trace_add("write", lambda *args: self.refresh_list())

        self.search_entry = tk.Entry(
            toolbar,
            textvariable=self.search_var,
            font=("Segoe UI", 9),
            bg=BG_WHITE,
            fg=TEXT_PRIMARY,
            insertbackground=TEXT_PRIMARY,
            relief="solid",
            borderwidth=1,
            width=28
        )
        self.search_entry.pack(side=tk.LEFT, padx=(0, 14))

        # Contador de eventos
        self.counter_label = tk.Label(toolbar, text="0 eventos", font=("Segoe UI", 9), bg=BG_WHITE, fg=TEXT_MUTED)
        self.counter_label.pack(side=tk.LEFT)

        # Botones en el extremo derecho
        self.btn_options = self._create_vanilla_button(toolbar, text="Opciones", command=self._show_options_menu)
        self.btn_options.pack(side=tk.RIGHT, padx=3)

        self.btn_autoscroll = self._create_vanilla_button(toolbar, text="Auto-scroll: ON", command=self._toggle_autoscroll)
        self.btn_autoscroll.pack(side=tk.RIGHT, padx=3)

        self.btn_top = self._create_vanilla_button(toolbar, text="Fijar", command=self._toggle_always_on_top)
        self.btn_top.pack(side=tk.RIGHT, padx=3)

        self.btn_clear = self._create_vanilla_button(toolbar, text="Limpiar", command=self._clear_events)
        self.btn_clear.pack(side=tk.RIGHT, padx=3)

        # 3. Área Principal Dividida (PanedWindow horizontal: Lista de eventos + Inspector de detalles)
        self.paned = ttk.PanedWindow(self, orient=tk.HORIZONTAL)
        self.paned.pack(fill=tk.BOTH, expand=True, padx=12, pady=10)

        # Panel Izquierdo: Lista de eventos
        left_frame = tk.Frame(self.paned, bg=BG_WHITE, highlightbackground=BORDER_COLOR, highlightthickness=1)
        self.paned.add(left_frame, weight=3)

        columns = ("Time", "Type", "Title")
        self.tree = ttk.Treeview(left_frame, columns=columns, show="headings", selectmode="browse")
        self.tree.heading("Time", text="Hora")
        self.tree.heading("Type", text="Tipo")
        self.tree.heading("Title", text="Evento / Registro")

        self.tree.column("Time", width=75, anchor="center")
        self.tree.column("Type", width=75, anchor="center")
        self.tree.column("Title", width=380, anchor="w")

        tree_scroll = ttk.Scrollbar(left_frame, orient=tk.VERTICAL, command=self.tree.yview)
        self.tree.configure(yscrollcommand=tree_scroll.set)

        self.tree.pack(side=tk.LEFT, fill=tk.BOTH, expand=True)
        tree_scroll.pack(side=tk.RIGHT, fill=tk.Y)

        self.tree.bind("<<TreeviewSelect>>", self._on_select_event)

        # Panel Derecho: Inspector de Detalles
        right_frame = tk.Frame(self.paned, bg=BG_WHITE, highlightbackground=BORDER_COLOR, highlightthickness=1)
        self.paned.add(right_frame, weight=2)

        details_header = tk.Frame(right_frame, bg=BG_LIGHT, pady=6, padx=10)
        details_header.pack(fill=tk.X)

        self.details_title = tk.Label(details_header, text="Detalle del Evento", font=("Segoe UI", 9, "bold"), bg=BG_LIGHT, fg=TEXT_PRIMARY)
        self.details_title.pack(side=tk.LEFT)

        btn_copy = self._create_vanilla_button(details_header, text="Copiar", command=self._copy_details, padx=8, pady=2)
        btn_copy.pack(side=tk.RIGHT)

        self.details_text = tk.Text(
            right_frame,
            font=("Consolas", 9),
            bg=BG_WHITE,
            fg=TEXT_PRIMARY,
            insertbackground=TEXT_PRIMARY,
            relief="flat",
            wrap="word",
            padx=10,
            pady=10
        )
        details_scroll = ttk.Scrollbar(right_frame, orient=tk.VERTICAL, command=self.details_text.yview)
        self.details_text.configure(yscrollcommand=details_scroll.set)

        self.details_text.pack(side=tk.LEFT, fill=tk.BOTH, expand=True)
        details_scroll.pack(side=tk.RIGHT, fill=tk.Y)

    def _create_vanilla_button(self, parent, text, command, font=("Segoe UI", 8), padx=10, pady=3):
        btn = tk.Button(
            parent,
            text=text,
            font=font,
            bg=BTN_BG,
            fg=TEXT_PRIMARY,
            activebackground=BTN_ACTIVE,
            activeforeground=TEXT_PRIMARY,
            relief="raised",
            borderwidth=1,
            padx=padx,
            pady=pady,
            cursor="hand2",
            command=command
        )

        def on_enter(e):
            btn.configure(bg=BTN_HOVER)

        def on_leave(e):
            btn.configure(bg=BTN_BG)

        btn.bind("<Enter>", on_enter)
        btn.bind("<Leave>", on_leave)
        return btn

    def _switch_tab(self, tab_name):
        self.active_category = tab_name
        for name, btn in self.tabs.items():
            if name == tab_name:
                btn.configure(bg=ACTIVE_TAB_BG, fg=ACTIVE_TAB_FG, font=("Segoe UI", 9, "bold"))
            else:
                btn.configure(bg=BG_LIGHT, fg=TEXT_PRIMARY, font=("Segoe UI", 9, "normal"))
        self.refresh_list()

    def _on_live_event(self, event):
        # Programar actualización en el hilo principal de Tkinter
        self.after(0, lambda: self._handle_event_gui(event))

    def _handle_event_gui(self, event):
        if not self._matches_filter(event):
            return

        ev_type = event["type"]
        tag = ev_type.lower()
        badge = event.get("badge", ev_type)
        item_id = self.tree.insert("", tk.END, values=(event["time"], badge, event["title"]), tags=(tag,))

        # Asociar objeto evento a la fila
        self.tree.item(item_id, text=str(event["id"]))

        # Auto-scroll si está activado
        if self.auto_scroll:
            self.tree.yview_moveto(1.0)

        total_visible = len(self.tree.get_children())
        self.counter_label.config(text=f"{total_visible} eventos")

    def _matches_filter(self, event):
        ev_type = event["type"]

        # 1. Filtro por tipo habilitado en opciones
        if not self.enabled_types.get(ev_type, True):
            return False

        # 2. Filtro por pestaña activa
        if self.active_category == "Dumps" and ev_type != "DUMP":
            return False
        elif self.active_category == "Queries" and ev_type != "QUERY":
            return False
        elif self.active_category == "HTTP" and ev_type != "HTTP":
            return False
        elif self.active_category == "Logs" and ev_type != "LOG":
            return False

        # 3. Filtro por búsqueda de texto
        query = self.search_var.get().strip().lower()
        if query:
            match_title = query in event["title"].lower()
            match_subtitle = query in event.get("subtitle", "").lower()
            match_details = query in event.get("details", "").lower()
            if not (match_title or match_subtitle or match_details):
                return False

        return True

    def refresh_list(self):
        for item in self.tree.get_children():
            self.tree.delete(item)

        count = 0
        with live_monitor._lock:
            cached_events = list(live_monitor.events)

        for event in cached_events:
            if self._matches_filter(event):
                badge = event.get("badge", event["type"])
                item_id = self.tree.insert("", tk.END, values=(event["time"], badge, event["title"]))
                self.tree.item(item_id, text=str(event["id"]))
                count += 1

        if self.auto_scroll:
            self.tree.yview_moveto(1.0)

        self.counter_label.config(text=f"{count} eventos")

    def _on_select_event(self, event):
        selected = self.tree.selection()
        if not selected:
            return

        item_id = selected[0]
        ev_id = self.tree.item(item_id, "text")

        target_event = None
        with live_monitor._lock:
            for ev in live_monitor.events:
                if str(ev["id"]) == str(ev_id):
                    target_event = ev
                    break

        if not target_event:
            return

        self.selected_event = target_event
        self.details_title.config(text=f"[{target_event['type']}] {target_event['time']} - {target_event['title'][:40]}")

        self.details_text.delete("1.0", tk.END)
        content = f"--- Evento: {target_event['type']} ---\n"
        content += f"Hora: {target_event['time']}\n"
        if target_event.get("subtitle"):
            content += f"Origen / Info: {target_event['subtitle']}\n"
        content += "\n--- Contenido / Detalle ---\n"
        content += target_event.get("details", "")

        self.details_text.insert("1.0", content)

    def _copy_details(self):
        content = self.details_text.get("1.0", tk.END).strip()
        if content:
            self.clipboard_clear()
            self.clipboard_append(content)
            messagebox.showinfo("Copiado", "Contenido copiado al portapapeles.")

    def _clear_events(self):
        live_monitor.clear()
        self.details_text.delete("1.0", tk.END)
        self.details_title.config(text="Detalle del Evento")
        self.refresh_list()

    def _toggle_always_on_top(self):
        self.always_on_top = not self.always_on_top
        self.wm_attributes("-topmost", self.always_on_top)
        self.btn_top.config(text="Fijado [ON]" if self.always_on_top else "Fijar")

    def _toggle_autoscroll(self):
        self.auto_scroll = not self.auto_scroll
        self.btn_autoscroll.config(text="Auto-scroll: ON" if self.auto_scroll else "Auto-scroll: OFF")

    def _show_options_menu(self):
        # Ventana modal de opciones estilo popover vanilla
        opt_win = tk.Toplevel(self)
        opt_win.title("Opciones de Monitoreo")
        opt_win.geometry("340x310")
        opt_win.resizable(False, False)
        opt_win.configure(bg=BG_WHITE)
        opt_win.transient(self)
        opt_win.grab_set()

        frame = tk.Frame(opt_win, bg=BG_WHITE, padx=16, pady=16)
        frame.pack(fill=tk.BOTH, expand=True)

        tk.Label(frame, text="Mostrar en esta ventana:", font=("Segoe UI", 9, "bold"), bg=BG_WHITE, fg=TEXT_PRIMARY).pack(anchor="w", pady=(0, 8))

        var_dump = tk.BooleanVar(value=self.enabled_types.get("DUMP", True))
        var_query = tk.BooleanVar(value=self.enabled_types.get("QUERY", True))
        var_http = tk.BooleanVar(value=self.enabled_types.get("HTTP", True))
        var_log = tk.BooleanVar(value=self.enabled_types.get("LOG", True))

        tk.Checkbutton(frame, text="Dumps (Volcados de variables PHP)", variable=var_dump, bg=BG_WHITE, fg=TEXT_PRIMARY, activebackground=BG_WHITE).pack(anchor="w", pady=2)
        tk.Checkbutton(frame, text="Queries (Consultas MariaDB)", variable=var_query, bg=BG_WHITE, fg=TEXT_PRIMARY, activebackground=BG_WHITE).pack(anchor="w", pady=2)
        tk.Checkbutton(frame, text="HTTP (Peticiones Apache)", variable=var_http, bg=BG_WHITE, fg=TEXT_PRIMARY, activebackground=BG_WHITE).pack(anchor="w", pady=2)
        tk.Checkbutton(frame, text="Logs (Errores de PHP y Apache)", variable=var_log, bg=BG_WHITE, fg=TEXT_PRIMARY, activebackground=BG_WHITE).pack(anchor="w", pady=2)

        tk.Frame(frame, bg=ROW_BORDER, height=1).pack(fill=tk.X, pady=12)

        def save_and_close():
            self.enabled_types["DUMP"] = var_dump.get()
            self.enabled_types["QUERY"] = var_query.get()
            self.enabled_types["HTTP"] = var_http.get()
            self.enabled_types["LOG"] = var_log.get()
            self.refresh_list()
            opt_win.destroy()

        btn_apply = self._create_vanilla_button(frame, text="Guardar Filtros", command=save_and_close, font=("Segoe UI", 9, "bold"))
        btn_apply.pack(side=tk.RIGHT, pady=(10, 0))

    def _on_close(self):
        live_monitor.unsubscribe(self._on_live_event)
        self.destroy()

