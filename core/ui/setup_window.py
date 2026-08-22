# core/ui/setup_window.py

import tkinter as tk
from tkinter import ttk
import threading
from ..core.logger import logger
from ..managers.setup_manager import SetupManager
from .theme import apply_theme, style_button, style_label, FONT_MAIN, FONT_TITLE

class SetupWindow:
    def __init__(self, parent, on_complete=None):
        self.parent = parent
        self.on_complete = on_complete

        self.window = tk.Toplevel(parent)
        self.window.title("Configuracion Inicial - PiruWamp")
        self.window.geometry("540x400")
        self.window.resizable(False, False)
        self.window.protocol("WM_DELETE_WINDOW", self._on_closing)

        # Centrar ventana
        self._center_window()

        self.combos = {}
        self.is_installing = False

        self._setup_ui()
        apply_theme(self.window)

    def _center_window(self):
        self.window.update_idletasks()
        width = 540
        height = 400
        x = (self.window.winfo_screenwidth() // 2) - (width // 2)
        y = (self.window.winfo_screenheight() // 2) - (height // 2)
        self.window.geometry(f"{width}x{height}+{x}+{y}")

    def _setup_ui(self):
        self.main_container = tk.Frame(self.window, padx=25, pady=20)
        self.main_container.pack(fill="both", expand=True)

        # Encabezado
        self.lbl_title = tk.Label(self.main_container, text="Configuracion Inicial de PiruWamp", font=FONT_TITLE)
        style_label(self.lbl_title, title=True)
        self.lbl_title.pack(anchor="w", pady=(0, 4))

        self.lbl_subtitle = tk.Label(
            self.main_container,
            text="Selecciona las versiones que deseas descargar e instalar para cada servicio:",
            font=FONT_MAIN,
            fg="#555555"
        )
        style_label(self.lbl_subtitle)
        self.lbl_subtitle.pack(anchor="w", pady=(0, 15))

        # --- VISTA 1: Selector de Versiones ---
        self.selection_frame = tk.Frame(self.main_container)
        self.selection_frame.pack(fill="both", expand=True)

        services = SetupManager.get_service_options()
        for idx, srv in enumerate(services):
            srv_id = srv["id"]
            title = srv["title"]
            versions = srv["versions"]
            selected = srv["selected"]

            row_frame = tk.Frame(self.selection_frame)
            row_frame.pack(fill="x", pady=6)

            lbl_srv = tk.Label(row_frame, text=title, font=FONT_MAIN, width=22, anchor="w")
            style_label(lbl_srv)
            lbl_srv.pack(side="left")

            combo = ttk.Combobox(row_frame, values=versions, state="readonly", width=28)
            if selected in versions:
                combo.set(selected)
            elif versions:
                combo.set(versions[0])
            combo.pack(side="left", padx=(10, 0))

            self.combos[srv_id] = combo

        # Botones de la vista de seleccion
        self.select_btn_frame = tk.Frame(self.selection_frame)
        self.select_btn_frame.pack(fill="x", pady=(20, 0))

        self.btn_start = tk.Button(
            self.select_btn_frame,
            text="Instalar y Comenzar",
            command=self._start_installation,
            width=20
        )
        style_button(self.btn_start)
        self.btn_start.pack(side="right")

        # --- VISTA 2: Progreso de Instalacion (Oculta al inicio) ---
        self.progress_frame = tk.Frame(self.main_container)

        # Estado actual
        status_box = tk.Frame(self.progress_frame)
        status_box.pack(fill="x", pady=(10, 8))

        self.lbl_task = tk.Label(status_box, text="Iniciando instalacion...", font=FONT_MAIN)
        style_label(self.lbl_task)
        self.lbl_task.pack(side="left")

        self.lbl_percent = tk.Label(status_box, text="0%", font=FONT_MAIN)
        style_label(self.lbl_percent)
        self.lbl_percent.pack(side="right")

        # Barra de progreso
        self.progress_bar = ttk.Progressbar(self.progress_frame, orient="horizontal", mode="determinate", length=480)
        self.progress_bar.pack(fill="x", pady=(0, 15))

        # Estado detallado
        self.lbl_detail = tk.Label(self.progress_frame, text="Preparando paquetes...", font=("Segoe UI", 8), fg="#666666")
        style_label(self.lbl_detail)
        self.lbl_detail.pack(anchor="w", pady=(0, 20))

        # Boton de accion final
        self.action_btn_frame = tk.Frame(self.progress_frame)
        self.action_btn_frame.pack(fill="x")

        self.btn_action = tk.Button(self.action_btn_frame, text="Descargando...", state="disabled", width=18)
        style_button(self.btn_action)
        self.btn_action.pack(side="right")

    def _start_installation(self):
        # Recoger selecciones del usuario
        selections = {}
        for srv_id, combo in self.combos.items():
            selections[srv_id] = combo.get().strip()

        self.is_installing = True

        # Cambiar a la vista de progreso
        self.selection_frame.pack_forget()
        self.lbl_subtitle.config(text="Descargando y configurando los paquetes seleccionados...")
        self.progress_frame.pack(fill="both", expand=True)

        thread = threading.Thread(target=self._run_setup_thread, args=(selections,), daemon=True)
        thread.start()

    def _run_setup_thread(self, selections):
        def on_progress(current_idx, total_items, comp_name, percent):
            self.window.after(0, lambda: self._apply_progress_ui(current_idx, total_items, comp_name, percent))

        def on_task(task_text, detail_text):
            self.window.after(0, lambda: self._apply_task_ui(task_text, detail_text))

        success, message = SetupManager.install_selected_components(
            selections,
            progress_callback=on_progress,
            task_callback=on_task
        )
        self._finish_setup(success, message)

    def _apply_progress_ui(self, current_idx, total_items, comp_name, percent):
        self.progress_bar["value"] = percent
        self.lbl_percent.config(text=f"{percent}%")
        self.lbl_detail.config(text=f"{comp_name}: {percent}% completado")

    def _apply_task_ui(self, task_text, detail_text):
        self.lbl_task.config(text=task_text)
        self.lbl_detail.config(text=detail_text)
        self.progress_bar["value"] = 0
        self.lbl_percent.config(text="0%")

    def _finish_setup(self, success, message=""):
        self.window.after(0, lambda: self._apply_finish_setup(success, message))

    def _apply_finish_setup(self, success, message):
        self.is_installing = False
        if success:
            self.lbl_task.config(text="Instalacion completada con exito.")
            self.lbl_detail.config(text="Todos los paquetes han sido configurados correctamente.")
            self.progress_bar["value"] = 100
            self.lbl_percent.config(text="100%")

            self.btn_action.config(text="Comenzar", state="normal", command=self._close_and_complete)
            # Auto-cerrar despues de 1 segundo
            self.window.after(1200, self._close_and_complete)
        else:
            self.lbl_task.config(text="Error en la instalacion inicial.")
            self.lbl_detail.config(text=message if message else "Ocurrio un error al descargar los componentes.")
            self.btn_action.config(text="Cerrar", state="normal", command=self.window.destroy)

    def _close_and_complete(self):
        try:
            self.window.destroy()
        except Exception:
            pass

        if self.on_complete:
            self.on_complete()

    def _on_closing(self):
        if not self.is_installing:
            try:
                self.window.destroy()
            except Exception:
                pass
