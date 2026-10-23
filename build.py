import os
import shutil
import subprocess
import sys
import fnmatch

def main():
    print("Iniciando construccion y empaquetado de PiruWamp en _build...")
    
    # 1. Rutas de construccion
    compile_dir = ".compile"
    work_dir = os.path.join(compile_dir, "build")
    dist_dir = os.path.join(compile_dir, "dist")
    spec_dir = compile_dir
    build_dest = "_build"
    
    # Asegurar que existe la carpeta temporal de compilacion
    os.makedirs(compile_dir, exist_ok=True)
    
    # 2. Comando PyInstaller con rutas absolutas para manifest e icon
    manifest_path = os.path.abspath("app.manifest")
    icon_path = os.path.abspath(os.path.join("core", "img", "icon.ico"))
    if not os.path.exists(icon_path):
        icon_path = os.path.abspath("icon.ico")
    main_path = os.path.abspath("piruwamp.py")


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
        
    src_exe = os.path.join(dist_dir, "piruwamp.exe")
    
    if not os.path.exists(src_exe):
        print(f"Error: No se encontro el ejecutable generado en {src_exe}")
        sys.exit(1)

    # 3. Limpiar cualquier ejecutable residual en la raiz
    root_exe = os.path.abspath("piruwamp.exe")
    if os.path.exists(root_exe):
        try:
            os.remove(root_exe)
        except Exception:
            pass

    # 4. Limpiar y estructurar la carpeta _build
    os.makedirs(build_dest, exist_ok=True)
    print(f"Limpiando y estructurando distribucion limpia en {build_dest}...")
    for item in os.listdir(build_dest):
        item_path = os.path.join(build_dest, item)
        try:
            if os.path.isdir(item_path):
                shutil.rmtree(item_path)
            else:
                os.remove(item_path)
        except Exception as e:
            print(f"Nota al limpiar {item}: {e}")


    try:
        def ignore_patterns(path, names):
            ignored = set()
            
            # Patrones estandar a ignorar
            patterns = [
                "*.py", "*.pyc", "__pycache__", ".git", ".gitignore", 
                "build.py", "clean.py", "wamp.spec", "main.spec", "piruwamp.spec",
                ".compile", ".build", "_build", "build", "dist",
                "*.iss", "wamp.exe", "main.exe", "piruwamp", "core", "app",
                "crash.log", "*.log", "_doc", ".agents", ".agentes", "scratch",
                "*.md", "Corregir.txt", "requirements.txt", "requite.txt", "app.manifest"
            ]
            for pattern in patterns:
                for name in names:
                    if fnmatch.fnmatch(name.lower(), pattern.lower()):
                        ignored.add(name)

            abs_src = os.path.abspath(".")
            abs_path = os.path.abspath(path)
            rel_path = os.path.relpath(abs_path, abs_src)
            parts = rel_path.replace("\\", "/").split("/")
            
            # En bin/, no empaquetar versiones descargadas pesadas
            if len(parts) == 2 and parts[0] == "bin" and parts[1] in ["apache", "mariadb", "php", "phpmyadmin"]:
                for name in names:
                    full_name_path = os.path.join(path, name)
                    if os.path.isdir(full_name_path):
                        ignored.add(name)


            # En data/, no empaquetar bases de datos locales
            if parts[0] == "data":
                for name in names:
                    if name != ".gitignore":
                        ignored.add(name)

            return ignored

        # Copiar estructura base
        shutil.copytree(".", build_dest, ignore=ignore_patterns, dirs_exist_ok=True)

        # Copiar el ejecutable piruwamp.exe dentro de _build
        shutil.copy2(src_exe, os.path.join(build_dest, "piruwamp.exe"))

        # Asegurar copia del icono unicamente en la raiz de _build
        if os.path.exists(icon_path):
            shutil.copy2(icon_path, os.path.join(build_dest, "icon.ico"))



        # Asegurar carpetas y archivos .gitignore requeridos
        required_dirs = [
            os.path.join(build_dest, "bin", "apache"),
            os.path.join(build_dest, "bin", "mariadb"),
            os.path.join(build_dest, "bin", "php"),
            os.path.join(build_dest, "bin", "phpmyadmin"),
            os.path.join(build_dest, "data"),
            os.path.join(build_dest, "tmp"),
            os.path.join(build_dest, "www")
        ]

        for req_dir in required_dirs:
            os.makedirs(req_dir, exist_ok=True)
            gi_file = os.path.join(req_dir, ".gitignore")
            if not os.path.exists(gi_file):
                with open(gi_file, "w", encoding="utf-8") as f:
                    f.write("*\n!.gitignore\n")

        # Limpiar rutas absolutas fijas en _build/etc/config.conf para portabilidad
        build_cfg = os.path.join(build_dest, "etc", "config.conf")
        if os.path.exists(build_cfg):
            try:
                with open(build_cfg, "r", encoding="utf-8") as f:
                    lines = f.readlines()
                new_lines = [l for l in lines if not l.strip().startswith("wamp_root") and not l.strip().startswith("www_path")]
                with open(build_cfg, "w", encoding="utf-8") as f:
                    f.writelines(new_lines)
            except Exception:
                pass


        print("Construccion completada con exito en la carpeta _build!")

    except Exception as e:
        print(f"Error al estructurar la carpeta {build_dest}: {e}")
        sys.exit(1)

if __name__ == "__main__":
    main()
