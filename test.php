<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coop' à Fourchon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #B6492D;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .content {
            text-align: center;
            padding: 40px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section textarea {
            width: 80%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            height: 100px;
            margin-bottom: 20px;
        }

        .calendar-icon {
            font-size: 20px;
            margin-left: 10px;
            vertical-align: middle;
        }

        .documents {
            text-align: center;
        }

        .documents h2 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .document-icons {
            display: flex;
            justify-content: center;
        }

        .document-icons div {
            margin: 0 20px;
            text-align: center;
        }

        .document-icons div img {
            width: 80px;
            height: 80px;
            margin-bottom: 10px;
        }

        .document-icons div p {
            font-size: 16px;
        }

        /* Style pour les icônes */
        .icon-container {
            display: inline-block;
            width: 100px;
            height: 100px;
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .icon-container img {
            width: 80px;
            height: 80px;
        }

        /* Ajustement pour petits écrans */
        @media (max-width: 600px) {
            .document-icons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <header>
        Coop' à Fourchon
    </header>

    <div class="content">
        <!-- Section réunions -->
        <div class="section">
            <h3>Nos prochaines réunions</h3>
            <textarea placeholder="Écrivez votre message"></textarea>
            <span class="calendar-icon">&#128197;</span>
        </div>

        <!-- Section actualités -->
        <div class="section">
            <h3>Nos actualités</h3>
            <textarea placeholder="Écrivez votre message"></textarea>
        </div>

        <!-- Section documents -->
        <div class="documents">
            <h2>Mes Documents</h2>
            <div class="document-icons">
                <div>
                    <div class="icon-container">
                        <img src="https://img.icons8.com/ios/100/000000/conference-call.png" alt="Réunions">
                    </div>
                    <p>Nos réunions</p>
                </div>
                <div>
                    <div class="icon-container">
                        <img src="https://img.icons8.com/ios/100/000000/economy.png" alt="Syndicat">
                    </div>
                    <p>Notre syndicat</p>
                </div>
                <div>
                    <div class="icon-container">
                        <img src="https://img.icons8.com/ios/100/000000/home-repair.png" alt="Commissions">
                    </div>
                    <p>Nos commissions</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
