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

    def set_phpmyadmin_version(self, version):
        self.data["phpmyadmin_version"] = version
        self.save_config()

    @property
    def bin_phpmyadmin_path(self):
        path = os.path.join(self.wamp_root, "bin", "phpmyadmin")
        os.makedirs(path, exist_ok=True)
        return path

    @property
    def phpmyadmin_path(self):
        version = self.active_phpmyadmin_version
        if version:
            path = os.path.join(self.bin_phpmyadmin_path, version)
            if os.path.exists(path):
                # phpMyAdmin usually extracts into a subfolder like phpMyAdmin-X.X.X-all-languages
                # Let's check if there is a subfolder that contains index.php
                for item in os.listdir(path):
                    subpath = os.path.join(path, item)
                    if os.path.isdir(subpath) and os.path.exists(os.path.join(subpath, "index.php")):
                        return subpath
                return path
        
        # Fallback: usar la primera versión instalada en bin/phpmyadmin
        if os.path.exists(self.bin_phpmyadmin_path):
            versions = [v for v in os.listdir(self.bin_phpmyadmin_path) if os.path.isdir(os.path.join(self.bin_phpmyadmin_path, v))]
            for v in versions:
                path = os.path.join(self.bin_phpmyadmin_path, v)
                for item in os.listdir(path):
                    subpath = os.path.join(path, item)
                    if os.path.isdir(subpath) and os.path.exists(os.path.join(subpath, "index.php")):
                        return subpath
                if os.path.exists(os.path.join(path, "index.php")):
                    return path
        
        return ""

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
                "_apache-2.4.67 = https://www.apachelounge.com/download/VS18/binaries/httpd-2.4.67-260309-Win64-VS18.zip\n"
                "apache-2.4.62 = https://www.apachelounge.com/download/VS17/binaries/httpd-2.4.62-240904-win64-VS17.zip\n"
                "apache-2.4.66 = https://www.apachelounge.com/download/VS18/binaries/httpd-2.4.66-260223-Win64-VS18.zip\n",
            
            os.path.join(self.wamp_root, "etc", "mariadb.conf"):
                "# MariaDB Versions Repository\n"
                "_mariadb-12.2.2 = https://mirror.insacom.cl/mariadb///mariadb-12.2.2/winx64-packages/mariadb-12.2.2-winx64.zip\n"
                "MariaDB-12.2.2 = https://mirror.insacom.cl/mariadb///mariadb-12.2.2/winx64-packages/mariadb-12.2.2-winx64.zip\n"
                "MariaDB-11.8.6 = https://mirror.insacom.cl/mariadb///mariadb-11.8.6/winx64-packages/mariadb-11.8.6-winx64.zip\n",
            
            os.path.join(self.wamp_root, "etc", "php.conf"):
                "# PHP Versions Repository\n"
                "_php-8.5.6 = https://downloads.php.net/~windows/releases/archives/php-8.5.6-Win32-vs17-x64.zip\n"
                "_php-8.4.21 = https://downloads.php.net/~windows/releases/archives/php-8.4.21-Win32-vs17-x64.zip\n"
                "php-7.3.33 = https://windows.php.net/downloads/releases/archives/php-7.3.33-Win32-VC15-x64.zip\n"
                "php-7.4.33 = https://windows.php.net/downloads/releases/php-7.4.33-Win32-vc15-x64.zip\n"
                "php-8.0.30 = https://windows.php.net/downloads/releases/php-8.0.30-Win32-vs16-x64.zip\n"
                "php-8.1.32 = https://windows.php.net/downloads/releases/php-8.1.32-Win32-vs16-x64.zip\n"
                "php-8.2.28 = https://windows.php.net/downloads/releases/php-8.2.28-Win32-vs16-x64.zip\n"
                "php-8.3.21 = https://windows.php.net/downloads/releases/php-8.3.21-Win32-vs16-x64.zip\n"
                "php-8.4.20 = https://downloads.php.net/~windows/releases/archives/php-8.4.20-Win32-vs17-x64.zip\n"
                "php-8.5.5 = https://downloads.php.net/~windows/releases/archives/php-8.5.5-Win32-vs17-x64.zip\n",
            
            os.path.join(self.wamp_root, "etc", "phpmyadmin.conf"):
                "# phpMyAdmin Versions Repository\n"
                "_phpMyAdmin-6.0-snapshot = https://files.phpmyadmin.net/snapshots/phpMyAdmin-6.0+snapshot-all-languages.zip\n"
                "phpMyAdmin-latest = https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.zip\n"
                "phpMyAdmin-5.2-snapshot = https://files.phpmyadmin.net/snapshots/phpMyAdmin-5.2+snapshot-all-languages.zip\n"
                "phpMyAdmin-6.0-snapshot = https://files.phpmyadmin.net/snapshots/phpMyAdmin-6.0+snapshot-all-languages.zip\n"
                "phpMyAdmin-5.2.3 = https://files.phpmyadmin.net/phpMyAdmin/5.2.3/phpMyAdmin-5.2.3-all-languages.zip\n",
            
            os.path.join(self.wamp_root, "etc", "mariadb", "my.ini"):
                "[mysqld]\n"
                "# Puerto\n"
                "port=3306\n\n"
                "# Carpeta base\n"
                f"basedir={self.wamp_root.replace('\\\\', '/')}/bin/mariadb/MariaDB-12.2.2/mariadb-12.2.2-winx64\n\n"
                "# Carpeta de datos\n"
                f"datadir={self.wamp_root.replace('\\\\', '/')}/data\n\n"
                "[client]\n"
                "port=3306\n",

            os.path.join(self.wamp_root, "etc", "apache2", "mod_php.conf"):
                "# This file is auto-generated, so please keep it intact.\n"
                f'LoadModule php_module "{self.wamp_root.replace("\\\\", "/")}/bin/php/php-8.4.20/php8apache2_4.dll"\n'
                f'PHPIniDir "{self.wamp_root.replace("\\\\", "/")}/bin/php/php-8.4.20"\n'
                "<IfModule mime_module>\n"
                "    AddType application/x-httpd-php .php\n"
                "</IfModule>\n",

            os.path.join(self.wamp_root, "etc", "apache2", "alias", "phpmyadmin.conf"):
                f'Alias /phpmyadmin "{self.wamp_root.replace("\\\\", "/")}/bin/phpmyadmin/phpMyAdmin-6.0-snapshot/phpMyAdmin-6.0+snapshot-all-languages/"\n\n'
                "# to give access from outside\n"
                "# replace the lines\n"
                "#\n"
                "# Require local\n"
                "#\n"
                "# by\n"
                "#\n"
                "# Require all granted\n"
                "#\n\n"
                f'<Directory "{self.wamp_root.replace("\\\\", "/")}/bin/phpmyadmin/phpMyAdmin-6.0-snapshot/phpMyAdmin-6.0+snapshot-all-languages/">\n'
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
// PHP Info page toggle
if (isset($_GET['info']) && $_GET['info'] == '1') {
    phpinfo();
    exit;
}

