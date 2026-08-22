import os
from ..core.config import config
from ..core.logger import logger

class PHPManager:
    @staticmethod
    def update_php_ini():
        php_ini_path = config.php_ini
        if not os.path.exists(php_ini_path):
            php_dev = os.path.join(config.php_path, "php.ini-development")
            if os.path.exists(php_dev):
                import shutil
                try:
                    shutil.copy2(php_dev, php_ini_path)
                    logger.log("php.ini creado desde php.ini-development", "PHP")
                except Exception as e:
                    logger.log(f"Error creando php.ini: {e}", "PHP")
                    return
            else:
                return

        try:
            import re
            with open(php_ini_path, "r", encoding="utf-8") as f:
                content = f.read()

            new_ext_dir = os.path.join(config.php_path, "ext").replace("\\", "/")
            
            # 1. Actualizar extension_dir para Windows
            if re.search(r'^;?extension_dir\s*=\s*"ext"', content, flags=re.M):
                content = re.sub(r'^;?extension_dir\s*=\s*"ext"', f'extension_dir = "{new_ext_dir}"', content, flags=re.M)
            elif re.search(r'^;?extension_dir\s*=\s*"./"', content, flags=re.M):
                content = re.sub(r'^;?extension_dir\s*=\s*"./"', f'extension_dir = "{new_ext_dir}"', content, flags=re.M)
            elif not re.search(r'^extension_dir\s*=', content, flags=re.M):
                # Si no se encuentra el patrón típico, forzarlo bajo [PHP]
                content = content.replace("[PHP]", f"[PHP]\nextension_dir = \"{new_ext_dir}\"")

            # 2. Ajustes de Rendimiento y Memoria (12 nucleos / 16GB RAM)
            content = re.sub(r'^;?memory_limit\s*=.*', 'memory_limit = 512M', content, flags=re.M)
            content = re.sub(r'^;?max_execution_time\s*=.*', 'max_execution_time = 120', content, flags=re.M)
            content = re.sub(r'^;?upload_max_filesize\s*=.*', 'upload_max_filesize = 128M', content, flags=re.M)
            content = re.sub(r'^;?post_max_size\s*=.*', 'post_max_size = 128M', content, flags=re.M)
            content = re.sub(r'^;?realpath_cache_size\s*=.*', 'realpath_cache_size = 4096k', content, flags=re.M)
            content = re.sub(r'^;?realpath_cache_ttl\s*=.*', 'realpath_cache_ttl = 600', content, flags=re.M)
            content = re.sub(r'^;?default_socket_timeout\s*=.*', 'default_socket_timeout = 60', content, flags=re.M)

            # 3. Zend OPcache para acelerar compilacion de scripts en RAM
            if "zend_extension=opcache" not in content and "zend_extension = opcache" not in content:
                opcache_config = """
; --- PiruWamp OPcache High Performance ---
zend_extension=opcache
opcache.enable=1
opcache.enable_cli=0
opcache.memory_consumption=256
opcache.interned_strings_buffer=16
opcache.max_accelerated_files=20000
opcache.validate_timestamps=1
opcache.revalidate_freq=0
opcache.fast_shutdown=1
"""
                content += opcache_config
            else:
                # Asegurar activado
                content = re.sub(r'^;?opcache\.enable\s*=.*', 'opcache.enable=1', content, flags=re.M)
                content = re.sub(r'^;?opcache\.memory_consumption\s*=.*', 'opcache.memory_consumption=256', content, flags=re.M)
                content = re.sub(r'^;?opcache\.max_accelerated_files\s*=.*', 'opcache.max_accelerated_files=20000', content, flags=re.M)
                content = re.sub(r'^;?opcache\.revalidate_freq\s*=.*', 'opcache.revalidate_freq=0', content, flags=re.M)

            with open(php_ini_path, "w", encoding="utf-8") as f:
                f.write(content)
            logger.log("php.ini actualizado (extension_dir, OPcache y rendimiento)", "PHP")

            # 4. Asegurar extensiones requeridas por phpMyAdmin y entorno moderno (sodium, mysqli, etc.)
            from .setup_manager import SetupManager
            active_exts = config.php_extensions or SetupManager.DEFAULT_EXTENSIONS
            PHPManager.sync_extensions(active_exts)
        except Exception as e:
            logger.log(f"Error actualizando php.ini: {e}", "PHP")



    @staticmethod
    def toggle_extension(ext_name: str):
        php_ini_path = config.php_ini
        if not os.path.exists(php_ini_path):
            return False
        
        try:
            with open(php_ini_path, "r", encoding="utf-8") as f:
                lines = f.readlines()
            
            new_lines = []
            changed = False
            for line in lines:
                stripped = line.strip()
                if stripped.startswith("extension=") or stripped.startswith(";extension="):
                    if stripped.replace(";", "").replace("extension=", "") == ext_name:
                        if stripped.startswith(";"):
                            new_lines.append("extension=" + ext_name + "\n")
                            is_enabled = True
                        else:
                            new_lines.append(";extension=" + ext_name + "\n")
                            is_enabled = False
                        changed = True
                    else:
                        new_lines.append(line)
                else:
                    new_lines.append(line)
            
            if changed:
                with open(php_ini_path, "w", encoding="utf-8") as f:
                    f.writelines(new_lines)
                
                # Sincronizar con config.conf
                exts = config.php_extensions
                if is_enabled:
                    if ext_name not in exts:
                        exts.append(ext_name)
                else:
                    if ext_name in exts:
                        exts.remove(ext_name)
                config.set_php_extensions(exts)

                logger.log(f"Extensión '{ext_name}' actualizada", "PHP")
                return True
        except Exception as e:
            logger.log(f"Error actualizando extensión {ext_name}: {e}", "PHP")
        return False

    @staticmethod
    def get_extensions():
        php_ini_path = config.php_ini
        extensions = []
        if not os.path.exists(php_ini_path):
            return extensions
        
        try:
            with open(php_ini_path, "r", encoding="utf-8") as f:
                for line in f:
                    stripped = line.strip()
                    if stripped.startswith("extension=") or stripped.startswith(";extension="):
                        ext_name = stripped.replace(";", "").replace("extension=", "")
                        enabled = not stripped.startswith(";")
                        if (ext_name, enabled) not in extensions:
                            extensions.append((ext_name, enabled))
        except Exception as e:
            logger.log(f"Error leyendo extensiones: {e}", "PHP")
        return extensions

    @staticmethod
    def add_extension(ext_name: str):
        """Asegura que exista la línea extension=ext_name en php.ini"""
        php_ini_path = config.php_ini
        if not os.path.exists(php_ini_path):
            return False

        try:
            with open(php_ini_path, "r", encoding="utf-8") as f:
                content = f.read()

            if f"extension={ext_name}" in content or f";extension={ext_name}" in content:
                return True

            # Agregar al final de la sección de extensiones o al final del archivo
            with open(php_ini_path, "a", encoding="utf-8") as f:
                f.write(f"\nextension={ext_name}\n")
            return True
        except Exception as e:
            logger.log(f"Error agregando extensión {ext_name}: {e}", "PHP")
        return False

    @staticmethod
    def install_imagick(progress_callback=None):
        import urllib.request
        import zipfile
        import tempfile
        import shutil

        php_version = config.active_php_version
        if not php_version:
            logger.log("No hay versión de PHP activa para instalar Imagick", "PHP")
            return False

        # Extraer versión mayor.menor (ej: 8.2 de php-8.2.28)
        import re
        match = re.search(r'php-(\d+\.\d+)', php_version)
        if not match:
            logger.log(f"No se pudo determinar la versión de PHP desde '{php_version}'", "PHP")
            return False
        
        ver = match.group(1)
        
        # Mapeo de compiladores (basado en lo observado en php.conf)
        # php 7.3, 7.4 -> vc15
        # php 8.0, 8.1, 8.2, 8.3 -> vs16
        # php 8.4, 8.5 -> vs17
        compiler = "vs16"
        if ver.startswith("7."): compiler = "vc15"
        elif ver >= "8.4": compiler = "vs17"

        # URL Pattern: https://windows.php.net/downloads/pecl/releases/imagick/3.7.0/php_imagick-3.7.0-8.2-ts-vs16-x64.zip
        imagick_ver = "3.7.0"
        url = f"https://windows.php.net/downloads/pecl/releases/imagick/{imagick_ver}/php_imagick-{imagick_ver}-{ver}-ts-{compiler}-x64.zip"
        
        logger.log(f"Descargando Imagick para PHP {ver} ({compiler})...", "PHP")
        
        try:
            import ssl
            context = ssl._create_unverified_context()
            
            headers = {'User-Agent': 'Mozilla/5.0'}
            with tempfile.TemporaryDirectory() as tmpdir:
                zip_path = os.path.join(tmpdir, "imagick.zip")
                
                req = urllib.request.Request(url, headers=headers)
                with urllib.request.urlopen(req, context=context) as response:
                    total_size = int(response.headers.get('content-length', 0))
                    downloaded = 0
                    with open(zip_path, 'wb') as out_file:
                        while True:
                            chunk = response.read(8192)
                            if not chunk: break
                            out_file.write(chunk)
                            downloaded += len(chunk)
                            if progress_callback and total_size > 0:
                                progress_callback(int(downloaded * 100 / total_size))

                logger.log("Extrayendo Imagick...", "PHP")
                extract_path = os.path.join(tmpdir, "extracted")
                os.makedirs(extract_path, exist_ok=True)
                with zipfile.ZipFile(zip_path, 'r') as zip_ref:
                    zip_ref.extractall(extract_path)

                # 1. Mover php_imagick.dll a ext/
                ext_dir = os.path.join(config.php_path, "ext")
                os.makedirs(ext_dir, exist_ok=True)
                dll_src = os.path.join(extract_path, "php_imagick.dll")
                if os.path.exists(dll_src):
                    shutil.copy2(dll_src, os.path.join(ext_dir, "php_imagick.dll"))
                
                # 2. Mover CORE_RL_*.dll a la raíz de PHP
                for file in os.listdir(extract_path):
                    if file.startswith("CORE_RL_") and file.endswith(".dll"):
                        shutil.copy2(os.path.join(extract_path, file), os.path.join(config.php_path, file))
                
                # 3. Habilitar en php.ini
                PHPManager.add_extension("imagick")
                PHPManager.toggle_extension("imagick") # Asegurar que esté activo (sin ;)
                
                logger.log("Imagick instalado y habilitado correctamente", "PHP")
                return True

        except Exception as e:
            logger.log(f"Error instalando Imagick: {e}", "PHP")
            return False
    @staticmethod
    def sync_extensions(enabled_extensions):
        """Habilita en la versión actual las extensiones que estaban habilitadas en la anterior."""
        php_ini_path = config.php_ini
        if not os.path.exists(php_ini_path) or not enabled_extensions:
            return
        
        try:
            import re
            with open(php_ini_path, "r", encoding="utf-8") as f:
                lines = f.readlines()
            
            new_lines = []
            changed = False
            found_exts = set()
            for line in lines:

                stripped = line.strip()
                match = re.match(r'^(;)?extension\s*=\s*([^; \t\n\r]+)', stripped)
                if match:
                    is_commented = match.group(1) is not None
                    ext_name = match.group(2).replace("php_", "").replace(".dll", "")
                    raw_name = match.group(2)
                    
                    if (ext_name in enabled_extensions or raw_name in enabled_extensions) and is_commented:
                        new_line = re.sub(r'^;extension', 'extension', line)
                        new_lines.append(new_line)
                        found_exts.add(ext_name)
                        found_exts.add(raw_name)
                        changed = True
                    else:
                        if not is_commented:
                            found_exts.add(ext_name)
                            found_exts.add(raw_name)
                        new_lines.append(line)
                else:
                    new_lines.append(line)

            # Si alguna extension requerida no estaba en el archivo php.ini, agregarla al final
            for ext in enabled_extensions:
                if ext not in found_exts and f"php_{ext}.dll" not in found_exts:
                    new_lines.append(f"extension={ext}\n")
                    changed = True

            if changed:
                with open(php_ini_path, "w", encoding="utf-8") as f:
                    f.writelines(new_lines)
                logger.log(f"Sincronizadas {len(enabled_extensions)} extensiones (incluyendo sodium y mysqli)", "PHP")
        except Exception as e:
            logger.log(f"Error sincronizando extensiones: {e}", "PHP")

