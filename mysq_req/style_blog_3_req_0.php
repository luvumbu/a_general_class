<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
$req_sql = 'SELECT * FROM `projet` WHERE `id_sha1_projet` = "' . $_SESSION["session_switch"] . '"  ORDER BY `projet`.`id_projet` DESC';

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
$id_sha1_projet = $databaseHandler->tableList_info;






$req_sqlxx = 'SELECT * FROM `visit_user` WHERE `ip1_visit_user` = "' . $_SESSION["session_switch"] . '" ORDER BY `ip1_visit_user` ASC';


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "ip2_visit_user");
$ip2_visit_user = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "ip4_visit_user");
$ip4_visit_user = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "ip5_visit_user");
$ip5_visit_user = $databaseHandler->tableList_info;




$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "ip8_visit_user");
$ip8_visit_user = $databaseHandler->tableList_info;




$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqlxx, "timestamp_visit_user");
$timestamp_visit_user = $databaseHandler->tableList_info;




 
require "view/list_visites.php" ; 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_projet");
$id_projet = $databaseHandler->tableList_info;

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
$databaseHandler->getDataFromTable($req_sql, "password_projet");
$password_projet = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "visibility_1_projet");
$visibility_1_projet = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "visibility_2_projet");
$visibility_2_projet = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "img_projet_src");
$img_projet_src = $databaseHandler->tableList_info;



// ** 


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
// ** 




$req_sql_2 = "SELECT * FROM `group_projet` WHERE `id_user_group`='" . $_SESSION["session_general"][0] . "' ORDER BY `group_projet`.`id_group` DESC ";

$databaseHandler_2 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler_2->getDataFromTable($req_sql_2, "id_group");
$id_group = $databaseHandler_2->tableList_info;



$databaseHandler_2 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler_2->getDataFromTable($req_sql_2, "name_group");
$name_group = $databaseHandler_2->tableList_info;

$databaseHandler_2 = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler_2->getDataFromTable($req_sql_2, "id_group");
$id_group = $databaseHandler_2->tableList_info;




$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "group_projet");
$group_projet = $databaseHandler->tableList_info;



$req_sql = 'SELECT * FROM `projet_img` WHERE `id_user_projet_img` ="' . $_SESSION["session_general"][0] . '" ORDER BY   `img_projet_src_img` ASC';

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "img_projet_src_img");
$img_projet_src_img = $databaseHandler->tableList_info;





$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_projet_img_auto");
$id_projet_img_auto = $databaseHandler->tableList_info;










for ($wx = 0; $wx < count($img_projet_src_img); $wx++) {




    if (checkFileExists("img_user_action/" . $img_projet_src_img[$wx])) {
        //   echo "The file exists.";

    } else {
        //  echo "The file does not exist.";



        $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler->action_sql('DELETE FROM `projet_img` WHERE `id_projet_img_auto` ="' . $id_projet_img_auto[$wx] . '" ');
    }
}

?>

<style>
    .max_table {

        max-height: 400px;
        overflow-y: scroll;
    }
</style>


<script>

    function tab_id_click() {
   var tab_id_info =     document.getElementById("tab_id").className ; 



        if(tab_id_info==""){
         document.getElementById("tab_id").className ="display_none"; 

        }
        else {
            document.getElementById("tab_id").className =""; 


        }
    }


    

</script>