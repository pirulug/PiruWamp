import ctypes
import ctypes.wintypes as wintypes
import os
import threading
from ..core.logger import logger

# Constantes Win32
WM_NULL = 0x0000
WM_DESTROY = 0x0002
WM_CLOSE = 0x0010
WM_USER = 0x0400
WM_TRAYICON = WM_USER + 20
WM_LBUTTONDBLCLK = 0x0203
WM_RBUTTONUP = 0x0205

NIM_ADD = 0x00000000
NIM_MODIFY = 0x00000001
NIM_DELETE = 0x00000002

NIF_MESSAGE = 0x00000001
NIF_ICON = 0x00000002
NIF_TIP = 0x00000004
NIF_INFO = 0x00000010

NIIF_INFO = 0x00000001

IMAGE_ICON = 1
LR_LOADFROMFILE = 0x00000010
LR_DEFAULTSIZE = 0x00000040
IDI_APPLICATION = 32512

MF_STRING = 0x00000000
MF_SEPARATOR = 0x00000800
TPM_LEFTALIGN = 0x0000
TPM_RIGHTBUTTON = 0x0002
TPM_RETURNCMD = 0x0100

ID_SHOW = 1001
ID_TOGGLE_APACHE = 1002
ID_TOGGLE_MARIADB = 1003
ID_OPEN_LOCALHOST = 1004
ID_OPEN_PHPMYADMIN = 1005
ID_EXIT = 1006

LRESULT = ctypes.c_ssize_t
WNDPROC = ctypes.WINFUNCTYPE(LRESULT, wintypes.HWND, wintypes.UINT, wintypes.WPARAM, wintypes.LPARAM)

user32 = ctypes.windll.user32
shell32 = ctypes.windll.shell32
kernel32 = ctypes.windll.kernel32


class WNDCLASSEXW(ctypes.Structure):
    _fields_ = [
        ("cbSize", wintypes.UINT),
        ("style", wintypes.UINT),
        ("lpfnWndProc", WNDPROC),
        ("cbClsExtra", ctypes.c_int),
        ("cbWndExtra", ctypes.c_int),
        ("hInstance", wintypes.HINSTANCE),
        ("hIcon", wintypes.HICON),
        ("hCursor", wintypes.HANDLE),
        ("hbrBackground", wintypes.HBRUSH),
        ("lpszMenuName", wintypes.LPCWSTR),
        ("lpszClassName", wintypes.LPCWSTR),
        ("hIconSm", wintypes.HICON),
    ]


class NOTIFYICONDATAW(ctypes.Structure):
    _fields_ = [
        ("cbSize", wintypes.DWORD),
        ("hWnd", wintypes.HWND),
        ("uID", wintypes.UINT),
        ("uFlags", wintypes.UINT),
        ("uCallbackMessage", wintypes.UINT),
        ("hIcon", wintypes.HICON),
        ("szTip", wintypes.WCHAR * 128),
        ("dwState", wintypes.DWORD),
        ("dwStateMask", wintypes.DWORD),
        ("szInfo", wintypes.WCHAR * 256),
        ("uTimeoutOrVersion", wintypes.UINT),
        ("szInfoTitle", wintypes.WCHAR * 64),
        ("dwInfoFlags", wintypes.DWORD),
        ("guidItem", ctypes.c_ubyte * 16),
        ("hBalloonIcon", wintypes.HICON),
    ]


