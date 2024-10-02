<?php 

session_start() ; 
$_SESSION["session_general"] = array() ;  
require_once 'class/give_url.php';
require_once 'class/path_config.php';
require_once 'class/DatabaseHandler.php';
?>
<style>
  
</style>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    body{
      background-color: black; 
      text-align: center;
      font-size: 4em;
      margin: 0;
      padding: 0;
    }
  </style>

<?php 
$give_url =  give_url() ;
$id_projet = $_POST["id_projet"];
$img_projet_src = $_POST["img_projet_src"];
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `'.$config_dbname.'` SET `activation_user` = "'.$give_url.'" WHERE  `id_sha1_user` = '.$give_url.'; ');



$SERVER_NAME =  $_SERVER['SERVER_NAME'] ; 


$req_sqlxx = 'SELECT * FROM `'.$config_dbname.'` WHERE `id_sha1_user` = "'.$give_url.'"  ';


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "id_user");
$id_user = $databaseHandler->tableList_info[0];


 

 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "id_sha1_user");
$id_sha1_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "id_parent_user");
$id_parent_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "description_user");
$description_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "title_user");
$title_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "img_user");
$img_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "nom_user");
$nom_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "prenom_user");
$prenom_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "password_user");
$password_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "email_user");
$email_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "date_inscription_user");
$date_inscription_user = $databaseHandler->tableList_info[0];

 

 
$_SESSION["session_log"] = $give_url ; 





array_push($_SESSION["session_general"],
$id_user,
$id_sha1_user,
$id_parent_user,
$description_user,
$title_user,
$img_user,
$nom_user,
$prenom_user,
$password_user,
$email_user ,
$date_inscription_user 

) ; 




echo "session_general : ".$_SESSION["session_general"][0] ;
echo "<br/>" ; 
 

 
// Adresse e-mail de destination
$to = $nom_user; // Remplacer par l'adresse du nouvel utilisateur

// Sujet de l'e-mail
$subject = 'Confirmation de la validation de votre inscription sur'.$SERVER_NAME;

// Message HTML avec CSS inline pour assurer la compatibilité
$message = '
<html>
<head>
  <title>Confirmation d\'inscription</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    .container {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .header {
      background-color: #000000;
      color: #ffffff;
      padding: 10px;
      text-align: center;
      border-radius: 8px 8px 0 0;
    }
    .header h1 {
      margin: 0;
    }
    .content {
      margin: 20px 0;
      font-size: 16px;
      line-height: 1.6;
      color: #333333;
    }
    .footer {
      text-align: center;
      font-size: 12px;
      color: #888888;
      margin-top: 20px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      color: #ffffff;
      background-color: #000000;
      text-decoration: none;
      border-radius: 5px;
      margin-top: 20px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Bienvenue sur '.$SERVER_NAME.'</h1>
    </div>
    <div class="content">
      <p>Bonjour,</p>
      <p>Nous avons le plaisir de vous informer que votre inscription sur <strong>'.$SERVER_NAME.'</strong> a été validée avec succès.</p>
      <p>Vous faites maintenant partie de notre communauté, et nous sommes ravis de vous accueillir !</p>
      <h3>Voici les prochaines étapes :</h3>
      <ul>
        <li><strong>Accédez à votre compte :</strong> Vous pouvez désormais vous connecter à votre compte en utilisant vos identifiants.</li>
        <li><strong>Explorez nos fonctionnalités :</strong> Découvrez les outils et services que '.$SERVER_NAME.' met à votre disposition pour réaliser vos projets.</li>
      </ul>
      <p>Si vous avez des questions ou avez besoin d\'aide, n\'hésitez pas à nous contacter à l\'adresse suivante : <a href="mailto:support@'.$SERVER_NAME.'">support@'.$SERVER_NAME.'.com</a>. Nous serons heureux de vous assister dans vos premiers pas.</p>
      <p>Merci de faire confiance à <strong>'.$SERVER_NAME.'</strong>. Nous sommes impatients de vous voir accomplir de grandes choses avec nous !</p>
      <a href="'.$SERVER_NAME.'/activation_info.php" class="btn">Accéder à mon compte</a>
    </div>
    <div class="footer">
      <p>&copy; 2024 '.$SERVER_NAME.' - Tous droits réservés</p>
      <p>Contact : support@'.$SERVER_NAME.'.com | Téléphone : +33 6 67 47 28 88</p>
    </div>
  </div>
</body>
</html>
';

// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// En-têtes supplémentaires (facultatif)
$headers .= 'From: support@' .$SERVER_NAME."\r\n";
$headers .= 'Reply-To: support@' .$SERVER_NAME."\r\n";





 
// Envoi de l'e-mail
if(mail($to, $subject, $message, $headers)) {
    echo 'E-mail envoyé avec succès.';
} else {
    echo 'Échec de l\'envoi de l\'e-mail.';
}




 

 








 
?>




<meta http-equiv="refresh" content="0;URL=../index.php">



</body>
</html>