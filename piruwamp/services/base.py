import subprocess
import threading
import os
from ..core.logger import logger

class BaseService:
    def __init__(self, name, exe_path):
        self.name = name
        self.exe_path = exe_path
        self.process = None

    def is_running(self):
        return self.process is not None and self.process.poll() is None

    def start(self, args=None, cwd=None):
        if self.is_running():
            return True

        if not os.path.exists(self.exe_path):
            logger.log(f"No se encontró el ejecutable en {self.exe_path}", self.name)
            return False

        try:
            cmd = [self.exe_path]
            if args:
                cmd.extend(args)

            self.process = subprocess.Popen(
                cmd,
                stdout=subprocess.PIPE,
                stderr=subprocess.STDOUT,
                text=True,
                creationflags=subprocess.CREATE_NO_WINDOW,
                cwd=cwd
            )
            
            threading.Thread(target=self._log_output, daemon=True).start()
            logger.log("Iniciado", self.name)
            return True
        except Exception as e:
            logger.log(f"Error al iniciar: {e}", self.name)
            return False

    def stop(self):
        if self.is_running():
            try:
                # Usar taskkill para asegurar que se detengan todos los subprocesos
                subprocess.run(["taskkill", "/F", "/T", "/PID", str(self.process.pid)], 
                               capture_output=True, creationflags=subprocess.CREATE_NO_WINDOW)
            except:
                self.process.terminate()
            
            self.process = None
            logger.log("Detenido", self.name)
        return True

    def _log_output(self):
        for line in iter(self.process.stdout.readline, ''):
            if not line:
                break
            logger.log(line.strip(), self.name)
        self.process.stdout.close()
