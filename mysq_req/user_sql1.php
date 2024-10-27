<?php 

$req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_projet` ="' . give_url() . '" ';
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_projet");
$id_projet = $databaseHandler->tableList_info;

$req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_projet` ="' . give_url() . '" ';
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_sha1_parent_projet");
$id_sha1_parent_projet__p = $databaseHandler->tableList_info;
$give_url = give_url();

$req_sql__ = 'SELECT * FROM `visit_user` WHERE `ip1_visit_user`="' . $give_url . '";';
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql__, 'ip1_visit_user');
$ip1_visit_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "visibility_1_projet");
$visibility_1_projet = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "shop_projet");
$shop_projet = $databaseHandler->tableList_info;
$shop_projet__  =  $shop_projet[0];


 

?>