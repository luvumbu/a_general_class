<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 

$id_sha1_projet = $_POST["id_sha1_projet"] ; 
 
 
 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("DELETE FROM  `projet` WHERE   `id_sha1_projet` = '$id_sha1_projet'") ;





?>