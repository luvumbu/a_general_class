<?php

$req_sql = "SELECT * FROM `social_media` WHERE 1";
$databaseHandler = new DatabaseHandler($input_1, $input_2);
$databaseHandler->getDataFromTable($req_sql, "social_media_id_sha1");
$name_projet = $databaseHandler->tableList_info;





// echo $input_1 ; 


echo $databaseHandler->verif;



if ($databaseHandler->verif == 1) {



  $nom_file = "../class/path_config.php";
  $texte = "<?php \n";
  $texte .= '$config_dbname ="'.$input_1.'"'.";\n" ; 
  $texte .= '$config_password ="'.$input_2.'";'."\n" ; 
  $texte.="?>";
 
 

  // création du fichier
  $f = fopen($nom_file, "x+");
  // écriture
  fputs($f, $texte);
  // fermeture
  fclose($f);
}


/*

switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }




echo $_SESSION["DatabaseHandler_switch"] ; 
*/
