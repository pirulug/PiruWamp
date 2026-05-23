import tkinter as tk
from tkinter import messagebox, scrolledtext, simpledialog
import webbrowser
import os
import threading

from ..core.config import config
from ..core.logger import logger
from ..services.apache import ApacheService
from ..services.mariadb import MariaDBService
from ..managers.vhost import VHostManager
from ..managers.hosts import HostsManager
from ..managers.php_manager import PHPManager
from .php_manager_window import PHPManagerWindow
from .apache_manager_window import ApacheManagerWindow
from .php_extensions_window import PHPExtensionsWindow
from .phpmyadmin_manager_window import PHPMYAdminManagerWindow
from .mariadb_manager_window import MariaDBManagerWindow
from .theme import apply_theme, apply_window_style, style_button, style_label, style_frame, BG_COLOR, FONT_TITLE

class MainWindow:
    def __init__(self, root):
        self.root = root
        self.root.title("PiruWamp")
        window_width = 620
        window_height = 560
        screen_width = self.root.winfo_screenwidth()
        screen_height = self.root.winfo_screenheight()
        x = int((screen_width / 2) - (window_width / 2))
        y = int((screen_height / 2) - (window_height / 2))
        self.root.geometry(f"{window_width}x{window_height}+{x}+{y}")
        self.root.resizable(False, False)
        apply_window_style(self.root)
        
        # Intentar cargar icono si existe
        icon_path = os.path.join(config.wamp_root, "icon.ico")
        if os.path.exists(icon_path):
            self.root.iconbitmap(icon_path)

        self.apache = ApacheService()
        self.mariadb = MariaDBService()
        self.hosts_manager = HostsManager()
        self.vhost_manager = VHostManager()

        self._setup_ui()
        self._setup_menu()
        self._start_log_monitor()
        
        # Sync projects on start
        self.vhost_manager.sync_sites(self.hosts_manager)
        self.update_projects_menu()

    def _setup_ui(self):
        lbl_title = tk.Label(self.root, text="PiruWamp")
        style_label(lbl_title, title=True)
        lbl_title.pack(pady=10)

        # Buttons frame
        btn_frame = tk.Frame(self.root)
        style_frame(btn_frame)
        btn_frame.pack(pady=5)

        self.btn_both = tk.Button(btn_frame, text="Iniciar Ambos", command=self.toggle_both, width=25)
        self.btn_apache = tk.Button(btn_frame, text="Iniciar Apache", command=self.toggle_apache, width=25)
        self.btn_mariadb = tk.Button(btn_frame, text="Iniciar Base de Datos", command=self.toggle_mariadb, width=25)
        
        style_button(self.btn_both, "start")
        style_button(self.btn_apache, "start")
        style_button(self.btn_mariadb, "start")

        self.btn_both.grid(row=0, column=0, padx=5, pady=5)
        self.btn_apache.grid(row=1, column=0, padx=5, pady=5)
        self.btn_mariadb.grid(row=2, column=0, padx=5, pady=5)

        btn_create = tk.Button(btn_frame, text="Crear Proyecto", command=self.gui_create_project, width=25)
        btn_web = tk.Button(btn_frame, text="Abrir Web", command=lambda: webbrowser.open("http://localhost"), width=25)
        btn_www = tk.Button(btn_frame, text="Abrir carpeta www", command=self.open_www, width=25)
        btn_pma = tk.Button(btn_frame, text="Abrir PhpMyAdmin", command=lambda: webbrowser.open("http://localhost/phpmyadmin"), width=25)
        btn_restart = tk.Button(btn_frame, text="Reiniciar Apache", command=self.restart_apache, width=25)
        
        style_button(btn_create, "neutral")
        style_button(btn_web, "neutral")
        style_button(btn_www, "neutral")
        style_button(btn_pma, "neutral")
        style_button(btn_restart, "warning")

        btn_create.grid(row=0, column=1, padx=5, pady=5)
        btn_web.grid(row=1, column=1, padx=5, pady=5)
        btn_www.grid(row=2, column=1, padx=5, pady=5)
        btn_pma.grid(row=3, column=1, padx=5, pady=5)
        btn_restart.grid(row=3, column=0, padx=5, pady=5)

        btn_exit = tk.Button(btn_frame, text="Salir", command=self.on_close, width=25)
        style_button(btn_exit, "stop")
        btn_exit.grid(row=4, column=0, columnspan=2, padx=5, pady=5)

        # Log text
        self.log_text = scrolledtext.ScrolledText(self.root, width=70, height=12, bg="#1e1e1e", fg="#ffffff", font=("Consolas", 9), relief="flat", borderwidth=1)
        self.log_text.pack(pady=10, padx=10)
        
        apply_theme(self.root)

    def _setup_menu(self):
        self.menubar = tk.Menu(self.root)
        
        self.menu_proyectos = tk.Menu(self.menubar, tearoff=0)
        self.menubar.add_cascade(label="Proyectos", menu=self.menu_proyectos)

        self.menu_php = tk.Menu(self.menubar, tearoff=0)
        self.menubar.add_cascade(label="PHP", menu=self.menu_php)
        self.menu_php.add_command(label="Configurar php.ini", command=lambda: os.startfile(config.php_ini))
        self.menu_php_ext = tk.Menu(self.menu_php, tearoff=0)
        self.menu_php.add_cascade(label="Extensiones", menu=self.menu_php_ext)
        self.menu_php.add_command(label="Administrar Extensiones", command=self.open_php_extensions_manager)
        self.menu_php.add_separator()
        self.menu_php.add_command(label="Administrar Versiones de PHP", command=self.open_php_manager)

        # menu apache
        self.menu_apache = tk.Menu(self.menubar, tearoff=0)
        self.menubar.add_cascade(label="Apache", menu=self.menu_apache)
        self.menu_apache.add_command(label="Configurar httpd.conf", command=lambda: os.startfile(os.path.join(config.apache_path, "conf", "httpd.conf")))
        self.menu_apache.add_command(label="Administrar Versiones de Apache", command=self.open_apache_manager)

        self.menu_mariadb = tk.Menu(self.menubar, tearoff=0)
        self.menubar.add_cascade(label="MariaDB", menu=self.menu_mariadb)
        my_ini = os.path.join(config.wamp_root, "etc", "mariadb", "my.ini")
        self.menu_mariadb.add_command(label="Configurar my.ini", command=lambda: os.startfile(my_ini))
        self.menu_mariadb.add_command(label="Administrar Versiones de MariaDB", command=self.open_mariadb_manager)
        self.menu_mariadb.add_separator()
        self.menu_mariadb.add_command(label="Administrar Versiones de phpMyAdmin", command=self.open_phpmyadmin_manager)

        self.menubar.add_command(label="Acerca de", command=lambda: messagebox.showinfo("Acerca de", "PiruWamp\n\nGestor WAMP ligero y portátil.\n\nAutor: Pirulug\nGitHub: https://github.com/pirulug"))

        self.root.config(menu=self.menubar)
        self.update_php_extensions_menu()

    def _start_log_monitor(self):
        def monitor():
            while True:
                messages = logger.get_messages()
                if messages:
                    for msg in messages:
                        self.log_text.insert(tk.END, msg + "\n")
                        self.log_text.see(tk.END)
                self.root.after(100) # Wait a bit
                return # We use root.after to call monitor again
        
        def schedule_monitor():
            messages = logger.get_messages()
            if messages:
                for msg in messages:
                    self.log_text.insert(tk.END, msg + "\n")
                    self.log_text.see(tk.END)
            self.root.after(100, schedule_monitor)

        schedule_monitor()

    def toggle_apache(self):
        if self.apache.is_running():
            self.apache.stop()
            self.btn_apache.config(text="Iniciar Apache")
            style_button(self.btn_apache, "start")
        else:
            if self.apache.start():
                self.btn_apache.config(text="Detener Apache")
                style_button(self.btn_apache, "stop")
        self.update_both_button()

    def toggle_mariadb(self):
        if self.mariadb.is_running():
            self.mariadb.stop()
            self.btn_mariadb.config(text="Iniciar Base de Datos")
            style_button(self.btn_mariadb, "start")
        else:
            if self.mariadb.start():
                self.btn_mariadb.config(text="Detener MariaDB")
                style_button(self.btn_mariadb, "stop")
        self.update_both_button()

    def toggle_both(self):
        if not self.apache.is_running() and not self.mariadb.is_running():
            self.apache.start()
            self.mariadb.start()
        else:
            self.apache.stop()
            self.mariadb.stop()
        
        # Update buttons
        if self.apache.is_running():
            self.btn_apache.config(text="Detener Apache")
            style_button(self.btn_apache, "stop")
        else:
            self.btn_apache.config(text="Iniciar Apache")
            style_button(self.btn_apache, "start")
            
        if self.mariadb.is_running():
            self.btn_mariadb.config(text="Detener MariaDB")
            style_button(self.btn_mariadb, "stop")
        else:
            self.btn_mariadb.config(text="Iniciar Base de Datos")
            style_button(self.btn_mariadb, "start")
            
        self.update_both_button()

    def restart_apache(self):
        self.apache.stop()
        if self.apache.start():
            self.btn_apache.config(text="Detener Apache")
            style_button(self.btn_apache, "stop")
            logger.log("Apache reiniciado", "Apache")
        else:
            self.btn_apache.config(text="Iniciar Apache")
            style_button(self.btn_apache, "start")
        self.update_both_button()

    def update_both_button(self):
        if self.apache.is_running() and self.mariadb.is_running():
            self.btn_both.config(text="Detener Ambos")
            style_button(self.btn_both, "stop")
        else:
            self.btn_both.config(text="Iniciar Ambos")
            style_button(self.btn_both, "start")

    def open_www(self):
        if os.path.exists(config.www_path):
            os.startfile(config.www_path)
        else:
            messagebox.showerror("Error", f"No se encontró la carpeta:\n{config.www_path}")

    def gui_create_project(self):
        name = simpledialog.askstring("Nuevo Proyecto", "Nombre del proyecto:")
        if name:
            project_dir = os.path.join(config.www_path, name)
            os.makedirs(project_dir, exist_ok=True)
            index_file = os.path.join(project_dir, "index.php")
            if not os.path.exists(index_file):
                with open(index_file, "w", encoding="utf-8") as f:
                    f.write(f"<?php echo '<h1>Hola desde {name}</h1>'; ?>")
            
            self.vhost_manager.sync_sites(self.hosts_manager)
            messagebox.showinfo("Proyecto Creado", f"Proyecto '{name}' creado correctamente.")
            self.update_projects_menu()

    def update_projects_menu(self):
        self.menu_proyectos.delete(0, tk.END)
        if os.path.exists(config.www_path):
            for name in os.listdir(config.www_path):
                if os.path.isdir(os.path.join(config.www_path, name)):
                    self.menu_proyectos.add_command(label=name, command=lambda n=name: webbrowser.open(f"http://{n}.test"))
            self.menu_proyectos.add_separator()
            self.menu_proyectos.add_command(label="Actualizar lista", command=self.update_projects_menu)

    def update_php_extensions_menu(self):
        self.menu_php_ext.delete(0, tk.END)
        extensions = PHPManager.get_extensions()
        for ext_name, enabled in extensions:
            label = f"{ext_name}  ✅" if enabled else f"{ext_name}  ❌"
            self.menu_php_ext.add_command(label=label, command=lambda n=ext_name: self._toggle_php_extension(n))

    def _toggle_php_extension(self, ext_name):
        if PHPManager.toggle_extension(ext_name):
            messagebox.showinfo("PHP", f"Extensión '{ext_name}' actualizada.\n(Reinicia Apache)")
            self.update_php_extensions_menu()

    def open_php_manager(self):
        PHPManagerWindow(self)

    def open_php_extensions_manager(self):
        PHPExtensionsWindow(self)

    def open_apache_manager(self):
        ApacheManagerWindow(self)

    def open_phpmyadmin_manager(self):
        PHPMYAdminManagerWindow(self)

    def open_mariadb_manager(self):
        MariaDBManagerWindow(self)

    def on_close(self):
        logger.log("Cerrando PiruWamp y deteniendo servicios...", "System")
        self.apache.stop()
        self.mariadb.stop()
        self.root.destroy()
        os._exit(0) # Asegurar cierre total de hilos
