
<?php

 
session_start() ; 
header("Access-Control-Allow-Origin: *");
 

require_once 'class/path_config.php' ; 

require_once 'class/DatabaseHandler.php' ; 


$id_sha1_projet = time() ; 



$mouseX = $_SESSION["mouseX"] ; 
$mouseY = $_SESSION["mouseY"] ; 
  
$sha1_option_projet = $_SESSION["sha1_option_projet"] ;


$PHP_SELF =  $_SESSION["PHP_SELF"]  ; 
 
$HTTP_HOST =  $_SESSION["HTTP_HOST"]  ; 
$HTTP_REFERER =  $_SESSION["HTTP_REFERER"]  ; 
$HTTP_USER_AGENT =  $_SESSION["HTTP_USER_AGENT"]  ; 
$SCRIPT_NAME =  $_SESSION["SCRIPT_NAME"]  ; 


 
 

 



$GIVE_URL = $_SESSION["GIVE_URL"] ; 



if (isset($_POST['image_data'])) {
    // Extraire les données base64
    $image_data = $_POST['image_data'];

    // Décoder les données base64 pour obtenir le contenu binaire de l'image
    $image_data = str_replace('data:image/png;base64,', '', $image_data);
    $image_data = str_replace(' ', '+', $image_data);
    $data = base64_decode($image_data);

    // Définir le nom du fichier avec un timestamp pour éviter les doublons
    $file_name = 'screenshot_' . time() . '.png';




$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `visit_user` (
screen_shoot_visit_user,
id_projet_visit_user,
ip1_visit_user,
ip2_visit_user,
ip3_visit_user,
ip4_visit_user,
ip5_visit_user,
x_visit_user,
y_visit_user
 




) VALUES (
'$file_name',
'$GIVE_URL',

'$PHP_SELF',
'$HTTP_HOST',
'$HTTP_REFERER',
'$HTTP_USER_AGENT',
'$SCRIPT_NAME',
'$mouseX', 
'$mouseY' 



)") ;

 
    // Définir le chemin vers le dossier "img"
    $folder_path = 'src/img/screenshot/';
    
    // Vérifier si le dossier "img" existe, sinon le créer
    if (!is_dir($folder_path)) {
        mkdir($folder_path, 0777, true);
    }

    // Chemin complet vers le fichier
    $file_path = $folder_path . $file_name;

    // Sauvegarder l'image dans le dossier "img"
    file_put_contents($file_path, $data);

    echo 'Image sauvegardée dans le dossier img : ' . $file_name;













} 


else {
    echo 'Aucune donnée d\'image reçue.';
}
?>
