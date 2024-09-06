<?php
session_start();

?>
<script src="js.js"></script>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://image.spreadshirtmedia.net/image-server/v1/compositions/T993A1PA2181PT1X55Y35D170309227W12961H12961/views/1,width=550,height=550,appearanceId=1,backgroundColor=FFFFFF,noPt=true/stick-figure-design-stickman-trend-idee-cadeau-tapis-de-souris.jpg">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>



<body>

    <?php
    require_once 'class/give_url.php';
    require_once 'class/Creat_form.php';
    require_once 'class/AsciiConverter.php';
    require_once 'class/chercherIndex.php';
    require_once 'class/path_config.php';

    //echo give_url() ;





    $req_sql = 'SELECT * FROM `projet` WHERE `id_sha1_projet`= "' . give_url() . '"';



    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "title_projet");
    $title_projet = $databaseHandler->tableList_info;


 
 
    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "name_projet");
    $name_projet = $databaseHandler->tableList_info;




    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "img_projet_src");
    $img_projet_src = $databaseHandler->tableList_info;
 
 












$req_sql = 'SELECT * FROM `projet_child` WHERE `id_sha1_parent_projet_child`="'.give_url().'"';

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "title_projet_child");
$title_projet_child = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "description_projet_child");
$description_projet_child = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "name_projet_child");
$name_projet_child = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "img_projet_child_src");
$img_projet_child_src = $databaseHandler->tableList_info;

 
 
 




 








require_once 'user_2.php' ; 


    ?>

    <style>
        body{
            margin: 0;
            padding: 0;
        }
    </style>