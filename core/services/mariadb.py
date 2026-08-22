import os
from .base import BaseService
from ..core.config import config
from ..core.logger import logger

class MariaDBService(BaseService):
    def __init__(self):
        super().__init__("MariaDB", config.mariadb_exe)

    def start(self):
        self.update_config()
        my_ini = os.path.join(config.wamp_root, "etc", "mariadb", "my.ini")
        # El parámetro --defaults-file debe ser el primero en MariaDB/MySQL
        return super().start([f"--defaults-file={my_ini}"], cwd=config.mariadb_path)

    def update_config(self):
        my_ini_path = os.path.join(config.wamp_root, "etc", "mariadb", "my.ini")
        os.makedirs(os.path.dirname(my_ini_path), exist_ok=True)
        datadir = os.path.join(config.wamp_root, "data")
        tmpdir = os.path.join(config.wamp_root, "tmp")
        os.makedirs(datadir, exist_ok=True)
        os.makedirs(tmpdir, exist_ok=True)
        
        # 1. Asegurar limpieza de tc.log residual de caidas anteriores
        tc_log = os.path.join(datadir, "tc.log")
        if os.path.exists(tc_log):
            try:
                os.remove(tc_log)
                logger.log("Archivo tc.log residual eliminado para arranque limpio", self.name)
            except Exception:
                pass

        # 2. Inicializar base de datos si falta el directorio mysql/ del sistema
        mysql_system_dir = os.path.join(datadir, "mysql")
        if not os.path.exists(mysql_system_dir):
            logger.log("Inicializando base de datos...", self.name)
            try:
                import subprocess
                install_db_exe = os.path.join(config.mariadb_path, "bin", "mysql_install_db.exe")
                if os.path.exists(install_db_exe):
                    subprocess.run([
                        install_db_exe, 
                        f"--datadir={datadir.replace('\\', '/')}"
                    ], capture_output=True, creationflags=subprocess.CREATE_NO_WINDOW)
                    logger.log("Base de datos inicializada (mysql_install_db)", self.name)
                else:
                    subprocess.run([
                        self.exe_path, 
                        "--initialize-insecure", 
                        f"--datadir={datadir.replace('\\', '/')}"
                    ], capture_output=True, creationflags=subprocess.CREATE_NO_WINDOW)
                    logger.log("Base de datos inicializada sin contraseña de root", self.name)
            except Exception as e:
                logger.log(f"Error inicializando base de datos: {e}", self.name)

        # 3. Escribir my.ini completamente dinamico
        try:
            formatted_base = config.mariadb_path.replace("\\", "/")
            formatted_data = datadir.replace("\\", "/")
            formatted_tmp = tmpdir.replace("\\", "/")

            my_ini_content = f"""[mysqld]
# Puerto
port=3306

# Carpeta base y de datos dinamicas
basedir={formatted_base}
datadir={formatted_data}
tmpdir={formatted_tmp}

# Optimizacion de Red y Conexiones
skip-name-resolve
bind-address=0.0.0.0
max_connections=150
table_open_cache=2000

# Motor InnoDB para 12 nucleos y 16GB RAM
innodb_buffer_pool_size=1G
innodb_log_file_size=128M
innodb_log_buffer_size=32M
innodb_flush_log_at_trx_commit=2
innodb_read_io_threads=8
innodb_write_io_threads=8
innodb_file_per_table=1

[client]
port=3306
"""
            with open(my_ini_path, "w", encoding="utf-8") as f:
                f.write(my_ini_content)
            logger.log("my.ini actualizado con rutas dinamicas y optimizaciones", self.name)
        except Exception as e:
            logger.log(f"Error actualizando my.ini: {e}", self.name)

