<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>





    <?php





    for ($a = 0; $a < count($date_inscription_projet); $a++) {


        $name_projet_ =  AsciiConverter::asciiToString($name_projet[$a]);
        $title_projet_ = AsciiConverter::asciiToString($title_projet[$a]);
        $description_projet_ = AsciiConverter::asciiToString($description_projet[$a]);;
        $img_projet_src_ = $img_projet_src[$a];
        $heure_debut_projet_ = $heure_debut_projet[$a];
        $date_debut_projet_ = $date_debut_projet[$a];
        $heure_fin_projet_ = $heure_fin_projet[$a];
        $date_fin_projet_ = $date_fin_projet[$a];
        $date_inscription_projet_ = $date_inscription_projet[$a];


        $id_projet_ =   $id_projet[$a];
        $id_sha1_projet_ = $id_sha1_projet[$a];


    ?>

        <div class="blog-container">
            <header class="blog-header">
                <h1><?php echo  $title_projet_ ?></h1>

                <p class="blog-metadata">
                    Par <span class="author">@<?php echo  $title_user_  ?></span> |
                    <span class="date"><?php echo  $date_inscription_projet_ ?></span>
                </p>
            </header>

            <?php
            if ($img_projet_src_ != '') {
            ?>

                <div class="user_img">
                    <img src="<?php echo   "../img_user_action/" . $img_projet_src_ ?>" alt="">

                </div>

            <?php
            }






            ?>
            <section class="blog-content">
                <h2 class="blog-title"><?php echo $name_projet_ ?></h2>
            </section>


        </div>

    <?php



    }









    $req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_parent_projet` ="' . give_url() . '" ';

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_projet");
    $id_projet = $databaseHandler->tableList_info;



    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
    $id_sha1_projet = $databaseHandler->tableList_info;


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_user_projet");
    $id_user_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_parents_projet");
    $id_parents_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "visit_projet");
    $visit_projet = $databaseHandler->tableList_info;




    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "name_projet");
    $name_projet = $databaseHandler->tableList_info;


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "statue_projet");
    $statue_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "title_projet");
    $title_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "description_projet");
    $description_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "qr_code_src_projet");
    $qr_code_src_projet = $databaseHandler->tableList_info;



    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "visibility_1_projet");
    $visibility_1_projet = $databaseHandler->tableList_info;


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "img_projet_src");
    $img_projet_src = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "group_projet");
    $group_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "heure_debut_projet");
    $heure_debut_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "date_debut_projet");
    $date_debut_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "heure_fin_projet");
    $heure_fin_projet = $databaseHandler->tableList_info;


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "date_fin_projet");
    $date_fin_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "date_inscription_projet");
    $date_inscription_projet = $databaseHandler->tableList_info;















    for ($a = 0; $a < count($date_inscription_projet); $a++) {


        $name_projet_ =  AsciiConverter::asciiToString($name_projet[$a]);
        $title_projet_ = AsciiConverter::asciiToString($title_projet[$a]);
        $description_projet_ = AsciiConverter::asciiToString($description_projet[$a]);;
        $img_projet_src_ = $img_projet_src[$a];
        $heure_debut_projet_ = $heure_debut_projet[$a];
        $date_debut_projet_ = $date_debut_projet[$a];
        $heure_fin_projet_ = $heure_fin_projet[$a];
        $date_fin_projet_ = $date_fin_projet[$a];
        $date_inscription_projet_ = $date_inscription_projet[$a];


        $id_projet_ =   $id_projet[$a];
        $id_sha1_projet_ = $id_sha1_projet[$a];


    ?>

        <div class="blog-container">
            <header class="blog-header">
                <h1><?php echo  $title_projet_ ?></h1>

                <p class="blog-metadata">
                    Par <span class="author">@<?php echo  $title_user_  ?></span> |
                    <span class="date"><?php echo  $date_inscription_projet_ ?></span>
                </p>
            </header>

            <?php
            if ($img_projet_src_ != '') {
            ?>

                <div class="user_img">
                    <img src="<?php echo   "../img_user_action/" . $img_projet_src_ ?>" alt="">

                </div>

            <?php
            }

            ?>
            <section class="blog-content">
                <h2 class="blog-title"><?php echo $name_projet_ ?></h2>
            </section>


        </div>

    <?php



    }




    $PHP_SELF = $_SERVER['PHP_SELF'];

    $SERVER_NAME = $_SERVER['SERVER_NAME'];

    $HTTP_HOST = $_SERVER['HTTP_HOST'];

    $HTTP_REFERER = $_SERVER['HTTP_REFERER'];

    $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];

    $SCRIPT_NAME = $_SERVER['SCRIPT_NAME'];





    $ipUser = getUserIP();



    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->action_sql("INSERT INTO `visit_user` (
    ip1_visit_user,
    ip2_visit_user,
    ip3_visit_user,
    ip4_visit_user,
    ip5_visit_user,
    ip6_visit_user,
    ip7_visit_user

    ) VALUES (
    '$PHP_SELF',
    '$SERVER_NAME',
    '$HTTP_HOST',
    '$HTTP_REFERER',
    '$HTTP_USER_AGENT',
    '$SCRIPT_NAME',
    '$ipUser'
    )");








    ?>
    <div class="blog-container">
        <footer class="blog-footer">
            <p>&copy; 2024 - Tous droits réservés.</p>
        </footer>

    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        .blog-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .blog-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .blog-title {
            font-size: 2.5em;
            color: #333;
        }

        .blog-metadata {
            font-size: 0.9em;
            color: #777;
        }

        .author {
            font-weight: bold;
            opacity: 0.4;
        }

        .date {
            font-style: italic;
        }

        .blog-content {
            margin-top: 20px;
        }

        .blog-content h2 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 10px;
        }

        .blog-content p {
            margin-bottom: 15px;
            line-height: 1.8;
        }

        .blog-footer {
            text-align: center;
            margin-top: 40px;
            padding: 10px;
            font-size: 0.8em;
            color: #777;
        }

        .blog-footer p {
            margin-bottom: 0;
        }


        .user_img {
            text-align: center;
            margin-top: 75px;
            margin-bottom: 75px;
        }
    </style>


</body>

</html>


</body>

</html>