<?php
$imagick_loaded = extension_loaded("imagick");
$imagick_version = $imagick_loaded ? phpversion("imagick") : null;

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
    <title>PiruWamp</title>
</head>
<body>
    <h1>PiruWamp</h1>
    <p>Servidor de Desarrollo Local</p>
    <hr>

    <h2>Estado del Servidor</h2>
    <ul>
        <li><strong>PHP:</strong> <?php echo phpversion(); ?></li>
        <li>
            <strong>Imagick:</strong> 
            <?php if ($imagick_loaded): ?>
                Activo (Version <?php echo htmlspecialchars((string)$imagick_version); ?>)
            <?php else: ?>
                Inactivo
            <?php endif; ?>
        </li>
    </ul>

    <h2>Herramientas</h2>
    <ul>
        <li><a href="/phpmyadmin" target="_blank">phpMyAdmin</a></li>
        <li><a href="?phpinfo=1" target="_blank">PHP Info</a></li>
    </ul>

    <h2>Proyectos</h2>
    <?php if (empty($projects)): ?>
        <p>No hay proyectos en la carpeta www.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($projects as $project): ?>
                <li>
                    <a href="http://<?php echo htmlspecialchars($project); ?>.test" target="_blank"><?php echo htmlspecialchars($project); ?></a>
                    (http://<?php echo htmlspecialchars($project); ?>.test)
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <hr>
    <p><small>PiruWamp</small></p>
</body>
</html>