# Memoria Tecnica de PiruWamp

Este archivo registra el estado tecnico del proyecto, decisiones de arquitectura, convenciones activas y tareas pendientes para mantener la continuidad del desarrollo.

## Informacion del Proyecto

PiruWamp es un entorno de desarrollo web WAMP (Windows, Apache, MariaDB, PHP) portatil y modular con interfaz grafica en Python/Tkinter.
El objetivo principal es permitir a los desarrolladores cambiar de version de PHP, Apache o MariaDB sin alterar variables globales del sistema y ejecutar sitios locales `.test` con resolucion automatica.

## Pila Tecnologica

- Lenguaje: Python 3.10+
- Interfaz Grafica: Tkinter con estilos nativos y ttk
- Servicios Web: Apache 2.4.x para Windows
- Motor de Base de Datos: MariaDB 10.x / 11.x / 12.x
- Lenguaje de Scripting Servidor: PHP 7.4 hasta 8.5+ (Thread Safe x64)
- Administrador de Base de Datos: phpMyAdmin (integrado directamente en bin/phpmyadmin/)
- Compilador a Ejecutable: PyInstaller
- Instalador del Sistema: Inno Setup (piruwamp.iss)

## Decisiones Clave de Diseno

1. Portabilidad sin Rutas Fijas:
   En cada inicio de la aplicacion (`MainWindow._post_init_setup`), se ejecutan rutinas que recalculan la ruta absoluta del proyecto y reescriben los archivos de configuracion (`httpd.conf`, `mod_php.conf`, `my.ini`, `php.ini`, sitios virtuales y alias). Esto permite mover la carpeta a otra unidad o directorio sin corromper los servicios.

2. Elevacion de Privilegios UAC:
   `piruwamp.py` detecta si la sesion cuenta con privilegios administrativos (`is_admin()`). Si no los tiene, se reejecuta a si mismo mediante `ShellExecuteW(runas)`. Esto es requerido para manipular servicios de red, enlazar puertos privilegiados y escribir en `C:\Windows\System32\drivers\etc\hosts`.

3. Resolucion Inteligente de Imagick:
   `PHPManager` y `setup_manager.py` detectan la version de PHP activa, consultan el catalogo PECL correspondiente e instalan `php_imagick.dll` junto con las dependencias `CORE_RL_*.dll` e `IM_MOD_RL_*.dll` requeridas por ImageMagick en Windows.

4. Flujo de Compilacion Aislado:
   El script `build.py` utiliza la carpeta temporal `.compile/` para evitar ensuciar la raiz con artefactos intermedios. El resultado final se empaqueta en `_build/`, excluyendo el codigo fuente Python y dejando exclusivamente los binarios y archivos de configuracion minimos para produccion.

5. Saneamiento Automatizado:
   `clean.py` recorre el arbol de directorios para purgar `__pycache__`, `.pyc`, `.pyo`, `.spec` y carpetas de cache temporales sin tocar `bin/` ni `data/`.

## Convenciones de Codigo

- Comillas dobles (`"`) prioritarias para cadenas de texto.
- Comillas simples (`'`) unicamente en casos excepcionales o anidamiento.
- Sin separadores `---` en documentos Markdown ni separadores visuales innecesarios.
- Sin emojis en ninguna capa del proyecto.
- Respuestas y comentarios en estilo profesional, directo y conciso.

## Pendientes y Tareas en Curso

1. Reinicio de Apache tras Crear Proyecto (Completado):
   Al crear un nuevo proyecto web desde la interfaz (`gui_create_project`), se sincronizan los sitios virtuales y, si Apache se encuentra en ejecucion, se reinicia de manera automatica para habilitar inmediatamente el nuevo dominio `.test`.

2. Diagnostico y Recuperacion de MariaDB:
   Implementar una herramienta o pestaña de reparacion para MariaDB cuando el servicio presente fallas de arranque (por ejemplo, limpieza de archivos pid residuales o correccion de permisos en `data/`).
