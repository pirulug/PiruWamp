# Compilación de PiruWamp

Para compilar el proyecto manteniendo la raíz limpia de carpetas temporales (`build`, `dist` y archivos `.spec`), hemos creado un script de compilación automática.

### Requisitos previos:
Asegúrate de tener PyInstaller instalado:
```powershell
pip install pyinstaller
```

### Ejecutar compilación:
Ejecuta el script [build.py](file:///c:/Pirulug/PiruWamp/build.py) desde la raíz del proyecto:
```powershell
python build.py
```

### ¿Qué hace este script?
1. Configura a PyInstaller para compilar todo el proyecto usando el punto de entrada [main.py](file:///c:/Pirulug/PiruWamp/main.py).
2. Dirige todos los archivos y carpetas temporales de compilación a la carpeta oculta `.compile/`.
3. Copia el ejecutable generado (`piruwamp.exe`) de vuelta a la raíz del proyecto.
4. Genera una carpeta limpia `.build/` que contiene el ejecutable `piruwamp.exe` y todas las carpetas y archivos necesarios para la ejecución del servidor (como `www`, `etc`, `bin`, `data`, `icon.ico`), excluyendo todos los archivos de desarrollo y código fuente Python. Esta carpeta `.build/` es la que utiliza el script de instalación [piruwamp.iss](file:///c:/Pirulug/PiruWamp/piruwamp.iss) de Inno Setup para empaquetar de forma limpia y directa la aplicación.