import os
import shutil

def clean_project():
    print("Iniciando limpieza de archivos temporales de Python...")

    removed_dirs = 0
    removed_files = 0

    # 1. Carpetas temporales en la raiz
    root_temp_dirs = [
        ".compile",
        "build",
        "dist",
        ".pytest_cache",
        ".mypy_cache"
    ]

    for d in root_temp_dirs:
        if os.path.exists(d) and os.path.isdir(d):
            try:
                shutil.rmtree(d)
                print(f"Directorio temporal raiz eliminado: {d}")
                removed_dirs += 1
            except Exception as e:
                print(f"Error eliminando {d}: {e}")

    # 2. Recorrer todo el directorio del proyecto para __pycache__ y archivos .pyc
    for root, dirs, files in os.walk(".", topdown=False):
        # Excluir control de versiones, entornos virtuales y carpetas de build/bin
        if ".git" in root or "venv" in root or ".venv" in root or "_build" in root or "bin" in root:
            continue


        # Eliminar carpetas __pycache__
        for d in dirs:
            if d == "__pycache__" or d.endswith(".egg-info"):
                dir_path = os.path.join(root, d)
                try:
                    shutil.rmtree(dir_path)
                    print(f"Directorio eliminado: {dir_path}")
                    removed_dirs += 1
                except Exception as e:
                    print(f"Error eliminando {dir_path}: {e}")

        # Eliminar archivos de compilacion de Python
        for f in files:
            if f.endswith((".pyc", ".pyo", ".pyd")) or (root == "." and f.endswith(".spec")):
                file_path = os.path.join(root, f)
                try:
                    os.remove(file_path)
                    print(f"Archivo eliminado: {file_path}")
                    removed_files += 1
                except Exception as e:
                    print(f"Error eliminando {file_path}: {e}")

    print(f"Limpieza completada: {removed_dirs} directorios y {removed_files} archivos eliminados.")

if __name__ == "__main__":
    clean_project()
