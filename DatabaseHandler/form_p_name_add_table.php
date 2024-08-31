<?php 

$req_sql = 'SELECT * FROM `'.$input_1.'` WHERE `nom_user`="'.$input_1.'"  AND `'.$input_2.'` ="'.$input_2.'" ';
$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "nom_user");
 
 

if($databaseHandler->verif!=1){
    
}
else {

$databaseHandler = new DatabaseHandler($input_1,$input_2); 
$databaseHandler->set_column_names("id_user");
$databaseHandler->set_column_names("id_sha1_user");

$databaseHandler->set_column_names("id_parent_user");
$databaseHandler->set_column_names("description_user");
$databaseHandler->set_column_names("title_user");
$databaseHandler->set_column_names("img_user");



$databaseHandler->set_column_names("nom_user");
$databaseHandler->set_column_names("prenom_user");
$databaseHandler->set_column_names("password_user");
$databaseHandler->set_column_names("email_user");


$databaseHandler->set_column_names("date_inscription_user");
$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table($input_1);
//$config_password_ = sha1($input_2) ; 

 





















$databaseHandler = new DatabaseHandler($input_1, $input_2);

// Define column names and types as arrays
$columnNames = [
    "id_projet",
    "id_user_projet",
    "id_sha1_projet",
    "name_projet",
    "statue_projet",
    "title_projet",
    "description_projet",
    "password_projet",
    "visibility_1_projet",
    "visibility_2_projet",
    "img_projet_src",
    "img_projet_visibility",
    "group_projet",
    "heure_debut_projet",
    "date_debut_projet",
    "heure_fin_projet",
    "date_fin_projet",
    "date_inscription_projet"
];

$columnTypes = [
    "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "TIME NOT NULL",                // Type for heure_debut_projet
    "DATE NOT NULL",                // Type for date_debut_projet
    "TIME NOT NULL",                // Type for heure_fin_projet
    "DATE NOT NULL",                // Type for date_fin_projet
    "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"  // Type for date_inscription_projet
];

// Loop through each column name and type and add to the database handler
foreach ($columnNames as $index => $columnName) {
    $databaseHandler->set_column_names($columnName);
    $databaseHandler->set_column_types($columnTypes[$index]);
}

// Finally, add the table
$databaseHandler->add_table("projet");














$databaseHandler = new DatabaseHandler($input_1, $input_2);

// Define column names and types as arrays
$columnNames = [
    "id_projet_child",
    "id_user_projet_child",
    "id_sha1_projet_child",
    "name_projet_child",
    "statue_projet_child",
    "title_projet_child",
    "description_projet_child",
    "password_projet_child",
    "visibility_1_projet_child",
    "visibility_2_projet_child",
    "img_projet_src_child",
    "img_projet_visibility_child",
    "date_inscription_projet_child",
    "date_de_commencement",        // New column
    "heure_de_commencement",       // New column
    "date_de_fin",                 // New column
    "heure_de_fin"                 // New column
];

$columnTypes = [
    "INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "LONGTEXT NOT NULL",
    "TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
    "DATE NOT NULL",                // Type for date_de_commencement
    "TIME NOT NULL",                // Type for heure_de_commencement
    "DATE NOT NULL",                // Type for date_de_fin
    "TIME NOT NULL"                 // Type for heure_de_fin
];

// Loop through each column name and type and add to the database handler
foreach ($columnNames as $index => $columnName) {
    $databaseHandler->set_column_names($columnName);
    $databaseHandler->set_column_types($columnTypes[$index]);
}

// Finally, add the table
$databaseHandler->add_table($input_1 . "_child");










































$databaseHandler = new DatabaseHandler($input_1,$input_2); 


$databaseHandler->set_column_names("id_projet_child");
$databaseHandler->set_column_names("id_user_projet_child");

$databaseHandler->set_column_names("id_sha1_projet_child");

$databaseHandler->set_column_names("name_projet_child"); 
$databaseHandler->set_column_names("statue_projet_child"); 

$databaseHandler->set_column_names("title_projet_child"); 
$databaseHandler->set_column_names("description_projet_child"); 


$databaseHandler->set_column_names("password_projet_child");
$databaseHandler->set_column_names("visibility_1_projet_child");
$databaseHandler->set_column_names("visibility_2_projet_child");
$databaseHandler->set_column_names("img_projet_src_child");
$databaseHandler->set_column_names("img_projet_visibility_child");



$databaseHandler->set_column_names("date_inscription_projet_child");

$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table($input_1."_child");














//














$databaseHandler = new DatabaseHandler($input_1,$input_2); 



$databaseHandler->set_column_names("id_social_media");
$databaseHandler->set_column_names("id_user_social_media");

$databaseHandler->set_column_names("id_sha1_social_media");

$databaseHandler->set_column_names("name_social_media"); 
$databaseHandler->set_column_names("statue_social_media"); 

$databaseHandler->set_column_names("title_social_media"); 
$databaseHandler->set_column_names("description_social_media"); 


$databaseHandler->set_column_names("password_social_media");
$databaseHandler->set_column_names("visibility_1_social_media");
$databaseHandler->set_column_names("visibility_2_social_media");
$databaseHandler->set_column_names("img_projet_src_social_media");
$databaseHandler->set_column_names("img_projet_visibility_social_media");



$databaseHandler->set_column_names("date_inscription_social_media");

$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table('social_media');
























$databaseHandler = new DatabaseHandler($input_1,$input_2); 



$databaseHandler->set_column_names("id_group");
$databaseHandler->set_column_names("id_user_group");

$databaseHandler->set_column_names("id_sha1_group");

$databaseHandler->set_column_names("name_group"); 
$databaseHandler->set_column_names("statue_group"); 

$databaseHandler->set_column_names("title_group"); 
$databaseHandler->set_column_names("description_group"); 


$databaseHandler->set_column_names("password_group");
$databaseHandler->set_column_names("visibility_1_group");
$databaseHandler->set_column_names("visibility_2_group");
$databaseHandler->set_column_names("img_projet_src_group");
$databaseHandler->set_column_names("img_projet_visibility_group");



$databaseHandler->set_column_names("date_inscription_group");

$databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT NOT NULL");

$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");
$databaseHandler->set_column_types("LONGTEXT NOT NULL");



$databaseHandler->set_column_types("LONGTEXT");
$databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
$databaseHandler->add_table('group_projet');



$req_sqlxx = 'SELECT * FROM `'.$input_1.'` WHERE `nom_user`="'.$input_1.'"  AND `password_user` ="'.$input_2.'" ';
$databaseHandlerxx = new DatabaseHandler($input_1, $input_2);
$databaseHandlerxx->getDataFromTable($req_sqlxx, "nom_user");


if(count($databaseHandlerxx->tableList_info)>0) {
   
}
else {
$databaseHandler->action_sql("INSERT INTO `$input_1` (nom_user,password_user) VALUES ('$input_1','$input_2')") ;
 
}







    
}










 


?>