<?php 
session_start() ; 
//echo $_SESSION["img_user"] ; 
require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ; 
 
$file_path =  $_SESSION["file_path"]  ; 
 

/*
$_SESSION["cookie_img"] = $_POST["cookie_img"] ; 
$_SESSION["cookie_titile"] = $_POST["cookie_titile"] ; 
*/


$session_general = $_SESSION["session_general"][0];
 $cookie_img = $_SESSION["cookie_img"] ; 
echo "<br/>" ; 
echo "2_".$_SESSION["cookie_titile"] ; 

if($_SESSION["cookie_img"]=="user_log") {
    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->action_sql("UPDATE $config_dbname SET `img_user` = '$file_path' WHERE  `id_user` = '".$session_general."';") ;
    
}
else {
    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->action_sql("UPDATE `projet` SET `img_projet_src` = '$file_path' WHERE `id_projet` = '$cookie_img'") ;
  
}

 


 

 


 

 



$_SESSION["file_path"]  ="" ; 
$_SESSION["cookie_img"] = "" ; 
  

 
 
?>

<script>


    const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  window.location.replace("../index2.php");
 
}

</script>