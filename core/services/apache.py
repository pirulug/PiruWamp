import os
import re
import glob
import subprocess
from .base import BaseService
from ..core.config import config
from ..core.logger import logger

class ApacheService(BaseService):
    def __init__(self):
        super().__init__("Apache", config.apache_exe)

    def is_running(self):
        if self.process is not None and self.process.poll() is None:
            return True
        try:
            output = subprocess.check_output(
                ["tasklist", "/FI", "IMAGENAME eq httpd.exe", "/NH"],
                creationflags=subprocess.CREATE_NO_WINDOW,
                text=True
            )
            return "httpd.exe" in output.lower()
        except Exception:
            return False

    def start(self):
        if self.is_running() and (self.process is None or self.process.poll() is not None):
            logger.log("Detectado proceso httpd.exe huerfano en ejecucion. Cerrando para liberar puerto 80...", self.name)
            self.stop()
            import time
            time.sleep(0.5)

        self.update_configs()
        return super().start()

    def stop(self):
        if self.process:
            try:
                subprocess.run(
                    ["taskkill", "/F", "/T", "/PID", str(self.process.pid)],
                    capture_output=True,
                    creationflags=subprocess.CREATE_NO_WINDOW
                )
            except Exception:
                try:
                    self.process.terminate()
                except Exception:
                    pass
            self.process = None

        try:
            subprocess.run(
                ["taskkill", "/F", "/IM", "httpd.exe", "/T"],
                capture_output=True,
                creationflags=subprocess.CREATE_NO_WINDOW
            )
        except Exception:
            pass

        logger.log("Detenido", self.name)
        return True

    def update_configs(self):
        from ..managers.php_manager import PHPManager
        self._update_httpd_conf()
        self._update_mod_php_conf()
        self._update_extra_confs()
        PHPManager.update_php_ini()

    def _check_and_enable_mod_rewrite(self, content: str) -> tuple[str, str]:
        """Verifica que mod_rewrite este habilitado en el contenido de httpd.conf.
        Si esta comentado lo descomenta, y si no existe lo agrega.
        """
        if re.search(r"^\s*LoadModule\s+rewrite_module\s+", content, flags=re.M):
            return content, "mod_rewrite verificado y activo"

        if re.search(r"^\s*#\s*LoadModule\s+rewrite_module\s+", content, flags=re.M):
            new_content = re.sub(
                r"^\s*#\s*(LoadModule\s+rewrite_module\s+.*)$",
                r"\1",
                content,
                flags=re.M
            )
            return new_content, "mod_rewrite estaba deshabilitado; ha sido activado (descomentado)"

        rewrite_line = "LoadModule rewrite_module modules/mod_rewrite.so"
        loadmodule_matches = list(re.finditer(r"^\s*#?\s*LoadModule\s+.*$", content, flags=re.M))
        if loadmodule_matches:
            last_pos = loadmodule_matches[-1].end()
            new_content = content[:last_pos] + "\n" + rewrite_line + content[last_pos:]
        else:
            new_content = rewrite_line + "\n" + content
        return new_content, "mod_rewrite no estaba presente; ha sido agregado y activado"

    def ensure_mod_rewrite(self) -> bool:
        """Verifica y asegura que mod_rewrite este habilitado en httpd.conf."""
        if not config.apache_path or not os.path.exists(config.apache_path):
            return False

        httpd_conf = os.path.join(config.apache_path, "conf", "httpd.conf")
        if not os.path.exists(httpd_conf):
            return False

        try:
            with open(httpd_conf, "r", encoding="utf-8") as f:
                content = f.read()

            new_content, message = self._check_and_enable_mod_rewrite(content)
            if new_content != content:
                with open(httpd_conf, "w", encoding="utf-8") as f:
                    f.write(new_content)

            logger.log(message, self.name)
            return True
        except Exception as e:
            logger.log(f"Error verificando mod_rewrite en httpd.conf: {e}", self.name)
            return False

    def _update_httpd_conf(self):
        if not config.apache_path or not os.path.exists(config.apache_path):
            return

        httpd_conf = os.path.join(config.apache_path, "conf", "httpd.conf")
        if not os.path.exists(httpd_conf):
            return

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
            content = re.sub(r'^\s*Define\s+SRVROOT\s+.*$', f'Define SRVROOT "{apache_path}"', content, flags=re.M)
            
            # 2. Actualizar DocumentRoot y su Directory (solo el principal)
            content = re.sub(r'^\s*DocumentRoot\s+.*$', f'DocumentRoot "{www_path}"', content, flags=re.M)
            
            def fix_directory(match):
                path = match.group(1).lower()
                if "htdocs" in path or "www" in path or "${srvroot}" in path or ":/" in path or ":\\" in path:
                    if path.strip() == "/" or path.strip() == "${srvroot}" or path.strip() == "${srvroot}/" or "cgi-bin" in path:
                        return match.group(0)
                    return f'<Directory "{www_path}">'
                return match.group(0)

            content = re.sub(r'^\s*<Directory\s+"?([^">\n]+)"?>', fix_directory, content, flags=re.M)

            # 2.1 Asegurar AllowOverride All en el Directory de www_path
            escaped_www = re.escape(www_path)
            def fix_allow_override(match):
                block = match.group(0)
                return re.sub(r'^\s*AllowOverride\s+None\b', '    AllowOverride All', block, flags=re.M | re.IGNORECASE)

            content = re.sub(rf'<Directory\s+"?{escaped_www}"?>[\s\S]*?</Directory>', fix_allow_override, content, flags=re.IGNORECASE)

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

            # 3.2 Asegurar que mod_rewrite este habilitado
            content, rewrite_msg = self._check_and_enable_mod_rewrite(content)
            logger.log(rewrite_msg, self.name)

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
            
            logger.log("httpd.conf actualizado con DocumentRoot, mod_rewrite, Index e Includes", self.name)
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

        # Limpiar alias piruwamp.localhost.conf si existe
        old_piru_conf = os.path.join(alias_dir, "piruwamp.localhost.conf")
        if os.path.exists(old_piru_conf):
            try:
                os.remove(old_piru_conf)
            except Exception:
                pass

        # 2. Sincronizar sites-enabled dinamicamente con la ruta actual
        try:
            from ..managers.vhost import VHostManager
            from ..managers.hosts import HostsManager
            VHostManager.sync_sites(HostsManager())
        except Exception as e:
            logger.log(f"Error sincronizando sites-enabled: {e}", self.name)

        # 3. Para cualquier otro archivo .conf adicional en alias/ o sites-enabled/
        def normalize_other_paths(content: str) -> str:
            content = re.sub(r'[A-Za-z]:[\\/][^"\r\n]*[\\/]www[\\/]*', www_dir + "/", content, flags=re.IGNORECASE)
            content = re.sub(r'[A-Za-z]:[\\/][^"\r\n]*[\\/]bin[\\/]phpmyadmin[\\/]*', pma_path + "/", content, flags=re.IGNORECASE)
            return content

        for pattern in [os.path.join(alias_dir, "*.conf"), os.path.join(sites_dir, "*.conf")]:
            for file in glob.glob(pattern):
                if os.path.basename(file) in ["phpmyadmin.conf", "00-default.conf"]:
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



