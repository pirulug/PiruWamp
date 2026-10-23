---
name: vhost-manager
description: Use this skill when creating web projects, managing virtual hosts, updating DocumentRoot, or modifying Windows hosts in PiruWamp.
---

# Gestion de Sitios Virtuales y Rutas Web en PiruWamp

Esta habilidad explica como se configuran los dominios locales `.test`, la manipulacion de la carpeta DocumentRoot y la sincronizacion del archivo `hosts` de Windows.

## Flujo de Trabajo para Proyectos Web

1. Ubicacion de Proyectos:
   - Por defecto, los proyectos se alojan en el subdirectorio `www/` de la raiz de PiruWamp.
   - El usuario puede alterar esta ruta desde la pestaña "Ubicaciones" de la interfaz gráfica (`entry_www`).

2. Deteccion y Generacion de Dominios `.test`:
   - `VHostManager.sync_sites(hosts_manager)` escanea las carpetas de proyectos dentro del DocumentRoot.
   - Para cada carpeta (por ejemplo `mi-sitio`), se genera un bloque de VirtualHost en `etc/apache2/sites-enabled/mi-sitio.conf` con `ServerName mi-sitio.test`.

3. Actualizacion del Archivo hosts:
   - `HostsManager` lee `C:\Windows\System32\drivers\etc\hosts`.
   - Agrega o actualiza las entradas que asignan `127.0.0.1 mi-sitio.test` dentro de una seccion delimitada administrada por PiruWamp.
   - Nunca sobreescribe ni remueve entradas externas o del sistema operativo.

4. Recarga de Apache:
   - Para que un nuevo proyecto o cambio de DocumentRoot sea reconocido por Apache, se debe invocar `ApacheService.restart()` o ejecutar la recarga de configuracion.

## Resolucion de Problemas de Sitios Virtuales

1. Dominio no Resuelve en el Navegador:
   - Verificar si `C:\Windows\System32\drivers\etc\hosts` contiene la linea `127.0.0.1 <nombre-proyecto>.test`.
   - Probar resolucion local ejecutando en terminal:
     `ping <nombre-proyecto>.test`
   - Si no resuelve, vaciar la cache de DNS de Windows:
     `ipconfig /flushdns`

2. Error 403 Forbidden o Error 404:
   - Comprobar que la directiva `<Directory>` en `etc/apache2/sites-enabled/<nombre-proyecto>.conf` tenga `Require all granted` y apunte a la ruta correcta.
   - Validar que exista un archivo `index.php` o `index.html` en la carpeta del proyecto.
