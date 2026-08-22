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
        self.window.geometry("520x280")
        self.window.resizable(False, False)
        self.window.protocol("WM_DELETE_WINDOW", self._on_closing)

        # Centrar ventana
        self._center_window()

        self._setup_ui()
        apply_theme(self.window)

        # Iniciar descarga automaticamente
        self.window.after(500, self._start_installation)

    def _center_window(self):
        self.window.update_idletasks()
        width = 520
        height = 280
        x = (self.window.winfo_screenwidth() // 2) - (width // 2)
        y = (self.window.winfo_screenheight() // 2) - (height // 2)
        self.window.geometry(f"{width}x{height}+{x}+{y}")

    def _setup_ui(self):
        main_frame = tk.Frame(self.window, padx=25, pady=20)
        main_frame.pack(fill="both", expand=True)

        lbl_title = tk.Label(main_frame, text="Configuracion Inicial de PiruWamp", font=FONT_TITLE)
        style_label(lbl_title, title=True)
        lbl_title.pack(anchor="w", pady=(0, 4))

        lbl_subtitle = tk.Label(
            main_frame,
            text="Descargando y configurando los paquetes basicos (Apache, PHP, MariaDB, phpMyAdmin)...",
            font=FONT_MAIN,
            fg="#555555"
        )
        style_label(lbl_subtitle)
        lbl_subtitle.pack(anchor="w", pady=(0, 20))

        # Estado actual
        status_box = tk.Frame(main_frame)
        status_box.pack(fill="x", pady=(0, 8))

        self.lbl_task = tk.Label(status_box, text="Preparando descarga...", font=FONT_MAIN)
        style_label(self.lbl_task)
        self.lbl_task.pack(side="left")

        self.lbl_percent = tk.Label(status_box, text="0%", font=FONT_MAIN)
        style_label(self.lbl_percent)
        self.lbl_percent.pack(side="right")

        # Barra de progreso
        self.progress_bar = ttk.Progressbar(main_frame, orient="horizontal", mode="determinate", length=470)
        self.progress_bar.pack(fill="x", pady=(0, 15))

        # Estado detallado
        self.lbl_detail = tk.Label(main_frame, text="Iniciando proceso...", font=("Segoe UI", 8), fg="#666666")
        style_label(self.lbl_detail)
        self.lbl_detail.pack(anchor="w", pady=(0, 15))

        # Boton de accion (deshabilitado mientras descarga)
        btn_frame = tk.Frame(main_frame)
        btn_frame.pack(fill="x")

        self.btn_action = tk.Button(btn_frame, text="Descargando...", state="disabled", width=18)
        style_button(self.btn_action)
        self.btn_action.pack(side="right")

    def _start_installation(self):
        thread = threading.Thread(target=self._run_setup_thread, daemon=True)
        thread.start()

    def _run_setup_thread(self):
        missing = SetupManager.get_missing_components()
        total_items = len(missing)

        if total_items == 0:
            self._update_status("Finalizando configuracion...", 100, "Configurando servicios...")
            SetupManager.finalize_configuration()
            self._finish_setup(True)
            return

        for idx, comp in enumerate(missing, 1):
            comp_name = comp["title"]
            version_name = comp["version"]

            def on_progress(percent):
                self._update_progress_ui(idx, total_items, comp_name, percent)

            self._update_task_ui(f"Descargando {comp_name} ({idx}/{total_items})...", f"Version: {version_name}")
            
            success = SetupManager.install_component(comp, progress_callback=on_progress)
            if not success:
                self._finish_setup(False, f"Error descargando {comp_name}.")
                return

        self._update_task_ui("Configurando entorno...", "Enlazando Apache, PHP, MariaDB y phpMyAdmin...")
        SetupManager.finalize_configuration()
        self._finish_setup(True)

    def _update_progress_ui(self, current_idx, total_items, comp_name, percent):
        self.window.after(0, lambda: self._apply_progress_ui(current_idx, total_items, comp_name, percent))

    def _apply_progress_ui(self, current_idx, total_items, comp_name, percent):
        self.progress_bar["value"] = percent
        self.lbl_percent.config(text=f"{percent}%")
        self.lbl_detail.config(text=f"{comp_name}: {percent}% completado")

    def _update_task_ui(self, task_text, detail_text):
        self.window.after(0, lambda: self._apply_task_ui(task_text, detail_text))

    def _apply_task_ui(self, task_text, detail_text):
        self.lbl_task.config(text=task_text)
        self.lbl_detail.config(text=detail_text)
        self.progress_bar["value"] = 0
        self.lbl_percent.config(text="0%")

    def _update_status(self, task_text, percent, detail_text):
        self.window.after(0, lambda: self._apply_status(task_text, percent, detail_text))

    def _apply_status(self, task_text, percent, detail_text):
        self.lbl_task.config(text=task_text)
        self.progress_bar["value"] = percent
        self.lbl_percent.config(text=f"{percent}%")
        self.lbl_detail.config(text=detail_text)

    def _finish_setup(self, success, message=""):
        self.window.after(0, lambda: self._apply_finish_setup(success, message))

    def _apply_finish_setup(self, success, message):
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
        # Evitar cerrar a mitad de instalacion
        pass
