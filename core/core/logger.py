# core/core/logger.py

import os
import sys
import queue
import datetime
import traceback
import threading

class Logger:
    def __init__(self):
        self.log_queue = queue.Queue()
        self.log_file = self._get_log_path()
        self._setup_global_exception_handlers()

    def _get_log_path(self):
        if getattr(sys, "frozen", False):
            base_dir = os.path.dirname(sys.executable)
        else:
            base_dir = os.getcwd()
        return os.path.join(base_dir, "crash.log")

    def _setup_global_exception_handlers(self):
        def handle_uncaught_exception(exc_type, exc_value, exc_traceback):
            if issubclass(exc_type, KeyboardInterrupt):
                sys.__excepthook__(exc_type, exc_value, exc_traceback)
                return
            err_msg = "".join(traceback.format_exception(exc_type, exc_value, exc_traceback))
            self.log(f"Excepcion no controlada:\n{err_msg}", service="CRASH")

        sys.excepthook = handle_uncaught_exception

        def handle_thread_exception(args):
            err_msg = "".join(traceback.format_exception(args.exc_type, args.exc_value, args.exc_traceback))
            thread_name = args.thread.name if args.thread else "Desconocido"
            self.log(f"Excepcion no controlada en hilo [{thread_name}]:\n{err_msg}", service="CRASH")

        threading.excepthook = handle_thread_exception

    def log(self, message, service="System"):
        now_str = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        formatted_ui = f"[{service}] {message}"
        formatted_file = f"[{now_str}] [{service}] {message}\n"
        
        # Enviar a la cola de la interfaz grafica
        self.log_queue.put(formatted_ui)
        print(formatted_ui)

        # Escribir de forma persistente en crash.log
        try:
            with open(self.log_file, "a", encoding="utf-8") as f:
                f.write(formatted_file)
        except Exception:
            pass

    def get_messages(self):
        messages = []
        while not self.log_queue.empty():
            messages.append(self.log_queue.get())
        return messages

logger = Logger()
