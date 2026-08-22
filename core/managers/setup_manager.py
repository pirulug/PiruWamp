# core/managers/setup_manager.py

import os
from ..core.config import config
from ..core.logger import logger
from .apache_repository import ApacheRepository
from .php_repository import PHPRepository
from .mariadb_repository import MariaDBRepository
from .phpmyadmin_repository import PHPMYAdminRepository
from .php_manager import PHPManager
from .vhost import VHostManager
from .hosts import HostsManager

class SetupManager:
    DEFAULT_EXTENSIONS = [
        "bz2", "curl", "fileinfo", "gd", "gettext", "iconv",
        "intl", "mbstring", "exif", "mysqli", "openssl",
        "pdo_mysql", "pdo_sqlite", "zip", "sodium"
    ]

    @classmethod
    def is_setup_required(cls):
        """Verifica si falta instalar alguno de los componentes principales."""
        if not ApacheRepository.get_installed_versions() or not config.apache_path:
            return True
        if not PHPRepository.get_installed_versions() or not config.php_path:
            return True
        if not MariaDBRepository.get_installed_versions() or not config.mariadb_path:
            return True
        if not PHPMYAdminRepository.get_installed_versions() or not config.phpmyadmin_path:
            return True
        return False

    @classmethod
    def get_service_options(cls):
        """Devuelve la informacion y lista de versiones disponibles de cada servicio para seleccion."""
        services = []

        # 1. Apache
        apache_avail = ApacheRepository.load_available_versions()
        apache_installed = ApacheRepository.get_installed_versions()
        apache_list = list(apache_avail.keys())
        services.append({
            "id": "apache",
            "title": "Apache HTTP Server",
            "available": apache_avail,
            "versions": apache_list,
            "installed": apache_installed,
            "selected": config.active_apache_version if config.active_apache_version in apache_list else (apache_list[0] if apache_list else ""),
            "repo": ApacheRepository,
            "setter": config.set_apache_version
        })

        # 2. PHP
        php_avail = PHPRepository.load_available_versions()
        php_installed = PHPRepository.get_installed_versions()
        php_list = list(php_avail.keys())
        services.append({
            "id": "php",
            "title": "PHP",
            "available": php_avail,
            "versions": php_list,
            "installed": php_installed,
            "selected": config.active_php_version if config.active_php_version in php_list else (php_list[0] if php_list else ""),
            "repo": PHPRepository,
            "setter": config.set_php_version
        })

        # 3. MariaDB
        mariadb_avail = MariaDBRepository.load_available_versions()
        mariadb_installed = MariaDBRepository.get_installed_versions()
        mariadb_list = list(mariadb_avail.keys())
        services.append({
            "id": "mariadb",
            "title": "MariaDB Database",
            "available": mariadb_avail,
            "versions": mariadb_list,
            "installed": mariadb_installed,
            "selected": config.active_mariadb_version if config.active_mariadb_version in mariadb_list else (mariadb_list[0] if mariadb_list else ""),
            "repo": MariaDBRepository,
            "setter": config.set_mariadb_version
        })

        # 4. phpMyAdmin
        pma_avail = PHPMYAdminRepository.load_available_versions()
        pma_installed = PHPMYAdminRepository.get_installed_versions()
        pma_list = list(pma_avail.keys())
        services.append({
            "id": "phpmyadmin",
            "title": "phpMyAdmin",
            "available": pma_avail,
            "versions": pma_list,
            "installed": pma_installed,
            "selected": config.active_phpmyadmin_version if config.active_phpmyadmin_version in pma_list else (pma_list[0] if pma_list else ""),
            "repo": PHPMYAdminRepository,
            "setter": config.set_phpmyadmin_version
        })

        return services

    @classmethod
    def install_selected_components(cls, selections, progress_callback=None, task_callback=None):
        """Descarga e instala las versiones seleccionadas por el usuario."""
        services = cls.get_service_options()
        total_items = len(services)

        for idx, srv in enumerate(services, 1):
            srv_id = srv["id"]
            title = srv["title"]
            repo = srv["repo"]
            setter = srv["setter"]
            selected_ver = selections.get(srv_id, srv["selected"])
            url = srv["available"].get(selected_ver, "")

            # Verificar si ya esta instalado localmente
            installed = repo.get_installed_versions()
            if selected_ver in installed:
                if task_callback:
                    task_callback(f"Configurando {title}...", f"Version {selected_ver} ya instalada localmente.")
                setter(selected_ver)
                if progress_callback:
                    progress_callback(idx, total_items, title, 100)
                continue

            if not url:
                logger.log(f"No se encontro URL de descarga para {title} ({selected_ver})", "Setup")
                return False, f"URL no encontrada para {title} {selected_ver}"

            if task_callback:
                task_callback(f"Descargando {title} ({idx}/{total_items})...", f"Version seleccionada: {selected_ver}")

            def on_progress(pct):
                if progress_callback:
                    progress_callback(idx, total_items, title, pct)

            logger.log(f"Iniciando descarga e instalacion de {title} ({selected_ver})...", "Setup")
            success = repo.download_and_install(selected_ver, url, progress_callback=on_progress)
            if not success:
                logger.log(f"Error descargando {title} ({selected_ver})", "Setup")
                return False, f"Error descargando {title} {selected_ver}"

            setter(selected_ver)
            logger.log(f"{title} ({selected_ver}) instalado correctamente.", "Setup")

        if task_callback:
            task_callback("Configurando entorno...", "Enlazando servicios seleccionados...")

        cls.finalize_configuration()
        return True, "Instalacion completada con exito."

    @classmethod
    def finalize_configuration(cls):
        """Configura y enlaza todos los servicios recien instalados."""
        logger.log("Iniciando configuracion general del entorno...", "Setup")
        
        # 1. Configurar PHP y extensiones
        try:
            if not config.php_extensions:
                config.set_php_extensions(cls.DEFAULT_EXTENSIONS)
            PHPManager.update_php_ini()
            PHPManager.sync_extensions(config.php_extensions)
            logger.log("PHP y extensiones configuradas correctamente.", "Setup")
        except Exception as e:
            logger.log(f"Error configurando PHP: {e}", "Setup")

        # 2. Inicializar y configurar MariaDB
        try:
            from ..services.mariadb import MariaDBService
            mariadb_service = MariaDBService()
            mariadb_service.update_config()
            logger.log("MariaDB y directorio de datos configurados correctamente.", "Setup")
        except Exception as e:
            logger.log(f"Error configurando MariaDB: {e}", "Setup")

        # 3. Configurar Apache y mod_php
        try:
            from ..services.apache import ApacheService
            apache_service = ApacheService()
            apache_service.update_configs()
            logger.log("Apache httpd.conf y mod_php.conf configurados correctamente.", "Setup")
        except Exception as e:
            logger.log(f"Error configurando Apache: {e}", "Setup")

        # 4. Configurar phpMyAdmin
        try:
            pma_path = config.phpmyadmin_path
            if pma_path:
                PHPMYAdminRepository._configure_autologin(pma_path)
                logger.log("phpMyAdmin configurado con auto-login local.", "Setup")
        except Exception as e:
            logger.log(f"Error configurando phpMyAdmin: {e}", "Setup")

        # 5. Sincronizar vhosts y hosts
        try:
            hosts_mgr = HostsManager()
            VHostManager.sync_sites(hosts_mgr)
            logger.log("VirtualHosts sincronizados.", "Setup")
        except Exception as e:
            logger.log(f"Error sincronizando VirtualHosts: {e}", "Setup")

        logger.log("Configuracion inicial completada con exito.", "Setup")
