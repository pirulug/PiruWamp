import tkinter as tk
from tkinter import ttk, messagebox
import threading
from ..managers.php_manager import PHPManager
from ..core.config import config
from ..core.logger import logger
from .theme import apply_theme

class PHPExtensionsWindow(tk.Toplevel):
    def __init__(self, parent_app):
        super().__init__(parent_app.root)
        self.title("Gestor de Extensiones PHP")
        self.geometry("450x600")
        self.resizable(False, False)
        self.transient(parent_app.root)
        self.grab_set()

        self.parent_app = parent_app
        self.vars = {}  # Store BooleanVars for checkboxes
        
        self._setup_ui()
        self.load_extensions()

    def _setup_ui(self):
        main_frame = tk.Frame(self, padx=20, pady=20)
        main_frame.pack(fill=tk.BOTH, expand=True)

        header_frame = tk.Frame(main_frame)
        header_frame.pack(fill=tk.X, pady=(0, 10))

        tk.Label(header_frame, text="Extensiones de PHP", font=("Arial", 12, "bold")).pack(side=tk.LEFT)
        
        # Search box
        search_frame = tk.Frame(main_frame)
        search_frame.pack(fill=tk.X, pady=(0, 10))
        tk.Label(search_frame, text="Buscar:").pack(side=tk.LEFT)
        self.search_var = tk.StringVar()
        self.search_var.trace_add("write", self._on_search)
        search_entry = tk.Entry(search_frame, textvariable=self.search_var)
        search_entry.pack(side=tk.LEFT, fill=tk.X, expand=True, padx=(5, 0))

        # Scrollable list of extensions
        list_container = tk.Frame(main_frame, highlightthickness=0)
        list_container.pack(fill=tk.BOTH, expand=True)

        self.canvas = tk.Canvas(list_container, highlightthickness=0)
        scrollbar = ttk.Scrollbar(list_container, orient="vertical", command=self.canvas.yview)
        self.scrollable_frame = tk.Frame(self.canvas)

        self.scrollable_frame.bind(
            "<Configure>",
            lambda e: self.canvas.configure(scrollregion=self.canvas.bbox("all"))
        )

        self.canvas.create_window((0, 0), window=self.scrollable_frame, anchor="nw")
        self.canvas.configure(yscrollcommand=scrollbar.set)

        self.canvas.pack(side="left", fill="both", expand=True)
        scrollbar.pack(side="right", fill="y")

        # Mouse wheel support
        def _on_mousewheel(event):
            self.canvas.yview_scroll(int(-1*(event.delta/120)), "units")
        self.canvas.bind_all("<MouseWheel>", _on_mousewheel)

        # Action Buttons
        btn_frame = tk.Frame(main_frame, pady=15)
        btn_frame.pack(fill=tk.X)

        self.btn_imagick = tk.Button(
            btn_frame, 
            text="➕ Instalar Imagick", 
            command=self.install_imagick,
            bg="#e1f5fe",
            relief=tk.FLAT,
            padx=10
        )
        self.btn_imagick.pack(side=tk.LEFT)

        tk.Button(
            btn_frame, 
            text="Cerrar", 
            command=self.destroy,
            padx=15
        ).pack(side=tk.RIGHT, padx=(5, 0))

        # Progress bar (hidden by default)
        self.progress_frame = tk.Frame(main_frame)
        self.progress_label = tk.Label(self.progress_frame, text="Descargando...")
        self.progress_label.pack(side=tk.TOP, anchor="w")
        self.progress_bar = ttk.Progressbar(self.progress_frame, orient=tk.HORIZONTAL, length=400, mode='determinate')
        self.progress_bar.pack(fill=tk.X, pady=5)

        apply_theme(self)

    def load_extensions(self, filter_text=""):
        for widget in self.scrollable_frame.winfo_children():
            widget.destroy()

        extensions = PHPManager.get_extensions()
        
        for ext_name, enabled in extensions:
            if filter_text and filter_text.lower() not in ext_name.lower():
                continue
            
            row = tk.Frame(self.scrollable_frame, pady=2)
            row.pack(fill=tk.X)
            
            var = tk.BooleanVar(value=enabled)
            self.vars[ext_name] = var
            
            # Using a custom checkbox look or just standard for now but with better padding
            cb = tk.Checkbutton(
                row, 
                text=ext_name, 
                variable=var, 
                command=lambda n=ext_name: self._toggle_ext(n)
            )
            cb.pack(side=tk.LEFT, padx=10)

        apply_theme(self.scrollable_frame)

    def _on_search(self, *args):
        self.load_extensions(self.search_var.get())

    def _toggle_ext(self, ext_name):
        # Apply immediately for better UX? Or have a save button?
        # Let's apply immediately as it's common in WAMP tools
        if PHPManager.toggle_extension(ext_name):
            logger.log(f"Extensión '{ext_name}' actualizada", "UI")
            # Notification (could be a toast or status bar)
            if hasattr(self.parent_app, 'update_php_extensions_menu'):
                self.parent_app.update_php_extensions_menu()
        else:
            messagebox.showerror("Error", f"No se pudo actualizar la extensión {ext_name}")
            # Reset checkbox if failed
            self.load_extensions(self.search_var.get())

    def install_imagick(self):
        self.btn_imagick.config(state=tk.DISABLED)
        self.progress_frame.pack(fill=tk.X, pady=5)
        
        def run():
            def update_progress(percent):
                self.progress_bar['value'] = percent
                self.update_idletasks()

            success = PHPManager.install_imagick(update_progress)
            
            def finish():
                self.progress_frame.pack_forget()
                self.btn_imagick.config(state=tk.NORMAL)
                if success:
                    messagebox.showinfo("Éxito", "Imagick se ha instalado y activado correctamente.\nReinicia Apache para aplicar los cambios.")
                    self.load_extensions()
                    if hasattr(self.parent_app, 'update_php_extensions_menu'):
                        self.parent_app.update_php_extensions_menu()
                else:
                    messagebox.showerror("Error", "No se pudo instalar Imagick. Revisa los logs para más detalles.")

            self.after(0, finish)

        threading.Thread(target=run, daemon=True).start()
