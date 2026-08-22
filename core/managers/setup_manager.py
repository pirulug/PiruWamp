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
    def get_missing_components(cls):
        """Devuelve la lista de componentes que necesitan descarga e instalacion."""
        missing = []
        
        if not ApacheRepository.get_installed_versions() or not config.apache_path:
            avail = ApacheRepository.load_available_versions()
            if avail:
                ver_name = list(avail.keys())[0]
                missing.append({
                    "id": "apache",
                    "title": "Apache HTTP Server",
                    "version": ver_name,
                    "url": avail[ver_name],
                    "repo": ApacheRepository,
                    "setter": config.set_apache_version
                })

        if not PHPRepository.get_installed_versions() or not config.php_path:
            avail = PHPRepository.load_available_versions()
            if avail:
                ver_name = list(avail.keys())[0]
                missing.append({
                    "id": "php",
                    "title": "PHP",
                    "version": ver_name,
                    "url": avail[ver_name],
                    "repo": PHPRepository,
                    "setter": config.set_php_version
                })

        if not MariaDBRepository.get_installed_versions() or not config.mariadb_path:
            avail = MariaDBRepository.load_available_versions()
            if avail:
                ver_name = list(avail.keys())[0]
                missing.append({
                    "id": "mariadb",
                    "title": "MariaDB Database",
                    "version": ver_name,
                    "url": avail[ver_name],
                    "repo": MariaDBRepository,
                    "setter": config.set_mariadb_version
                })

        if not PHPMYAdminRepository.get_installed_versions() or not config.phpmyadmin_path:
            avail = PHPMYAdminRepository.load_available_versions()
            if avail:
                ver_name = list(avail.keys())[0]
                missing.append({
                    "id": "phpmyadmin",
                    "title": "phpMyAdmin",
                    "version": ver_name,
                    "url": avail[ver_name],
                    "repo": PHPMYAdminRepository,
                    "setter": config.set_phpmyadmin_version
                })

        return missing

    @classmethod
    def install_component(cls, component_info, progress_callback=None):
        """Descarga e instala un componente especifico."""
        repo = component_info["repo"]
        version_name = component_info["version"]
        url = component_info["url"]
        setter = component_info["setter"]

        logger.log(f"Iniciando instalacion automatica de {component_info['title']} ({version_name})...", "Setup")
        success = repo.download_and_install(version_name, url, progress_callback=progress_callback)
        if success:
            setter(version_name)
            logger.log(f"{component_info['title']} instalado y configurado como version activa.", "Setup")
            return True
        else:
            logger.log(f"Error durante la instalacion de {component_info['title']}.", "Setup")
            return False

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
