
  

<?php
  // Inclusion des fichiers de classe PHP nécessaires
  require_once 'class/Creat_form.php';
  require_once 'class/AsciiConverter.php';
  require_once 'class/path_config.php';

  require_once 'class/chercherIndex.php';
  require_once 'class/IsLocal.php';
  require_once 'class/give_url.php';
  require_once 'class/getUserIP.php';
  require_once 'class/tempsDeLecture.php';



 
  $req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_projet` ="'.give_url().'" ';

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "id_projet");
  $id_projet = $databaseHandler->tableList_info;





  $req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_projet` ="'.give_url().'" ';

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "id_sha1_parent_projet");
  $id_sha1_parent_projet__p = $databaseHandler->tableList_info;



 



$give_url = give_url() ; 




  $req_sql__ = 'SELECT * FROM `visit_user` WHERE `ip1_visit_user`="'.$give_url.'";';

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql__, 'ip1_visit_user');
  $ip1_visit_user = $databaseHandler->tableList_info;
 



 

 

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "visibility_1_projet");
  $visibility_1_projet = $databaseHandler->tableList_info;

 

 


if($visibility_1_projet[0]==""){



  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
  $id_sha1_projet = $databaseHandler->tableList_info;

 
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

 

 




 






  $req_sql = 'SELECT * FROM `'.$config_dbname.'` WHERE `id_user`="'.$id_user_projet[0].'"';

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "title_user");
  $title_user = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "description_user");
  $description_user = $databaseHandler->tableList_info;

  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql, "id_user");
  $id_user = $databaseHandler->tableList_info;

 
  $title_user_ =  $title_user[0] ; 
 


 

?>




 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
 
<?php 

if (!count($id_projet)<1){
 
  $visibility_1_projet_ = $visibility_1_projet[0] ;
  
  if($visibility_1_projet_==""){
        require "user_data.php" ; 
  }
  else {
    echo '<div class="err404">' ; 
    echo '<img src="../src/img/404.png" alt="">' ; 
    echo '</div>' ; 
  }
}
else {
  echo '<div class="err404">' ; 
  echo '<img src="../src/img/404.png" alt="">' ; 
  echo '</div>' ; 
}
 


}
else {
  echo '<div class="err404">' ; 
  echo '<img src="../src/img_const/404.png" alt="">' ; 
  echo '</div>' ;
}

  ?>
<style>
  .err404{
    text-align: center;
  }
</style>
 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>&copy; 2024 - Tous droits r&eacute;serv&eacute;s.</p>
</body>
</html>
