# piruwamp/ui/theme.py

import tkinter as tk
from tkinter import ttk

# Modern Obsidian Dark Theme Palette
BG_COLOR = "#0a0d16"         # Deepest space blue/black background
CARD_BG = "#131722"          # Dark panel/card background
FG_COLOR = "#f3f4f6"         # Premium off-white primary text
TEXT_MUTED = "#9ca3af"       # Secondary cool grey text
ACCENT_BLUE = "#38bdf8"      # Glow sky blue for titles/accents

# Button Colors
BTN_START = "#059669"        # Emerald green
BTN_START_HOVER = "#047857"
BTN_STOP = "#e11d48"         # Rose red
BTN_STOP_HOVER = "#be123c"
BTN_NEUTRAL = "#2563eb"      # Royal blue
BTN_NEUTRAL_HOVER = "#1d4ed8"
BTN_WARNING = "#d97706"      # Amber orange
BTN_WARNING_HOVER = "#b45309"

# Input fields / lists
LISTBOX_BG = "#0f172a"
LISTBOX_FG = "#f3f4f6"

FONT_MAIN = ("Segoe UI", 10)
FONT_TITLE = ("Segoe UI Semibold", 16)

_ttk_styled = False

def configure_ttk_styles():
    global _ttk_styled
    if _ttk_styled:
        return
    
    style = ttk.Style()
    try:
        style.theme_use("clam")
    except Exception:
        pass
        
    # Configure Treeview Style
    style.configure("Treeview",
        background=CARD_BG,
        foreground=FG_COLOR,
        fieldbackground=CARD_BG,
        rowheight=28,
        font=FONT_MAIN,
        relief="flat",
        borderwidth=0
    )
    style.map("Treeview",
        background=[('selected', ACCENT_BLUE)],
        foreground=[('selected', BG_COLOR)]
    )
    
    # Configure Treeview Heading Style
    style.configure("Treeview.Heading",
        background="#1e293b",
        foreground=FG_COLOR,
        font=("Segoe UI", 10, "bold"),
        relief="flat",
        borderwidth=1
    )
    style.map("Treeview.Heading",
        background=[('active', ACCENT_BLUE)],
        foreground=[('active', BG_COLOR)]
    )
    
    # Configure Progressbar Style
    style.configure("TProgressbar",
        thickness=10,
        troughcolor="#1e293b",
        background=ACCENT_BLUE,
        relief="flat",
        borderwidth=0
    )
    
    # Configure Scrollbar Style
    style.configure("Vertical.TScrollbar",
        troughcolor=BG_COLOR,
        background="#1e293b",
        arrowcolor=FG_COLOR,
        relief="flat",
        borderwidth=0
    )
    style.map("Vertical.TScrollbar",
        background=[('active', ACCENT_BLUE)]
    )
    
    _ttk_styled = True

def apply_window_style(root):
    apply_theme(root)

def apply_theme(window):
    """Recursively applies modern dark theme styling to all widgets in the window."""
    window.configure(bg=BG_COLOR)
    
    # Add general options for root window
    window.option_add("*Background", BG_COLOR)
    window.option_add("*Foreground", FG_COLOR)
    window.option_add("*Font", FONT_MAIN)
    
    # Configure ttk styles
    configure_ttk_styles()
    
    # Style all child widgets recursively
    _style_child_widgets(window)

def _style_child_widgets(parent):
    for child in parent.winfo_children():
        widget_type = child.winfo_class()
        
        if widget_type == "Label":
            # Determine if it's a title (large font or bold)
            try:
                font_config = str(child.cget("font")).lower()
                text_content = str(child.cget("text"))
                is_title = "bold" in font_config or "12" in font_config or "16" in font_config or text_content == "PiruWamp"
            except Exception:
                is_title = False
            style_label(child, title=is_title)
            
        elif widget_type == "Button":
            try:
                btn_text = str(child.cget("text")).lower()
                current_bg = str(child.cget("bg")).lower()
            except Exception:
                btn_text = ""
                current_bg = ""
                
            variant = "neutral"
            if "iniciar" in btn_text or current_bg in ["#2e7d32", "#b9f6ca", "#059669"]:
                variant = "start"
            elif "detener" in btn_text or "salir" in btn_text or current_bg in ["#d32f2f", "#ff8a80", "#e11d48"]:
                variant = "stop"
            elif "reiniciar" in btn_text or current_bg in ["#fbc02d", "#fbbf24", "#d97706"]:
                variant = "warning"
                
            style_button(child, variant)
            
        elif widget_type == "Frame" or widget_type == "Labelframe":
            style_frame(child)
            _style_child_widgets(child) # Recurse inside
            
        elif widget_type == "Listbox":
            style_listbox(child)
            
        elif widget_type == "Entry":
            style_entry(child)
            
        elif widget_type == "Checkbutton":
            style_checkbutton(child)
            
        elif widget_type == "Canvas":
            child.configure(bg=CARD_BG, highlightthickness=0)
            _style_child_widgets(child) # Recurse inside canvas items
            
        elif widget_type in ["Text", "ScrolledText"]:
            child.configure(
                bg=LISTBOX_BG,
                fg=FG_COLOR,
                insertbackground=FG_COLOR,
                font=("Consolas", 10),
                relief="flat",
                borderwidth=0,
                highlightbackground="#1e293b",
                highlightcolor=ACCENT_BLUE,
                highlightthickness=1
            )
            
        else:
            # Recurse inside other custom/layout containers if possible
            try:
                _style_child_widgets(child)
            except Exception:
                pass

def style_button(btn, variant="neutral"):
    bg = BTN_NEUTRAL
    hover_bg = BTN_NEUTRAL_HOVER
    fg = FG_COLOR
    if variant == "start":
        bg = BTN_START
        hover_bg = BTN_START_HOVER
    elif variant == "stop":
        bg = BTN_STOP
        hover_bg = BTN_STOP_HOVER
    elif variant == "warning":
        bg = BTN_WARNING
        hover_bg = BTN_WARNING_HOVER
        
    btn.normal_bg = bg
    btn.hover_bg = hover_bg
    btn.variant = variant
    
    btn.configure(
        bg=bg,
        fg=fg,
        activebackground=hover_bg,
        activeforeground=fg,
        font=("Segoe UI Semibold", 10),
        relief="flat",
        borderwidth=0,
        padx=12,
        pady=6,
        cursor="hand2"
    )
    
    # Bind hover animations once
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
        # Match parent background if it has a custom one
        try:
            bg = parent.cget("bg")
        except Exception:
            pass
            
    if title:
        lbl.configure(
            bg=bg,
            fg=ACCENT_BLUE,
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
        relief="flat",
        borderwidth=0,
        highlightbackground="#1e293b",
        highlightcolor=ACCENT_BLUE,
        highlightthickness=1,
        selectbackground=ACCENT_BLUE,
        selectforeground=BG_COLOR
    )

def style_frame(frame):
    # If the frame has root parent or is a container frame, make it CARD_BG
    bg = BG_COLOR
    parent = frame.master
    if parent:
        parent_class = parent.winfo_class()
        # Make root sub-frames stand out as cards
        if parent_class in ["Tk", "Toplevel"]:
            bg = CARD_BG
        else:
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
        relief="flat",
        borderwidth=0,
        highlightbackground="#1e293b",
        highlightcolor=ACCENT_BLUE,
        highlightthickness=1
    )

def style_checkbutton(cb):
    bg = CARD_BG
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
        selectcolor=LISTBOX_BG,  # Background of check indicator box
        font=FONT_MAIN,
        cursor="hand2"
    )
