import os
from ..core.config import config
from ..core.logger import logger

class HostsManager:
    @staticmethod
    def ensure_dashboard_hosts():
        """Asegura que piruwam.localhost y piruwamp.localhost esten en el archivo hosts"""
        hosts_path = config.hosts_file
        if not os.path.exists(hosts_path):
            return

        entry = "127.0.0.1    piruwam.localhost piruwamp.localhost"
        try:
            with open(hosts_path, "r", encoding="utf-8") as f:
                lines = f.readlines()

            start, end = None, None
            for i, line in enumerate(lines):
                if line.strip() == "# Start PiruWamp":
                    start = i
                if line.strip() == "# End PiruWamp":
                    end = i

            if start is None or end is None:
                lines.append("\n# Start PiruWamp\n")
                lines.append(entry + "\n")
                lines.append("# End PiruWamp\n")
            else:
                block = lines[start+1:end]
                if not any("piruwam.localhost" in l for l in block):
                    block.insert(0, entry + "\n")
                    lines = lines[:start+1] + block + lines[end:]

            with open(hosts_path, "w", encoding="utf-8") as f:
                f.writelines(lines)
            logger.log("Asegurado piruwam.localhost en hosts", "Hosts")
        except Exception as e:
            logger.log(f"Error registrando piruwam.localhost en hosts: {e}", "Hosts")

    @staticmethod
    def add_to_hosts(project_name):
        """Agrega dominio al archivo hosts dentro de bloque PiruWamp"""
        entry = f"127.0.0.1    {project_name}.test"
        hosts_path = config.hosts_file

        if not os.path.exists(hosts_path):
            logger.log(f"Hosts file not found at {hosts_path}", "Error")
            return

        try:
            with open(hosts_path, "r", encoding="utf-8") as f:
                lines = f.readlines()

            start, end = None, None
            for i, line in enumerate(lines):
                if line.strip() == "# Start PiruWamp":
                    start = i
                if line.strip() == "# End PiruWamp":
                    end = i

            if start is None or end is None:  # crear bloque
                lines.append("\n# Start PiruWamp\n")
                lines.append(entry + "\n")
                lines.append("# End PiruWamp\n")
            else:
                block = lines[start+1:end]
                if not any(project_name + ".test" in l for l in block):
                    block.append(entry + "\n")
                    lines = lines[:start+1] + block + lines[end:]

            with open(hosts_path, "w", encoding="utf-8") as f:
                f.writelines(lines)
            logger.log(f"Agregado {project_name}.test", "Hosts")
        except Exception as e:
            logger.log(f"Error agregando {project_name}.test a hosts: {e}", "Hosts")

    @staticmethod
    def remove_from_hosts(project_name):
        """Elimina entrada de hosts dentro de bloque # Start PiruWamp ... # End PiruWamp"""
        hosts_path = config.hosts_file
        if not os.path.exists(hosts_path):
            return

        try:
            with open(hosts_path, "r", encoding="utf-8") as f:
                lines = f.readlines()

            inside_block = False
            new_lines = []
            for line in lines:
                if line.strip() == "# Start PiruWamp":
                    inside_block = True
                    new_lines.append(line)
                    continue
                if line.strip() == "# End PiruWamp":
                    inside_block = False
                    new_lines.append(line)
                    continue

                if inside_block and project_name in line:
                    logger.log(f"Eliminado {project_name}.test de hosts", "Hosts")
                    continue

                new_lines.append(line)

            with open(hosts_path, "w", encoding="utf-8") as f:
                f.writelines(new_lines)
        except Exception as e:
            logger.log(f"Error eliminando {project_name}.test de hosts: {e}", "Hosts")
