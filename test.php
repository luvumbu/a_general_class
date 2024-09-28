<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Noms de Domaine</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .domain-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .domain-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }
        .domain-item:last-child {
            border-bottom: none;
        }
        .domain-info {
            display: flex;
            align-items: center;
        }
        .domain-logo {
            width: 50px;
            height: 50px;
            background-color: #eee;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
        }
        .domain-logo img {
            width: 100%;
        }
        .domain-name {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-right: 10px;
        }
        .domain-performance {
            font-size: 14px;
            display: flex;
            align-items: center;
        }
        .performance-indicator {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-left: 5px;
        }
        .performance-100 { background-color: #4CAF50; }
        .performance-90 { background-color: #8BC34A; }
        .performance-80 { background-color: #FF9800; }
        .performance-70 { background-color: #FF5722; }
        .dashboard-btn {
            background-color: #6C63FF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-transform: uppercase;
        }
        .dashboard-btn:hover {
            background-color: #5a54d8;
        }
        .star-icon, .more-options {
            margin-left: 15px;
            font-size: 20px;
            color: #aaa;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Gestion des Noms de Domaine</h1>

<div class="domain-container">
    <div class="domain-item">
        <div class="domain-info">
            <div class="domain-logo">
                <img src="https://via.placeholder.com/50" alt="logo">
            </div>
            <div class="domain-name">mariondelval.fr</div>
            <div class="domain-performance">Performance: 94
                <div class="performance-indicator performance-90"></div>
            </div>
        </div>
        <button class="dashboard-btn">Tableau de bord</button>
        <span class="star-icon">⭐</span>
        <span class="more-options">⋮</span>
    </div>
    <div class="domain-item">
        <div class="domain-info">
            <div class="domain-logo">
                <img src="https://via.placeholder.com/50" alt="logo">
            </div>
            <div class="domain-name">bokonzi.eu</div>
            <div class="domain-performance">Performance: 78
                <div class="performance-indicator performance-80"></div>
            </div>
        </div>
        <button class="dashboard-btn">Tableau de bord</button>
        <span class="star-icon">⭐</span>
        <span class="more-options">⋮</span>
    </div>
    <!-- Répéter pour chaque domaine -->
</div>

</body>
</html>
