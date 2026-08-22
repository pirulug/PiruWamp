<?php
$dirs = array_filter(glob("*"), "is_dir");
$projects = [];
foreach ($dirs as $dir) {
    if ($dir !== "." && $dir !== ".." && strtolower($dir) !== "phpmyadmin") {
        $projects[] = $dir;
    }
}
sort($projects);

// Handle phpinfo request
if (isset($_GET["phpinfo"])) {
    phpinfo();
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiruWamp - Panel Local</title>
    <style>
        :root {
            --bg-color: #f8f9fa;
            --card-bg: #ffffff;
            --card-hover: #f1f3f5;
            --border-color: #e2e8f0;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --btn-bg: #ffffff;
            --btn-hover: #f1f3f5;
            --font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: var(--font-family);
            background-color: var(--bg-color);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            line-height: 1.5;
        }

        .container {
            max-width: 900px;
            width: 100%;
        }

        header {
            margin-bottom: 35px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-main);
            letter-spacing: -0.5px;
            margin-bottom: 6px;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 1rem;
        }

        .section-title {
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: var(--text-main);
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
            margin-bottom: 36px;
        }

        .tool-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 20px;
            text-decoration: none;
            color: var(--text-main);
            transition: background 0.15s ease, border-color 0.15s ease;
            display: block;
        }

        .tool-card:hover {
            background: var(--card-hover);
            border-color: #cbd5e1;
        }

        .tool-card h3 {
            font-size: 1.05rem;
            font-weight: 600;
            margin-bottom: 6px;
            color: var(--text-main);
        }

        .tool-card p {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        .projects-section {
            margin-bottom: 40px;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 16px;
        }

        .project-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 18px 20px;
            text-decoration: none;
            color: var(--text-main);
            transition: background 0.15s ease, border-color 0.15s ease;
            display: block;
        }

        .project-card:hover {
            background: var(--card-hover);
            border-color: #cbd5e1;
        }

        .project-card h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 4px;
            word-break: break-word;
        }

        .project-card .project-url {
            color: var(--text-muted);
            font-size: 0.85rem;
            font-family: Consolas, monospace;
        }

        .empty-state {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 30px 20px;
            text-align: center;
            color: var(--text-muted);
            grid-column: 1 / -1;
        }

        .empty-state h3 {
            font-size: 1rem;
            color: var(--text-main);
            margin-bottom: 6px;
        }

        .empty-state p {
            font-size: 0.9rem;
        }

        footer {
            margin-top: auto;
            padding-top: 30px;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.85rem;
            border-top: 1px solid var(--border-color);
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>PiruWamp</h1>
            <p class="subtitle">Servidor de Desarrollo Local</p>
        </header>

        <h2 class="section-title">Herramientas</h2>
        <div class="tools-grid">
            <a href="/phpmyadmin" class="tool-card" target="_blank">
                <h3>phpMyAdmin</h3>
                <p>Administrador de bases de datos MariaDB</p>
            </a>
            <a href="?phpinfo=1" class="tool-card" target="_blank">
                <h3>PHP Info</h3>
                <p>Configuración, directivas y extensiones activas</p>
            </a>
        </div>

        <div class="projects-section">
            <h2 class="section-title">Proyectos</h2>
            <div class="projects-grid">
                <?php if (empty($projects)): ?>
                    <div class="empty-state">
                        <h3>No hay proyectos disponibles</h3>
                        <p>Crea una carpeta en el directorio www para iniciar un nuevo proyecto.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($projects as $project): ?>
                        <a href="http://<?php echo htmlspecialchars($project); ?>.test" class="project-card" target="_blank">
                            <h3><?php echo htmlspecialchars($project); ?></h3>
                            <span class="project-url">http://<?php echo htmlspecialchars($project); ?>.test</span>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <footer>
            PiruWamp - Servidor web local
        </footer>
    </div>
</body>
</html>