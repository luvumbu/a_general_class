<?php 
session_start() ; 

require_once 'class/DatabaseHandler.php';
require_once 'class/give_url.php';
require_once 'class/path_config.php';
require_once 'class/AsciiConverter.php';



$give_url = $_SESSION["sha1_option_projet"];

 

$req_sql_parent44 = 'SELECT * FROM `comment_projet` WHERE `sha1_comment_projet`="' . $give_url . '"';

 



$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent44, "name_comment_projet");
$name_comment_projet = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent44, "text_comment_projet");
$text_comment_projet = $databaseHandler->tableList_info;



$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent44, "timestamp_comment_projet");
$timestamp_comment_projet = $databaseHandler->tableList_info;



 


?>


 



    <?php

    for ($bhu = 0; $bhu < count($text_comment_projet); $bhu++) {



        
       
        ?>
    <div class="comment">
        <h3><?php echo AsciiConverter::asciiToString($text_comment_projet[$bhu]) ?></h3>
        <p><?php echo  AsciiConverter::asciiToString($name_comment_projet[$bhu]) ?></p>
        <time datetime="2024-10-19"><?php echo $timestamp_comment_projet[$bhu]?></time>
    </div>
        <?php 
    }

    ?>



 