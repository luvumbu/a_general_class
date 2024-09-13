<?php
  // Inclusion des fichiers de classe PHP nécessaires
  require_once 'class/Creat_form.php';
  require_once 'class/AsciiConverter.php';
  require_once 'class/path_config.php';

  require_once 'class/chercherIndex.php';
  require_once 'class/IsLocal.php';
  require_once 'class/give_url.php';

  


  $req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_projet` ="'.give_url().'" ';

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "id_projet");
  $id_projet = $databaseHandler->tableList_info;


  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "id_user_projet");
  $id_user_projet = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "id_parents_projet");
  $id_parents_projet = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "visit_projet");
  $visit_projet = $databaseHandler->tableList_info;
 



  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "name_projet");
  $name_projet = $databaseHandler->tableList_info;


  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "statue_projet");
  $statue_projet = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "title_projet");
  $title_projet = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "description_projet");
  $description_projet = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "qr_code_src_projet");
  $qr_code_src_projet = $databaseHandler->tableList_info;



  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "visibility_1_projet");
  $visibility_1_projet = $databaseHandler->tableList_info;


  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "img_projet_src");
  $img_projet_src = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "group_projet");
  $group_projet = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "heure_debut_projet");
  $heure_debut_projet = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "date_debut_projet");
  $date_debut_projet = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "heure_fin_projet");
  $heure_fin_projet = $databaseHandler->tableList_info;


  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "date_fin_projet");
  $date_fin_projet = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "date_inscription_projet");
  $date_inscription_projet = $databaseHandler->tableList_info;

 

 



if (!count($id_projet)<1){
  var_dump($id_projet) ; 
}
 
  ?>