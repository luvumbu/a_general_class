<?php
// Fonction pour pixeliser l'image
function pixeliserImage($imagePath, $pixelSize = 10) {
    // Vérification si le fichier image existe
    if (!file_exists($imagePath)) {
        die("L'image n'existe pas.");
    }

    // Charger l'image
    $sourceImage = imagecreatefromjpeg($imagePath);
    if (!$sourceImage) {
        die("Erreur lors du chargement de l'image.");
    }

    // Obtenir les dimensions de l'image
    $width = imagesx($sourceImage);
    $height = imagesy($sourceImage);

    // Créer une nouvelle image avec les mêmes dimensions
    $outputImage = imagecreatetruecolor($width, $height);

    // Parcourir chaque pixel selon la taille de la "grille"
    for ($y = 0; $y < $height; $y += $pixelSize) {
        for ($x = 0; $x < $width; $x += $pixelSize) {
            // Obtenir la couleur moyenne de la région de pixels
            $rgb = imagecolorat($sourceImage, $x, $y);
            $colors = imagecolorsforindex($sourceImage, $rgb);

            // Remplir la région avec cette couleur
            $color = imagecolorallocate($outputImage, $colors['red'], $colors['green'], $colors['blue']);
            imagefilledrectangle($outputImage, $x, $y, $x + $pixelSize - 1, $y + $pixelSize - 1, $color);
        }
    }

    // Afficher l'image pixelisée
    header('Content-Type: image/jpeg');
    imagejpeg($outputImage);

    // Libérer la mémoire
    imagedestroy($sourceImage);
    imagedestroy($outputImage);
}

// Chemin de l'image dans la racine (exemple: "image.jpg")
$imagePath = '404.png';

// Appeler la fonction pour pixeliser l'image
pixeliserImage($imagePath, 10);
