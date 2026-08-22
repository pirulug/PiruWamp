import os
import sys

CONFIG_FILE = os.path.join("etc", "config.conf")

class Config:
    def __init__(self):
        self.wamp_root = self._get_root_path()
        self.ensure_required_paths()
        self.data = self.load_config()

    def _get_root_path(self):
        if getattr(sys, 'frozen', False):
            return os.path.dirname(sys.executable)
        else:
            # Si se ejecuta desde la carpeta raíz del proyecto
            return os.getcwd()

    def load_config(self):
        config_path = os.path.join(self.wamp_root, CONFIG_FILE)
        default_config = {"wamp_root": self.wamp_root, "php_extensions": []}
        
        if os.path.exists(config_path):
            try:
                data = {}
                with open(config_path, "r", encoding="utf-8") as f:
                    for line in f:
                        line = line.strip()
                        if not line or line.startswith("#"):
                            continue
                        if "=" in line:
                            k, v = line.split("=", 1)
                            k = k.strip()
                            v = v.strip()
                            if k == "php_extensions":
                                data[k] = [x.strip() for x in v.split(",") if x.strip()]
                            else:
                                data[k] = v
                
                # Asegurar que wamp_root sea correcto
                data["wamp_root"] = self.wamp_root
                if "php_extensions" not in data:
                    data["php_extensions"] = []
                return data
            except Exception as e:
                print(f"Error loading config: {e}")
        
        # Si no existe o hay error, guardar el default
        self.save_config(default_config)
        return default_config

    def save_config(self, custom_data=None):
        if custom_data:
            self.data = custom_data
        
        config_path = os.path.join(self.wamp_root, CONFIG_FILE)
        os.makedirs(os.path.dirname(config_path), exist_ok=True)
        try:
            with open(config_path, "w", encoding="utf-8") as f:
                f.write("# PiruWamp Configuration\n")
                for k, v in self.data.items():
                    if k == "php_extensions":
                        f.write(f"{k} = {','.join(v)}\n")
                    else:
                        f.write(f"{k} = {v}\n")
        except Exception as e:
            print(f"Error saving config: {e}")

    @property
    def apache_exe(self):
        return os.path.join(self.apache_path, "bin", "httpd.exe")

    @property
    def apache_path(self):
        version = self.active_apache_version
        if version:
            path = os.path.join(self.bin_apache_path, version)
            if os.path.exists(path):
                return path
        
        # Fallback: buscar la primera disponible en bin/apache que sea válida
        if os.path.exists(self.bin_apache_path):
            versions = [v for v in os.listdir(self.bin_apache_path) if os.path.isdir(os.path.join(self.bin_apache_path, v))]
            for v in versions:
                path = os.path.join(self.bin_apache_path, v)
                if os.path.exists(os.path.join(path, "bin", "httpd.exe")):
                    return path

        return ""

    @property
    def bin_apache_path(self):
        path = os.path.join(self.wamp_root, "bin", "apache")
        os.makedirs(path, exist_ok=True)
        return path

    @property
    def active_apache_version(self):
        return self.data.get("apache_version", None)

    def set_apache_version(self, version):
        self.data["apache_version"] = version
        self.save_config()

    @property
    def mariadb_exe(self):
        return os.path.join(self.mariadb_path, "bin", "mysqld.exe")

    @property
    def mariadb_path(self):
        version = self.active_mariadb_version
        if version:
            path = os.path.join(self.bin_mariadb_path, version)
            if os.path.exists(path):
                # MariaDB ZIPs usually have a top-level folder like mariadb-10.x.x-winx64
                # Check for a folder that contains bin/mysqld.exe
                for item in os.listdir(path):
                    subpath = os.path.join(path, item)
                    if os.path.isdir(subpath) and os.path.exists(os.path.join(subpath, "bin", "mysqld.exe")):
                        return subpath
                return path
        
        # Fallback: usar la primera versión instalada en bin/mariadb
        if os.path.exists(self.bin_mariadb_path):
            versions = [v for v in os.listdir(self.bin_mariadb_path) if os.path.isdir(os.path.join(self.bin_mariadb_path, v))]
            for v in versions:
                path = os.path.join(self.bin_mariadb_path, v)
                # Resolver subcarpeta si es necesario
                for item in os.listdir(path):
                    subpath = os.path.join(path, item)
                    if os.path.isdir(subpath) and os.path.exists(os.path.join(subpath, "bin", "mysqld.exe")):
                        return subpath
                if os.path.exists(os.path.join(path, "bin", "mysqld.exe")):
                    return path

        return ""

    @property
    def bin_mariadb_path(self):
        path = os.path.join(self.wamp_root, "bin", "mariadb")
        os.makedirs(path, exist_ok=True)
        return path

    @property
    def active_mariadb_version(self):
        return self.data.get("mariadb_version", None)

    def set_mariadb_version(self, version):
        self.data["mariadb_version"] = version
        self.save_config()

    @property
    def www_path(self):
        return os.path.join(self.wamp_root, "www")

    @property
    def bin_php_path(self):
        path = os.path.join(self.wamp_root, "bin", "php")
        os.makedirs(path, exist_ok=True)
        return path

    @property
    def php_extensions(self):
        return self.data.get("php_extensions", [])

    def set_php_extensions(self, extensions):
        self.data["php_extensions"] = extensions
        self.save_config()

    @property
    def active_php_version(self):
        return self.data.get("php_version", None)

    def set_php_version(self, version):
        # 1. Obtener extensiones del config (o de la versión actual si está vacío)
        from ..managers.php_manager import PHPManager
        exts = self.php_extensions
        if not exts:
            exts = [name for name, enabled in PHPManager.get_extensions() if enabled]
            self.set_php_extensions(exts)

        # 2. Cambiar versión
        self.data["php_version"] = version
        self.save_config()
        
        # 3. Actualizar php.ini (crearlo si no existe)
        PHPManager.update_php_ini()

        # 4. Sincronizar extensiones desde el config
        if exts:
            PHPManager.sync_extensions(exts)

    @property
    def active_phpmyadmin_version(self):
        return self.data.get("phpmyadmin_version", None)

    @property
    def app_phpmyadmin_path(self):
        path = os.path.join(self.wamp_root, "app", "phpmyadmin")
        os.makedirs(path, exist_ok=True)
        return path

    @property
    def bin_phpmyadmin_path(self):
        path = os.path.join(self.wamp_root, "bin", "phpmyadmin")
        os.makedirs(path, exist_ok=True)
        return path

    @property
    def phpmyadmin_path(self):
        # La instancia activa en ejecucion siempre reside en app/phpmyadmin
        app_path = self.app_phpmyadmin_path
        if not os.path.exists(os.path.join(app_path, "index.php")):
            version = self.active_phpmyadmin_version
            if version:
                self.deploy_phpmyadmin_to_app(version)
            elif os.path.exists(self.bin_phpmyadmin_path):
                installed = [v for v in os.listdir(self.bin_phpmyadmin_path) if os.path.isdir(os.path.join(self.bin_phpmyadmin_path, v))]
                if installed:
                    self.set_phpmyadmin_version(installed[0])
        return app_path

    def get_bin_phpmyadmin_version_path(self, version):
        """Devuelve la ruta dentro de bin/phpmyadmin que contiene los archivos de esa version."""
        if not version:
            return ""
        path = os.path.join(self.bin_phpmyadmin_path, version)
        if not os.path.exists(path):
            return ""
        if os.path.exists(os.path.join(path, "index.php")):
            return path
        for item in os.listdir(path):
            subpath = os.path.join(path, item)
            if os.path.isdir(subpath) and os.path.exists(os.path.join(subpath, "index.php")):
                return subpath
        return path

    def _configure_pma_autologin(self, target_dir):
        """Busca el config.inc.php o lo crea desde el sample y activa auto-login."""
        import re
        import shutil

        pma_path = target_dir
        if not os.path.exists(os.path.join(target_dir, "index.php")):
            if os.path.exists(target_dir):
                for item in os.listdir(target_dir):
                    subpath = os.path.join(target_dir, item)
                    if os.path.isdir(subpath) and os.path.exists(os.path.join(subpath, "index.php")):
                        pma_path = subpath
                        break
        
        config_file = os.path.join(pma_path, "config.inc.php")
        sample_file = os.path.join(pma_path, "config.sample.inc.php")
        
        if not os.path.exists(config_file) and os.path.exists(sample_file):
            shutil.copy2(sample_file, config_file)
            
        if os.path.exists(config_file):
            try:
                with open(config_file, "r", encoding="utf-8") as f:
                    content = f.read()
                
                content = re.sub(r"\['blowfish_secret'\]\s*=\s*''", "['blowfish_secret'] = 'piruwamp_secret_key_32_bytes_long_12345'", content)

                content = re.sub(r"\['host'\]\s*=\s*'localhost'", "['host'] = '127.0.0.1'", content)
                content = re.sub(r"\['auth_type'\]\s*=\s*'cookie'", "['auth_type'] = 'config'", content)
                if "['port']" not in content:
                    content = re.sub(r"(\['host'\]\s*=\s*'127\.0\.0\.1';)", r"\1\n$cfg['Servers'][$i]['port'] = '3306';\n$cfg['Servers'][$i]['connect_type'] = 'tcp';", content)
                if "['user']" not in content:
                    content = re.sub(r"(\['auth_type'\]\s*=\s*'config';)", r"\1\n$cfg['Servers'][$i]['user'] = 'root';\n$cfg['Servers'][$i]['password'] = '';", content)
                content = re.sub(r"\['AllowNoPassword'\]\s*=\s*false", "['AllowNoPassword'] = true", content)
                
                with open(config_file, "w", encoding="utf-8") as f:
                    f.write(content)
            except Exception as e:
                print(f"Error configurando auto-login en {config_file}: {e}")


    def deploy_phpmyadmin_to_app(self, version):
        """Copia la version original desde bin/phpmyadmin a app/phpmyadmin."""
        import shutil
        src_path = self.get_bin_phpmyadmin_version_path(version)
        if not src_path or not os.path.exists(src_path):
            return False

        target_path = self.app_phpmyadmin_path
        try:
            os.makedirs(target_path, exist_ok=True)
            for item in os.listdir(target_path):
                item_path = os.path.join(target_path, item)
                if os.path.isdir(item_path):
                    shutil.rmtree(item_path)
                else:
                    os.remove(item_path)

            for item in os.listdir(src_path):
                s = os.path.join(src_path, item)
                d = os.path.join(target_path, item)
                if os.path.isdir(s):
                    shutil.copytree(s, d)
                else:
                    shutil.copy2(s, d)

            self._configure_pma_autologin(target_path)
            return True
        except Exception as e:
            print(f"Error desplegando phpMyAdmin a {target_path}: {e}")
            return False

    def set_phpmyadmin_version(self, version):
        self.data["phpmyadmin_version"] = version
        self.save_config()
        if version:
            self.deploy_phpmyadmin_to_app(version)
        try:
            from ..services.apache import ApacheService
            apache_svc = ApacheService()
            apache_svc._update_extra_confs()
        except Exception:
            pass


    @property
    def php_path(self):
        version = self.active_php_version
        if version:
            path = os.path.join(self.bin_php_path, version)
            if os.path.exists(path):
                return path
        
        # Si no hay versión activa, buscar la primera disponible en bin/php que sea válida
        if os.path.exists(self.bin_php_path):
            versions = [v for v in os.listdir(self.bin_php_path) if os.path.isdir(os.path.join(self.bin_php_path, v))]
            for v in versions:
                path = os.path.join(self.bin_php_path, v)
                if os.path.exists(os.path.join(path, "php.exe")):
                    return path

        return ""

    @property
    def php_ini(self):
        return os.path.join(self.php_path, "php.ini")

    @property
    def hosts_file(self):
        return r"C:\Windows\System32\drivers\etc\hosts"

    def ensure_required_paths(self):
        # 1. Crear directorios necesarios
        dirs = [
            os.path.join(self.wamp_root, "bin"),
            os.path.join(self.wamp_root, "bin", "apache"),
            os.path.join(self.wamp_root, "bin", "mariadb"),
            os.path.join(self.wamp_root, "bin", "php"),
            os.path.join(self.wamp_root, "bin", "phpmyadmin"),
            os.path.join(self.wamp_root, "app"),
            os.path.join(self.wamp_root, "app", "phpmyadmin"),
            os.path.join(self.wamp_root, "app", "web"),
            os.path.join(self.wamp_root, "etc"),
            os.path.join(self.wamp_root, "etc", "mariadb"),
            os.path.join(self.wamp_root, "etc", "apache2"),
            os.path.join(self.wamp_root, "etc", "apache2", "alias"),
            os.path.join(self.wamp_root, "etc", "apache2", "sites-enabled"),
            os.path.join(self.wamp_root, "etc", "temp"),
            os.path.join(self.wamp_root, "data"),
            os.path.join(self.wamp_root, "www"),
        ]
        for d in dirs:
            os.makedirs(d, exist_ok=True)

        # 2. Crear archivos por defecto si no existen
        files = {
            os.path.join(self.wamp_root, "etc", "apache.conf"): 
                "# Apache Versions Repository\n"
                "apache-2.4.68 = https://www.apachelounge.com/download/VS18/binaries/httpd-2.4.68-260617-Win64-VS18.zip\n",
            
            os.path.join(self.wamp_root, "etc", "mariadb.conf"):
                "# MariaDB Versions Repository\n"
                "MariaDB-11.4.5 = https://archive.mariadb.org/mariadb-11.4.5/winx64-packages/mariadb-11.4.5-winx64.zip\n"
                "MariaDB-11.2.6 = https://archive.mariadb.org/mariadb-11.2.6/winx64-packages/mariadb-11.2.6-winx64.zip\n"
                "MariaDB-10.11.11 = https://archive.mariadb.org/mariadb-10.11.11/winx64-packages/mariadb-10.11.11-winx64.zip\n",
            
            os.path.join(self.wamp_root, "etc", "php.conf"):
                "# PHP Versions Repository\n"
                "php-8.3.16 = https://windows.php.net/downloads/releases/archives/php-8.3.16-Win32-vs16-x64.zip\n"
                "php-8.2.27 = https://windows.php.net/downloads/releases/archives/php-8.2.27-Win32-vs16-x64.zip\n"
                "php-8.4.3 = https://windows.php.net/downloads/releases/archives/php-8.4.3-Win32-vs17-x64.zip\n"
                "php-8.1.31 = https://windows.php.net/downloads/releases/archives/php-8.1.31-Win32-vs16-x64.zip\n"
                "php-7.4.33 = https://windows.php.net/downloads/releases/archives/php-7.4.33-Win32-vc15-x64.zip\n",
            
            os.path.join(self.wamp_root, "etc", "phpmyadmin.conf"):
                "# phpMyAdmin Versions Repository\n"
                "phpMyAdmin-5.2.2 = https://files.phpmyadmin.net/phpMyAdmin/5.2.2/phpMyAdmin-5.2.2-all-languages.zip\n"
                "phpMyAdmin-5.2.1 = https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.zip\n"
                "phpMyAdmin-latest = https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.zip\n",
            
            os.path.join(self.wamp_root, "etc", "mariadb", "my.ini"):
                "[mysqld]\n"
                "# Puerto\n"
                "port=3306\n\n"
                "# Carpeta base\n"
                f"basedir={self.wamp_root.replace('\\\\', '/')}/bin/mariadb/MariaDB-11.4.5\n\n"
                "# Carpeta de datos\n"
                f"datadir={self.wamp_root.replace('\\\\', '/')}/data\n\n"
                "[client]\n"
                "port=3306\n",

            os.path.join(self.wamp_root, "etc", "apache2", "mod_php.conf"):
                "# This file is auto-generated, so please keep it intact.\n"
                f'LoadModule php_module "{self.wamp_root.replace("\\\\", "/")}/bin/php/php-8.3.16/php8apache2_4.dll"\n'
                f'PHPIniDir "{self.wamp_root.replace("\\\\", "/")}/bin/php/php-8.3.16"\n'
                "<IfModule mime_module>\n"
                "    AddType application/x-httpd-php .php\n"
                "</IfModule>\n",

            os.path.join(self.wamp_root, "etc", "apache2", "alias", "phpmyadmin.conf"):
                f'Alias /phpmyadmin "{self.wamp_root.replace("\\\\", "/")}/app/phpmyadmin/"\n\n'
                "# to give access from outside\n"
                "# replace the lines\n"
                "#\n"
                "# Require local\n"
                "#\n"
                "# by\n"
                "#\n"
                "# Require all granted\n"
                "#\n\n"
                f'<Directory "{self.wamp_root.replace("\\\\", "/")}/app/phpmyadmin/">\n'
                "\tOptions Indexes FollowSymLinks MultiViews\n"
                "\tAllowOverride all\n\n"
                "\tRequire all granted\n\n"
                "</Directory>\n",
        }

        for filepath, content in files.items():
            if not os.path.exists(filepath):
                try:
                    with open(filepath, "w", encoding="utf-8") as f:
                        f.write(content)
                except Exception as e:
                    print(f"Error creating file {filepath}: {e}")

        # 3. Crear www/index.php si no existe
        index_php_path = os.path.join(self.wamp_root, "www", "index.php")
        if not os.path.exists(index_php_path):
            try:
                with open(index_php_path, "w", encoding="utf-8") as f:
                    f.write(self._get_default_index_php_content())
            except Exception as e:
                print(f"Error creating www/index.php: {e}")

    def _get_default_index_php_content(self):
        return """<?php
$dirs = array_filter(glob("*"), "is_dir");
$projects = [];
foreach ($dirs as $dir) {
    if ($dir !== "." && $dir !== ".." && strtolower($dir) !== "phpmyadmin") {
        $projects[] = $dir;
    }
}
sort($projects);

// Handle phpinfo request
if (isset($_GET["phpinfo"])) {
    phpinfo();
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiruWamp - Panel Local</title>
    <style>
        :root {
            --bg-color: #f8f9fa;
            --card-bg: #ffffff;
            --card-hover: #f1f3f5;
            --border-color: #e2e8f0;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --btn-bg: #ffffff;
            --btn-hover: #f1f3f5;
            --font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--bg-color);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            line-height: 1.5;
        }

        .container {
            max-width: 900px;
            width: 100%;
        }

        header {
            margin-bottom: 35px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-main);
            letter-spacing: -0.5px;
            margin-bottom: 6px;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 1rem;
        }

        .section-title {
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: var(--text-main);
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
            margin-bottom: 36px;
        }

        .tool-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 20px;
            text-decoration: none;
            color: var(--text-main);
            transition: background 0.15s ease, border-color 0.15s ease;
            display: block;
        }

        .tool-card:hover {
            background: var(--card-hover);
            border-color: #cbd5e1;
        }

        .tool-card h3 {
            font-size: 1.05rem;
            font-weight: 600;
            margin-bottom: 6px;
            color: var(--text-main);
        }

        .tool-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        .projects-section {
            margin-bottom: 40px;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 16px;
        }

        .project-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 18px 20px;
            text-decoration: none;
            color: var(--text-main);
            transition: background 0.15s ease, border-color 0.15s ease;
            display: block;
        }

        .project-card:hover {
            background: var(--card-hover);
            border-color: #cbd5e1;
        }

        .project-card h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 4px;
            word-break: break-word;
        }

        .project-card .project-url {
            color: var(--text-muted);
            font-size: 0.85rem;
            font-family: Consolas, monospace;
        }

        .empty-state {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 30px 20px;
            text-align: center;
            color: var(--text-muted);
            grid-column: 1 / -1;
        }

        .empty-state h3 {
            font-size: 1rem;
            color: var(--text-main);
            margin-bottom: 6px;
        }

        .empty-state p {
            font-size: 0.9rem;
        }

        footer {
            margin-top: auto;
            padding-top: 30px;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>PiruWamp</h1>
            <p class="subtitle">Servidor de Desarrollo Local</p>
        </header>

        <h2 class="section-title">Herramientas</h2>
        <div class="tools-grid">
            <a href="/phpmyadmin" class="tool-card" target="_blank">
                <h3>phpMyAdmin</h3>
                <p>Administrador de bases de datos MariaDB</p>
            </a>
            <a href="?phpinfo=1" class="tool-card" target="_blank">
                <h3>PHP Info</h3>
                <p>Configuración, directivas y extensiones activas</p>
            </a>
        </div>

        <div class="projects-section">
            <h2 class="section-title">Proyectos</h2>
            <div class="projects-grid">
                <?php if (empty($projects)): ?>
                    <div class="empty-state">
                        <h3>No hay proyectos disponibles</h3>
                        <p>Crea una carpeta en el directorio www para iniciar un nuevo proyecto.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($projects as $project): ?>
                        <a href="http://<?php echo htmlspecialchars($project); ?>.test" class="project-card" target="_blank">
                            <h3><?php echo htmlspecialchars($project); ?></h3>
                            <span class="project-url">http://<?php echo htmlspecialchars($project); ?>.test</span>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <footer>
            PiruWamp - Servidor web local
        </footer>
    </div>
</body>
</html>"""

config = Config()

