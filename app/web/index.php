<?php
// PiruWamp Server Web Dashboard - Modular Controller & Router
header("X-Content-Type-Options: nosniff");
mysqli_report(MYSQLI_REPORT_OFF);

// Accion especial phpinfo
if (isset($_GET["action"]) && $_GET["action"] === "phpinfo") {
    phpinfo();
    exit;
}

$wampRoot = realpath(__DIR__ . "/../../");
$wwwDir = realpath($wampRoot . "/www");
$crashLogFile = $wampRoot . "/crash.log";

// 1. PHP y Servidor Info
$phpVersion = PHP_VERSION;
$phpArchitecture = PHP_INT_SIZE === 8 ? "x64" : "x86";
$phpHandler = php_sapi_name();
$memoryLimit = ini_get("memory_limit");
$maxExecutionTime = ini_get("max_execution_time") . "s";
$uploadMaxFilesize = ini_get("upload_max_filesize");
$postMaxSize = ini_get("post_max_size");
$loadedExtensions = get_loaded_extensions();
natcasesort($loadedExtensions);

// 2. Apache Info
$apacheVersion = function_exists("apache_get_version") ? apache_get_version() : "Apache 2.4.68";

// 3. MariaDB Connection & Databases
$dbHost = "127.0.0.1";
$dbUser = "root";
$dbPass = "";
$dbPort = 3306;
$dbStatus = false;
$dbVersion = "v11.4.5";
$databasesList = [];

$mysqli = @new mysqli($dbHost, $dbUser, $dbPass, "", $dbPort);
if ($mysqli && !$mysqli->connect_errno) {
    $dbStatus = true;
    $dbVersion = "v" . preg_replace("/[^0-9.]/", "", $mysqli->server_info);
    
    $dbQuery = $mysqli->query("
        SELECT table_schema AS db_name, 
               ROUND(SUM(data_length + index_length) / 1024 / 1024, 2) AS size_mb,
               COUNT(table_name) AS table_count
        FROM information_schema.tables 
        GROUP BY table_schema
    ");
    
    $systemDbs = ["information_schema", "mysql", "performance_schema", "sys"];
    if ($dbQuery) {
        while ($row = $dbQuery->fetch_assoc()) {
            $isSys = in_array(strtolower($row["db_name"]), $systemDbs);
            $databasesList[] = [
                "name" => $row["db_name"],
                "size_mb" => $row["size_mb"] ? $row["size_mb"] : "0.01",
                "tables" => (int)$row["table_count"],
                "is_system" => $isSys
            ];
        }
    }
}

// 4. Proyectos en www/
$projects = [];
if ($wwwDir && is_dir($wwwDir)) {
    $items = scandir($wwwDir);
    foreach ($items as $item) {
        if ($item === "." || $item === ".." || $item === ".gitignore" || $item === "index.php") {
            continue;
        }
        $projectPath = $wwwDir . "/" . $item;
        if (is_dir($projectPath)) {
            $framework = "PHP App";
            $icon = "bi-filetype-php";
            $color = "text-success";

            if (file_exists($projectPath . "/wp-config.php") || file_exists($projectPath . "/wp-includes")) {
                $framework = "WordPress";
                $icon = "bi-wordpress";
                $color = "text-primary";
            } elseif (file_exists($projectPath . "/artisan") || file_exists($projectPath . "/bootstrap/app.php")) {
                $framework = "Laravel";
                $icon = "bi-layers-fill";
                $color = "text-danger";
            } elseif (file_exists($projectPath . "/composer.json")) {
                $framework = "Composer";
                $icon = "bi-box-seam";
                $color = "text-info";
            } elseif (file_exists($projectPath . "/package.json")) {
                $framework = "Node.js";
                $icon = "bi-code-slash";
                $color = "text-warning";
            } elseif (file_exists($projectPath . "/index.html") && !file_exists($projectPath . "/index.php")) {
                $framework = "HTML";
                $icon = "bi-filetype-html";
                $color = "text-secondary";
            }

            $projects[] = [
                "name" => $item,
                "domain" => $item . ".test",
                "url" => "http://" . $item . ".test",
                "local_url" => "http://localhost/" . $item,
                "framework" => $framework,
                "icon" => $icon,
                "color" => $color,
                "path" => $projectPath
            ];
        }
    }
}

// 5. phpMyAdmin URL
$pmaUrl = "http://piruwam.localhost/phpmyadmin/";

// 6. Servicios
$services = [
    [
        "name" => "Apache HTTP",
        "category" => "Servidor Web",
        "icon" => "bi-hdd-network",
        "bg" => "#e11d48",
        "status" => "Online (" . $apacheVersion . ")",
        "active" => true,
        "port" => "80"
    ],
    [
        "name" => "MariaDB",
        "category" => "Base de Datos",
        "icon" => "bi-database",
        "bg" => "#2563eb",
        "status" => ($dbStatus ? "Conectado (" . $dbVersion . ")" : "Detenido"),
        "active" => $dbStatus,
        "port" => "3306"
    ],
    [
        "name" => "phpMyAdmin",
        "category" => "Administracion",
        "icon" => "bi-table",
        "bg" => "#059669",
        "status" => "v5.2.2",
        "active" => true,
        "port" => "80/alias",
        "url" => $pmaUrl
    ],
    [
        "name" => "PHP Engine",
        "category" => "Runtime",
        "icon" => "bi-filetype-php",
        "bg" => "#7c3aed",
        "status" => "v" . $phpVersion . " (" . $phpArchitecture . ")",
        "active" => true,
        "port" => $phpHandler
    ]
];

$activeServices = count(array_filter($services, function($s) { return $s["active"]; }));

// 7. Recursos
$diskTotal = @disk_total_space(__DIR__);
$diskFree = @disk_free_space(__DIR__);
$diskUsed = $diskTotal - $diskFree;
$diskPercent = $diskTotal > 0 ? round(($diskUsed / $diskTotal) * 100, 1) : 0;
$memUsedGb = round(($diskUsed / (1024 * 1024 * 1024)), 2);
$memTotalGb = round(($diskTotal / (1024 * 1024 * 1024)), 2);

// 8. Logs recientes
$recentLogs = [];
if (file_exists($crashLogFile)) {
    $lines = file($crashLogFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines) {
        $recentLogs = array_slice(array_reverse($lines), 0, 30);
    }
}

// 9. Vista actual
$allowedViews = ["dashboard", "sites", "services", "system"];
$currentView = isset($_GET["view"]) && in_array($_GET["view"], $allowedViews) ? $_GET["view"] : "dashboard";

$pageTitles = [
    "dashboard" => "Dashboard - PiruWamp",
    "sites" => "Mis Sitios - PiruWamp",
    "services" => "Servicios - PiruWamp",
    "system" => "Sistema y Logs - PiruWamp"
];
$pageTitle = $pageTitles[$currentView];

// 10. Renderizar con Partials
require_once __DIR__ . "/partials/header.php";
require_once __DIR__ . "/partials/navbar.php";

$viewFile = __DIR__ . "/views/" . $currentView . ".php";
if (file_exists($viewFile)) {
    require_once $viewFile;
} else {
    require_once __DIR__ . "/views/dashboard.php";
}

require_once __DIR__ . "/partials/footer.php";
