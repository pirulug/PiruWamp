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

            # 3.1 ServerName
            if not re.search(r'^ServerName .*', content, flags=re.M):
                content += "\nServerName localhost:80"
            else:
                content = re.sub(r'^ServerName .*', 'ServerName localhost:80', content, flags=re.M)

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
        
        # Intentar encontrar el DLL de PHP (php8apache2_4.dll, php7apache2_4.dll, etc.)
        php_dll = None
        if os.path.exists(php_path):
            for file in os.listdir(php_path):
                if file.startswith("php") and "apache2_4.dll" in file:
                    php_dll = os.path.join(php_path, file)
                    break
        
        if not php_dll:
            # Fallback o error
            logger.log(f"No se encontró el DLL de Apache para PHP en {php_path}", self.name)
            return

        if not os.path.exists(mod_php_conf):
            return

        try:
            with open(mod_php_conf, "r", encoding="utf-8") as f:
                lines = f.readlines()

            new_lines = []
            for line in lines:
                if line.strip().startswith("LoadModule php_module"):
                    new_lines.append(f'LoadModule php_module "{php_dll}"\n')
                elif line.strip().startswith("PHPIniDir"):
                    new_lines.append(f'PHPIniDir "{php_path}"\n')
                else:
                    new_lines.append(line)

            with open(mod_php_conf, "w", encoding="utf-8") as f:
                f.writelines(new_lines)
            logger.log(f"mod_php.conf actualizado con PHP en {os.path.basename(php_path)}", self.name)
        except Exception as e:
            logger.log(f"Error actualizando mod_php.conf: {e}", self.name)

    def _update_extra_confs(self):
        alias_dir = os.path.join(config.wamp_root, "etc", "apache2", "alias")
        sites_dir = os.path.join(config.wamp_root, "etc", "apache2", "sites-enabled")
        www_dir = config.www_path.replace("\\", "/")

        def normalize_paths(content: str) -> str:
            pma_path = config.phpmyadmin_path.replace("\\", "/").rstrip("/")
            current_www_dir = www_dir.rstrip("/")
            
            # Actualizar Alias de phpMyAdmin
            content = re.sub(
                r'Alias\s+/phpmyadmin\s+"[^"]*"',
                f'Alias /phpmyadmin "{pma_path}/"',
                content, flags=re.IGNORECASE
            )
            # Actualizar Directory de phpMyAdmin
            content = re.sub(
                r'<Directory\s+"[^"]*phpmyadmin[^"]*">',
                f'<Directory "{pma_path}/">',
                content, flags=re.IGNORECASE
            )
            # Actualizar rutas de www
            content = re.sub(
                r'C:[\\/][^"]*[\\/]www[\\/]*',
                current_www_dir + "/", content, flags=re.IGNORECASE
            )
            return content

        for pattern in [os.path.join(alias_dir, "*.conf"), os.path.join(sites_dir, "*.conf")]:
            for file in glob.glob(pattern):
                try:
                    with open(file, "r", encoding="utf-8") as f:
                        content = f.read()
                    new_content = normalize_paths(content)
                    if content != new_content:
                        with open(file, "w", encoding="utf-8") as f:
                            f.write(new_content)
                        logger.log(f"Configuración actualizada: {os.path.basename(file)}", self.name)
                except Exception as e:
                    logger.log(f"Error actualizando {file}: {e}", self.name)
