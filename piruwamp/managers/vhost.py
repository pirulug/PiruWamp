import os
from ..core.config import config
from ..core.logger import logger

class VHostManager:
    @staticmethod
    def generate_vhost_config(project_name):
        """Genera contenido para un VirtualHost de Apache"""
        project_dir = os.path.join(config.www_path, project_name).replace("\\", "/")
        return f"""
<VirtualHost *:80>
    DocumentRoot "{project_dir}"
    ServerName {project_name}.test
    ServerAlias *.{project_name}.test
    <Directory "{project_dir}">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
""".strip()

    @staticmethod
    def get_sites_enabled_dir():
        sites_dir = os.path.join(config.wamp_root, "etc", "apache2", "sites-enabled")
        os.makedirs(sites_dir, exist_ok=True)
        return sites_dir

    @classmethod
    def sync_sites(cls, hosts_manager):
        """Sincroniza vhosts con las carpetas en www/"""
        sites_dir = cls.get_sites_enabled_dir()
        www_path = config.www_path
        
        if not os.path.exists(www_path):
            return

        www_folders = {f for f in os.listdir(www_path) if os.path.isdir(os.path.join(www_path, f))}

        # Crear o actualizar vhosts
        for folder in www_folders:
            conf_file = os.path.join(sites_dir, f"auto.{folder}.test.conf")
            if not os.path.exists(conf_file):
                with open(conf_file, "w", encoding="utf-8") as f:
                    f.write(cls.generate_vhost_config(folder))
                logger.log(f"Creado vhost para {folder}", "Sites")
            
            hosts_manager.add_to_hosts(folder)

        # Limpiar vhosts antiguos
        for file in os.listdir(sites_dir):
            if file.startswith("auto.") and file.endswith(".test.conf"):
                folder = file.replace("auto.", "").replace(".test.conf", "")
                if folder not in www_folders:
                    os.remove(os.path.join(sites_dir, file))
                    logger.log(f"Eliminado vhost {file}", "Sites")
                    hosts_manager.remove_from_hosts(folder)
