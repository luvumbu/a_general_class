<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coop' à Fourchon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #C3562D;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .container {
            margin: 20px auto;
            max-width: 800px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .input-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .input-container textarea {
            width: 100%;
            height: 60px;
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 1em;
        }

        .input-container img {
            margin-left: 10px;
            width: 40px;
            height: 40px;
        }

        .documents {
            text-align: center;
        }

        .documents h3 {
            margin-bottom: 20px;
        }

        .document-items {
            display: flex;
            justify-content: space-around;
        }

        .document-item {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 150px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease;
        }

        .document-item:hover {
            border: 2px solid #C3562D;
        }

        .document-item img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .document-item p {
            font-size: 1.1em;
            font-weight: bold;
        }

        .document-item small {
            font-size: 0.8em;
            color: #666;
        }
    </style>
</head>

<body>
    <header>
        <h1>Coop' à Fourchon</h1>
    </header>

    <div class="container">
        <div class="section">
            <h2>Nos prochaines réunions</h2>
            <div class="input-container">
                <textarea placeholder="Écrivez votre message"></textarea>
                <img src="calendar-icon.png" alt="Calendrier">
            </div>
        </div>

        <div class="section">
            <h2>Nos actualités</h2>
            <div class="input-container">
                <textarea placeholder="Écrivez votre message"></textarea>
                <img src="news-icon.png" alt="Actualités">
            </div>
        </div>

        <div class="documents">
            <h3>Mes Documents</h3>
            <div class="document-items">
                <div class="document-item">
                    <img src="reunion-icon.png" alt="Nos réunions">
                    <p>Nos réunions</p>
                    <small>1</small>
                </div>
                <div class="document-item">
                    <img src="syndicat-icon.png" alt="Notre syndicat">
                    <p>Notre syndicat</p>
                    <small>2</small>
                </div>
                <div class="document-item">
                    <img src="commissions-icon.png" alt="Nos commissions">
                    <p>Nos commissions</p>
                    <small>3</small>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
