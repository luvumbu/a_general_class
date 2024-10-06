<?php
// Démarre la session PHP pour conserver les données utilisateur entre les pages
session_start();
 
?>

<!-- Inclusion du fichier JavaScript externe -->
<script src="class/js.js"></script>

<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" href="css/index.css">
<link rel="icon" type="image/x-icon" href="data:image/png;base64,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">
<head>
  <!-- Définit l'encodage des caractères en UTF-8 -->
  <meta charset="UTF-8">

  <!-- Rend le site responsive pour les appareils mobiles -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Ajout d'une icône pour l'onglet du navigateur -->
  <link rel="icon" type="image/x-icon" href="https://image.spreadshirtmedia.net/image-server/...">

  <!-- Titre de la page -->
  <title>Document</title>
</head>

<body>
<?php 

if(isset(   $_SESSION["session_info"])) {

 



  if(isset(   $_SESSION["session_info_coumpt"])) {
  if($_SESSION["session_info_coumpt"]==1){
  ?>
<style>
    .style_reed {
    background-color: #f8d7da;
    color: #c01f2e;
    padding: 15px;
    text-align: center;
    margin: auto;
    width: 300px;

  }
</style>
<div class="style_reed">
  <?php 


  echo    $_SESSION["session_info"] ; 


  

?>
</div>
<?php 
}

$_SESSION["session_info_coumpt"] ++ ; 
  }

}


?>


  <!-- Inclusion potentielle d'une feuille de style CSS (commentée) -->
  <!-- <link rel="stylesheet" href="monFormulaire1.css"> -->

  <?php
  // Inclusion des fichiers de classe PHP nécessaires
  require_once 'class/Creat_form.php';
  require_once 'class/AsciiConverter.php';
  require_once 'class/chercherIndex.php';
  require_once 'class/IsLocal.php';
  require_once 'class/give_url.php';
  require_once 'class/tempsDeLecture.php' ; 
  require_once 'class/CheckFileExists.php' ; 


 

  // Si la session n'est pas déjà active (l'utilisateur n'est pas connecté)
  if (!isset($_SESSION["session_log"])) {

    // Déclaration des variables de formulaire
    $label_1 = "label_1";
    $label_1_text = "Mail"; // Texte pour le label 1
    $label_2_text = "password"; // Texte pour le label 2

    // Déclaration des noms et événements pour les champs input
    $input_1 = "input_1";
    $input_1_onkeyup = $input_1 . "_onkeyup(this)";

    $label_2 = "label_2";
    $input_2 = "input_2";
    $input_2_onkeyup = $input_2 . "_onkeyup(this)";

    $btn = "btn";
    $btn2 = "xx";

    // Lien vers une fonctionnalité "Mot de passe oublié"
    $info___ = "Mot de passe oublié";
    $src_info = "reset_password.php";

    // Création d'une nouvelle instance de formulaire
    $monFormulaire1 = new Creat_form("form_p_name", "form", "");

    // Ajout d'une feuille de style au formulaire
    $monFormulaire1->stylesheet("css/monFormulaire1.css");

    /*
    Plusieurs autres feuilles de styles peuvent être ajoutées, mais elles sont commentées ici
    $monFormulaire1->stylesheet("monFormulaire2.css");
    $monFormulaire1->stylesheet("monFormulaire3.css");
    */

    // Si la valeur est vide, l'élément est ajouté après le body, sinon l'identifiant est pris en compte
    $monFormulaire1->construct_setAtribut("class", "monFormulaire1");

    // Structure du label 1
    $monFormulaire1_label_1 = [
      [$label_1, "label"],
      [$label_1, "", $label_1_text]
    ];

    // Structure du champ input 1 avec placeholder et valeur par défaut "root"
    $monFormulaire1_input_1 = [
      [$input_1, "input"],
      [$input_1, "placeholder", $label_1_text],
      [$input_1, "value", "root"]
    ];

    // Structure du label 2
    $monFormulaire1_label_2 = [
      [$label_2, "label"],
      [$label_2, "", $label_2_text]
    ];

    // Structure du champ input 2 avec placeholder et valeur par défaut "root"
    $monFormulaire1_input_2 = [
      [$input_2, "input"],
      [$input_2, "placeholder", $label_2_text],
      [$input_2, "type", "password"],

      [$input_2, "value", "root"]
  
    ];

    // Div contenant le lien "Mot de passe oublié"
    $monFormulaire1_div_1 = [
      [$btn2, "div"],
      [$btn2, "", "<a href='" . $src_info . "'>" . $info___ . "</a>"],
      [$btn2, "class", "xx"]
    ];

    // Div pour le bouton submit avec une action onclick
    $monFormulaire1_div_2 = [
      [$btn, "div"],
      [$btn, "class", "submit"],
      [$btn, "onclick", $input_1_onkeyup],
      [$btn, "", "submit"]
    ];

    // Ajout d'attributs au formulaire et ses enfants
    $monFormulaire1->select_Atribut("input", "select", "form_p_name.php");
    $monFormulaire1->add_child_array($monFormulaire1_label_1);
    $monFormulaire1->add_child_array($monFormulaire1_input_1);
    $monFormulaire1->add_child_array($monFormulaire1_label_2);
    $monFormulaire1->add_child_array($monFormulaire1_input_2);
    $monFormulaire1->add_child_array($monFormulaire1_div_1);

    // Si la vérification de la base de données est réussie
    if ($monFormulaire1->databaseHandler_verif == 1) {
      $monFormulaire1_div_3 = [
        [$btn, "div"],
        [$btn, "style", "background-color:rgb(26, 188, 156);"]
      ];
    }

    // Sauvegarde de la vérification de la base de données dans la session
    $_SESSION["path_config"] = $monFormulaire1->databaseHandler_verif;

    // Ajout du bouton submit et autres éléments au formulaire
    $monFormulaire1->add_child_array($monFormulaire1_div_2);
    $monFormulaire1->select_Atribut("input", "select", "form_p_name.php");
    $monFormulaire1->select_Atribut_function("input");
    $monFormulaire1->add_child_array($monFormulaire1_div_3);


    $path = "class/path_config.php";

    require $path;






    // Example usage
    if (checkFileExists($path)) {




      // Créer une instance de DatabaseHandler
      $databaseHandler = new DatabaseHandler($config_dbname, $config_password);

      // Vérifier si la connexion est réussie
      if ($databaseHandler->get_verif()) {
        // Nom de la table à vérifier

        // Appeler la méthode pour obtenir les colonnes de la table
        $databaseHandler->getListOfTables_Child($config_dbname);

        // Accéder à la propriété contenant la liste des colonnes
        $columns = $databaseHandler->get_tableList_child();


        if (count($columns) == 0) {
          delete_file($path);
  ?>
          <script>
            const myTimeout = setTimeout(myGreeting, 400);

            function myGreeting() {
              location.reload();
            }
          </script>
  <?php
        }
      } else {
        echo "Connexion impossible";
      }
    }
  } else {
    // Si la session est déjà active, inclusion des fichiers pour la configuration et la gestion de session
    
   
    require 'class/path_config.php';


 

 
/*

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_projet");
$id_projet = $databaseHandler->tableList_info;



*/ 
 


$session_general_1 = $_SESSION["session_general"][1] ; 
$req_sqll = 'SELECT * FROM `'.$config_dbname.'` WHERE `id_sha1_user` ="'.$session_general_1.'" ';


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sqll, "password_user");
$password_user__ = $databaseHandler->tableList_info[0];


 


