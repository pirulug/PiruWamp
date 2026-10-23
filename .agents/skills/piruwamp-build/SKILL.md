---
name: piruwamp-build
description: Use this skill when the user asks to build, compile, package, clean, or distribute PiruWamp into standalone executables or installers.
---

# Procedimiento de Compilacion y Empaquetado de PiruWamp

Esta habilidad detalla el flujo de trabajo estandar para compilar PiruWamp a un ejecutable independiente de Windows y generar el instalador de distribucion.

## Prerrequisitos

1. Python 3.10 o superior instalado en el entorno de desarrollo.
2. Biblioteca PyInstaller instalada en el interprete de Python activo:
   `pip install pyinstaller`
3. Inno Setup Compiler instalado en el sistema (opcional, para compilar el archivo `.iss`).

## Pasos de Compilacion del Ejecutable

1. Ejecutar el script automatizado de compilacion:
   `python build.py`

2. Comportamiento del script de compilacion:
   - Utiliza la carpeta `.compile/` como espacio de trabajo temporal para `build/`, `dist/` y el archivo de especificaciones `.spec`.
   - Incrusta el archivo de manifiesto `app.manifest` para asegurar la solicitud de privilegios de Administrador (UAC).
   - Asigna el icono oficial ubicado en `core/img/icon.ico`.
   - Limpia residuos en la raiz y copia la distribucion limpia con binarios, configuraciones y assets a la carpeta `_build/`.

3. Verificacion de la compilacion:
   - Validar que exista el ejecutable en `_build/piruwamp.exe`.
   - Comprobar que en `_build/` se hayan incluido las carpetas `bin/`, `data/`, `etc/`, `tmp/` y `www/`.
   - Asegurarse de que no se hayan copiado archivos de codigo fuente Python (`.py`) dentro de `_build/`.

## Pasos para Limpieza de Temporales

Para remover carpetas temporales, residuos de compilaciones anteriores o archivos de cache:

1. Ejecutar el script de saneamiento:
   `python clean.py`

2. Elementos que seran eliminados:
   - Carpetas `.compile/`, `build/`, `dist/`, `.pytest_cache/`, `.mypy_cache/`.
   - Directorios `__pycache__` en todo el proyecto excluyendo `_build/` y `bin/`.
   - Archivos compilados `.pyc`, `.pyo`, `.pyd` y archivos `.spec`.

## Generacion del Instalador con Inno Setup

1. Asegurarse de haber completado exitosamente la ejecucion de `python build.py`.
2. Abrir o compilar mediante linea de comandos el archivo `piruwamp.iss`:
   `iscc piruwamp.iss`
3. Verificar que el instalador final `piruwamp-setup.exe` se haya generado en la raiz del proyecto.
