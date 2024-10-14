<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architecture Projet Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        canvas {
            border: 3px solid #333;
            background-color: #fff;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<canvas id="architectureCanvas" width="1000" height="600"></canvas>
<button id="downloadBtn">Télécharger le Diagramme</button>

<script>
    const canvas = document.getElementById('architectureCanvas');
    const ctx = canvas.getContext('2d');

    // Fonction pour dessiner des rectangles avec texte et couleur
    function drawBox(x, y, width, height, color, text) {
        ctx.fillStyle = color;
        ctx.fillRect(x, y, width, height);
        ctx.strokeStyle = '#000';
        ctx.lineWidth = 3;
        ctx.strokeRect(x, y, width, height);

        ctx.fillStyle = '#fff';
        ctx.font = '18px Arial';
        ctx.fillText(text, x + 10, y + height / 2);
    }

    // Fonction pour dessiner des flèches
    function drawArrow(fromX, fromY, toX, toY) {
        ctx.strokeStyle = '#333';
        ctx.lineWidth = 2;
        ctx.beginPath();
        ctx.moveTo(fromX, fromY);
        ctx.lineTo(toX, toY);
        ctx.stroke();

        const headLength = 10; 
        const angle = Math.atan2(toY - fromY, toX - fromX);
        ctx.beginPath();
        ctx.moveTo(toX, toY);
        ctx.lineTo(toX - headLength * Math.cos(angle - Math.PI / 6), toY - headLength * Math.sin(angle - Math.PI / 6));
        ctx.lineTo(toX - headLength * Math.cos(angle + Math.PI / 6), toY - headLength * Math.sin(angle + Math.PI / 6));
        ctx.lineTo(toX, toY);
        ctx.fillStyle = '#333';
        ctx.fill();
    }

    // Dessin de l'architecture web avec des couleurs attrayantes
    drawBox(50, 100, 200, 100, '#3498db', 'Client (Navigateur)');
    drawBox(300, 100, 200, 100, '#1abc9c', 'Serveur Web (Apache/Nginx)');
    drawBox(550, 100, 200, 100, '#e74c3c', 'Serveur App (Node.js/PHP)');
    drawBox(300, 300, 200, 100, '#f1c40f', 'Base de Données (MySQL/MongoDB)');
    drawBox(550, 300, 200, 100, '#9b59b6', 'API Externe (REST)');

    // Dessin des flèches avec du texte
    drawArrow(250, 150, 300, 150);  // Client -> Serveur Web
    drawArrow(500, 150, 550, 150);  // Serveur Web -> Serveur App
    drawArrow(400, 200, 400, 300);  // Serveur Web -> Base de Données
    drawArrow(650, 200, 650, 300);  // Serveur App -> API Externe

    // Légendes des flèches
    ctx.fillStyle = '#000';
    ctx.font = '14px Arial';
    ctx.fillText('Requête HTTP', 260, 140);
    ctx.fillText('Appel API', 610, 190);
    ctx.fillText('Requêtes DB', 410, 260);

    // Fonction pour télécharger l'image
    document.getElementById('downloadBtn').addEventListener('click', function() {
        const link = document.createElement('a');
        link.download = 'architecture-web.png';
        link.href = canvas.toDataURL('image/png');
        link.click();
    });
</script>

</body>
</html>