if($password_user__ ==""){
 require_once 'change_password.php' ; 
}
else {
  require_once 'view/body.php';
}


     
   
    }








 

  ?>

 


</body>
<script>
    function remove_session_switch(_this) {


 
        _this.style.display="none" ; 

        var ok = new Information("cookie/remove_session_switch.php"); // création de la classe 
        
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 



         const myTimeout = setTimeout(myGreeting, 100);

function myGreeting() {
 location.reload() ; 
}

    }



 
     function session_switch(_this) {
         

        _this.style.display="none" ; 

         var ok = new Information("cookie/session_switch.php"); // création de la classe 
         ok.add("session_switch", _this.className); // ajout de l'information pour lenvoi 
        
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 



         const myTimeout = setTimeout(myGreeting, 100);

function myGreeting() {
 location.reload() ; 
}



     }
 
</script>



<div style="margin-top: 100px;">

</div>
<?php 

 

require_once "mysq_req/req_index_all_sql.php" ; 
if (!isset($_SESSION["session_log"])) {




  

require 'view/index_all_view.php' ; 





}
 











?>



<style>

/*
    .err404{
    text-align: center;
  }
  .footer_250{
    background-color: #f8f9fa;
    padding: 10px;
    color: black;
    margin-top: 300px;
    text-align: center;
  }


 
body {
  scrollbar-width: thin; 
  scrollbar-color: #1f1f1f #cccccc; /* Couleur du curseur et de l'arrière-plan de la scrollba 
}

 
::-webkit-scrollbar {
  width: 12px; 
}

::-webkit-scrollbar-track {
  background: #cccccc; 
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  background-color: #1f1f1f; / 
  border-radius: 10px;  
  border: 2px solid #cccccc; 
}

::-webkit-scrollbar-thumb:hover {
  background-color: #555;  
}

*/
 

</style>


 
</html>

 