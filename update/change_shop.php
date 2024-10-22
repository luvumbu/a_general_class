<?php
session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php';
require_once '../class/DatabaseHandler.php';
require_once '../class/AsciiConverter.php';


$shop_projet = $_POST["shop_projet"] ; 
$id_projet = $_POST["id_projet"] ; 

 
 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE  `projet` SET `shop_projet` = "' . $shop_projet . '"   WHERE  `id_projet` ="' . $id_projet . '" ');
