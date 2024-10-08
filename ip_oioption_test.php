<?php 


$PHP_SELF = $_SERVER['PHP_SELF'];

$SERVER_NAME = $_SERVER['SERVER_NAME'];

$HTTP_HOST = $_SERVER['HTTP_HOST'];

$HTTP_REFERER = $_SERVER['HTTP_REFERER'];

$HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];

$SCRIPT_NAME = $_SERVER['SCRIPT_NAME'];



$ipUser = getUserIP();
$port = $_SERVER['REMOTE_PORT'];

/*
$ipUser = getUserIP();
echo "Adresse IP de l'utilisateur : " . $ipUser;

*/
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `visit_user` (
ip1_visit_user,
ip2_visit_user,
ip3_visit_user,
ip4_visit_user,
ip5_visit_user,
ip6_visit_user,
ip7_visit_user,
ip8_visit_user,
ip9_visit_user



) VALUES (
'$give_url',
'$ipUser',
'$port', 
'$PHP_SELF',
'$SERVER_NAME',
'$HTTP_HOST',
'$HTTP_REFERER',
'$HTTP_USER_AGENT',
'$SCRIPT_NAME'

)");



?>