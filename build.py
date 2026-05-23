import os
import shutil
import subprocess
import sys

def main():
    print("Iniciando compilacion de PiruWamp...")
    
    # 1. Definir rutas en la carpeta .compile
    compile_dir = ".compile"
    work_dir = os.path.join(compile_dir, "build")
    dist_dir = os.path.join(compile_dir, "dist")
    spec_dir = compile_dir
    
    # Asegurar que existe la carpeta de destino de compilacion
    os.makedirs(compile_dir, exist_ok=True)
    
    # 2. Comando PyInstaller con rutas absolutas para manifest e icon
    manifest_path = os.path.abspath("app.manifest")
    icon_path = os.path.abspath("icon.ico")
    main_path = os.path.abspath("main.py")

    cmd = [
        sys.executable, "-m", "PyInstaller",
        "--onefile",
        "--noconsole",
        "--manifest", manifest_path,
        f"--icon={icon_path}",
        "--workpath", work_dir,
        "--distpath", dist_dir,
        "--specpath", spec_dir,
        "--name", "piruwamp",
        "--clean",
        main_path
    ]
    
    print(f"Ejecutando PyInstaller: {' '.join(cmd)}")
    result = subprocess.run(cmd)
    
    if result.returncode != 0:
        print("Error: La compilacion con PyInstaller fallo.")
        sys.exit(result.returncode)
        
    # 3. Copiar el ejecutable piruwamp.exe a la raiz
    src_exe = os.path.join(dist_dir, "piruwamp.exe")
    dest_exe = "piruwamp.exe"
    
    if os.path.exists(src_exe):
        print(f"Copiando {src_exe} a la raiz ({dest_exe})...")
        try:
            shutil.copy2(src_exe, dest_exe)
        except Exception as e:
            print(f"Error copiando el archivo exe a la raiz: {e}")
            sys.exit(1)
            
        # 4. Crear/Limpiar la carpeta .build y copiar archivos necesarios
        build_dest = ".build"
        if os.path.exists(build_dest):
            print(f"Limpiando carpeta anterior {build_dest}...")
            try:
                shutil.rmtree(build_dest)
            except Exception as e:
                print(f"Advertencia al eliminar {build_dest}: {e}")
                
        print(f"Copiando archivos necesarios a la carpeta {build_dest}...")
        try:
            # Excluimos código fuente, especificaciones de PyInstaller y carpetas de desarrollo
            # Y en bin, solo copiamos las carpetas de versión que empiezan con '_'
            import fnmatch
            
            def ignore_patterns(path, names):
                ignored = set()
                
                # Patrones estándar a ignorar en cualquier sitio
                patterns = [
                    "*.py", "*.pyc", "__pycache__", ".git", ".gitignore", 
                    "build.py", "wamp.spec", "main.spec", ".compile", ".build",
                    "build", "dist", "*.iss", "wamp.exe", "main.exe", "piruwamp"
                ]
                for pattern in patterns:
                    ignored.update(fnmatch.filter(names, pattern))
                
                # Identificar si estamos dentro de bin/apache, bin/mariadb, bin/php, bin/phpmyadmin
                abs_src = os.path.abspath(".")
                abs_path = os.path.abspath(path)
                rel_path = os.path.relpath(abs_path, abs_src)
                parts = rel_path.replace("\\", "/").split("/")
                
                if len(parts) == 2 and parts[0] == "bin" and parts[1] in ["apache", "mariadb", "php", "phpmyadmin"]:
                    for name in names:
                        full_name_path = os.path.join(path, name)
                        if os.path.isdir(full_name_path):
                            if not name.startswith("_"):
                                ignored.add(name)
                                
                return ignored

            shutil.copytree(".", build_dest, ignore=ignore_patterns, dirs_exist_ok=True)
            print("¡Compilacion, copiado a la raiz y generacion de la carpeta .build completados con exito!")
        except Exception as e:
            print(f"Error al estructurar la carpeta {build_dest}: {e}")
            sys.exit(1)
    else:
        print(f"Error: No se encontro el ejecutable generado en {src_exe}")
        sys.exit(1)

if __name__ == "__main__":
    main()