# Configuracion estricta de tipos para compatibilidad de 64 bits
user32.DefWindowProcW.argtypes = [wintypes.HWND, wintypes.UINT, wintypes.WPARAM, wintypes.LPARAM]
user32.DefWindowProcW.restype = LRESULT
user32.RegisterClassExW.argtypes = [ctypes.POINTER(WNDCLASSEXW)]
user32.RegisterClassExW.restype = wintypes.ATOM
user32.CreateWindowExW.argtypes = [
    wintypes.DWORD, wintypes.LPCWSTR, wintypes.LPCWSTR, wintypes.DWORD,
    ctypes.c_int, ctypes.c_int, ctypes.c_int, ctypes.c_int,
    wintypes.HWND, wintypes.HMENU, wintypes.HINSTANCE, wintypes.LPVOID
]
user32.CreateWindowExW.restype = wintypes.HWND
user32.GetMessageW.argtypes = [ctypes.POINTER(wintypes.MSG), wintypes.HWND, wintypes.UINT, wintypes.UINT]
user32.GetMessageW.restype = wintypes.BOOL
user32.TranslateMessage.argtypes = [ctypes.POINTER(wintypes.MSG)]
user32.DispatchMessageW.argtypes = [ctypes.POINTER(wintypes.MSG)]
user32.PostMessageW.argtypes = [wintypes.HWND, wintypes.UINT, wintypes.WPARAM, wintypes.LPARAM]
user32.PostMessageW.restype = wintypes.BOOL
user32.DestroyWindow.argtypes = [wintypes.HWND]
user32.LoadImageW.argtypes = [wintypes.HINSTANCE, wintypes.LPCWSTR, wintypes.UINT, ctypes.c_int, ctypes.c_int, wintypes.UINT]
user32.LoadImageW.restype = wintypes.HANDLE
user32.LoadIconW.argtypes = [wintypes.HINSTANCE, wintypes.LPCWSTR]
user32.LoadIconW.restype = wintypes.HICON
user32.DestroyIcon.argtypes = [wintypes.HICON]
user32.CreatePopupMenu.restype = wintypes.HMENU
user32.AppendMenuW.argtypes = [wintypes.HMENU, wintypes.UINT, wintypes.UINT, wintypes.LPCWSTR]
user32.SetMenuDefaultItem.argtypes = [wintypes.HMENU, wintypes.UINT, wintypes.UINT]
user32.TrackPopupMenu.argtypes = [wintypes.HMENU, wintypes.UINT, ctypes.c_int, ctypes.c_int, ctypes.c_int, wintypes.HWND, ctypes.c_void_p]
user32.TrackPopupMenu.restype = wintypes.BOOL
user32.DestroyMenu.argtypes = [wintypes.HMENU]
user32.SetForegroundWindow.argtypes = [wintypes.HWND]
user32.GetCursorPos.argtypes = [ctypes.POINTER(wintypes.POINT)]
user32.RegisterWindowMessageW.argtypes = [wintypes.LPCWSTR]
user32.RegisterWindowMessageW.restype = wintypes.UINT
shell32.Shell_NotifyIconW.argtypes = [wintypes.DWORD, ctypes.POINTER(NOTIFYICONDATAW)]
shell32.Shell_NotifyIconW.restype = wintypes.BOOL
kernel32.GetModuleHandleW.argtypes = [wintypes.LPCWSTR]
kernel32.GetModuleHandleW.restype = wintypes.HINSTANCE


