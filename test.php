<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Date et Heure</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input[type="date"],
        .form-group input[type="time"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            background-color: #f9f9f9;
        }

        .form-group input[type="date"]:focus,
        .form-group input[type="time"]:focus {
            border-color: #007BFF;
            background-color: #fff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-group .form-description {
            color: #777;
            font-size: 14px;
            margin-top: 5px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Planification de l'événement</h2>

        <div class="form-group">
            <label for="start-date">Date de commencement :</label>
            <input type="date" id="start-date" name="start-date" required>
        </div>

        <div class="form-group">
            <label for="start-time">Heure de commencement :</label>
            <input type="time" id="start-time" name="start-time" required>
        </div>

        <div class="form-group">
            <label for="end-date">Date de fin :</label>
            <input type="date" id="end-date" name="end-date" required>
        </div>

        <div class="form-group">
            <label for="end-time">Heure de fin :</label>
            <input type="time" id="end-time" name="end-time" required>
        </div>

        <button type="submit">Valider</button>
    </div>

</body>

</html>
