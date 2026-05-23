import tkinter as tk
from tkinter import ttk, messagebox
import threading
from ..managers.apache_repository import ApacheRepository
from ..core.config import config
from ..core.logger import logger
from .theme import apply_theme

class ApacheManagerWindow(tk.Toplevel):
    def __init__(self, parent_app):
        super().__init__(parent_app.root)
        self.title("Gestor de Versiones de Apache")
        self.geometry("700x450")
        self.resizable(False, False)
        self.transient(parent_app.root)
        self.grab_set()

        self.parent_app = parent_app
        self.repository = ApacheRepository()
        
        self._setup_ui()
        self.refresh_list()

    def _setup_ui(self):
        main_frame = tk.Frame(self, padx=20, pady=20)
        main_frame.pack(fill=tk.BOTH, expand=True)

        tk.Label(main_frame, text="Versiones de Apache Disponibles", font=("Arial", 12, "bold")).pack(pady=(0, 10))

        columns = ("Version", "Status", "Action")
        self.tree = ttk.Treeview(main_frame, columns=columns, show="headings", height=10)
        self.tree.heading("Version", text="Versión")
        self.tree.heading("Status", text="Estado")
        self.tree.heading("Action", text="Acción")
        
        self.tree.column("Version", width=150)
        self.tree.column("Status", width=150)
        self.tree.column("Action", width=250)
        self.tree.pack(fill=tk.BOTH, expand=True)

        self.progress_frame = tk.Frame(main_frame)
        self.progress_label = tk.Label(self.progress_frame, text="")
        self.progress_label.pack(side=tk.LEFT, padx=5)
        self.progress_bar = ttk.Progressbar(self.progress_frame, orient=tk.HORIZONTAL, length=300, mode='determinate')
        self.progress_bar.pack(side=tk.LEFT, padx=5)
        
        btn_frame = tk.Frame(main_frame, pady=10)
        btn_frame.pack(fill=tk.X)
        tk.Button(btn_frame, text="Actualizar Lista", command=self.refresh_list).pack(side=tk.LEFT, padx=5)
        tk.Button(btn_frame, text="Cerrar", command=self.destroy).pack(side=tk.RIGHT, padx=5)
        
        apply_theme(self)

    def refresh_list(self):
        for item in self.tree.get_children():
            self.tree.delete(item)

        available = self.repository.load_available_versions()
        installed = self.repository.get_installed_versions()
        active = config.active_apache_version

        for name, url in available.items():
            status = "No instalado"
            action = "Descargar e Instalar"
            
            if name in installed:
                status = "Instalado"
                action = "Activar"
                if name == active:
                    status = "ACTIVO ✅"
                    action = "Ya es el activo"

            self.tree.insert("", tk.END, values=(name, status, action), tags=(name, url))

        self.tree.bind("<Double-1>", self.on_item_double_click)

    def on_item_double_click(self, event):
        item_id = self.tree.identify_row(event.y)
        if not item_id: return
            
        values = self.tree.item(item_id, "values")
        tags = self.tree.item(item_id, "tags")
        name, action, url = values[0], values[2], tags[1]

        if action == "Descargar e Instalar":
            self.start_download(name, url)
        elif action == "Activar":
            self.activate_version(name)

    def start_download(self, name, url):
        self.progress_frame.pack(fill=tk.X, pady=5)
        def run():
            def update_progress(percent):
                self.progress_bar['value'] = percent
                self.progress_label.config(text=f"Descargando {name}... {percent}%")
            success = self.repository.download_and_install(name, url, update_progress)
            self.after(0, lambda: self.finish_download(success, name))
        threading.Thread(target=run, daemon=True).start()

    def finish_download(self, success, name):
        self.progress_frame.pack_forget()
        if success:
            messagebox.showinfo("Éxito", f"{name} instalado correctamente.")
            self.refresh_list()
        else:
            messagebox.showerror("Error", f"No se pudo instalar {name}.")

    def activate_version(self, name):
        config.set_apache_version(name)
        messagebox.showinfo("Apache", f"Versión {name} activada.\nSe aplicará al iniciar Apache.")
        self.refresh_list()
