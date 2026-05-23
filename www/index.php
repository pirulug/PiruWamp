<?php
$dirs = array_filter(glob('*'), 'is_dir');
$projects = [];
foreach ($dirs as $dir) {
    if ($dir !== '.' && $dir !== '..' && strtolower($dir) !== 'phpmyadmin') {
        $projects[] = $dir;
    }
}

// Handle phpinfo request
if (isset($_GET['phpinfo'])) {
    phpinfo();
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiruWamp - Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0a0d16;
            --card-bg: #131722;
            --text-main: #f3f4f6;
            --text-muted: #9ca3af;
            --accent: #38bdf8;
            --accent-hover: #0284c7;
            --card-border: rgba(255, 255, 255, 0.05);
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }
        .container {
            max-width: 1000px;
            width: 100%;
        }
        header {
            text-align: center;
            margin-bottom: 50px;
            animation: fadeInDown 0.8s ease-out;
        }
        h1 {
            font-size: 3.5rem;
            font-weight: 800;
            background: linear-gradient(135deg, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
            letter-spacing: -1px;
        }
        p.subtitle {
            color: var(--text-muted);
            font-size: 1.2rem;
        }
        
        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
            animation: fadeIn 1s ease-out;
        }
        .tool-card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 16px;
            padding: 25px;
            text-align: center;
            text-decoration: none;
            color: var(--text-main);
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .tool-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 10px 20px rgba(56, 189, 248, 0.15);
        }
        .tool-icon {
            font-size: 2.5rem;
        }
        .tool-card h3 { font-size: 1.2rem; color: var(--accent); }
        
        .projects-section {
            animation: fadeInUp 1s ease-out;
        }
        .projects-section h2 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            border-bottom: 1px solid var(--card-border);
            padding-bottom: 10px;
            display: inline-block;
        }
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }
        .project-card {
            background: linear-gradient(145deg, var(--card-bg), #1a1f2e);
            border: 1px solid var(--card-border);
            border-radius: 16px;
            padding: 25px;
            text-decoration: none;
            color: var(--text-main);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .project-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 4px;
            background: linear-gradient(90deg, #38bdf8, #818cf8);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0, 0.4);
            border-color: rgba(56, 189, 248, 0.3);
        }
        .project-card:hover::before {
            transform: scaleX(1);
        }
        .project-card h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .project-card h3::before {
            content: '📁';
            font-size: 1.2rem;
        }
        .project-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
            padding-left: 2px;
        }
        .project-card p::before {
            content: '🌐';
            font-size: 1rem;
        }
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: var(--card-bg);
            border-radius: 16px;
            border: 1px dashed var(--text-muted);
            color: var(--text-muted);
            grid-column: 1 / -1;
        }
        
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>PiruWamp</h1>
            <p class="subtitle">Entorno de Desarrollo Local</p>
        </header>

        <div class="tools-grid">
            <a href="/phpmyadmin" class="tool-card" target="_blank">
                <span class="tool-icon">🐘</span>
                <div>
                    <h3>phpMyAdmin</h3>
                    <p class="subtitle" style="font-size: 0.9rem">Gestor de base de datos</p>
                </div>
            </a>
            <a href="?phpinfo=1" class="tool-card" target="_blank">
                <span class="tool-icon">ℹ️</span>
                <div>
                    <h3>PHP Info</h3>
                    <p class="subtitle" style="font-size: 0.9rem">Configuración de PHP</p>
                </div>
            </a>
        </div>

        <div class="projects-section">
            <h2>Tus Proyectos</h2>
            <div class="projects-grid">
                <?php if (empty($projects)): ?>
                    <div class="empty-state">
                        <div style="font-size: 3.5rem; margin-bottom: 20px;">📂</div>
                        <h3>No hay proyectos todavía</h3>
                        <p style="margin-top: 10px">Crea una carpeta en tu directorio www o usa PiruWamp para crear un nuevo proyecto.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($projects as $project): ?>
                        <a href="http://<?php echo htmlspecialchars($project); ?>.test" class="project-card" target="_blank">
                            <h3><?php echo htmlspecialchars($project); ?></h3>
                            <p><?php echo htmlspecialchars($project); ?>.test</p>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>