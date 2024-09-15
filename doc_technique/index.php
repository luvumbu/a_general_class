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
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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




    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../src/img/0.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</body>
</html>