<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 


 

 
 
$id_sha1_projet = $_POST["id_sha1_projet"] ; 
 



$img_projet_src = $_POST["img_projet_src"] ; 
 
 
 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);



$databaseHandler->action_sql('DELETE FROM  `projet_img` WHERE `id_projet_img_auto` = "'.$id_sha1_projet.'"') ;
 


 




?>