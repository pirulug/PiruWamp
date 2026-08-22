# PiruWamp

PiruWamp is a modular, portable, and multi-version local web development environment (WAMP: Windows, Apache, MariaDB, PHP) with a native graphical user interface built in Python (Tkinter). It is designed to be lightweight, highly customizable, automated, and easy to build and distribute on Windows.

> **Note:** For the Spanish version of this documentation, see [README.es.md](README.es.md).

## Key Features

- **Multi-Version Management:** Download, install, and switch in real time between multiple versions of Apache, PHP, MariaDB, and phpMyAdmin directly from the graphical interface.
- **Full Portability:** Dynamic root path detection and automatic synchronization of absolute paths (`httpd.conf`, `mod_php.conf`, `my.ini`, `php.ini`, aliases, and virtual hosts) on every startup or drive letter change.
- **Locations Tab & Custom DocumentRoot:** Customize the web projects folder `www` to any directory on your computer using a visual folder picker, or restore the default path with a single click.
- **Full Imagick Support:** Intelligent extension installer with multi-version PECL fallback (3.8.1 / 3.8.0 / 3.7.0) compatible with PHP 7.4, 8.0, 8.1, 8.2, 8.3, 8.4, and 8.5+, automatically copying required dependency DLLs (`CORE_RL_*.dll` and `IM_MOD_RL_*.dll`).
- **phpMyAdmin Directly in `bin/`:** phpMyAdmin is downloaded, auto-configured with auto-login (`127.0.0.1:3306`, user `root`), and executed directly from `bin/phpmyadmin/` without redundant copies.
- **Automatic Virtual Hosts:** Automatically creates `.test` local domains and registers them in the Windows `hosts` file for every project subfolder located in `www/`.
- **Automatic Privilege Elevation:** Prompts for Administrator permissions via Windows UAC when service control or `hosts` file modification is required.

## Project Structure

The project is designed in a self-contained manner using relative paths:

- `bin/` - Stores installed binary versions:
  - `bin/apache/` - Apache HTTP servers.
  - `bin/mariadb/` - MariaDB database servers.
  - `bin/php/` - PHP runtime environments.
  - `bin/phpmyadmin/` - phpMyAdmin instances.
- `core/` - Python source code structured in layers (`core`, `managers`, `services`, `ui`, `img`).
- `data/` - Persistent database files for MariaDB/MySQL.
- `etc/` - Configuration files:
  - `etc/config.conf` - General PiruWamp configuration.
  - `etc/apache.conf`, `etc/php.conf`, `etc/mariadb.conf`, `etc/phpmyadmin.conf` - Catalogs of official downloadable versions.
  - `etc/apache2/` - Apache configuration, aliases, and `sites-enabled`.
  - `etc/mariadb/` - MariaDB `my.ini` configuration.
- `tmp/` - Temporary files generated at runtime.
- `www/` - Root directory for local web projects with a clean `index.php` welcome page that verifies server and Imagick status.
- `piruwamp.py` - Main entry point for local development and direct execution.
- `build.py` - Automated build and packaging script.
- `clean.py` - Script to clean Python temporary compilation files.

## Building the Executable (`.exe`)

To compile the project into a standalone executable that does not require Python on the target machine, PyInstaller is used via the automated build script:

```bash
python build.py
```

### Prerequisites
Make sure you have Python 3.10+ installed along with `pyinstaller`:
```bash
pip install pyinstaller
```

### Build Process
1. Open a terminal in the project root directory.
2. Run:
   ```bash
   python build.py
   ```
3. The script will compile `piruwamp.exe` with its embedded privileges manifest and icon, and structure a clean, portable distribution in the `_build/` folder.

## Creating the Installer (Setup) with Inno Setup

To generate the distributable Windows installer for PiruWamp:

1. Download and install [Inno Setup](https://jrsoftware.org/isinfo.php).
2. Compile the executable first by running `python build.py`.
3. Open `piruwamp.iss` using Inno Setup Compiler.
4. Click **Compile** (or press `Ctrl + F9`).
5. The compressed installer `piruwamp-setup.exe` will be generated in the project root folder, ready for deployment on any Windows machine.

## Local Development

To run and test PiruWamp directly from the source code without compiling:

```bash
python piruwamp.py
```

> Note: If the console is not run as Administrator, PiruWamp will automatically request elevated permissions via Windows UAC.
