# Reglas y Guias para Agentes en PiruWamp

Este archivo define las directivas tecnicas, estandares de estilo y procedimientos operativos para cualquier agente de inteligencia artificial o desarrollador que trabaje en el repositorio PiruWamp.

## Descripcion del Proyecto

PiruWamp es un entorno de desarrollo web local (WAMP: Windows, Apache, MariaDB, PHP) modular, portatil y con soporte multi-version para Windows.
Cuenta con una interfaz grafica nativa construida en Python (Tkinter) y gestiona descargas, configuraciones dinamicas y servicios de desarrollo web.

## Reglas Globales de Estilo y Codigo

1. Comillas:
   Usar primero comillas dobles (`"`) para strings en Python y otros lenguajes.
   Usar comillas simples (`'`) unicamente cuando sea estrictamente necesario.
   Mantener consistencia en el uso de comillas en todo el proyecto.

2. Documentacion y Archivos Markdown:
   No utilizar `---` como separador horizontal en archivos Markdown.
   Evitar separadores innecesarios.
   Mantener documentacion limpia, estructurada con encabezados semanticos y sin elementos superfluos.

3. Politica de Emojis:
   No utilizar emojis en codigo fuente, nombres de variables, cadenas de texto, mensajes de log, comentarios, interfaces graficas ni archivos de documentacion Markdown.
   Solo utilizar emojis si el usuario lo solicita de forma explicita.

4. Claridad y Profesionalismo:
   Escribir codigo limpio, directo y mantenible.
   Evitar sobreingenieria y dependencias externas que comprometan la portabilidad del entorno.

## Arquitectura del Codigo

El proyecto esta organizado bajo rutas relativas para garantizar portabilidad:

- `piruwamp.py`: Punto de entrada principal. Se encarga de solicitar elevacion UAC si el proceso no cuenta con permisos de Administrador y lanza `MainWindow`.
- `build.py`: Automatizacion de PyInstaller con manifiesto UAC incrustado e icono, compilando a la carpeta de distribucion limpia `_build/`.
- `clean.py`: Script de saneamiento para remover carpetas temporales (`.compile`, `build`, `dist`, `__pycache__`, `.spec`).
- `core/core/`:
  - `config.py`: Gestor central de rutas dinámicas, version activa de Apache, MariaDB, PHP y phpMyAdmin.
  - `logger.py`: Emisor de eventos del sistema y registro en archivo de depuracion.
  - `utils.py`: Funciones de verificacion de privilegios de Administrador.
- `core/managers/`:
  - `apache_repository.py`, `mariadb_repository.py`, `php_repository.py`, `phpmyadmin_repository.py`: Descargadores e instaladores de binarios oficiales.
  - `php_manager.py`: Manipulacion de `php.ini`, extensiones y soporte automatico para Imagick (PECL).
  - `vhost.py`: Generacion de configuraciones virtuales `.test` para proyectos en `www/`.
  - `hosts.py`: Modificacion segura del archivo `hosts` del sistema Windows.
  - `setup_manager.py`: Validacion de dependencias iniciales y descarga en primer uso.
- `core/services/`: Control de procesos en segundo plano para Apache (`httpd.exe`) y MariaDB (`mysqld.exe`).
- `core/ui/`: Vistas e interfaz de usuario construidas en Tkinter (`MainWindow`, dialogos de administracion y temas).
- `etc/`: Archivos de configuracion del entorno y plantillas base.
- `data/`: Almacen persistente de bases de datos MariaDB.
- `bin/`: Carpeta contenedora de binarios de Apache, MariaDB, PHP y phpMyAdmin instalados.
- `www/`: DocumentRoot por defecto para los proyectos de usuario.

## Directivas para Modificaciones

1. Portabilidad de Rutas:
   Nunca quemar rutas absolutas fijas en archivos de configuracion (`httpd.conf`, `php.ini`, `my.ini`).
   Toda sincronizacion de rutas debe delegarse a `Config`, `ApacheService.update_configs()`, `MariaDBService.update_config()` y `PHPManager.update_php_ini()`.

2. Modificacion de Servicios:
   Apache y MariaDB operan como subprocesos o servicios de Windows. Al detenerlos o reiniciarlos, asegurar el cierre correcto de identificadores de proceso para evitar bloqueos de puertos (80 y 3306).

3. Control de Errores y Logs:
   Registrar incidencias relevantes a traves de `logger.log(mensaje, categoria)`.
   Si ocurre una falla critica, registrar la traza completa antes de propagar.

4. Archivo hosts de Windows:
   Cualquier adicion o remocion de dominios locales `.test` debe realizarse preservando el contenido previo del archivo `hosts` y requiriendo privilegios elevados.
