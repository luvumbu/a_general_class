<?php
// Création d'un tableau à deux dimensions
$tableau = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9, 10]
];

// Compter le nombre d'éléments dans la première dimension (le nombre de sous-tableaux)
$nombreLignes = count($tableau);

// Compter le nombre d'éléments dans chaque sous-tableau (deuxième dimension)
$nombreColonnesParLigne = array_map('count', $tableau);

// Afficher les résultats
echo "Nombre de lignes (première dimension) : " . $nombreLignes . "\n";
echo "Nombre de colonnes par ligne (deuxième dimension) : " . implode(", ", $nombreColonnesParLigne) . "\n";
?>
