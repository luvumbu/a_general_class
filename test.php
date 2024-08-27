<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher l'image sélectionnée</title>
</head>
<body>
    <h2>Formulaire pour afficher l'image sélectionnée</h2>

    <!-- Formulaire de sélection de fichier -->
    <form id="imageForm">
        <label for="imageInput">Sélectionnez une image :</label>
        <input type="file" id="imageInput" accept="image/*">
        <button type="button" onclick="afficherImage()">Afficher l'image</button>
    </form>

    <!-- Zone pour afficher l'image -->
    <div id="imageDisplay" style="margin-top: 20px;">
        <img id="imagePreview" src="" alt="Aperçu de l'image" style="max-width: 100%; display: none;">
    </div>

    <script>
        function afficherImage() {
            // Récupérer l'input file et l'élément img
            var fileInput = document.getElementById('imageInput');
            var imagePreview = document.getElementById('imagePreview');
            var imageDisplay = document.getElementById('imageDisplay');

            // Vérifier si un fichier est sélectionné
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                // Lorsque le fichier est lu
                reader.onload = function(e) {
                    // Mettre à jour la source de l'image et l'afficher
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                };

                // Lire le fichier image sélectionné
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                // Cacher l'image si aucun fichier n'est sélectionné
                imagePreview.style.display = 'none';
            }
        }
    </script>
</body>
</html>
