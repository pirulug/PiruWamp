---
name: php-imagick-setup
description: Use this skill when installing, configuring, switching PHP versions, activating extensions, or resolving PECL Imagick dependencies in PiruWamp.
---

# Configuracion de PHP y Extensiones Imagick en PiruWamp

Esta habilidad cubre el procedimiento para administrar versiones de PHP, habilitar o deshabilitar extensiones en `php.ini` e integrar la extension Imagick con sus librerias dinamicas dependientes.

## Gestion de Versiones de PHP

1. Directorio de Binarios:
   - Las versiones de PHP residen en subdirectorios bajo `bin/php/` (por ejemplo, `bin/php/php-8.2.14-Win32-vs16-x64/`).

2. Catalogo Oficial:
   - Las versiones disponibles para descarga automatica se encuentran registradas en `etc/php.conf`.
   - `PHPRepository.fetch_available_versions()` descarga y descomprime las versiones seleccionadas.

3. Sincronizacion de Version Activa:
   - El parametro `php_version` en `etc/config.conf` define la version activa.
   - `ApacheService.update_apache_php_module()` vincula el modulo correspondiente (`php7apache2_4.dll` o `php8apache2_4.dll`) en `etc/apache2/mod_php.conf`.

## Resolucion y Activacion de Imagick

1. Deteccion de Version PECL:
   - PHP 7.4: Requiere Imagick PECL 3.7.0.
   - PHP 8.0 - 8.3: Compatible con Imagick PECL 3.8.0.
   - PHP 8.4 - 8.5+: Requiere Imagick PECL 3.8.1 o compilacion compatible.

2. Copia de Librerias Dependientes:
   - `PHPManager.install_imagick()` extrae `php_imagick.dll` en la carpeta `ext/` del PHP activo.
   - Copia todos los archivos DLL satelite con prefijo `CORE_RL_*.dll` e `IM_MOD_RL_*.dll` directamente en la raiz de la carpeta del PHP activo para que esten en el PATH de ejecucion.

3. Comprobacion de Estado:
   - Acceder a `http://localhost/` y revisar el bloque "Estado del Servidor" en el panel `www/index.php`.
   - Tambien es posible validar desde linea de comandos ejecutando:
     `bin\php\<version_activa>\php.exe -m | findstr -i imagick`
