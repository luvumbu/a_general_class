<?php 
session_start() ; 
//echo $_SESSION["img_user"] ; 
require_once '../class/path_config.php' ; 
require_once '../class/DatabaseHandler.php' ;  
$file_path =  $_SESSION["file_path"]  ;  
require_once '../class/ImageResizer.php'; // Assurez-vous que le fichier contenant la classe est inclus
// Chemin vers l'image source
$imagePath = '../img_user_action/'.$file_path;
// Créer une instance de la classe ImageResizer
$resizer = new ImageResizer($imagePath);
// Redimensionner l'image à une nouvelle largeur et hauteur
$resizer->resize(400, 400);

// Sauvegarder l'image redimensionnée
$resizer->save($imagePath);

// Optionnel : Afficher l'image redimensionnée directement dans le navigateur
//$resizer->output();
 

 

 if(isset($_SESSION["img_user_action_chil"])) {



 
$cookie_img = $_SESSION["cookie_img"] ; 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("UPDATE `projet_child` SET `img_projet_child_src` = '$file_path' WHERE `id_projet_child` = '$cookie_img'") ;
unset($_SESSION["img_user_action_chil"]);

 }
 else {
  
 


/*
$_SESSION["cookie_img"] = $_POST["cookie_img"] ; 
$_SESSION["cookie_titile"] = $_POST["cookie_titile"] ; 
*/


//echo $_SESSION["cookie_img"]  ; 


$session_general = $_SESSION["session_general"][0];
 $cookie_img = $_SESSION["cookie_img"] ; 
 

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
  

}
 
?>
<script>
   window.location.href = "../index2.php";
</script>


<style>
    body
    {
         background-color: black;
    }
</style>