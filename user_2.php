<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page du Projet</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1b1b1d;
            color: #d3d3d3;
        }

        .container {
            width: 90%;
            margin: 0 auto;
            padding: 40px;
            background-color: #2b2b2e;
            box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.8);
            border-radius: 20px;
            margin-top: 50px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }



        header {
            text-align: center;
            margin-bottom: 50px;
        }

        h1 {
            font-size: 3em;
            color: #ffffff;
            font-weight: 700;
            letter-spacing: 2px;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }

        .project-image {
            text-align: center;
            margin: 40px 0;
        }

        .project-image img {
            max-width: 100%;
            height: auto;
            border-radius: 25px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.8);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }


        .project-name {
            text-align: center;
            font-size: 2em;
            color: #00aaff;
            font-weight: bold;
            margin-top: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 0 0 15px rgba(0, 170, 255, 0.7);
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #1a1a1c;
            color: #7f8c8d;
            border-top: 1px solid #333;
            margin-top: 50px;
            border-radius: 0 0 20px 20px;
        }

        footer p {
            margin: 0;
            color: #555;
        }

        /* Styles spécifiques pour les projets enfants */
        .child-project {
            margin-top: 30px;
            padding: 25px;
            background-color: #262629;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }


        .child-project h1 {
            font-size: 2.4em;
            color: #ffffff;
            margin-bottom: 15px;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.6);
        }

        .child-project p {
            font-size: 1.2em;
            color: #cccccc;
            line-height: 1.6;
        }

        .child-project img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .child-project img:hover {
            transform: scale(1.03);
            box-shadow: 0 15px 50px rgba(0, 170, 255, 0.3);
        }
    </style>
</head>

<body>


    <div class="parent_div">


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
            for ($a = 0; $a < count($title_projet_child); $a++) {
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
        <div>
        <div class="author-box">
            <img src="path_to_author_photo.jpg" alt="Photo de l'auteur">
            <h2>Nom Prénom</h2>
            <p>Développeur web</p>
            <div class="description">
                <p>Passionné par les technologies modernes et les interfaces utilisateur élégantes. Contributeur clé de plusieurs projets web innovants.</p>
            </div>
        </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Mon Projet Web. Tous droits réservés. Bokonzi</p>
    </footer>

</body>

</html>