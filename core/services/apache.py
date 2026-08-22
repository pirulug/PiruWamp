import os
import re
import glob
from .base import BaseService
from ..core.config import config
from ..core.logger import logger

class ApacheService(BaseService):
    def __init__(self):
        super().__init__("Apache", config.apache_exe)

    def start(self):
        self.update_configs()
        return super().start()

    def update_configs(self):
        from ..managers.php_manager import PHPManager
        self._update_httpd_conf()
        self._update_mod_php_conf()
        self._update_extra_confs()
        PHPManager.update_php_ini()

    def _update_httpd_conf(self):
        httpd_conf = os.path.join(config.apache_path, "conf", "httpd.conf")
        logs_path = os.path.join(config.apache_path, "logs")
        if not os.path.exists(logs_path):
            os.makedirs(logs_path, exist_ok=True)
            
        wamp_root = config.wamp_root.replace("\\", "/")
        apache_path = config.apache_path.replace("\\", "/")
        www_path = config.www_path.replace("\\", "/")
        
        mod_php_conf = f"{wamp_root}/etc/apache2/mod_php.conf"
        alias_path = f"{wamp_root}/etc/apache2/alias/*.conf"
        sites_enabled_path = f"{wamp_root}/etc/apache2/sites-enabled/*.conf"
        
        try:
            with open(httpd_conf, "r", encoding="utf-8") as f:
                content = f.read()

            # 1. Actualizar SRVROOT
            content = re.sub(r'^Define SRVROOT ".*"', f'Define SRVROOT "{apache_path}"', content, flags=re.M)
            
            # 2. Actualizar DocumentRoot y su Directory (solo el principal)
            content = re.sub(r'^DocumentRoot ".*"', f'DocumentRoot "{www_path}"', content, flags=re.M)
            
            def fix_directory(match):
                path = match.group(1).lower()
                if "htdocs" in path or "www" in path or "${srvroot}" in path:
                    if path.strip() == "/" or path.strip() == "${srvroot}":
                        return match.group(0)
                    return f'<Directory "{www_path}">'
                return match.group(0)

            content = re.sub(r'<Directory "([^"]*)">', fix_directory, content)

            # 3. DirectoryIndex
            if "DirectoryIndex index.php" not in content:
                content = content.replace("DirectoryIndex index.html", "DirectoryIndex index.php index.html")

            # 3.1 ServerName y DNS Lookups
            if not re.search(r'^ServerName .*', content, flags=re.M):
                content += "\nServerName localhost:80"
            else:
                content = re.sub(r'^ServerName .*', 'ServerName localhost:80', content, flags=re.M)

            if "HostnameLookups Off" not in content:
                content += "\nHostnameLookups Off\nUseCanonicalName Off\n"

            # Optimizaciones de rendimiento para Windows (12 nucleos / 16GB RAM)
            perf_block = """
# Optimizaciones de rendimiento PiruWamp
AcceptFilter http none
AcceptFilter https none
EnableSendfile Off
EnableMMAP Off
KeepAlive On
MaxKeepAliveRequests 500
KeepAliveTimeout 5
<IfModule mpm_winnt_module>
    ThreadsPerChild 250
    MaxConnectionsPerChild 0
</IfModule>
"""
            if "AcceptFilter http none" not in content:
                content += perf_block



            # 4. Asegurar que existan los Includes al final y actualizarlos si ya existen
            def update_or_add_include(text, filename_pattern, new_include):
                pattern = r'^Include(?:Optional)?\s+.*' + filename_pattern + r'.*$'
                if re.search(pattern, text, flags=re.M | re.IGNORECASE):
                    return re.sub(pattern, new_include, text, flags=re.M | re.IGNORECASE)
                else:
                    return text + f"\n{new_include}"

            content = update_or_add_include(content, r'mod_php\.conf', f'Include "{mod_php_conf}"')
            content = update_or_add_include(content, r'alias[/\\*]*\.conf', f'IncludeOptional "{alias_path}"')
            content = update_or_add_include(content, r'sites-enabled[/\\*]*\.conf', f'IncludeOptional "{sites_enabled_path}"')

            with open(httpd_conf, "w", encoding="utf-8") as f:
                f.write(content)
            
            logger.log("httpd.conf actualizado con DocumentRoot, Index e Includes", self.name)
        except Exception as e:
            logger.log(f"Error actualizando httpd.conf: {e}", self.name)

    def _update_mod_php_conf(self):
        mod_php_conf = os.path.join(config.wamp_root, "etc", "apache2", "mod_php.conf")
        php_path = config.php_path
        
        # Intentar encontrar el DLL de Apache para PHP (php8apache2_4.dll, php7apache2_4.dll, etc.)
        php_dll = None
        if os.path.exists(php_path):
            for file in os.listdir(php_path):
                if file.startswith("php") and "apache2_4.dll" in file:
                    php_dll = os.path.join(php_path, file)
                    break
        
        if not php_dll:
            logger.log(f"No se encontro el DLL de Apache para PHP en {php_path}", self.name)
            return

        dll_name = os.path.basename(php_dll).lower()
        if dll_name.startswith("php7"):
            module_name = "php7_module"
        elif dll_name.startswith("php5"):
            module_name = "php5_module"
        else:
            module_name = "php_module"

        try:
            formatted_dll = php_dll.replace("\\", "/")
            formatted_php = php_path.replace("\\", "/")

            # Detectar y pre-cargar librerías de dependencias requeridas en Windows (libsodium, openssl, etc.)
            load_file_lines = []
            if os.path.exists(php_path):
                # Priorizar libcrypto, libssl y libsodium
                priority_libs = ["libcrypto", "libssl", "libsodium", "libssh2", "libsqlite3"]
                all_dlls = [f for f in os.listdir(php_path) if f.lower().endswith(".dll")]
                
                # Primero las prioritarias
                for prefix in priority_libs:
                    for f in all_dlls:
                        if f.lower().startswith(prefix):
                            full_path = os.path.join(php_path, f).replace("\\", "/")
                            line = f'LoadFile "{full_path}"'
                            if line not in load_file_lines:
                                load_file_lines.append(line)

                # Luego cualquier otra librería lib*.dll o icu*.dll
                for f in all_dlls:
                    f_lower = f.lower()
                    if (f_lower.startswith("lib") or f_lower.startswith("icu") or f_lower.startswith("glib")) and not f_lower.startswith("php"):
                        full_path = os.path.join(php_path, f).replace("\\", "/")
                        line = f'LoadFile "{full_path}"'
                        if line not in load_file_lines:
                            load_file_lines.append(line)

            load_file_block = "\n".join(load_file_lines)
            if load_file_block:
                load_file_block += "\n"

            new_content = f"""# This file is auto-generated, so please keep it intact.
{load_file_block}LoadModule {module_name} "{formatted_dll}"
PHPIniDir "{formatted_php}"
<IfModule mime_module>
    AddType application/x-httpd-php .php
</IfModule>
"""
            with open(mod_php_conf, "w", encoding="utf-8") as f:
                f.write(new_content)
            logger.log(f"mod_php.conf actualizado ({module_name}) con PHP en {os.path.basename(php_path)}", self.name)

        except Exception as e:
            logger.log(f"Error actualizando mod_php.conf: {e}", self.name)

    def _update_extra_confs(self):
        alias_dir = os.path.join(config.wamp_root, "etc", "apache2", "alias")
        sites_dir = os.path.join(config.wamp_root, "etc", "apache2", "sites-enabled")
        os.makedirs(alias_dir, exist_ok=True)
        os.makedirs(sites_dir, exist_ok=True)

        pma_path = config.phpmyadmin_path.replace("\\", "/").rstrip("/")
        web_path = os.path.join(config.wamp_root, "app", "web").replace("\\", "/").rstrip("/")
        www_dir = config.www_path.replace("\\", "/").rstrip("/")

        # 1. Generar dinamicamente alias phpmyadmin.conf
        pma_conf = os.path.join(alias_dir, "phpmyadmin.conf")
        pma_content = f"""Alias /phpmyadmin "{pma_path}/"
<Directory "{pma_path}/">
    Options Indexes FollowSymLinks MultiViews
    AllowOverride All
    Require all granted
</Directory>
"""
        try:
            with open(pma_conf, "w", encoding="utf-8") as f:
                f.write(pma_content)
        except Exception as e:
            logger.log(f"Error escribiendo {pma_conf}: {e}", self.name)

        # 2. Generar dinamicamente alias piruwamp.localhost.conf
        piru_conf = os.path.join(alias_dir, "piruwamp.localhost.conf")
        piru_content = f"""Alias /piruwamp "{web_path}/"
Alias /piruwam "{web_path}/"
<Directory "{web_path}/">
    Options Indexes FollowSymLinks MultiViews
    AllowOverride All
    Require all granted
</Directory>
"""
        try:
            with open(piru_conf, "w", encoding="utf-8") as f:
                f.write(piru_content)
        except Exception as e:
            logger.log(f"Error escribiendo {piru_conf}: {e}", self.name)

        # 3. Sincronizar sites-enabled dinamicamente con la ruta actual
        try:
            from ..managers.vhost import VHostManager
            from ..managers.hosts import HostsManager
            VHostManager.sync_sites(HostsManager())
        except Exception as e:
            logger.log(f"Error sincronizando sites-enabled: {e}", self.name)

        # 4. Para cualquier otro archivo .conf adicional en alias/ o sites-enabled/
        def normalize_other_paths(content: str) -> str:
            content = re.sub(r'[A-Za-z]:[\\/][^"\r\n]*[\\/]www[\\/]*', www_dir + "/", content, flags=re.IGNORECASE)
            content = re.sub(r'[A-Za-z]:[\\/][^"\r\n]*[\\/]app[\\/]web[\\/]*', web_path + "/", content, flags=re.IGNORECASE)
            content = re.sub(r'[A-Za-z]:[\\/][^"\r\n]*[\\/]app[\\/]phpmyadmin[\\/]*', pma_path + "/", content, flags=re.IGNORECASE)
            return content

        for pattern in [os.path.join(alias_dir, "*.conf"), os.path.join(sites_dir, "*.conf")]:
            for file in glob.glob(pattern):
                if os.path.basename(file) in ["phpmyadmin.conf", "piruwamp.localhost.conf", "00-default.conf", "00-piruwam.localhost.conf"]:
                    continue
                try:
                    with open(file, "r", encoding="utf-8") as f:
                        content = f.read()
                    new_content = normalize_other_paths(content)
                    if content != new_content:
                        with open(file, "w", encoding="utf-8") as f:
                            f.write(new_content)
                        logger.log(f"Configuracion actualizada: {os.path.basename(file)}", self.name)
                except Exception as e:
                    logger.log(f"Error actualizando {file}: {e}", self.name)


