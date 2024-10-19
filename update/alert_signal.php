<?php
session_start();
header("Access-Control-Allow-Origin: *");
$servername = "localhost";

require_once '../class/path_config.php';
require_once '../class/DatabaseHandler.php';


//echo $_SESSION['start']  ; 


$start_option_projet =  $_POST["start_option_projet"] ; 
$sha1_option_projet = $_SESSION["sha1_option_projet"] ;


$PHP_SELF =  $_SESSION["PHP_SELF"]  ; 
 
$HTTP_HOST =  $_SESSION["HTTP_HOST"]  ; 
$HTTP_REFERER =  $_SESSION["HTTP_REFERER"]  ; 
$HTTP_USER_AGENT =  $_SESSION["HTTP_USER_AGENT"]  ; 
$SCRIPT_NAME =  $_SESSION["SCRIPT_NAME"]  ; 


 
 












if ($_SERVER["REMOTE_ADDR"] == '127.0.0.1' || $_SERVER["REMOTE_ADDR"] == '::1') {
             

    $SERVER_NAME = "localhost";


    } else {
    $SERVER_NAME = gethostbyaddr($_SERVER["REMOTE_ADDR"]);
     

        
    }
 
 
  



     
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("DELETE FROM  `option_projet` WHERE   `ip2_option_projet` = '$SERVER_NAME'") ;





 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `option_projet` (
start_option_projet,
sha1_option_projet,

ip1_option_projet,
ip2_option_projet,
ip3_option_projet,


ip4_option_projet,
ip5_option_projet,
ip6_option_projet


) 
VALUES (
'0',
'$sha1_option_projet',

'$PHP_SELF',
'$SERVER_NAME',
'$HTTP_HOST',

'$HTTP_REFERER',
'$HTTP_USER_AGENT',
'$SCRIPT_NAME'



)") ;


?>