import sys
import os
import ctypes
import tkinter as tk
import traceback
from core.core.utils import is_admin
from core.core.logger import logger
from core.ui.main_window import MainWindow

def main():
    try:
        if not is_admin():
            # Re-run the program with admin rights
            if getattr(sys, "frozen", False):
                exe = sys.executable
                params = " ".join(sys.argv[1:])
            else:
                exe = sys.executable
                params = " ".join([os.path.abspath(sys.argv[0])] + sys.argv[1:])
            
            ctypes.windll.shell32.ShellExecuteW(None, "runas", exe, params, None, 1)
            sys.exit()

        # Control de instancia unica
        kernel32 = ctypes.windll.kernel32
        mutex = kernel32.CreateMutexW(None, False, "PiruWampSingleInstanceMutex")
        if kernel32.GetLastError() == 183:  # ERROR_ALREADY_EXISTS
            event_handle = kernel32.OpenEventW(0x0002, False, "PiruWampShowWindowEvent")
            if event_handle:
                kernel32.SetEvent(event_handle)
                kernel32.CloseHandle(event_handle)
            if mutex:
                kernel32.CloseHandle(mutex)
            sys.exit(0)

        start_minimized = "--minimized" in sys.argv or "--tray" in sys.argv

        logger.log("Iniciando aplicacion PiruWamp...", "System")
        root = tk.Tk()
        app = MainWindow(root, start_minimized=start_minimized)
        root.protocol("WM_DELETE_WINDOW", app.on_close)
        root.mainloop()
    except Exception as e:
        logger.log(f"Fallo critico en la aplicacion:\n{traceback.format_exc()}", "CRASH")
        raise

if __name__ == "__main__":
    main()


