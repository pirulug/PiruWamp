import os
import urllib.request
import zipfile
import tempfile
from ..core.config import config
from ..core.logger import logger

class PHPMYAdminRepository:
    CONF_FILE = os.path.join(config.wamp_root, "etc", "phpmyadmin.conf")

    @classmethod
    def load_available_versions(cls):
        versions = {}
        if not os.path.exists(cls.CONF_FILE):
            logger.log(f"No se encontró {cls.CONF_FILE}", "Repo")
            return versions

        with open(cls.CONF_FILE, "r", encoding="utf-8") as f:
            for line in f:
                line = line.strip()
                if not line or line.startswith("#"):
                    continue
                if "=" in line:
                    name, url = line.split("=", 1)
                    versions[name.strip()] = url.strip()
        return versions

    @classmethod
    def get_installed_versions(cls):
        installed = []
        bin_path = config.bin_phpmyadmin_path
        if os.path.exists(bin_path):
            for item in os.listdir(bin_path):
                path = os.path.join(bin_path, item)
                if os.path.isdir(path):
                    # Check if it has an index.php or a subfolder with one
                    found = False
                    if os.path.exists(os.path.join(path, "index.php")):
                        found = True
                    else:
                        for subitem in os.listdir(path):
                            if os.path.exists(os.path.join(path, subitem, "index.php")):
                                found = True
                                break
                    if found:
                        installed.append(item)
        return installed

    @classmethod
    def download_and_install(cls, version_name, url, progress_callback=None):
        logger.log(f"Iniciando descarga de {version_name}...", "Repo")
        target_dir = os.path.join(config.bin_phpmyadmin_path, version_name)
        
        try:
            import ssl
            context = ssl._create_unverified_context()
            
            headers = {
                'User-Agent': 'Mozilla/5.0',
                'Accept': '*/*'
            }

            with tempfile.TemporaryDirectory() as tmpdir:
                zip_path = os.path.join(tmpdir, f"{version_name}.zip")
                
                req = urllib.request.Request(url, headers=headers)
                with urllib.request.urlopen(req, context=context) as response:
                    total_size = int(response.headers.get('content-length', 0))
                    downloaded = 0
                    with open(zip_path, 'wb') as out_file:
                        while True:
                            chunk = response.read(8192)
                            if not chunk:
                                break
                            out_file.write(chunk)
                            downloaded += len(chunk)
                            if progress_callback and total_size > 0:
                                percent = min(100, int(downloaded * 100 / total_size))
                                progress_callback(percent)

                logger.log(f"Extrayendo {version_name}...", "Repo")
                os.makedirs(target_dir, exist_ok=True)
                with zipfile.ZipFile(zip_path, 'r') as zip_ref:
                    zip_ref.extractall(target_dir)
                
                # Configurar auto-login automáticamente
                self._configure_autologin(target_dir)

                logger.log(f"{version_name} instalado correctamente en {target_dir}", "Repo")
                return True
        except Exception as e:
            logger.log(f"Error instalando {version_name}: {e}", "Repo")
            return False

    @classmethod
    def _configure_autologin(cls, target_dir):
        """Busca el config.inc.php o lo crea desde el sample y activa auto-login."""
        # Buscar la carpeta real que contiene index.php
        pma_path = target_dir
        for item in os.listdir(target_dir):
            subpath = os.path.join(target_dir, item)
            if os.path.isdir(subpath) and os.path.exists(os.path.join(subpath, "index.php")):
                pma_path = subpath
                break
        
        config_file = os.path.join(pma_path, "config.inc.php")
        sample_file = os.path.join(pma_path, "config.sample.inc.php")
        
        if not os.path.exists(config_file) and os.path.exists(sample_file):
            import shutil
            shutil.copy2(sample_file, config_file)
            
        if os.path.exists(config_file):
            try:
                with open(config_file, "r", encoding="utf-8") as f:
                    content = f.read()
                
                # Cambiar host a 127.0.0.1
                content = re.sub(r"\['host'\]\s*=\s*'localhost'", "['host'] = '127.0.0.1'", content)
                # Cambiar auth_type a config
                content = re.sub(r"\['auth_type'\]\s*=\s*'cookie'", "['auth_type'] = 'config'", content)
                # Agregar user y password si no existen después de auth_type
                if "['user']" not in content:
                    content = re.sub(r"(\['auth_type'\]\s*=\s*'config';)", r"\1\n$cfg['Servers'][$i]['user'] = 'root';\n$cfg['Servers'][$i]['password'] = '';", content)
                # Cambiar AllowNoPassword a true
                content = re.sub(r"\['AllowNoPassword'\]\s*=\s*false", "['AllowNoPassword'] = true", content)
                
                with open(config_file, "w", encoding="utf-8") as f:
                    f.write(content)
            except Exception as e:
                logger.log(f"Error configurando auto-login en {config_file}: {e}", "Repo")
