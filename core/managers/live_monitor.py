# core/managers/live_monitor.py

import os
import re
import json
import time
import socket
import threading
from collections import deque
from ..core.config import config
from ..core.logger import logger

class LiveMonitorService:
    _instance = None
    _lock = threading.Lock()

    def __new__(cls, *args, **kwargs):
        with cls._lock:
            if cls._instance is None:
                cls._instance = super(LiveMonitorService, cls).__new__(cls)
                cls._instance._initialized = False
            return cls._instance

    def __init__(self):
        if self._initialized:
            return
        self._initialized = True

        self.events = deque(maxlen=1000)
        self.listeners = []
        self.running = False
        self._counter = 0

        self.server_thread = None
        self.watcher_thread = None
        self.server_socket = None

    def start(self):
        """Inicia los servicios de escucha de logs y servidor local de dumps."""
        if self.running:
            return

        self.running = True
        self._start_dump_server()
        self._start_file_watchers()
        logger.log("Servicio de monitoreo en vivo (Insights) iniciado", "Monitor")

    def stop(self):
        """Detiene los hilos y cierra el socket de monitoreo."""
        self.running = False

        if self.server_socket:
            try:
                self.server_socket.close()
            except Exception:
                pass
            self.server_socket = None

        logger.log("Servicio de monitoreo en vivo detenido", "Monitor")

    def subscribe(self, listener):
        """Registra un callback para recibir eventos nuevos en tiempo real."""
        if listener not in self.listeners:
            self.listeners.append(listener)

    def unsubscribe(self, listener):
        """Elimina un callback registrado."""
        if listener in self.listeners:
            self.listeners.remove(listener)

    def clear(self):
        """Limpia el historial de eventos en memoria."""
        with self._lock:
            self.events.clear()

    def add_event(self, event_type, title, subtitle="", badge="", badge_color="#555555", details="", duration=None, custom_time=None):
        """Agrega un evento estructurado y notifica a los escuchadores."""
        with self._lock:
            self._counter += 1
            event_time = custom_time or time.strftime("%H:%M:%S")

            event = {
                "id": self._counter,
                "type": event_type,         # "HTTP", "LOG", "QUERY", "DUMP"
                "time": event_time,
                "title": title,
                "subtitle": subtitle,
                "badge": badge,
                "badge_color": badge_color,
                "details": details or title,
                "duration": duration
            }
            self.events.append(event)

        for listener in list(self.listeners):
            try:
                listener(event)
            except Exception:
                pass

    def _start_dump_server(self):
        def _server_loop():
            try:
                self.server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
                self.server_socket.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
                self.server_socket.bind(("127.0.0.1", 9912))
                self.server_socket.listen(5)
                self.server_socket.settimeout(1.0)

                while self.running:
                    try:
                        client, _ = self.server_socket.accept()
                        client.settimeout(2.0)
                        data = b""
                        while True:
                            chunk = client.recv(4096)
                            if not chunk:
                                break
                            data += chunk
                            if b"\n" in chunk:
                                break
                        client.close()

                        if data:
                            raw_str = data.decode("utf-8", errors="replace").strip()
                            try:
                                payload = json.loads(raw_str)
                                file_info = payload.get("file", "desconocido")
                                content = payload.get("content", "")
                                self.add_event(
                                    event_type="DUMP",
                                    title=f"Volcado en {file_info}",
                                    subtitle=payload.get("time", time.strftime("%H:%M:%S")),
                                    badge="DUMP",
                                    badge_color="#7c3aed",
                                    details=content,
                                    custom_time=payload.get("time")
                                )
                            except Exception:
                                self.add_event(
                                    event_type="DUMP",
                                    title="Volcado PHP",
                                    badge="DUMP",
                                    badge_color="#7c3aed",
                                    details=raw_str
                                )
                    except socket.timeout:
                        continue
                    except Exception:
                        if not self.running:
                            break
            except Exception as e:
                logger.log(f"No se pudo iniciar el servidor de dumps en el puerto 9912: {e}", "Monitor")

        self.server_thread = threading.Thread(target=_server_loop, daemon=True)
        self.server_thread.start()

    def _start_file_watchers(self):
        def _watch_loop():
            file_positions = {}

            access_regex = re.compile(r'^(\S+) \S+ \S+ \[([^\]]+)\] "(\S+) (\S+)(?: [^"]*)?" (\d{3}) (\S+)')
            php_err_regex = re.compile(r'^\[([^\]]+)\] PHP (Fatal error|Warning|Notice|Parse error|Deprecated):\s*(.*)')

            while self.running:
                # 1. Apache Access Logs (detecta access_log y access.log en todas las versiones activas)
                for access_file in self._get_apache_access_logs():
                    self._read_new_lines(access_file, file_positions, lambda l: self._parse_apache_access(l, access_regex), initial_lines=35)

                # 2. Apache Error Logs (detecta error_log y error.log)
                for err_file in self._get_apache_error_logs():
                    self._read_new_lines(err_file, file_positions, self._parse_apache_error, initial_lines=15)

                # 3. PHP Errors Log
                php_log = os.path.join(config.wamp_root, "tmp", "php_errors.log")
                if os.path.exists(php_log):
                    self._read_new_lines(php_log, file_positions, lambda l: self._parse_php_error(l, php_err_regex), initial_lines=20)

                # 4. MariaDB Slow Log
                mariadb_slow = os.path.join(config.wamp_root, "tmp", "mariadb_slow.log")
                if os.path.exists(mariadb_slow):
                    self._read_new_lines(mariadb_slow, file_positions, self._parse_mariadb_slow, initial_lines=15)

                time.sleep(0.3)

        self.watcher_thread = threading.Thread(target=_watch_loop, daemon=True)
        self.watcher_thread.start()

    def _read_new_lines(self, file_path, positions, parse_callback, initial_lines=30):
        try:
            size = os.path.getsize(file_path)
            last_pos = positions.get(file_path, None)

            # Si es la primera vez que se detecta el archivo, cargar eventos recientes
            if last_pos is None:
                if size > 0 and initial_lines > 0:
                    read_bytes = min(size, initial_lines * 400)
                    with open(file_path, "r", encoding="utf-8", errors="replace") as f:
                        f.seek(size - read_bytes)
                        if read_bytes < size:
                            f.readline() # descartar posible línea incompleta inicial
                        lines = f.readlines()
                        positions[file_path] = f.tell()

                    for line in lines[-initial_lines:]:
                        line = line.strip()
                        if line:
                            parse_callback(line)
                    return
                else:
                    positions[file_path] = size
                    return

            # Si el archivo fue truncado o reiniciado
            if size < last_pos:
                last_pos = 0

            # Si hay nuevos bytes escritos
            if size > last_pos:
                with open(file_path, "r", encoding="utf-8", errors="replace") as f:
                    f.seek(last_pos)
                    lines = f.readlines()
                    positions[file_path] = f.tell()

                for line in lines:
                    line = line.strip()
                    if line:
                        parse_callback(line)
        except Exception:
            pass

    def _parse_apache_access(self, line, regex):
        m = regex.match(line)
        if m:
            ip, raw_time, method, path, status, size = m.groups()
        else:
            parts = line.split('"')
            if len(parts) >= 3:
                tokens = parts[1].strip().split()
                method = tokens[0] if tokens else "GET"
                path = tokens[1] if len(tokens) > 1 else "/"
                after = parts[2].strip().split()
                status = after[0] if after else "200"
                size = after[1] if len(after) > 1 else "-"
                ip = line.split()[0] if line.split() else "127.0.0.1"
                raw_time = ""
            else:
                return

        badge_color = "#15803d" # 2xx (verde)
        if status.startswith("3"):
            badge_color = "#0369a1" # 3xx (azul)
        elif status.startswith("4"):
            badge_color = "#b45309" # 4xx (ambar)
        elif status.startswith("5"):
            badge_color = "#b91c1c" # 5xx (rojo)

        time_str = None
        if raw_time and ":" in raw_time:
            time_parts = raw_time.split(":")
            if len(time_parts) >= 4:
                time_str = f"{time_parts[1]}:{time_parts[2]}:{time_parts[3].split()[0]}"

        self.add_event(
            event_type="HTTP",
            title=f"{method} {path}",
            subtitle=f"Estado: {status} | IP: {ip} | Tamaño: {size} B",
            badge=status,
            badge_color=badge_color,
            details=f"Método: {method}\nRuta: {path}\nCódigo HTTP: {status}\nCliente: {ip}\nTamaño respuesta: {size} bytes\nRegistro original:\n{line}",
            custom_time=time_str
        )

    def _parse_apache_error(self, line):
        if "AH00094" in line or "Command line:" in line:
            return

        level = "LOG"
        badge_color = "#b91c1c" if "error" in line.lower() else "#b45309"
        self.add_event(
            event_type="LOG",
            title=line[:120],
            subtitle="Apache Error Log",
            badge="APACHE",
            badge_color=badge_color,
            details=line
        )

    def _parse_php_error(self, line, regex):
        m = regex.match(line)
        if m:
            _, err_type, msg = m.groups()
            badge_color = "#b91c1c" if "fatal" in err_type.lower() or "parse" in err_type.lower() else "#b45309"
            self.add_event(
                event_type="LOG",
                title=f"PHP {err_type}: {msg[:100]}",
                subtitle="PHP Runtime",
                badge=err_type.upper()[:7],
                badge_color=badge_color,
                details=line
            )
        else:
            self.add_event(
                event_type="LOG",
                title=line[:120],
                subtitle="PHP Log",
                badge="PHP",
                badge_color="#b45309",
                details=line
            )

    def _parse_mariadb_slow(self, line):
        if line.startswith("#") or line.startswith("/"):
            return

        self.add_event(
            event_type="QUERY",
            title=line[:120],
            subtitle="MariaDB Slow Query",
            badge="SQL",
            badge_color="#0284c7",
            details=line
        )

    def _get_apache_access_logs(self):
        logs = []
        # Buscar en apache_path activo
        if config.apache_path:
            logs_dir = os.path.join(config.apache_path, "logs")
            if os.path.exists(logs_dir):
                for f in os.listdir(logs_dir):
                    if "access" in f.lower():
                        logs.append(os.path.join(logs_dir, f))

        # Fallback en bin/apache si apache_path estuviera vacío o con otra ruta
        bin_apache = config.bin_apache_path
        if os.path.exists(bin_apache):
            for v in os.listdir(bin_apache):
                candidate_logs = os.path.join(bin_apache, v, "logs")
                if os.path.exists(candidate_logs):
                    for f in os.listdir(candidate_logs):
                        if "access" in f.lower():
                            full_p = os.path.join(candidate_logs, f)
                            if full_p not in logs:
                                logs.append(full_p)
        return logs

    def _get_apache_error_logs(self):
        logs = []
        if config.apache_path:
            logs_dir = os.path.join(config.apache_path, "logs")
            if os.path.exists(logs_dir):
                for f in os.listdir(logs_dir):
                    if "error" in f.lower():
                        logs.append(os.path.join(logs_dir, f))

        bin_apache = config.bin_apache_path
        if os.path.exists(bin_apache):
            for v in os.listdir(bin_apache):
                candidate_logs = os.path.join(bin_apache, v, "logs")
                if os.path.exists(candidate_logs):
                    for f in os.listdir(candidate_logs):
                        if "error" in f.lower():
                            full_p = os.path.join(candidate_logs, f)
                            if full_p not in logs:
                                logs.append(full_p)
        return logs

# Instancia singleton accesible globalmente
live_monitor = LiveMonitorService()