// Read subdirectories in www
$projects = [];
$dir = __DIR__;
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file !== '.' && $file !== '..' && is_dir($dir . '/' . $file)) {
                $projects[] = $file;
            }
        }
        closedir($dh);
    }
}
sort($projects);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiruWamp - Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0f111a;
            --card-bg: rgba(255, 255, 255, 0.03);
            --card-border: rgba(255, 255, 255, 0.08);
            --text-primary: #f3f4f6;
            --text-secondary: #9ca3af;
            --accent-blue: #38bdf8;
            --accent-green: #34d399;
            --accent-purple: #a78bfa;
            --glow-color: rgba(56, 189, 248, 0.15);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
            position: relative;
        }

        /* Abstract glowing blobs in the background */
        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            z-index: 0;
            opacity: 0.5;
        }

        .blob-1 {
            width: 300px;
            height: 300px;
            background: var(--accent-blue);
            top: 10%;
            left: 15%;
        }

        .blob-2 {
            width: 400px;
            height: 400px;
            background: var(--accent-purple);
            bottom: 10%;
            right: 15%;
        }

        .container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 900px;
            padding: 40px 20px;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: -0.05em;
            background: linear-gradient(135deg, #fff 30%, var(--accent-blue) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        header p {
            color: var(--text-secondary);
            font-size: 1.1rem;
            font-weight: 300;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            margin-bottom: 40px;
        }

        .card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 20px;
            padding: 30px;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: rgba(56, 189, 248, 0.4);
            box-shadow: 0 12px 40px var(--glow-color);
        }

        .card:hover::before {
            opacity: 1;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card-icon {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card p {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent-blue) 0%, #0284c7 100%);
            color: #0f111a;
            box-shadow: 0 4px 15px rgba(56, 189, 248, 0.2);
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(56, 189, 248, 0.35);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-primary);
            border: 1px solid var(--card-border);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .project-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-height: 200px;
            overflow-y: auto;
            padding-right: 5px;
        }

        .project-list::-webkit-scrollbar {
            width: 5px;
        }

        .project-list::-webkit-scrollbar-thumb {
            background: var(--card-border);
            border-radius: 10px;
        }

        .project-item a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--card-border);
            border-radius: 10px;
            color: var(--text-primary);
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }

        .project-item a:hover {
            background: rgba(56, 189, 248, 0.05);
            border-color: rgba(56, 189, 248, 0.3);
            padding-left: 20px;
        }

        .empty-projects {
            text-align: center;
            padding: 20px;
            color: var(--text-secondary);
            font-style: italic;
            font-size: 0.9rem;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: var(--text-secondary);
            font-size: 0.85rem;
            font-weight: 300;
            border-top: 1px solid var(--card-border);
            width: 100%;
            margin-top: auto;
            background: rgba(15, 17, 26, 0.8);
            backdrop-filter: blur(10px);
        }

        footer strong {
            color: var(--accent-blue);
        }
    </style>
