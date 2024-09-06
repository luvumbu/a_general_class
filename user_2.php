<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page du Projet</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fafafa;
            color: #4a4a4a;
        }

        .container {
            width: 70%;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            margin-top: 50px;
        }

        header {
            text-align: center;
            margin-bottom: 50px;
        }

        h1 {
            font-size: 2.8em;
            color: #3b3b3b;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .project-image {
            text-align: center;
            margin: 40px 0;
        }

        .project-image img {
            max-width: 80%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .project-image img:hover {
            transform: scale(1.05);
        }

        .project-name {
            text-align: center;
            font-size: 1.8em;
            color: #7f8c8d;
            font-weight: bold;
            margin-top: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f3f5;
    color: #4a4a4a;
}

.container {
    width: 70%;
    margin: 0 auto;
    padding: 40px;
    background-color: #fff;
    box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.1);
    border-radius: 15px;
    margin-top: 50px;
}

header {
    text-align: center;
    margin-bottom: 50px;
}

h1 {
    font-size: 2.8em;
    color: #2c3e50;
    font-weight: 700;
    letter-spacing: 1px;
}

.project-image {
    text-align: center;
    margin: 40px 0;
}

.project-image img {
    max-width: 80%;
    height: auto;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease;
}

.project-image img:hover {
    transform: scale(1.05);
}

.project-name {
    text-align: center;
    font-size: 1.8em;
    color: #7f8c8d;
    font-weight: bold;
    margin-top: 30px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #ecf0f1;
    color: #7f8c8d;
    border-top: 1px solid #dcdcdc;
    margin-top: 50px;
    border-radius: 0 0 15px 15px;
}

footer p {
    margin: 0;
}

/* Styles spécifiques pour les projets enfants */
.child-project {
    margin-top: 30px;
    padding: 25px;
    background-color: #f7f9fb;
    border-radius: 12px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.child-project:hover {
    transform: translateY(-5px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.12);
}

.child-project h1 {
    font-size: 2.2em;
    color: #2980b9;
    margin-bottom: 15px;
}

.child-project p {
    font-size: 1.1em;
    color: #2c3e50;
}

.child-project img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

.child-project img:hover {
    transform: scale(1.03);
}

    </style>
</head>
<body>

    <div class="container">
        <header>
            <h1><?php echo AsciiConverter::asciiToString($title_projet[0]); ?></h1>
        </header>

        <section class="project-image">
            <img src="<?php echo '../img_user_action/' . $img_projet_src[0]; ?>" alt="Image du projet">
        </section>

        <section class="project-name">
            <p><?php echo AsciiConverter::asciiToString($name_projet[0]); ?></p>
        </section>

        <!-- Boucle pour afficher les projets enfants -->
        <?php 
        for($a = 0; $a < count($title_projet_child); $a++) {
        ?>
            <div class="child-project">
                <header>
                    <h1><?php echo AsciiConverter::asciiToString($name_projet_child[$a]); ?></h1>
                </header>

                <section class="project-image">
                    <img src="<?php echo '../img_user_action/' . $img_projet_child_src[$a]; ?>" alt="Image du projet enfant">
                </section>

                <section>
                    <p><?php echo AsciiConverter::asciiToString($description_projet_child[$a]); ?></p>
                </section>
            </div>
        <?php 
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2024 Mon Projet Web. Tous droits réservés.</p>
    </footer>

</body>
</html>
