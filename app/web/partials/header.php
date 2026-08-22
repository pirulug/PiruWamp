<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Pirulug" />
    <meta name="theme-color" content="#ff0055" />
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) : "PiruWamp Dashboard" ?></title>
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png" />
    <!-- Icons-->
    <link rel="stylesheet" href="./assets/plugins/bootstrapicons/bootstrapicons.css" />
    <!-- Css-->
    <link rel="stylesheet" href="./assets/css/piruadmin-fonts.css" />
    <link rel="stylesheet" href="./assets/css/piruadmin.css" />
    <!-- Theme-->
    <script>
      (function () {
        const storedTheme = localStorage.getItem("theme");
        const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
        const theme = storedTheme || (prefersDarkScheme ? "dark" : "light");
        document.documentElement.setAttribute("data-bs-theme", theme);
      })();
    </script>
  </head>
  <body>
    <!-- Loader-->
    <div class="show position-fixed translate-middle w-100 vh-100 top-50 start-50" id="spinner">
      <div class="loader-container">
        <div class="loader-circle"></div>
        <div class="loader-logo">
          <img src="./assets/img/logo.png" alt="Logo" width="40" height="40" />
        </div>
      </div>
    </div>
    <div class="wrapper">
      <!-- Sidebar-->
      <nav class="sidebar js-sidebar" id="sidebar">
        <div class="sidebar-content js-simplebar">
          <a class="sidebar-brand" href="./index.php">
            <span class="sidebar-brand-text align-middle">PiruWamp</span>
          </a>
          <a class="sidebar-close js-sidebar-close" href="#"><i class="bi bi-x-lg"></i></a>
          <ul class="sidebar-nav">
            <li class="sidebar-header">Navegacion</li>
            <li class="sidebar-item <?= $currentView === "dashboard" ? "active" : "" ?>">
              <a class="sidebar-link" href="./index.php?view=dashboard">
                <i class="align-middle bi bi-sliders"></i>
                <span class="align-middle">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item <?= $currentView === "sites" ? "active" : "" ?>">
              <a class="sidebar-link" href="./index.php?view=sites">
                <i class="align-middle bi bi-globe"></i>
                <span class="align-middle">Mis Sitios</span>
                <span class="sidebar-badge badge rounded-pill bg-primary"><?= count($projects) ?></span>
              </a>
            </li>
            <li class="sidebar-item <?= $currentView === "services" ? "active" : "" ?>">
              <a class="sidebar-link" href="./index.php?view=services">
                <i class="align-middle bi bi-hdd-stack"></i>
                <span class="align-middle">Servicios</span>
                <span class="sidebar-badge badge rounded-pill bg-success"><?= $activeServices ?></span>
              </a>
            </li>
            <li class="sidebar-item <?= $currentView === "system" ? "active" : "" ?>">
              <a class="sidebar-link" href="./index.php?view=system">
                <i class="align-middle bi bi-terminal"></i>
                <span class="align-middle">Sistema y Logs</span>
              </a>
            </li>

            <li class="sidebar-header">Herramientas</li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= $pmaUrl ?>" target="_blank">
                <i class="align-middle bi bi-database"></i>
                <span class="align-middle">phpMyAdmin</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php?action=phpinfo" target="_blank">
                <i class="align-middle bi bi-file-earmark-code"></i>
                <span class="align-middle">phpinfo()</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="sidebar-backdrop"></div>
      <div class="main">