class TrayIconManager:
    """Administra el icono de PiruWamp en la bandeja del sistema (iconos ocultos de Windows)."""

    def __init__(
        self,
        icon_path=None,
        tooltip="PiruWamp",
        on_show=None,
        on_toggle_apache=None,
        on_toggle_mariadb=None,
        on_open_localhost=None,
        on_open_phpmyadmin=None,
        on_exit=None,
        is_apache_running=None,
        is_mariadb_running=None,
    ):
        self.icon_path = icon_path
        self.tooltip = tooltip
        self.on_show = on_show
        self.on_toggle_apache = on_toggle_apache
        self.on_toggle_mariadb = on_toggle_mariadb
        self.on_open_localhost = on_open_localhost
        self.on_open_phpmyadmin = on_open_phpmyadmin
        self.on_exit = on_exit
        self.is_apache_running = is_apache_running
        self.is_mariadb_running = is_mariadb_running

        self.hwnd = None
        self.hicon = None
        self._owns_icon = False
        self._thread = None
        self._started = False
        self._nid_added = False
        self._wm_taskbar_created = user32.RegisterWindowMessageW("TaskbarCreated")
        self._wndproc_ref = None
        self._ready_event = threading.Event()

    @property
    def is_active(self):
        return self._nid_added

    def start(self):
        if self._started:
            return
        self._started = True
        self._thread = threading.Thread(target=self._run_loop, daemon=True)
        self._thread.start()
        self._ready_event.wait(timeout=2.0)

    def stop(self):
        if not self._started:
            return
        self._started = False
        if self.hwnd:
            try:
                user32.PostMessageW(self.hwnd, WM_CLOSE, 0, 0)
            except Exception:
                pass
        if self._thread and self._thread.is_alive() and threading.current_thread() != self._thread:
            self._thread.join(timeout=2.0)

    def show_notification(self, title, message):
        if not self.hwnd or not self._nid_added:
            return
        try:
            nid = self._build_nid(NIF_INFO)
            nid.szInfoTitle = title[:63]
            nid.szInfo = message[:255]
            nid.dwInfoFlags = NIIF_INFO
            shell32.Shell_NotifyIconW(NIM_MODIFY, ctypes.byref(nid))
        except Exception as e:
            logger.log(f"Error mostrando notificacion en bandeja: {e}", "Tray")

    def _load_icon(self):
        if self.icon_path and os.path.exists(self.icon_path):
            hicon = user32.LoadImageW(
                None,
                self.icon_path,
                IMAGE_ICON,
                0,
                0,
                LR_LOADFROMFILE | LR_DEFAULTSIZE,
            )
            if hicon:
                self._owns_icon = True
                return hicon
        self._owns_icon = False
        return user32.LoadIconW(None, ctypes.cast(IDI_APPLICATION, wintypes.LPCWSTR))

    def _build_nid(self, flags):
        nid = NOTIFYICONDATAW()
        nid.cbSize = ctypes.sizeof(NOTIFYICONDATAW)
        nid.hWnd = self.hwnd
        nid.uID = 1
        nid.uFlags = flags
        nid.uCallbackMessage = WM_TRAYICON
        nid.hIcon = self.hicon
        nid.szTip = self.tooltip[:127]
        return nid

    def _add_tray_icon(self):
        if not self.hwnd:
            return
        nid = self._build_nid(NIF_MESSAGE | NIF_ICON | NIF_TIP)
        if shell32.Shell_NotifyIconW(NIM_ADD, ctypes.byref(nid)):
            self._nid_added = True

    def _remove_tray_icon(self):
        if not self.hwnd or not self._nid_added:
            return
        nid = NOTIFYICONDATAW()
        nid.cbSize = ctypes.sizeof(NOTIFYICONDATAW)
        nid.hWnd = self.hwnd
        nid.uID = 1
        shell32.Shell_NotifyIconW(NIM_DELETE, ctypes.byref(nid))
        self._nid_added = False

    def _show_context_menu(self):
        hmenu = user32.CreatePopupMenu()
        if not hmenu:
            return

        try:
            apache_running = bool(self.is_apache_running()) if self.is_apache_running else False
            mariadb_running = bool(self.is_mariadb_running()) if self.is_mariadb_running else False

            user32.AppendMenuW(hmenu, MF_STRING, ID_SHOW, "Abrir PiruWamp")
            user32.SetMenuDefaultItem(hmenu, ID_SHOW, 0)
            user32.AppendMenuW(hmenu, MF_SEPARATOR, 0, None)
            user32.AppendMenuW(
                hmenu,
                MF_STRING,
                ID_TOGGLE_APACHE,
                "Detener Apache" if apache_running else "Iniciar Apache",
            )
            user32.AppendMenuW(
                hmenu,
                MF_STRING,
                ID_TOGGLE_MARIADB,
                "Detener MariaDB" if mariadb_running else "Iniciar MariaDB",
            )
            user32.AppendMenuW(hmenu, MF_SEPARATOR, 0, None)
            user32.AppendMenuW(hmenu, MF_STRING, ID_OPEN_LOCALHOST, "Abrir Localhost")
            user32.AppendMenuW(hmenu, MF_STRING, ID_OPEN_PHPMYADMIN, "Abrir phpMyAdmin")
            user32.AppendMenuW(hmenu, MF_SEPARATOR, 0, None)
            user32.AppendMenuW(hmenu, MF_STRING, ID_EXIT, "Salir")

            pt = wintypes.POINT()
            user32.GetCursorPos(ctypes.byref(pt))
            user32.SetForegroundWindow(self.hwnd)
            cmd = user32.TrackPopupMenu(
                hmenu,
                TPM_LEFTALIGN | TPM_RIGHTBUTTON | TPM_RETURNCMD,
                pt.x,
                pt.y,
                0,
                self.hwnd,
                None,
            )
            user32.PostMessageW(self.hwnd, WM_NULL, 0, 0)

            if cmd == ID_SHOW and self.on_show:
                self.on_show()
            elif cmd == ID_TOGGLE_APACHE and self.on_toggle_apache:
                self.on_toggle_apache()
            elif cmd == ID_TOGGLE_MARIADB and self.on_toggle_mariadb:
                self.on_toggle_mariadb()
            elif cmd == ID_OPEN_LOCALHOST and self.on_open_localhost:
                self.on_open_localhost()
            elif cmd == ID_OPEN_PHPMYADMIN and self.on_open_phpmyadmin:
                self.on_open_phpmyadmin()
            elif cmd == ID_EXIT and self.on_exit:
                self.on_exit()
        finally:
            user32.DestroyMenu(hmenu)

    def _wnd_proc(self, hwnd, msg, wparam, lparam):
        if msg == WM_TRAYICON:
            if lparam == WM_LBUTTONDBLCLK:
                if self.on_show:
                    self.on_show()
                return 0
            if lparam == WM_RBUTTONUP:
                self._show_context_menu()
                return 0
        elif msg == self._wm_taskbar_created:
            self._add_tray_icon()
            return 0
        elif msg == WM_CLOSE:
            self._remove_tray_icon()
            user32.DestroyWindow(hwnd)
            return 0
        elif msg == WM_DESTROY:
            self._remove_tray_icon()
            user32.PostQuitMessage(0)
            return 0

        return user32.DefWindowProcW(hwnd, msg, wparam, lparam)

    def _run_loop(self):
        try:
            hinstance = kernel32.GetModuleHandleW(None)
            class_name = "PiruWampTrayWindowClass"
            self._wndproc_ref = WNDPROC(self._wnd_proc)

            wc = WNDCLASSEXW()
            wc.cbSize = ctypes.sizeof(WNDCLASSEXW)
            wc.lpfnWndProc = self._wndproc_ref
            wc.hInstance = hinstance
            wc.lpszClassName = class_name
            user32.RegisterClassExW(ctypes.byref(wc))

            self.hwnd = user32.CreateWindowExW(
                0, class_name, "PiruWampTrayWindow", 0,
                0, 0, 0, 0, None, None, hinstance, None
            )
            if not self.hwnd:
                logger.log("No se pudo crear la ventana de bandeja del sistema.", "Tray")
                self._ready_event.set()
                return

            self.hicon = self._load_icon()
            self._add_tray_icon()
            self._ready_event.set()

            msg = wintypes.MSG()
            while user32.GetMessageW(ctypes.byref(msg), None, 0, 0) > 0:
                user32.TranslateMessage(ctypes.byref(msg))
                user32.DispatchMessageW(ctypes.byref(msg))
        except Exception as e:
            logger.log(f"Error en bucle de bandeja del sistema: {e}", "Tray")
            self._ready_event.set()
        finally:
            self._remove_tray_icon()
            if self._owns_icon and self.hicon:
                try:
                    user32.DestroyIcon(self.hicon)
                except Exception:
                    pass
                self.hicon = None
            self.hwnd = None