</head>
<body>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>

    <div class="container">
        <header>
            <h1>PiruWamp</h1>
            <p>Servidor de Desarrollo Local Portátil &amp; Modular</p>
        </header>

        <div class="grid">
            <!-- Card PHP -->
            <div class="card">
                <div class="card-title">
                    <span class="card-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="var(--accent-purple)"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </span>
                    Información de PHP
                </div>
                <p>Versión activa de PHP: <strong><?php echo phpversion(); ?></strong>. Haz clic para ver todos los detalles de configuración, extensiones activas y variables de entorno.</p>
                <a href="?info=1" target="_blank" class="btn btn-primary">Ver phpinfo()</a>
            </div>

            <!-- Card phpMyAdmin -->
            <div class="card">
                <div class="card-title">
                    <span class="card-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="var(--accent-blue)"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                    </span>
                    Base de Datos
                </div>
                <p>Administra tus bases de datos MariaDB / MySQL de forma rápida y sencilla mediante la interfaz gráfica de phpMyAdmin.</p>
                <a href="/phpmyadmin" target="_blank" class="btn btn-secondary">Abrir phpMyAdmin</a>
            </div>
        </div>

        <!-- Projects Card -->
        <div class="card" style="margin-bottom: 0;">
            <div class="card-title">
                <span class="card-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="var(--accent-green)"><path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2h-8l-2-2z"/></svg>
                </span>
                Tus Proyectos
            </div>
            <p>Carpetas detectadas dentro del directorio de publicación local: <strong>www/</strong>.</p>
            
            <?php if (empty($projects)): ?>
                <div class="empty-projects">
                    Aún no has creado ningún proyecto. Usa el panel de PiruWamp para añadir uno nuevo.
                </div>
            <?php else: ?>
                <ul class="project-list">
                    <?php foreach ($projects as $project): ?>
                        <li class="project-item">
                            <a href="http://<?php echo htmlspecialchars($project); ?>.test" target="_blank">
                                <span><?php echo htmlspecialchars($project); ?></span>
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="var(--accent-blue)"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <footer>
        Desarrollado con 💻 por <strong>PiruWamp</strong>. Servidor web local listo.
    </footer>
</body>
</html>"""

config = Config()
