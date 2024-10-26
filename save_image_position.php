
<?php

 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 

require_once 'class/path_config.php' ; 

require_once 'class/DatabaseHandler.php' ; 


$_SESSION["mouseX"] =  $_POST["mouseX"] ; 
$_SESSION["mouseY"] =  $_POST["mouseY"] ; 
 
?>
