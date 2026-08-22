# PiruWamp

PiruWamp es un entorno de desarrollo web local (WAMP: Windows, Apache, MariaDB, PHP) modular, con soporte multi-versión y una interfaz gráfica construida en Python (Tkinter). Está diseñado para ser ligero, automatizado y fácil de compilar y distribuir.

## Características Principales

- **Gestión Multi-Versión:** Descarga, instala y cambia en tiempo real entre múltiples versiones de Apache, PHP, MariaDB y phpMyAdmin directamente desde la interfaz.
- **Auto-Configuración:** Sincronización automática de extensiones de PHP, inicialización de MariaDB sin contraseña (vía `mysql_install_db.exe`) y configuración de auto-login para phpMyAdmin.
- **Arquitectura Modular:** El motor Python está desacoplado de los binarios, usando un sistema de repositorios y servicios dinámicos.
- **Auto-Elevación:** Se solicita automáticamente permisos de Administrador para gestionar servicios de Windows y el archivo `hosts` si es necesario.

## Estructura del Proyecto

El proyecto está diseñado de forma autocontenida usando rutas relativas:

- `bin/` - Contiene las versiones descargadas de los binarios (Apache, MariaDB, PHP, phpMyAdmin).
- `core/` - Código fuente en Python organizado en capas (`core`, `managers`, `services`, `ui`, `img`).
- `data/` - Archivos de bases de datos de MariaDB/MySQL.
- `etc/` - Archivos de configuración (Ej. `config.conf`, alias de Apache, repositorios de descargas).
- `tmp/` - Archivos temporales generados en tiempo de ejecución.
- `www/` - Directorio raíz para los proyectos web locales.
- `piruwamp.py` - Punto de entrada principal para el desarrollo en código fuente.

## Cómo Compilar el Proyecto en un `.exe`

Para empaquetar todo el código Python en un solo ejecutable que no dependa de tener Python instalado en el equipo destino, usamos **PyInstaller** o el script automatizado:
```bash
python build.py
```

### Prerrequisitos
Asegúrate de tener Python instalado y ejecutar el siguiente comando para instalar PyInstaller:
```bash
pip install pyinstaller
```

### Pasos para compilar manualmente
1. Abre una terminal en la raíz de tu proyecto.
2. Ejecuta el script de compilación:
   ```bash
   python build.py
   ```
3. Al finalizar, el archivo `piruwamp.exe` se generará en la raíz del proyecto y los archivos de distribución en `.build/`.

## Cómo Crear el Instalador (Setup)

Para distribuir PiruWamp, el proyecto incluye un script de Inno Setup que empaqueta el `.exe` junto a todos los binarios y carpetas necesarias.

1. Descarga e instala [Inno Setup](https://jrsoftware.org/isinfo.php).
2. Asegúrate de haber completado la compilación del `.exe` (paso anterior) y tener el archivo `piruwamp.exe` en la raíz.
3. Abre el archivo `piruwamp.iss` (ubicado en la raíz del proyecto) usando Inno Setup Compiler.
4. Presiona el botón de **Compile** o **Run**.
5. Al finalizar, el instalador comprimido `piruwamp-setup.exe` se generará en la carpeta raíz, listo para ser instalado en cualquier PC con Windows.

## Desarrollo Local

Si deseas hacer pruebas o modificar el código sin compilar, puedes iniciar el proyecto ejecutando el archivo fuente:

```bash
python piruwamp.py
```
> Si no ejecutas la consola como administrador, el sistema pedirá elevación de permisos automáticamente mediante UAC de Windows.
