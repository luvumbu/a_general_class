<?php 
session_start() ; 
//echo $_SESSION["img_user"] ; 
require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 
echo $_SESSION["file_path"]  ; 
$file_path =  $_SESSION["file_path"]  ; 
   
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("UPDATE `root`.`root` SET `img_user` = '$file_path' WHERE `root`.`id_user` = 1;") ;
$_SESSION["file_path"]  ="" ; 
  
 
?>

<script>


    const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
    window.location.replace("../index2.php");
 
}

</script>