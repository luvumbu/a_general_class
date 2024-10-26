<?php
session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php';
require_once '../class/DatabaseHandler.php';




$publication_date_h_projet = $_POST["publication_date_h_projet"] ; 
$publication_date_j_projet = $_POST["publication_date_j_projet"] ; 
$id_projet = $_POST["id_projet"] ; 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `projet` SET `publication_date_h_projet` = "' . $publication_date_h_projet . '",`publication_date_j_projet` = "' . $publication_date_j_projet . '"  WHERE `id_projet` =' .$id_projet. '');


?>