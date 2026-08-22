import ctypes
import sys
import os

def is_admin():
    try:
        return ctypes.windll.shell32.IsUserAnAdmin()
    except:
        return False

def get_root_path():
    if getattr(sys, 'frozen', False):
        # Si corre como EXE (PyInstaller)
        return os.path.dirname(sys.executable)
    else:
        # Si corre como script .py normal (asumiendo que main.py está en la raíz)
        # Como este archivo está en piruwamp/core/utils.py, la raíz es dos niveles arriba
        # Pero mejor pasamos el root desde el main o lo detectamos de forma fiable.
        # Por ahora, usemos el directorio actual si no se encuentra otra cosa.
        return os.getcwd()
