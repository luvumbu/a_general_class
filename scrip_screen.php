<script>
 


 
   
 

// Capture toutes les 5 secondes (5000 millisecondes)
setInterval(captureScreenshot, 5000);



</script>
        
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




// Écouter les mouvements de la souris et enregistrer les coordonnées
document.addEventListener('mousemove', function(event) {
    mouseX = event.clientX;
    mouseY = event.clientY;
});




var ok = new Information("../save_image_position.php"); // création de la classe 
ok.add("mouseX", mouseX); // ajout de l'information pour lenvoi 
ok.add("mouseY", mouseY); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 





const myTimeout = setTimeout(myGreeting, 200);

function myGreeting() {
  




 

   
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
 
}
}

// Capture toutes les 5 secondes (5000 millisecondes)
setInterval(captureScreenshot, 5000);



</script>
        
 

<style>
    body {
           overflow-x: hidden; /* Empêche le défilement */
    }
</style>