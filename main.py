import sys
import os
import ctypes
import tkinter as tk
import traceback
from piruwamp.core.utils import is_admin
from piruwamp.ui.main_window import MainWindow

def main():
    try:
        if not is_admin():
            # Re-run the program with admin rights
            if getattr(sys, 'frozen', False):
                exe = sys.executable
                params = " ".join(sys.argv[1:])
            else:
                exe = sys.executable
                params = " ".join([os.path.abspath(sys.argv[0])] + sys.argv[1:])
            
            ctypes.windll.shell32.ShellExecuteW(None, "runas", exe, params, None, 1)
            sys.exit()

        root = tk.Tk()
        app = MainWindow(root)
        root.protocol("WM_DELETE_WINDOW", app.on_close)
        root.mainloop()
    except Exception as e:
        with open("crash.log", "w") as f:
            f.write(traceback.format_exc())
        raise

if __name__ == "__main__":
    main()
