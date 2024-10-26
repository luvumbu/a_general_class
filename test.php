 
 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capture d'écran avec souris</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <style>
        /* Style pour simuler un grand document */
        body {
            height: 2000px;
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <h1>Capture d'écran avec la position de la souris</h1>
    <div id="capture-zone">

    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, corporis? Esse non error fugit cum minima, adipisci, natus culpa harum, odit illo quae tempora saepe expedita perspiciatis soluta est. Ab?
    

        <p>Cette page est assez longue pour tester la capture d'écran avec un grand document.</p>
    </div>
    <script>
        let mouseX = 0;
        let mouseY = 0;

        // Écouter les mouvements de la souris et enregistrer les coordonnées
        document.addEventListener('mousemove', function(event) {
            mouseX = event.clientX;
            mouseY = event.clientY;
        });

        function captureScreenshot() {
            html2canvas(document.body).then(function(canvas) {
                const context = canvas.getContext('2d');

                // Dessiner un curseur personnalisé à la position actuelle de la souris
                context.beginPath();
                context.arc(mouseX, mouseY, 10, 0, 2 * Math.PI); // Dessine un cercle à la position de la souris
                context.fillStyle = 'rgba(255, 0, 0, 0.2)'; // Couleur du curseur avec opacité 0.2
                context.fill();
                context.strokeStyle = 'rgba(0, 0, 0, 0.5)'; // Contour noir avec opacité 0.5
                context.stroke();

                // Convertir le canevas en données base64 (image)
                var imageData = canvas.toDataURL("image/png");

                // Créer un objet FormData pour envoyer l'image
                var formData = new FormData();
                formData.append('image_data', imageData);

                // Envoyer les données à save_image.php via fetch
                fetch('../save_image.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    console.log('Réponse du serveur:', data);
                })
                .catch(error => {
                    console.error('Erreur lors de l\'envoi des données:', error);
                });
            }).catch(function(error) {
                console.error("Erreur lors de la capture d'écran :", error);
            });
        }

        // Capture toutes les 5 secondes (5000 millisecondes)
        setInterval(captureScreenshot, 5000);
    </script>
</body>
</html>
