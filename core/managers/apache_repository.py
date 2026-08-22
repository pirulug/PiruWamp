import os
import urllib.request
import zipfile
import tempfile
import shutil
from ..core.config import config
from ..core.logger import logger

class ApacheRepository:
    CONF_FILE = os.path.join(config.wamp_root, "etc", "apache.conf")

    @classmethod
    def load_available_versions(cls):
        versions = {}
        if not os.path.exists(cls.CONF_FILE):
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
        bin_path = config.bin_apache_path
        if os.path.exists(bin_path):
            for item in os.listdir(bin_path):
                if os.path.isdir(os.path.join(bin_path, item)):
                    if os.path.exists(os.path.join(bin_path, item, "bin", "httpd.exe")):
                        installed.append(item)
        return installed

    @classmethod
    def download_and_install(cls, version_name, url, progress_callback=None):
        logger.log(f"Iniciando descarga de {version_name}...", "Repo")
        target_dir = os.path.join(config.bin_apache_path, version_name)
        
        try:
            import ssl
            context = ssl._create_unverified_context()
            
            headers = {
                'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'Referer': 'https://www.apachelounge.com/download/',
                'Accept': '*/*'
            }

            with tempfile.TemporaryDirectory() as tmpdir:
                zip_path = os.path.join(tmpdir, f"{version_name}.zip")
                
                req = urllib.request.Request(url, headers=headers)
                with urllib.request.urlopen(req, context=context) as response:
                    # Verificar si nos devolvieron HTML en lugar de un ZIP
                    content_type = response.headers.get('Content-Type', '')
                    if 'text/html' in content_type:
                        logger.log(f"Error: El servidor bloqueó la descarga automática (devolvió HTML).", "Repo")
                        logger.log(f"Por favor, descarga el archivo manualmente desde {url}", "Repo")
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
                
                extract_path = os.path.join(tmpdir, "extracted")
                os.makedirs(extract_path, exist_ok=True)
                
                with zipfile.ZipFile(zip_path, 'r') as zip_ref:
                    zip_ref.extractall(extract_path)
                
                # Manejar subcarpeta Apache24 típica de ApacheLounge
                source_dir = extract_path
                potential_sub = os.path.join(extract_path, "Apache24")
                if os.path.exists(potential_sub):
                    source_dir = potential_sub
                
                # Mover archivos al destino final
                for item in os.listdir(source_dir):
                    s = os.path.join(source_dir, item)
                    d = os.path.join(target_dir, item)
                    if os.path.isdir(s):
                        if os.path.exists(d): shutil.rmtree(d)
                        shutil.copytree(s, d)
                    else:
                        shutil.copy2(s, d)
                
                logger.log(f"{version_name} instalado correctamente", "Repo")
                return True
        except Exception as e:
            logger.log(f"Error instalando {version_name}: {e}", "Repo")
            return False
