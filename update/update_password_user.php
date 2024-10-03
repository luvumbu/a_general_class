<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
 

require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 
require_once '../class/AsciiConverter.php' ; 




$session_general =  $_SESSION["session_general"][1] ; 
$update_password_user = $_POST["update_password_user"] ; 
 
$update_password_user = $_POST["update_password_user"] ; 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `'.$config_dbname.'` SET `password_user` ="'.$update_password_user.'" WHERE  `id_sha1_user` = "'.$session_general.'"') ;
 


 



?>