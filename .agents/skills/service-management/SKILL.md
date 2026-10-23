---
name: service-management
description: Use this skill when managing, debugging, starting, stopping, or troubleshooting Apache and MariaDB services or path synchronization in PiruWamp.
---

# Gestion y Diagnostico de Servicios en PiruWamp

Esta habilidad describe los procedimientos operativos para inicializar, configurar y resolver problemas en los servicios de Apache y MariaDB dentro de PiruWamp.

## Ejecucion con Elevacion de Privilegios

1. Punto de entrada:
   `python piruwamp.py`

2. Comportamiento de elevacion UAC:
   - La funcion `is_admin()` en `core/core/utils.py` comprueba privilegios administrativos mediante `ctypes.windll.shell32.IsUserAnAdmin()`.
   - Si no se cuenta con privilegios, el script ejecuta una llamada a `ShellExecuteW` con el verbo "runas" para solicitar aprobacion UAC y finaliza el proceso previo.

## Sincronizacion Dinamica de Rutas

Cada vez que PiruWamp inicia o cambia de unidad de disco, se ejecutan las siguientes rutinas de reescritura:

1. PHP:
   `PHPManager.update_php_ini()`
   Reescribe directivas como `extension_dir`, `upload_tmp_dir` y rutas de extensiones en `bin/php/<version>/php.ini`.

2. MariaDB:
   `MariaDBService.update_config()`
   Actualiza las rutas de `basedir`, `datadir` y `plugin_dir` en `etc/mariadb/my.ini`.

3. Apache:
   `ApacheService.update_configs()`
   Actualiza `ServerRoot`, `DocumentRoot`, rutas de modulos PHP en `etc/apache2/mod_php.conf` y alias en `etc/apache2/alias/`.

## Diagnostico y Resolucion de Problemas

1. Conflicto de Puertos:
   - Puerto 80 (Apache): Verificar si IIS, Skype u otro servidor web esta ocupando el puerto mediante:
     `netstat -ano | findstr :80`
   - Puerto 3306 (MariaDB): Verificar si otra instancia local de MySQL o MariaDB se encuentra activa:
     `netstat -ano | findstr :3306`

2. Fallas en el Arranque de MariaDB:
   - Comprobar la existencia de archivos `.pid` huerfanos en `data/` dejados por cierres abruptos y eliminarlos si el proceso ya no existe.
   - Revisar el archivo de registro de errores `data/*.err` para identificar tablas corruptas o parametros incompatibles en `my.ini`.

3. Validacion de Logs:
   - Los registros de eventos en tiempo real se visualizan en el panel de texto de la pestaña "Servicios y Control" en la interfaz grafica.
   - Si ocurre una excepcion fatal durante el arranque, consultar el archivo `crash.log` en la raiz del proyecto.
