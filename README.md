# PiruWamp

PiruWamp es un entorno de desarrollo web local (WAMP: Windows, Apache, MariaDB, PHP) modular, con soporte multi-versión y una interfaz gráfica construida en Python (Tkinter). Está diseñado para ser ligero, automatizado y fácil de compilar y distribuir.

## 🚀 Características Principales

- **Gestión Multi-Versión:** Descarga, instala y cambia en tiempo real entre múltiples versiones de Apache, PHP, MariaDB y phpMyAdmin directamente desde la interfaz.
- **Auto-Configuración:** Sincronización automática de extensiones de PHP, inicialización de MariaDB sin contraseña (vía `mysql_install_db.exe`) y configuración de auto-login para phpMyAdmin.
- **Arquitectura Modular:** El motor Python está desacoplado de los binarios, usando un sistema de repositorios y servicios dinámicos.
- **Auto-Elevación:** Se solicita automáticamente permisos de Administrador para gestionar servicios de Windows y el archivo `hosts` si es necesario.

## 📂 Estructura del Proyecto

El proyecto está diseñado de forma autocontenida usando rutas relativas:

- `bin/` - Contiene las versiones descargadas de los binarios (Apache, MariaDB, PHP, phpMyAdmin).
- `data/` - Archivos de bases de datos de MariaDB/MySQL.
- `etc/` - Archivos de configuración (Ej. `config.conf`, alias de Apache, repositorios de descargas).
- `piruwamp/` - Código fuente en Python organizado en capas (`core`, `managers`, `services`, `ui`).
- `tmp/` - Archivos temporales generados en tiempo de ejecución.
- `www/` - Directorio raíz para los proyectos web locales.
- `main.py` - Punto de entrada principal para el desarrollo en código fuente.

## 🛠️ Cómo Compilar el Proyecto en un `.exe`

Para empaquetar todo el código Python en un solo ejecutable que no dependa de tener Python instalado en el equipo destino, usamos **PyInstaller**.

### Prerrequisitos
Asegúrate de tener Python instalado y ejecutar el siguiente comando para instalar PyInstaller:
```bash
pip install pyinstaller
```

### Pasos para compilar
1. Abre una terminal en la raíz de tu proyecto (donde está `wamp.spec`).
2. Ejecuta el comando de compilación limpio utilizando el archivo de especificaciones ya configurado:
   ```bash
   pyinstaller wamp.spec --clean
   ```
3. Al finalizar, verás una carpeta llamada `dist`. Dentro de ella estará el archivo compilado `wamp.exe`.
4. Copia ese `wamp.exe` y pégalo en la raíz del proyecto.
5. Renómbralo a `piruwamp.exe`.

> **Nota:** El archivo `wamp.spec` ya está configurado para ocultar la consola (`console=False`), agregar el icono (`icon.ico`), y usar `main.py` como punto de entrada.

## 📦 Cómo Crear el Instalador (Setup)

Para distribuir PiruWamp, el proyecto incluye un script de Inno Setup que empaqueta el `.exe` junto a todos los binarios y carpetas necesarias.

1. Descarga e instala [Inno Setup](https://jrsoftware.org/isinfo.php).
2. Asegúrate de haber completado la compilación del `.exe` (paso anterior) y tener el archivo `piruwamp.exe` en la raíz.
3. Abre el archivo `piruwamp.iss` (ubicado en la raíz del proyecto) usando Inno Setup Compiler.
4. Presiona el botón de **Compile** o **Run**.
5. Al finalizar, el instalador comprimido `piruwamp-setup.exe` se generará en la carpeta raíz, listo para ser instalado en cualquier PC con Windows.

## 💻 Desarrollo Local

Si deseas hacer pruebas o modificar el código sin compilar, puedes iniciar el proyecto ejecutando el archivo fuente:

```bash
python main.py
```
> Si no ejecutas la consola como administrador, el sistema pedirá elevación de permisos automáticamente mediante UAC de Windows.
