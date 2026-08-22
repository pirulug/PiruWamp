# PiruWamp

PiruWamp es un entorno de desarrollo web local (WAMP: Windows, Apache, MariaDB, PHP) modular, portátil y con soporte multi-versión, dotado de una interfaz gráfica nativa construida en Python (Tkinter). Está diseñado para ser liviano, altamente personalizable, automatizado y fácil de compilar y distribuir en Windows.

## Características Principales

- **Gestión Multi-Versión:** Descarga, instala y alterna en tiempo real entre múltiples versiones de Apache, PHP, MariaDB y phpMyAdmin directamente desde la interfaz gráfica.
- **Portabilidad Total:** Detección dinámica de la carpeta raíz y sincronización automática de rutas absolutas (`httpd.conf`, `mod_php.conf`, `my.ini`, `php.ini`, alias y sitios virtuales) en cada inicio o cambio de disco.
- **Pestaña de Ubicaciones y DocumentRoot Personalizado:** Permite cambiar la carpeta de proyectos web `www` a cualquier directorio del disco mediante un selector visual o restaurar la ruta por defecto con un solo clic.
- **Soporte Completo de Imagick:** Instalador inteligente con resolución de versiones en PECL (3.8.1 / 3.8.0 / 3.7.0) compatible con PHP 7.4, 8.0, 8.1, 8.2, 8.3, 8.4 y 8.5+, con copia automática de librerías dependientes (`CORE_RL_*.dll` e `IM_MOD_RL_*.dll`).
- **phpMyAdmin Directo en `bin/`:** phpMyAdmin se descarga, configura con auto-login (`127.0.0.1:3306`, usuario `root`) y se ejecuta directamente desde `bin/phpmyadmin/` sin copias redundantes.
- **Sitios Virtuales Automáticos:** Crea automáticamente dominios locales `.test` y los registra en el archivo `hosts` de Windows para cada subcarpeta dentro de `www/`.
- **Auto-Elevación de Privilegios:** Solicita automáticamente permisos de Administrador mediante UAC de Windows al requerir control de servicios o modificación de `hosts`.

## Estructura del Proyecto

El proyecto está diseñado de forma autocontenida usando rutas relativas:

- `bin/` - Contiene las versiones instaladas de los binarios:
  - `bin/apache/` - Servidores Apache HTTP.
  - `bin/mariadb/` - Servidores de base de datos MariaDB.
  - `bin/php/` - Entornos de ejecución PHP.
  - `bin/phpmyadmin/` - Versiones de phpMyAdmin.
- `core/` - Código fuente en Python organizado por capas (`core`, `managers`, `services`, `ui`, `img`).
- `data/` - Almacén persistente de bases de datos MariaDB/MySQL.
- `etc/` - Archivos de configuración:
  - `etc/config.conf` - Configuración general de PiruWamp.
  - `etc/apache.conf`, `etc/php.conf`, `etc/mariadb.conf`, `etc/phpmyadmin.conf` - Catálogos de versiones oficiales disponibles para descarga.
  - `etc/apache2/` - Configuraciones de Apache, alias y `sites-enabled`.
  - `etc/mariadb/` - Configuración `my.ini` de MariaDB.
- `tmp/` - Archivos temporales generados en tiempo de ejecución.
- `www/` - Directorio raíz para proyectos web locales con un panel de bienvenida `index.php` que verifica el estado del servidor y de Imagick.
- `piruwamp.py` - Punto de entrada principal para desarrollo y ejecución directa.
- `build.py` - Script automatizado de compilación y empaquetado.
- `clean.py` - Script de limpieza de archivos temporales de Python.

## Compilación a Ejecutable (`.exe`)

Para compilar el proyecto en un ejecutable independiente que no requiera Python en la máquina de destino, se utiliza PyInstaller mediante el script automatizado:

```bash
python build.py
```

### Prerrequisitos
Tener instalado Python 3.10+ y la librería `pyinstaller`:
```bash
pip install pyinstaller
```

### Proceso de Compilación
1. Abre una terminal en la raíz del proyecto.
2. Ejecuta:
   ```bash
   python build.py
   ```
3. El script compilará `piruwamp.exe` con su manifiesto de privilegios e icono incrustado, y estructurará la distribución limpia y portátil en la carpeta `_build/`.

## Creación del Instalador (Setup) con Inno Setup

Para generar el instalador distribuible de PiruWamp:

1. Descarga e instala [Inno Setup](https://jrsoftware.org/isinfo.php).
2. Compila primero el ejecutable ejecutando `python build.py`.
3. Abre el archivo `piruwamp.iss` con Inno Setup Compiler.
4. Haz clic en **Compile** (o presiona `Ctrl + F9`).
5. El instalador `piruwamp-setup.exe` se creará en la carpeta raíz del proyecto, listo para ser distribuido.

## Desarrollo y Ejecución Local

Para ejecutar y probar PiruWamp directamente desde el código fuente:

```bash
python piruwamp.py
```

> Nota: Si la terminal no se ejecuta como Administrador, PiruWamp solicitará automáticamente elevación de permisos mediante UAC de Windows.
