# piruwamp/ui/theme.py

import tkinter as tk
from tkinter import ttk

# Standard Native Vanilla Theme Palette
BG_COLOR = "#f0f0f0"
CARD_BG = "#f0f0f0"
FG_COLOR = "#000000"
TEXT_MUTED = "#555555"
BORDER_COLOR = "#b0b0b0"

# Button Colors
BTN_BG = "#e1e1e1"
BTN_HOVER = "#e5e5e5"
BTN_ACTIVE = "#cccccc"

# Input fields / lists
LISTBOX_BG = "#ffffff"
LISTBOX_FG = "#000000"

FONT_MAIN = ("Segoe UI", 9)
FONT_TITLE = ("Segoe UI", 12, "bold")

_ttk_styled = False

def configure_ttk_styles():
    global _ttk_styled
    if _ttk_styled:
        return
    
    style = ttk.Style()
    try:
        style.theme_use("vista")
    except Exception:
        try:
            style.theme_use("clam")
        except Exception:
            pass
        
    # Configure Treeview Style
    style.configure("Treeview",
        background=LISTBOX_BG,
        foreground=FG_COLOR,
        fieldbackground=LISTBOX_BG,
        rowheight=24,
        font=FONT_MAIN
    )
    style.map("Treeview",
        background=[('selected', '#0078d7')],
        foreground=[('selected', '#ffffff')]
    )
    
    # Configure Treeview Heading Style
    style.configure("Treeview.Heading",
        font=("Segoe UI", 9, "bold")
    )
    
    _ttk_styled = True

def apply_window_style(root):
    apply_theme(root)

def apply_theme(window):
    """Aplica de forma recursiva estilos vanilla nativos a los widgets de la ventana."""
    window.configure(bg=BG_COLOR)
    
    # Opciones generales para la ventana
    window.option_add("*Background", BG_COLOR)
    window.option_add("*Foreground", FG_COLOR)
    window.option_add("*Font", FONT_MAIN)
    
    # Configurar estilos ttk
    configure_ttk_styles()
    
    # Estilar widgets hijos recursivamente
    _style_child_widgets(window)

def _style_child_widgets(parent):
    for child in parent.winfo_children():
        widget_type = child.winfo_class()
        
        if widget_type == "Label":
            try:
                font_config = str(child.cget("font")).lower()
                text_content = str(child.cget("text"))
                is_title = "bold" in font_config or "12" in font_config or "15" in font_config or "16" in font_config or text_content == "PiruWamp"
            except Exception:
                is_title = False
            style_label(child, title=is_title)
            
        elif widget_type == "Button":
            style_button(child)
            
        elif widget_type == "Frame" or widget_type == "Labelframe":
            style_frame(child)
            _style_child_widgets(child)
            
        elif widget_type == "Listbox":
            style_listbox(child)
            
        elif widget_type == "Entry":
            style_entry(child)
            
        elif widget_type == "Checkbutton":
            style_checkbutton(child)
            
        elif widget_type == "Canvas":
            child.configure(bg=BG_COLOR, highlightthickness=0)
            _style_child_widgets(child)
            
        elif widget_type in ["Text", "ScrolledText"]:
            child.configure(
                bg=LISTBOX_BG,
                fg=FG_COLOR,
                insertbackground=FG_COLOR,
                font=("Consolas", 9),
                relief="sunken",
                borderwidth=1,
                highlightthickness=0
            )
            
        else:
            try:
                _style_child_widgets(child)
            except Exception:
                pass

def style_button(btn, variant="neutral"):
    btn.normal_bg = BTN_BG
    btn.hover_bg = BTN_HOVER
    btn.variant = variant
    
    btn.configure(
        bg=BTN_BG,
        fg=FG_COLOR,
        activebackground=BTN_ACTIVE,
        activeforeground=FG_COLOR,
        font=FONT_MAIN,
        relief="raised",
        borderwidth=1,
        padx=10,
        pady=3,
        cursor="hand2"
    )
    
    if not hasattr(btn, "_hover_bound"):
        def on_enter(e):
            if hasattr(btn, "hover_bg"):
                btn.config(bg=btn.hover_bg)
        def on_leave(e):
            if hasattr(btn, "normal_bg"):
                btn.config(bg=btn.normal_bg)
        btn.bind("<Enter>", on_enter)
        btn.bind("<Leave>", on_leave)
        btn._hover_bound = True

def style_label(lbl, title=False):
    bg = BG_COLOR
    parent = lbl.master
    if parent:
        try:
            bg = parent.cget("bg")
        except Exception:
            pass
            
    if title:
        lbl.configure(
            bg=bg,
            fg=FG_COLOR,
            font=FONT_TITLE
        )
    else:
        lbl.configure(
            bg=bg,
            fg=FG_COLOR,
            font=FONT_MAIN
        )

def style_listbox(lb):
    lb.configure(
        bg=LISTBOX_BG,
        fg=LISTBOX_FG,
        font=FONT_MAIN,
        relief="sunken",
        borderwidth=1,
        selectbackground="#0078d7",
        selectforeground="#ffffff"
    )

def style_frame(frame):
    bg = BG_COLOR
    parent = frame.master
    if parent:
        try:
            bg = parent.cget("bg")
        except Exception:
            pass
                
    frame.configure(bg=bg)

def style_entry(entry):
    entry.configure(
        bg=LISTBOX_BG,
        fg=FG_COLOR,
        insertbackground=FG_COLOR,
        font=FONT_MAIN,
        relief="sunken",
        borderwidth=1
    )

def style_checkbutton(cb):
    bg = BG_COLOR
    parent = cb.master
    if parent:
        try:
            bg = parent.cget("bg")
        except Exception:
            pass
            
    cb.configure(
        bg=bg,
        fg=FG_COLOR,
        activebackground=bg,
        activeforeground=FG_COLOR,
        selectcolor=LISTBOX_BG,
        font=FONT_MAIN,
        cursor="hand2"
    )


