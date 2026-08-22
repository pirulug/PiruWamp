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
        datadir = os.path.join(config.wamp_root, "data")
        
        # 1. Asegurar que el datadir esté inicializado
        tc_log = os.path.join(datadir, "tc.log")
        if os.path.exists(tc_log):
            try:
                os.remove(tc_log)
                logger.log("Archivo tc.log residual eliminado para arranque limpio", self.name)
            except Exception:
                pass

        if not os.path.exists(datadir) or not os.listdir(datadir):

            os.makedirs(datadir, exist_ok=True)
            logger.log("Inicializando base de datos...", self.name)
            try:
                import subprocess
                
                install_db_exe = os.path.join(config.mariadb_path, "bin", "mysql_install_db.exe")
                if os.path.exists(install_db_exe):
                    # MariaDB Windows initialization
                    subprocess.run([
                        install_db_exe, 
                        f"--datadir={datadir.replace('\\', '/')}"
                    ], capture_output=True, creationflags=subprocess.CREATE_NO_WINDOW)
                    logger.log("Base de datos inicializada (mysql_install_db)", self.name)
                else:
                    # MySQL fallback
                    subprocess.run([
                        self.exe_path, 
                        "--initialize-insecure", 
                        f"--datadir={datadir.replace('\\', '/')}"
                    ], capture_output=True, creationflags=subprocess.CREATE_NO_WINDOW)
                    logger.log("Base de datos inicializada sin contraseña de root", self.name)
            except Exception as e:
                logger.log(f"Error inicializando base de datos: {e}", self.name)

        if not os.path.exists(my_ini_path):
            return

        try:
            with open(my_ini_path, "r", encoding="utf-8") as f:
                lines = f.readlines()

            new_lines = []
            for line in lines:
                stripped = line.strip()
                if stripped.lower().startswith("basedir="):
                    new_base = config.mariadb_path.replace("\\", "/")
                    new_lines.append(f"basedir={new_base}\n")
                elif stripped.lower().startswith("datadir="):
                    new_data = datadir.replace("\\", "/")
                    new_lines.append(f"datadir={new_data}\n")
                elif stripped.lower().startswith("tmpdir="):
                    new_tmp = os.path.join(config.wamp_root, "tmp").replace("\\", "/")
                    new_lines.append(f"tmpdir={new_tmp}\n")
                else:
                    new_lines.append(line)

            content_str = "".join(new_lines)
            if "skip-name-resolve" not in content_str:
                perf_block = """
skip-name-resolve
bind-address=0.0.0.0
max_connections=150
table_open_cache=2000
innodb_buffer_pool_size=1G
innodb_buffer_pool_instances=4
innodb_log_file_size=128M
innodb_log_buffer_size=32M
innodb_flush_log_at_trx_commit=2
innodb_read_io_threads=8
innodb_write_io_threads=8
innodb_thread_concurrency=0
innodb_file_per_table=1
query_cache_size=64M
query_cache_type=1
"""
                content_str = content_str.replace("[mysqld]", f"[mysqld]\n{perf_block}")
                with open(my_ini_path, "w", encoding="utf-8") as f:
                    f.write(content_str)
            else:
                with open(my_ini_path, "w", encoding="utf-8") as f:
                    f.writelines(new_lines)
            logger.log("my.ini actualizado con optimizaciones de rendimiento", self.name)

        except Exception as e:
            logger.log(f"Error actualizando my.ini: {e}", self.name)
