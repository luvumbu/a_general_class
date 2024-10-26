<?php
session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php';
require_once '../class/DatabaseHandler.php';
require_once '../class/AsciiConverter.php';



 
$screen_shoot_projet =  $_POST["screen_shoot_projet"] ; 
$id_projet =  $_POST["id_projet"] ; 
 
 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE  `projet` SET `screen_shoot_projet` = "' . $screen_shoot_projet . '"   WHERE  `id_projet` ="' . $id_projet . '" ');


 

?>