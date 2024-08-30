<?php 
    $req_sql = 'SELECT * FROM `projet` WHERE `id_user_projet` = "' . $_SESSION["session_general"][0] . '" ORDER BY `projet`.`id_projet` DESC';

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
    $id_sha1_projet = $databaseHandler->tableList_info;

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



    ?>