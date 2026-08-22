import os
import urllib.request
import zipfile
import tempfile
from ..core.config import config
from ..core.logger import logger

class PHPRepository:
    CONF_FILE = os.path.join(config.wamp_root, "etc", "php.conf")

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
        bin_path = config.bin_php_path
        if os.path.exists(bin_path):
            for item in os.listdir(bin_path):
                if os.path.isdir(os.path.join(bin_path, item)):
                    if os.path.exists(os.path.join(bin_path, item, "php.exe")):
                        installed.append(item)
        return installed

    @classmethod
    def download_and_install(cls, version_name, url, progress_callback=None):
        logger.log(f"Iniciando descarga de {version_name}...", "Repo")
        target_dir = os.path.join(config.bin_php_path, version_name)
        
        try:
            import ssl
            context = ssl._create_unverified_context()
            
            headers = {
                'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'Accept': '*/*'
            }

            with tempfile.TemporaryDirectory() as tmpdir:
                zip_path = os.path.join(tmpdir, f"{version_name}.zip")
                
                req = urllib.request.Request(url, headers=headers)
                with urllib.request.urlopen(req, context=context) as response:
                    content_type = response.headers.get('Content-Type', '')
                    if 'text/html' in content_type:
                        logger.log(f"Error: El servidor bloqueó la descarga automática (devolvió HTML).", "Repo")
                        return False

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
                
                logger.log(f"{version_name} instalado correctamente en {target_dir}", "Repo")
                return True
        except Exception as e:
            logger.log(f"Error instalando {version_name}: {e}", "Repo")
            return False
