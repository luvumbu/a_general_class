<?php
session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php';
require_once '../class/DatabaseHandler.php';
require_once '../class/AsciiConverter.php';



$id_sha1_projet =  $_POST["id_sha1_projet"]  ; 
$title_projet_ =  AsciiConverter::stringToAscii($_POST["title_projet_"])  ;  

$name_projet_ = AsciiConverter::stringToAscii( $_POST["name_projet_"])  ;  


 

 
 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE  `projet` SET `title_projet` = "'.$title_projet_.'" ,`name_projet` = "'.$name_projet_.'"   WHERE  `id_sha1_projet` ="'.$id_sha1_projet.'" ');

 
?>