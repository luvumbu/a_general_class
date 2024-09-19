<?php

require_once 'class/DatabaseHandler.php'; 
require_once 'class/path_config.php';
require_once 'class/AsciiConverter.php';
require_once 'class/give_url.php';

 
 

// Requête SQL pour obtenir toutes les données
$req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_projet` ="'.give_url().'" ';

// Récupération de chaque colonne de la table `projet`
$databaseHandler1 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler1->getDataFromTable($req_sql, "id_projet");
$id_projet = $databaseHandler1->tableList_info;

$databaseHandler2 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler2->getDataFromTable($req_sql, "id_user_projet");
$id_user_projet = $databaseHandler2->tableList_info;

$databaseHandler3 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler3->getDataFromTable($req_sql, "id_sha1_projet");
$id_sha1_projet = $databaseHandler3->tableList_info;

$databaseHandler4 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler4->getDataFromTable($req_sql, "id_sha1_parent_projet");
$id_sha1_parent_projet = $databaseHandler4->tableList_info;

$databaseHandler5 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler5->getDataFromTable($req_sql, "cryptage_projet");
$cryptage_projet = $databaseHandler5->tableList_info;

$databaseHandler6 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler6->getDataFromTable($req_sql, "input_cryptage_projet");
$input_cryptage_projet = $databaseHandler6->tableList_info;

$databaseHandler7 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler7->getDataFromTable($req_sql, "name_projet");
$name_projet = $databaseHandler7->tableList_info;

$databaseHandler8 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler8->getDataFromTable($req_sql, "statue_projet");
$statue_projet = $databaseHandler8->tableList_info;

$databaseHandler9 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler9->getDataFromTable($req_sql, "title_projet");
$title_projet = $databaseHandler9->tableList_info;

$databaseHandler10 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler10->getDataFromTable($req_sql, "description_projet");
$description_projet = $databaseHandler10->tableList_info;

$databaseHandler11 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler11->getDataFromTable($req_sql, "password_projet");
$password_projet = $databaseHandler11->tableList_info;

$databaseHandler12 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler12->getDataFromTable($req_sql, "visibility_1_projet");
$visibility_1_projet = $databaseHandler12->tableList_info;

$databaseHandler13 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler13->getDataFromTable($req_sql, "visibility_2_projet");
$visibility_2_projet = $databaseHandler13->tableList_info;

$databaseHandler14 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler14->getDataFromTable($req_sql, "img_projet_src");
$img_projet_src = $databaseHandler14->tableList_info;

$databaseHandler15 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler15->getDataFromTable($req_sql, "img_projet_visibility");
$img_projet_visibility = $databaseHandler15->tableList_info;

$databaseHandler16 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler16->getDataFromTable($req_sql, "group_projet");
$group_projet = $databaseHandler16->tableList_info;

$databaseHandler17 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler17->getDataFromTable($req_sql, "heure_debut_projet");
$heure_debut_projet = $databaseHandler17->tableList_info;

$databaseHandler18 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler18->getDataFromTable($req_sql, "date_debut_projet");
$date_debut_projet = $databaseHandler18->tableList_info;

$databaseHandler19 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler19->getDataFromTable($req_sql, "heure_fin_projet");
$heure_fin_projet = $databaseHandler19->tableList_info;

$databaseHandler20 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler20->getDataFromTable($req_sql, "date_fin_projet");
$date_fin_projet = $databaseHandler20->tableList_info;

$databaseHandler21 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler21->getDataFromTable($req_sql, "date_inscription_projet");
$date_inscription_projet = $databaseHandler21->tableList_info;

// Initialisation du tableau pour stocker les résultats associés
$associated_data = [];

foreach ($id_projet as $index => $projet) {
    $associated_data[] = [
        'id_projet' => $projet,
        'id_user_projet' => $id_user_projet[$index],
        'id_sha1_projet' => $id_sha1_projet[$index],
        'id_sha1_parent_projet' => $id_sha1_parent_projet[$index],
        'cryptage_projet' => $cryptage_projet[$index],
        'input_cryptage_projet' => $input_cryptage_projet[$index],
        'name_projet' => AsciiConverter::asciiToString($name_projet[$index]),
        'statue_projet' => $statue_projet[$index],
        'title_projet' => AsciiConverter::asciiToString($title_projet[$index]) ,
        'description_projet' => AsciiConverter::asciiToString($description_projet[$index]) ,
        'password_projet' => $password_projet[$index],
        'visibility_1_projet' => $visibility_1_projet[$index],
        'visibility_2_projet' => $visibility_2_projet[$index],
        'img_projet_src' => $img_projet_src[$index],
        'img_projet_visibility' => $img_projet_visibility[$index],
        'group_projet' => $group_projet[$index],
        'heure_debut_projet' => $heure_debut_projet[$index],
        'date_debut_projet' => $date_debut_projet[$index],
        'heure_fin_projet' => $heure_fin_projet[$index],
        'date_fin_projet' => $date_fin_projet[$index],
        'date_inscription_projet' => $date_inscription_projet[$index]
    ];
}

// Transformation du tableau en JSON
$json_result = json_encode($associated_data, JSON_PRETTY_PRINT);

// Affichage des données en JSON
echo $json_result;

?>
