<?php
// Ouvrir le répertoire racine
$dir = '.';

// Lire les fichiers du répertoire
$files = scandir($dir);

// Filtrer pour ne garder que les fichiers (exclut . et ..)
$files = array_filter($files, function($file) use ($dir) {
    return is_file($dir . '/' . $file);
});

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des fichiers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        ul {
            list-style-type: none;
        }
        li {
            margin: 5px 0;
        }
        a {
            text-decoration: none;
            color: #333;
        }
        a:hover {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Liste des fichiers</h1>
    <ul>
        <?php foreach ($files as $file): ?>
            <li><a href="<?php echo htmlspecialchars($file); ?>" target="_blank"><?php echo htmlspecialchars($file); ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
