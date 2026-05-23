; ---------------------------------------------
; Instalador de PiruWamp con Inno Setup
; ---------------------------------------------

[Setup]
AppName=PiruWamp
AppVersion=1.0
DefaultDirName=C:\PiruWamp
DefaultGroupName=PiruWamp
UninstallDisplayIcon={app}\piruwamp.exe
OutputDir=.
OutputBaseFilename=piruwamp-setup
Compression=lzma
SolidCompression=yes
PrivilegesRequired=admin

[Files]
; Incluir todos los archivos y carpetas limpios desde la carpeta .build
Source: ".build\*"; DestDir: "{app}"; Flags: ignoreversion recursesubdirs createallsubdirs;

[Icons]
; Acceso directo en el menú inicio
Name: "{group}\PiruWamp"; Filename: "{app}\piruwamp.exe"; IconFilename: "{app}\icon.ico"

; Acceso directo en el escritorio
Name: "{commondesktop}\PiruWamp"; Filename: "{app}\piruwamp.exe"; IconFilename: "{app}\icon.ico"

[Run]
; Ejecutar al final de la instalación (opcional)
Filename: "{app}\piruwamp.exe"; Description: "Iniciar PiruWamp"; Flags: nowait postinstall skipifsilent
