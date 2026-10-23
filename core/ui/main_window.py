import tkinter as tk
from tkinter import ttk, filedialog, messagebox, scrolledtext, simpledialog
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
        window_width = 660
        window_height = 600
        screen_width = self.root.winfo_screenwidth()
        screen_height = self.root.winfo_screenheight()
        x = int((screen_width / 2) - (window_width / 2))
        y = int((screen_height / 2) - (window_height / 2))
        self.root.geometry(f"{window_width}x{window_height}+{x}+{y}")
        self.root.resizable(False, False)
        apply_window_style(self.root)
        
        # Intentar cargar icono si existe
        icon_path = os.path.join(config.wamp_root, "core", "img", "icon.ico")
        if not os.path.exists(icon_path):
            icon_path = os.path.join(config.wamp_root, "icon.ico")
        if os.path.exists(icon_path):
            try:
                self.root.iconbitmap(icon_path)
            except Exception:
                pass

        self.apache = ApacheService()
        self.mariadb = MariaDBService()
        self.hosts_manager = HostsManager()
        self.vhost_manager = VHostManager()

        self._setup_ui()
        self._setup_menu()
        self._start_log_monitor()
        
        # Check if first-run setup is required
        from ..managers.setup_manager import SetupManager
        from .setup_window import SetupWindow

        if SetupManager.is_setup_required():
            SetupWindow(self.root, on_complete=self._on_setup_complete)
        else:
            self._post_init_setup()

    def _post_init_setup(self):
        # 1. Actualizar dinamicamente todas las rutas de configuracion en cada apertura
        try:
            from ..managers.php_manager import PHPManager
            PHPManager.update_php_ini()
            self.mariadb.update_config()
            self.apache.update_configs()
        except Exception as e:
            logger.log(f"Error actualizando rutas al iniciar: {e}", "System")

        # 2. Sincronizar sitios virtuales y menus
        self.vhost_manager.sync_sites(self.hosts_manager)
        self.update_projects_menu()
        self.update_php_extensions_menu()
        self.refresh_locations_view()

    def _on_setup_complete(self):
        self.apache = ApacheService()
        self.mariadb = MariaDBService()
        self._post_init_setup()

    def _setup_ui(self):
        lbl_title = tk.Label(self.root, text="PiruWamp")
        style_label(lbl_title, title=True)
        lbl_title.pack(pady=(8, 4))

        # Cuaderno de pestañas
        self.notebook = ttk.Notebook(self.root)
        self.notebook.pack(fill=tk.BOTH, expand=True, padx=10, pady=(0, 8))

        # Pestaña 1: Servicios y Control
        self.tab_services = ttk.Frame(self.notebook)
        self.notebook.add(self.tab_services, text="Servicios y Control")
        self._setup_services_tab()

        # Pestaña 2: Ubicaciones y Rutas
        self.tab_locations = ttk.Frame(self.notebook)
        self.notebook.add(self.tab_locations, text="Ubicaciones")
        self._setup_locations_tab()

        apply_theme(self.root)

    def _setup_services_tab(self):
        btn_frame = tk.Frame(self.tab_services)
        style_frame(btn_frame)
        btn_frame.pack(pady=5)

        self.btn_both = tk.Button(btn_frame, text="Iniciar Ambos", command=self.toggle_both, width=25)
        self.btn_apache = tk.Button(btn_frame, text="Iniciar Apache", command=self.toggle_apache, width=25)
        self.btn_mariadb = tk.Button(btn_frame, text="Iniciar Base de Datos", command=self.toggle_mariadb, width=25)
        
        style_button(self.btn_both)
        style_button(self.btn_apache)
        style_button(self.btn_mariadb)

        self.btn_both.grid(row=0, column=0, padx=5, pady=4)
        self.btn_apache.grid(row=1, column=0, padx=5, pady=4)
        self.btn_mariadb.grid(row=2, column=0, padx=5, pady=4)

        btn_create = tk.Button(btn_frame, text="Crear Proyecto", command=self.gui_create_project, width=25)
        btn_web = tk.Button(btn_frame, text="Abrir Web", command=self.open_web_browser, width=25)
        btn_www = tk.Button(btn_frame, text="Abrir carpeta www", command=self.open_www, width=25)
        btn_pma = tk.Button(btn_frame, text="Abrir PhpMyAdmin", command=self.open_phpmyadmin_browser, width=25)
        btn_restart = tk.Button(btn_frame, text="Reiniciar Apache", command=self.restart_apache, width=25)

        style_button(btn_create)
        style_button(btn_web)
        style_button(btn_www)
        style_button(btn_pma)
        style_button(btn_restart)

        btn_create.grid(row=0, column=1, padx=5, pady=4)
        btn_web.grid(row=1, column=1, padx=5, pady=4)
        btn_www.grid(row=2, column=1, padx=5, pady=4)
        btn_pma.grid(row=3, column=1, padx=5, pady=4)
        btn_restart.grid(row=3, column=0, padx=5, pady=4)

        btn_exit = tk.Button(btn_frame, text="Salir", command=self.on_close, width=25)
        style_button(btn_exit)
        btn_exit.grid(row=4, column=0, columnspan=2, padx=5, pady=4)

        # Log text
        self.log_text = scrolledtext.ScrolledText(self.tab_services, width=76, height=11, bg="#ffffff", fg="#000000", font=("Consolas", 9), relief="sunken", borderwidth=1)
        self.log_text.pack(pady=(4, 8), padx=10, fill=tk.BOTH, expand=True)

    def _setup_locations_tab(self):
        loc_frame = tk.Frame(self.tab_locations, padx=12, pady=10)
        style_frame(loc_frame)
        loc_frame.pack(fill=tk.BOTH, expand=True)

        # 1. Grupo: Carpeta www (DocumentRoot)
        grp_www = tk.LabelFrame(loc_frame, text="Carpeta de Proyectos Web (www / DocumentRoot)", padx=10, pady=8, font=("Segoe UI", 9, "bold"))
        style_frame(grp_www)
        grp_www.pack(fill=tk.X, pady=(0, 8))

        lbl_desc = tk.Label(grp_www, text="Ruta donde residen los proyectos PHP servidos en http://localhost:")
        style_label(lbl_desc)
        lbl_desc.pack(anchor=tk.W, pady=(0, 4))

        row_www = tk.Frame(grp_www)
        style_frame(row_www)
        row_www.pack(fill=tk.X, pady=2)

        self.entry_www = tk.Entry(row_www, font=("Segoe UI", 9))
        self.entry_www.insert(0, config.www_path)
        self.entry_www.config(state="readonly")
        self.entry_www.pack(side=tk.LEFT, fill=tk.X, expand=True, padx=(0, 5))

        btn_browse_www = tk.Button(row_www, text="Cambiar Carpeta...", command=self.change_www_folder)
        style_button(btn_browse_www)
        btn_browse_www.pack(side=tk.LEFT, padx=2)

        btn_default_www = tk.Button(row_www, text="Restaurar Defecto", command=self.restore_default_www)
        style_button(btn_default_www)
        btn_default_www.pack(side=tk.LEFT, padx=2)

        btn_open_loc_www = tk.Button(row_www, text="Abrir", command=self.open_www)
        style_button(btn_open_loc_www)
        btn_open_loc_www.pack(side=tk.LEFT, padx=2)

        # 2. Grupo: Rutas del Sistema
        grp_sys = tk.LabelFrame(loc_frame, text="Directorios Base de PiruWamp", padx=10, pady=8, font=("Segoe UI", 9, "bold"))
        style_frame(grp_sys)
        grp_sys.pack(fill=tk.X, pady=(0, 8))

        # Raiz WAMP
        row_root = tk.Frame(grp_sys)
        style_frame(row_root)
        row_root.pack(fill=tk.X, pady=2)
        lbl_r = tk.Label(row_root, text="Raíz de PiruWamp:", width=20, anchor=tk.W)
        style_label(lbl_r)
        lbl_r.pack(side=tk.LEFT)
        self.lbl_root_val = tk.Label(row_root, text=config.wamp_root, anchor=tk.W, fg="#333333")
        self.lbl_root_val.pack(side=tk.LEFT, fill=tk.X, expand=True)
        btn_open_root = tk.Button(row_root, text="Abrir", command=lambda: os.startfile(config.wamp_root) if os.path.exists(config.wamp_root) else None)
        style_button(btn_open_root)
        btn_open_root.pack(side=tk.RIGHT)

        # Datos MariaDB
        row_data = tk.Frame(grp_sys)
        style_frame(row_data)
        row_data.pack(fill=tk.X, pady=2)
        lbl_d = tk.Label(row_data, text="Datos MariaDB (data/):", width=20, anchor=tk.W)
        style_label(lbl_d)
        lbl_d.pack(side=tk.LEFT)
        self.lbl_data_val = tk.Label(row_data, text=config.data_path, anchor=tk.W, fg="#333333")
        self.lbl_data_val.pack(side=tk.LEFT, fill=tk.X, expand=True)
        btn_open_data = tk.Button(row_data, text="Abrir", command=lambda: os.startfile(config.data_path) if os.path.exists(config.data_path) else None)
        style_button(btn_open_data)
        btn_open_data.pack(side=tk.RIGHT)

        # Temporales
        row_tmp = tk.Frame(grp_sys)
        style_frame(row_tmp)
        row_tmp.pack(fill=tk.X, pady=2)
        lbl_t = tk.Label(row_tmp, text="Temporales (tmp/):", width=20, anchor=tk.W)
        style_label(lbl_t)
        lbl_t.pack(side=tk.LEFT)
        self.lbl_tmp_val = tk.Label(row_tmp, text=config.tmp_path, anchor=tk.W, fg="#333333")
        self.lbl_tmp_val.pack(side=tk.LEFT, fill=tk.X, expand=True)
        btn_open_tmp = tk.Button(row_tmp, text="Abrir", command=lambda: os.startfile(config.tmp_path) if os.path.exists(config.tmp_path) else None)
        style_button(btn_open_tmp)
        btn_open_tmp.pack(side=tk.RIGHT)

        # 3. Grupo: Componentes Activos en bin/
        grp_bin = tk.LabelFrame(loc_frame, text="Servicios y Versiones Activas (bin/)", padx=10, pady=8, font=("Segoe UI", 9, "bold"))
        style_frame(grp_bin)
        grp_bin.pack(fill=tk.X, pady=(0, 8))

        self.lbl_active_apache = tk.Label(grp_bin, text=f"Apache: {config.active_apache_version or 'No configurado'}", anchor=tk.W)
        style_label(self.lbl_active_apache)
        self.lbl_active_apache.pack(fill=tk.X, pady=1)

        self.lbl_active_php = tk.Label(grp_bin, text=f"PHP: {config.active_php_version or 'No configurado'}", anchor=tk.W)
        style_label(self.lbl_active_php)
        self.lbl_active_php.pack(fill=tk.X, pady=1)

        self.lbl_active_mariadb = tk.Label(grp_bin, text=f"MariaDB: {config.active_mariadb_version or 'No configurado'}", anchor=tk.W)
        style_label(self.lbl_active_mariadb)
        self.lbl_active_mariadb.pack(fill=tk.X, pady=1)

        self.lbl_active_pma = tk.Label(grp_bin, text=f"phpMyAdmin: {config.active_phpmyadmin_version or 'No configurado'}", anchor=tk.W)
        style_label(self.lbl_active_pma)
        self.lbl_active_pma.pack(fill=tk.X, pady=1)

        # Boton inferior para refrescar
        row_actions = tk.Frame(loc_frame)
        style_frame(row_actions)
        row_actions.pack(fill=tk.X, pady=(4, 0))

        btn_sync = tk.Button(row_actions, text="Sincronizar Todas las Rutas", command=self.refresh_locations_view)
        style_button(btn_sync)
        btn_sync.pack(side=tk.RIGHT)

    def change_www_folder(self):
        new_dir = filedialog.askdirectory(
            parent=self.root,
            title="Seleccionar nueva carpeta para www (DocumentRoot)",
            initialdir=config.www_path
        )
        if not new_dir:
            return
        
        new_dir = os.path.abspath(new_dir)
        if not os.path.exists(new_dir):
            try:
                os.makedirs(new_dir, exist_ok=True)
            except Exception as e:
                messagebox.showerror("Error", f"No se pudo crear la carpeta seleccionada:\n{e}")
                return

        # Si en la nueva carpeta no hay index.php, crearlo o copiar el index base
        new_index = os.path.join(new_dir, "index.php")
        if not os.path.exists(new_index):
            default_index = os.path.join(config.wamp_root, "www", "index.php")
            if os.path.exists(default_index):
                try:
                    import shutil
                    shutil.copy2(default_index, new_index)
                except Exception:
                    pass

        config.set_www_path(new_dir)
        self.refresh_locations_view()
        self.update_projects_menu()

        if self.apache.is_running():
            if messagebox.askyesno("Reiniciar Apache", f"La carpeta de proyectos se actualizo a:\n{new_dir}\n\n¿Deseas reiniciar Apache para aplicar el cambio ahora?"):
                self.restart_apache()
        else:
            messagebox.showinfo("Ubicación Actualizada", f"La carpeta de proyectos www se ha cambiado a:\n{new_dir}")

    def restore_default_www(self):
        default_dir = os.path.join(config.wamp_root, "www")
        config.set_www_path(default_dir)
        self.refresh_locations_view()
        self.update_projects_menu()

        if self.apache.is_running():
            if messagebox.askyesno("Reiniciar Apache", f"Se restauro la carpeta por defecto:\n{default_dir}\n\n¿Deseas reiniciar Apache para aplicar el cambio ahora?"):
                self.restart_apache()
        else:
            messagebox.showinfo("Ubicación Restaurada", f"Se ha restaurado la carpeta por defecto:\n{default_dir}")

    def refresh_locations_view(self):
        try:
            config.sync_all_services()
        except Exception:
            pass

        if hasattr(self, "entry_www"):
            self.entry_www.config(state="normal")
            self.entry_www.delete(0, tk.END)
            self.entry_www.insert(0, config.www_path)
            self.entry_www.config(state="readonly")

            self.lbl_root_val.config(text=config.wamp_root)
            self.lbl_data_val.config(text=config.data_path)
            self.lbl_tmp_val.config(text=config.tmp_path)

            self.lbl_active_apache.config(text=f"Apache: {config.active_apache_version or 'No configurado'} -> {config.apache_path or 'N/A'}")
            self.lbl_active_php.config(text=f"PHP: {config.active_php_version or 'No configurado'} -> {config.php_path or 'N/A'}")
            self.lbl_active_mariadb.config(text=f"MariaDB: {config.active_mariadb_version or 'No configurado'} -> {config.mariadb_path or 'N/A'}")
            self.lbl_active_pma.config(text=f"phpMyAdmin: {config.active_phpmyadmin_version or 'No configurado'} -> {config.phpmyadmin_path or 'N/A'}")

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

        # menu ubicaciones
        self.menu_ubicaciones = tk.Menu(self.menubar, tearoff=0)
        self.menubar.add_cascade(label="Ubicaciones", menu=self.menu_ubicaciones)
        self.menu_ubicaciones.add_command(label="Ver Pestaña de Ubicaciones", command=lambda: self.notebook.select(self.tab_locations))
        self.menu_ubicaciones.add_command(label="Cambiar Carpeta www...", command=self.change_www_folder)
        self.menu_ubicaciones.add_command(label="Restaurar www por Defecto", command=self.restore_default_www)
        self.menu_ubicaciones.add_separator()
        self.menu_ubicaciones.add_command(label="Abrir Carpeta www", command=self.open_www)
        self.menu_ubicaciones.add_command(label="Abrir Raíz de PiruWamp", command=lambda: os.startfile(config.wamp_root))

        self.menubar.add_command(label="Acerca de", command=lambda: messagebox.showinfo("Acerca de", "PiruWamp\n\nGestor WAMP ligero y portátil.\n\nAutor: Pirulug\nGitHub: https://github.com/pirulug"))

        self.root.config(menu=self.menubar)
        self.update_php_extensions_menu()


    def _start_log_monitor(self):
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
            style_button(self.btn_apache)
        else:
            if self.apache.start():
                self.btn_apache.config(text="Detener Apache")
                style_button(self.btn_apache)
        self.update_both_button()

    def toggle_mariadb(self):
        if self.mariadb.is_running():
            self.mariadb.stop()
            self.btn_mariadb.config(text="Iniciar Base de Datos")
            style_button(self.btn_mariadb)
        else:
            if self.mariadb.start():
                self.btn_mariadb.config(text="Detener MariaDB")
                style_button(self.btn_mariadb)
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
            style_button(self.btn_apache)
        else:
            self.btn_apache.config(text="Iniciar Apache")
            style_button(self.btn_apache)
            
        if self.mariadb.is_running():
            self.btn_mariadb.config(text="Detener MariaDB")
            style_button(self.btn_mariadb)
        else:
            self.btn_mariadb.config(text="Iniciar Base de Datos")
            style_button(self.btn_mariadb)
            
        self.update_both_button()

    def restart_apache(self):
        self.apache.stop()
        import time
        time.sleep(0.5)
        if self.apache.start():
            self.btn_apache.config(text="Detener Apache")
            style_button(self.btn_apache)
            logger.log("Apache reiniciado", "Apache")
        else:
            self.btn_apache.config(text="Iniciar Apache")
            style_button(self.btn_apache)
        self.update_both_button()

    def update_both_button(self):
        if self.apache.is_running() and self.mariadb.is_running():
            self.btn_both.config(text="Detener Ambos")
            style_button(self.btn_both)
        else:
            self.btn_both.config(text="Iniciar Ambos")
            style_button(self.btn_both)

    def open_web_browser(self):
        if not self.apache.is_running():
            if self.apache.start():
                self.btn_apache.config(text="Detener Apache")
                style_button(self.btn_apache)
                self.update_both_button()
        webbrowser.open("http://localhost")

    def open_phpmyadmin_browser(self):
        if not self.apache.is_running():
            if self.apache.start():
                self.btn_apache.config(text="Detener Apache")
                style_button(self.btn_apache)
                self.update_both_button()
        if not self.mariadb.is_running():
            if self.mariadb.start():
                self.btn_mariadb.config(text="Detener MariaDB")
                style_button(self.btn_mariadb)
                self.update_both_button()
        webbrowser.open("http://localhost/phpmyadmin")

    def open_www(self):
        if os.path.exists(config.www_path):
            os.startfile(config.www_path)
        else:
            messagebox.showerror("Error", f"No se encontro la carpeta:\n{config.www_path}")


    def gui_create_project(self):
        name = simpledialog.askstring("Nuevo Proyecto", "Nombre del proyecto:")
        if name:
            name = name.strip()
            if not name:
                return
            project_dir = os.path.join(config.www_path, name)
            os.makedirs(project_dir, exist_ok=True)
            index_file = os.path.join(project_dir, "index.php")
            if not os.path.exists(index_file):
                with open(index_file, "w", encoding="utf-8") as f:
                    f.write(f"<?php echo \"<h1>Hola desde {name}</h1>\"; ?>")
            
            self.vhost_manager.sync_sites(self.hosts_manager)
            self.update_projects_menu()

            if self.apache.is_running():
                self.restart_apache()
                messagebox.showinfo("Proyecto Creado", f"Proyecto \"{name}\" creado correctamente.\nApache se ha reiniciado para actualizar los sitios virtuales ({name}.test).")
            else:
                messagebox.showinfo("Proyecto Creado", f"Proyecto \"{name}\" creado correctamente.")

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
            status_text = "[Activa]" if enabled else "[Inactiva]"
            label = f"{ext_name}  {status_text}"
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
        os._exit(0)
