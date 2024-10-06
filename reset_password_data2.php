 <?php 
 
session_start() ; 
$_SESSION["session_general"] = array() ;  
require_once 'class/give_url.php';
require_once 'class/path_config.php';
require_once 'class/DatabaseHandler.php';

 




$nom_user = $_SESSION["nom_user"] ; 





$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql('UPDATE `'.$config_dbname.'` SET `password_user` = "" WHERE  `nom_user` ="'.$nom_user.'" ');













$req_sqlxx = 'SELECT * FROM `'.$config_dbname.'` WHERE `nom_user` = "'.$nom_user.'"  ';


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "id_user");
$id_user = $databaseHandler->tableList_info[0];

echo $nom_user ; 
 
var_dump($id_user) ; 
 

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





$_SESSION["session_log"] = "123456" ; 


 




 
$_SESSION["session_log"]  = $id_sha1_user  ; 

?>
<meta http-equiv="refresh" content="0;URL=index.php">
 

 

</body>
</html>