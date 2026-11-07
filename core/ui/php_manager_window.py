# core/ui/php_manager_window.py

import os
import re
import threading
import tkinter as tk
from tkinter import ttk, messagebox
from ..managers.php_repository import PHPRepository
from ..managers.php_manager import PHPManager
from ..core.config import config
from ..core.logger import logger

# Vanilla White Theme Palette
VANILLA_BG = "#ffffff"
VANILLA_CARD_BG = "#ffffff"
VANILLA_CARD_BORDER = "#d0d0d0"
VANILLA_ROW_BORDER = "#e8e8e8"
VANILLA_TEXT_PRIMARY = "#000000"
VANILLA_TEXT_SECONDARY = "#555555"
VANILLA_TEXT_MUTED = "#777777"
VANILLA_BTN_BG = "#e1e1e1"
VANILLA_BTN_HOVER = "#e8e8e8"
VANILLA_BTN_ACTIVE = "#cccccc"
VANILLA_BADGE_BG = "#dcfce7"
VANILLA_BADGE_FG = "#15803d"
VANILLA_BADGE_BORDER = "#86efac"
VANILLA_INPUT_BG = "#ffffff"
VANILLA_INPUT_BORDER = "#b0b0b0"

class PHPManagerWindow(tk.Toplevel):
    def __init__(self, parent_app):
        super().__init__(parent_app.root)
        self.title("PHP")
        self.geometry("720x680")
        self.minsize(660, 600)
        self.configure(bg=VANILLA_BG)
        self.transient(parent_app.root)
        self.grab_set()

        self.parent_app = parent_app
        self.repository = PHPRepository()
        self.is_downloading = False

        self._setup_ui()
        self.refresh_all()

    def _setup_ui(self):
        # Canvas principal con scrollbar vertical
        self.canvas = tk.Canvas(self, bg=VANILLA_BG, highlightthickness=0)
        self.scrollbar = ttk.Scrollbar(self, orient=tk.VERTICAL, command=self.canvas.yview)
        self.scrollable_frame = tk.Frame(self.canvas, bg=VANILLA_BG)

        self.scrollable_frame.bind(
            "<Configure>",
            lambda e: self.canvas.configure(scrollregion=self.canvas.bbox("all"))
        )

        self.canvas_window = self.canvas.create_window((0, 0), window=self.scrollable_frame, anchor="nw")
        self.canvas.configure(yscrollcommand=self.scrollbar.set)

        self.canvas.bind(
            "<Configure>",
            lambda e: self.canvas.itemconfig(self.canvas_window, width=e.width)
        )

        def _on_mousewheel(event):
            if event.delta:
                self.canvas.yview_scroll(int(-1 * (event.delta / 120)), "units")

        self.canvas.bind_all("<MouseWheel>", _on_mousewheel)

        self.canvas.pack(side=tk.LEFT, fill=tk.BOTH, expand=True)
        self.scrollbar.pack(side=tk.RIGHT, fill=tk.Y)

        container = tk.Frame(self.scrollable_frame, bg=VANILLA_BG, padx=24, pady=20)
        container.pack(fill=tk.BOTH, expand=True)

        # 1. Encabezado principal
        tk.Label(
            container,
            text="PHP",
            font=("Segoe UI", 16, "bold"),
            fg=VANILLA_TEXT_PRIMARY,
            bg=VANILLA_BG,
            anchor="w"
        ).pack(fill=tk.X)

        tk.Label(
            container,
            text="Install and switch between PHP versions, and manage the PHP configuration used across your sites.",
            font=("Segoe UI", 9),
            fg=VANILLA_TEXT_SECONDARY,
            bg=VANILLA_BG,
            anchor="w"
        ).pack(fill=tk.X, pady=(2, 16))

        # 2. Sección: Versions
        tk.Label(
            container,
            text="Versions",
            font=("Segoe UI", 11, "bold"),
            fg=VANILLA_TEXT_PRIMARY,
            bg=VANILLA_BG,
            anchor="w"
        ).pack(fill=tk.X, pady=(0, 8))

        # Tarjeta contenedora de versiones
        self.versions_card = tk.Frame(
            container,
            bg=VANILLA_CARD_BG,
            highlightbackground=VANILLA_CARD_BORDER,
            highlightthickness=1,
            padx=16,
            pady=8
        )
        self.versions_card.pack(fill=tk.X, pady=(0, 20))

        # Encabezado de la tabla de versiones
        header_frame = tk.Frame(self.versions_card, bg=VANILLA_CARD_BG, pady=4)
        header_frame.pack(fill=tk.X)

        tk.Label(
            header_frame,
            text="VERSION",
            font=("Segoe UI", 8, "bold"),
            fg=VANILLA_TEXT_MUTED,
            bg=VANILLA_CARD_BG
        ).pack(side=tk.LEFT)

        tk.Label(
            header_frame,
            text="INSTALLED",
            font=("Segoe UI", 8, "bold"),
            fg=VANILLA_TEXT_MUTED,
            bg=VANILLA_CARD_BG
        ).pack(side=tk.RIGHT, padx=12)

        # Línea separadora del encabezado
        tk.Frame(self.versions_card, bg=VANILLA_ROW_BORDER, height=1).pack(fill=tk.X, pady=(4, 0))

        # Filas dinámicas de versiones
        self.rows_frame = tk.Frame(self.versions_card, bg=VANILLA_CARD_BG)
        self.rows_frame.pack(fill=tk.X)

        # Barra de progreso para descargas
        self.progress_frame = tk.Frame(container, bg=VANILLA_BG)
        self.progress_label = tk.Label(
            self.progress_frame,
            text="",
            font=("Segoe UI", 9),
            fg=VANILLA_TEXT_SECONDARY,
            bg=VANILLA_BG
        )
        self.progress_label.pack(anchor="w", pady=(0, 4))
        self.progress_bar = ttk.Progressbar(self.progress_frame, orient=tk.HORIZONTAL, mode="determinate")
        self.progress_bar.pack(fill=tk.X)

        # 3. Sección: Limits
        tk.Label(
            container,
            text="Limits",
            font=("Segoe UI", 11, "bold"),
            fg=VANILLA_TEXT_PRIMARY,
            bg=VANILLA_BG,
            anchor="w"
        ).pack(fill=tk.X, pady=(0, 8))

        self.limits_card = tk.Frame(
            container,
            bg=VANILLA_CARD_BG,
            highlightbackground=VANILLA_CARD_BORDER,
            highlightthickness=1,
            padx=16,
            pady=12
        )
        self.limits_card.pack(fill=tk.X, pady=(0, 16))

        # Item 1: Max file upload size
        upload_frame = tk.Frame(self.limits_card, bg=VANILLA_CARD_BG, pady=6)
        upload_frame.pack(fill=tk.X)

        icon_upload = tk.Label(
            upload_frame,
            text="[Subida]",
            font=("Segoe UI", 8, "bold"),
            bg="#f0f0f0",
            fg=VANILLA_TEXT_SECONDARY,
            relief="solid",
            borderwidth=1,
            width=8,
            pady=4
        )
        icon_upload.pack(side=tk.LEFT, padx=(0, 12))

        upload_text_frame = tk.Frame(upload_frame, bg=VANILLA_CARD_BG)
        upload_text_frame.pack(side=tk.LEFT, fill=tk.Y)

        tk.Label(
            upload_text_frame,
            text="Max file upload size",
            font=("Segoe UI", 9, "bold"),
            fg=VANILLA_TEXT_PRIMARY,
            bg=VANILLA_CARD_BG,
            anchor="w"
        ).pack(anchor="w")

        tk.Label(
            upload_text_frame,
            text="Maximum file size PHP accepts for uploads, in MB.",
            font=("Segoe UI", 8),
            fg=VANILLA_TEXT_SECONDARY,
            bg=VANILLA_CARD_BG,
            anchor="w"
        ).pack(anchor="w")

        upload_ctrl_frame = tk.Frame(upload_frame, bg=VANILLA_CARD_BG)
        upload_ctrl_frame.pack(side=tk.RIGHT)

        self.upload_entry = tk.Entry(
            upload_ctrl_frame,
            font=("Segoe UI", 9),
            width=8,
            bg=VANILLA_INPUT_BG,
            fg=VANILLA_TEXT_PRIMARY,
            insertbackground=VANILLA_TEXT_PRIMARY,
            justify="center",
            relief="solid",
            borderwidth=1
        )
        self.upload_entry.pack(side=tk.LEFT, padx=(0, 6))

        tk.Label(
            upload_ctrl_frame,
            text="MB",
            font=("Segoe UI", 9),
            fg=VANILLA_TEXT_SECONDARY,
            bg=VANILLA_CARD_BG
        ).pack(side=tk.LEFT)

        # Separador entre límites
        tk.Frame(self.limits_card, bg=VANILLA_ROW_BORDER, height=1).pack(fill=tk.X, pady=6)

        # Item 2: Memory limit
        mem_frame = tk.Frame(self.limits_card, bg=VANILLA_CARD_BG, pady=6)
        mem_frame.pack(fill=tk.X)

        icon_mem = tk.Label(
            mem_frame,
            text="[RAM]",
            font=("Segoe UI", 8, "bold"),
            bg="#f0f0f0",
            fg=VANILLA_TEXT_SECONDARY,
            relief="solid",
            borderwidth=1,
            width=8,
            pady=4
        )
        icon_mem.pack(side=tk.LEFT, padx=(0, 12))

        mem_text_frame = tk.Frame(mem_frame, bg=VANILLA_CARD_BG)
        mem_text_frame.pack(side=tk.LEFT, fill=tk.Y)

        tk.Label(
            mem_text_frame,
            text="Memory limit",
            font=("Segoe UI", 9, "bold"),
            fg=VANILLA_TEXT_PRIMARY,
            bg=VANILLA_CARD_BG,
            anchor="w"
        ).pack(anchor="w")

        tk.Label(
            mem_text_frame,
            text="Maximum memory a PHP script may consume, in MB. Use -1 for unlimited.",
            font=("Segoe UI", 8),
            fg=VANILLA_TEXT_SECONDARY,
            bg=VANILLA_CARD_BG,
            anchor="w"
        ).pack(anchor="w")

        mem_ctrl_frame = tk.Frame(mem_frame, bg=VANILLA_CARD_BG)
        mem_ctrl_frame.pack(side=tk.RIGHT)

        self.mem_entry = tk.Entry(
            mem_ctrl_frame,
            font=("Segoe UI", 9),
            width=8,
            bg=VANILLA_INPUT_BG,
            fg=VANILLA_TEXT_PRIMARY,
            insertbackground=VANILLA_TEXT_PRIMARY,
            justify="center",
            relief="solid",
            borderwidth=1
        )
        self.mem_entry.pack(side=tk.LEFT, padx=(0, 6))

        tk.Label(
            mem_ctrl_frame,
            text="MB",
            font=("Segoe UI", 9),
            fg=VANILLA_TEXT_SECONDARY,
            bg=VANILLA_CARD_BG
        ).pack(side=tk.LEFT)

        # Botón para guardar límites
        limits_btn_frame = tk.Frame(self.limits_card, bg=VANILLA_CARD_BG, pady=6)
        limits_btn_frame.pack(fill=tk.X)

        btn_save_limits = self._create_vanilla_button(
            limits_btn_frame,
            text="Aplicar Límites",
            command=self.save_limits,
            font=("Segoe UI", 9, "bold")
        )
        btn_save_limits.pack(side=tk.RIGHT)

        # 4. Pie de ventana
        footer_frame = tk.Frame(container, bg=VANILLA_BG)
        footer_frame.pack(fill=tk.X, pady=(6, 0))

        btn_refresh = self._create_vanilla_button(
            footer_frame,
            text="Actualizar Lista",
            command=self.refresh_all
        )
        btn_refresh.pack(side=tk.LEFT)

        btn_close = self._create_vanilla_button(
            footer_frame,
            text="Cerrar",
            command=self.destroy
        )
        btn_close.pack(side=tk.RIGHT)

    def _create_vanilla_button(self, parent, text, command, font=("Segoe UI", 9), padx=12, pady=3):
        btn = tk.Button(
            parent,
            text=text,
            font=font,
            bg=VANILLA_BTN_BG,
            fg=VANILLA_TEXT_PRIMARY,
            activebackground=VANILLA_BTN_ACTIVE,
            activeforeground=VANILLA_TEXT_PRIMARY,
            relief="raised",
            borderwidth=1,
            padx=padx,
            pady=pady,
            cursor="hand2",
            command=command
        )

        def on_enter(e):
            btn.configure(bg=VANILLA_BTN_HOVER)

        def on_leave(e):
            btn.configure(bg=VANILLA_BTN_BG)

        btn.bind("<Enter>", on_enter)
        btn.bind("<Leave>", on_leave)
        return btn

    def _parse_version(self, ver_name):
        clean = ver_name.replace("php-", "")
        parts = clean.split(".")
        if len(parts) >= 2:
            short = f"{parts[0]}.{parts[1]}"
        else:
            short = clean
        return short, clean

    def refresh_all(self):
        self.refresh_versions_list()
        self.load_limits()

    def refresh_versions_list(self):
        for child in self.rows_frame.winfo_children():
            child.destroy()

        available = self.repository.load_available_versions()
        installed = self.repository.get_installed_versions()
        active = config.active_php_version

        all_versions = {}
        for name, url in available.items():
            short, clean = self._parse_version(name)
            all_versions[short] = {
                "name": name,
                "url": url,
                "clean": clean,
                "installed": name in installed,
                "active": name == active
            }

        for name in installed:
            short, clean = self._parse_version(name)
            if short in all_versions:
                all_versions[short]["name"] = name
                all_versions[short]["clean"] = clean
                all_versions[short]["installed"] = True
                all_versions[short]["active"] = (name == active)
            else:
                all_versions[short] = {
                    "name": name,
                    "url": None,
                    "clean": clean,
                    "installed": True,
                    "active": (name == active)
                }

        def version_sort_key(item):
            parts = item[0].split(".")
            try:
                return [int(p) for p in parts]
            except Exception:
                return [0, 0]

        sorted_versions = sorted(all_versions.items(), key=version_sort_key, reverse=True)

        for idx, (short_ver, info) in enumerate(sorted_versions):
            row = tk.Frame(self.rows_frame, bg=VANILLA_CARD_BG, pady=8)
            row.pack(fill=tk.X)

            # Columna Izquierda: Versión
            ver_frame = tk.Frame(row, bg=VANILLA_CARD_BG)
            ver_frame.pack(side=tk.LEFT, fill=tk.Y)

            tk.Label(
                ver_frame,
                text=short_ver,
                font=("Segoe UI", 10, "bold"),
                fg=VANILLA_TEXT_PRIMARY,
                bg=VANILLA_CARD_BG
            ).pack(side=tk.LEFT)

            if info["clean"]:
                tk.Label(
                    ver_frame,
                    text=f" ({info['clean']})",
                    font=("Segoe UI", 9),
                    fg=VANILLA_TEXT_SECONDARY,
                    bg=VANILLA_CARD_BG
                ).pack(side=tk.LEFT, padx=(4, 0))

            # Columna Derecha: Estado y Acciones
            action_frame = tk.Frame(row, bg=VANILLA_CARD_BG)
            action_frame.pack(side=tk.RIGHT)

            if info["installed"]:
                if info["active"]:
                    active_badge = tk.Label(
                        action_frame,
                        text="[✓] Activo",
                        font=("Segoe UI", 9, "bold"),
                        bg=VANILLA_BADGE_BG,
                        fg=VANILLA_BADGE_FG,
                        relief="solid",
                        borderwidth=1,
                        padx=8,
                        pady=2
                    )
                    active_badge.pack(side=tk.RIGHT, padx=4)
                else:
                    btn_activate = self._create_vanilla_button(
                        action_frame,
                        text="Activar",
                        command=lambda n=info["name"]: self.activate_version(n),
                        padx=10,
                        pady=2
                    )
                    btn_activate.pack(side=tk.RIGHT, padx=(4, 0))

                    btn_uninstall = self._create_vanilla_button(
                        action_frame,
                        text="Desinstalar",
                        command=lambda n=info["name"]: self.uninstall_version(n),
                        padx=8,
                        pady=2
                    )
                    btn_uninstall.pack(side=tk.RIGHT, padx=4)
            else:
                btn_install = self._create_vanilla_button(
                    action_frame,
                    text="Install",
                    command=lambda n=info["name"], u=info["url"]: self.start_download(n, u),
                    font=("Segoe UI", 9, "bold"),
                    padx=12,
                    pady=2
                )
                btn_install.pack(side=tk.RIGHT, padx=4)

            # Separador horizontal entre filas
            if idx < len(sorted_versions) - 1:
                tk.Frame(self.rows_frame, bg=VANILLA_ROW_BORDER, height=1).pack(fill=tk.X)

    def load_limits(self):
        limits = PHPManager.get_php_limits()
        self.upload_entry.delete(0, tk.END)
        self.upload_entry.insert(0, str(limits.get("upload_max_filesize", 128)))

        self.mem_entry.delete(0, tk.END)
        self.mem_entry.insert(0, str(limits.get("memory_limit", 512)))

    def save_limits(self):
        try:
            upload_val = int(self.upload_entry.get().strip())
            mem_val = int(self.mem_entry.get().strip())
        except ValueError:
            messagebox.showerror("Error", "Los valores de límites deben ser números enteros (o -1 para memoria ilimitada).")
            return

        if upload_val <= 0:
            messagebox.showerror("Error", "El tamaño de subida debe ser mayor a 0 MB.")
            return

        if mem_val != -1 and mem_val <= 0:
            messagebox.showerror("Error", "El límite de memoria debe ser mayor a 0 MB o -1.")
            return

        if PHPManager.set_php_limits(upload_val, mem_val):
            restarted = False
            if hasattr(self.parent_app, "restart_apache") and hasattr(self.parent_app, "apache") and self.parent_app.apache.is_running():
                self.parent_app.restart_apache()
                restarted = True

            msg = "Límites de PHP actualizados correctamente."
            if restarted:
                msg += "\nApache ha sido reiniciado para aplicar los cambios."
            messagebox.showinfo("Límites de PHP", msg)
        else:
            messagebox.showerror("Error", "No se pudieron actualizar los límites en php.ini.")

    def activate_version(self, name):
        config.set_php_version(name)

        restarted = False
        if hasattr(self.parent_app, "restart_apache") and hasattr(self.parent_app, "apache") and self.parent_app.apache.is_running():
            self.parent_app.restart_apache()
            restarted = True

        msg = f"Versión {name} activada correctamente."
        if restarted:
            msg += "\nApache ha sido reiniciado con la nueva versión de PHP."
        messagebox.showinfo("PHP", msg)

        self.refresh_all()
        if hasattr(self.parent_app, "update_php_extensions_menu"):
            self.parent_app.update_php_extensions_menu()

    def uninstall_version(self, name):
        if name == config.active_php_version:
            messagebox.showwarning("Aviso", "No puedes desinstalar la versión actualmente activa.")
            return

        confirm = messagebox.askyesno(
            "Confirmar desinstalación",
            f"¿Estás seguro de que deseas desinstalar {name}?\nEsta acción eliminará sus binarios."
        )
        if not confirm:
            return

        if self.repository.uninstall_version(name):
            messagebox.showinfo("PHP", f"Versión {name} desinstalada con éxito.")
            self.refresh_all()
        else:
            messagebox.showerror("Error", f"No se pudo desinstalar {name}.")

    def start_download(self, name, url):
        if self.is_downloading:
            messagebox.showwarning("Aviso", "Ya hay una descarga en curso.")
            return

        if not url:
            messagebox.showerror("Error", f"No se encontró URL de descarga para {name}.")
            return

        self.is_downloading = True
        self.progress_frame.pack(fill=tk.X, pady=(0, 16), before=self.limits_card)
        self.progress_label.config(text=f"Descargando e instalando {name}...")
        self.progress_bar["value"] = 0

        def run():
            def update_progress(percent):
                self.progress_bar["value"] = percent
                self.progress_label.config(text=f"Descargando {name}... {percent}%")
                self.update_idletasks()

            success = self.repository.download_and_install(name, url, update_progress)
            self.after(0, lambda: self.finish_download(success, name))

        threading.Thread(target=run, daemon=True).start()

    def finish_download(self, success, name):
        self.is_downloading = False
        self.progress_frame.pack_forget()
        self.progress_bar["value"] = 0

        if success:
            activate = messagebox.askyesno(
                "Instalación Exitosa",
                f"{name} se ha instalado correctamente.\n¿Deseas activarla como versión predeterminada ahora?"
            )
            if activate:
                self.activate_version(name)
            else:
                self.refresh_all()
        else:
            messagebox.showerror("Error", f"No se pudo descargar e instalar {name}. Revisa los logs.")
            self.refresh_all()
