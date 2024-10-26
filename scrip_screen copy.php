<script>
 
 let mouseX = 0;
let mouseY = 0;

// Écouter les mouvements de la souris et enregistrer les coordonnées
document.addEventListener('mousemove', function(event) {
    mouseX = event.clientX;
    mouseY = event.clientY;
});

function captureScreenshot() {


    let windowHeight = window.innerHeight;
console.log("Hauteur de la fenêtre visible:", windowHeight);



    /*
    html2canvas(document.body, {
        scale: window.devicePixelRatio // Ajuste l'échelle de capture en fonction du zoom ou de la taille de l'écran
    }).then(function(canvas) {
        const context = canvas.getContext('2d');

        // Ajuster la taille du curseur en fonction de l'échelle
        const cursorSize = 10 * window.devicePixelRatio; // Redimensionner en fonction du zoom de la page

        // Dessiner un curseur personnalisé à la position actuelle de la souris
        context.beginPath();
        context.arc(mouseX, mouseY, cursorSize, 0, 2 * Math.PI); // Taille ajustée du curseur
        context.fillStyle = 'rgba(255, 0, 0, 0.2)'; // Couleur du curseur avec opacité 0.2
        context.fill();
        context.strokeStyle = 'rgba(0, 0, 0, 0.5)'; // Contour noir avec opacité 0.5
        context.stroke();

        // Ajouter les coordonnées de la souris en texte à côté du curseur
        context.font = '14px Arial';
        context.fillStyle = 'black'; // Couleur du texte
        context.fillText(`X: ${mouseX}, Y: ${mouseY}`, mouseX + 15, mouseY - 15); // Affiche les coordonnées juste à côté du curseur

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
    */
}

// Capture toutes les 5 secondes (5000 millisecondes)
setInterval(captureScreenshot, 5000);



</script>
        
<script>
 // Fonction pour générer une couleur aléatoire
function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Créer les carrés
function createSquares() {
    const screenWidth = window.innerWidth;  // Largeur de l'écran
    const screenHeight = window.innerHeight; // Hauteur de l'écran
    const squareSize = 100; // Taille de chaque carré (100px x 100px)

    // Multiplier par 3 le nombre de carrés
    const numCols = Math.floor(screenWidth / squareSize) * 1.8;  // Nombre de colonnes
    const numRows = Math.floor(screenHeight / squareSize) * 1.8; // Nombre de lignes

    // Créer un conteneur pour les carrés
    const container = document.createElement('div');
    container.style.display = 'flex';
    container.style.flexWrap = 'wrap'; // Pour que les carrés aillent à la ligne automatiquement
    container.style.width = '100vw'; // Largeur égale à toute la fenêtre
    container.style.height = '100vh'; // Hauteur égale à toute la fenêtre
    container.style.position = 'absolute';
    container.style.top = '0';
    container.style.left = '0';

    // Générer les carrés
    for (let i = 0; i < numCols * numRows; i++) {
        const square = document.createElement('div');
        square.style.width = `${squareSize}px`;
        square.style.height = `${squareSize}px`;
        square.style.backgroundColor = getRandomColor(); // Appliquer une couleur aléatoire
        square.style.opacity = '0.3'; // Appliquer l'opacité de 0.3
        container.appendChild(square);
    }

    // Ajouter le conteneur au body
    document.body.appendChild(container);
}

// Exécuter la fonction pour créer les carrés
createSquares();

// Ajuster les carrés si la fenêtre est redimensionnée
window.addEventListener('resize', () => {
    document.body.innerHTML = ''; // Supprime les anciens carrés
    createSquares(); // Crée les nouveaux carrés adaptés à la nouvelle taille
});
</script>

<style>
    body {
      
    }
</style>