<?php
session_start();

?>
<script src="js.js"></script>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://image.spreadshirtmedia.net/image-server/v1/compositions/T993A1PA2181PT1X55Y35D170309227W12961H12961/views/1,width=550,height=550,appearanceId=1,backgroundColor=FFFFFF,noPt=true/stick-figure-design-stickman-trend-idee-cadeau-tapis-de-souris.jpg">
  <title>Document</title>
</head>



<body>
  <!-- <link rel="stylesheet" href="monFormulaire1.css"> -->
  <?php

  require_once 'class/Creat_form.php';
  require_once 'class/AsciiConverter.php';
  require_once 'class/chercherIndex.php';


  



  if (!isset($_SESSION["session_log"])) {



    $label_1 = "label_1";

    $label_1_text = "Dbname";
    $label_2_text = "Username";

    $input_1 = "input_1";
    $input_1_onkeyup = $input_1 . "_onkeyup(this)";


    $label_2 = "label_2";
    $input_2 = "input_2";
    $input_2_onkeyup = $input_2 . "_onkeyup(this)";
    $btn = "btn";

    $btn2 = "xx";
    $info___ = "Mot de passe oublié";
    $src_info = "http://google.com";

    $monFormulaire1 = new Creat_form("form_p_name", "form", "");
    $monFormulaire1->stylesheet("monFormulaire1.css");
    /*
  $monFormulaire1->stylesheet("monFormulaire2css") ; 
  $monFormulaire1->stylesheet("monFormulaire3.css") ; 
  $monFormulaire1->stylesheet("monFormulaire4.css") ; 
  $monFormulaire1->stylesheet("monFormulaire5.css") ; 
  $monFormulaire1->stylesheet("monFormulaire6.css") ; 
*/
    // si la valeur est vide elle ajout l'element apres le body 
    // si non c'est la valeur de d'identifiant qui est pris en compte 
    $monFormulaire1->construct_setAtribut("class", "monFormulaire1");






    $monFormulaire1_label_1 = [
      [$label_1, "label"],
      [$label_1, "", $label_1_text]
    ];


    /*
  $monFormulaire1_input_1 = [
    [$input_1, "input"],
    [$input_1, "placeholder", $label_1_text],
    [$input_1, "onkeyup", $input_1_onkeyup]
  ];

  */
    $monFormulaire1_input_1 = [
      [$input_1, "input"],
      [$input_1, "placeholder", $label_1_text],
      [$input_1, "value", "root"]

    ];

    $monFormulaire1_label_2 = [
      [$label_2, "label"],
      [$label_2, "", $label_2_text]
    ];

    /*
  $monFormulaire1_input_2 = [
    [$input_2, "input"],
    [$input_2, "placeholder", $label_2_text],
    [$input_2, "onkeyup", $input_1_onkeyup]
  ];

*/

    $monFormulaire1_input_2 = [
      [$input_2, "input"],
      [$input_2, "placeholder", $label_2_text],
      [$input_2, "value", "root"]
    ];

    //onclick_send
    $monFormulaire1_div_1 = [
      [$btn2, "div"],
      [$btn2, "", "<a href='" . $src_info . "'>" . $info___ . "</a>"],
      [$btn2, "class", "xx"]
    ];

    $monFormulaire1_div_2 = [
      [$btn, "div"],
      [$btn, "class", "submit"],
      [$btn, "onclick", $input_1_onkeyup],
      [$btn, "", "submit"]
    ];

    $monFormulaire1_div_2 = [
      [$btn, "div"],
      [$btn, "class", "submit"],
      [$btn, "onclick", $input_1_onkeyup],
      [$btn, "", "submit"]
    ];

    $monFormulaire1->select_Atribut("input", "select", "form_p_name.php");
    $monFormulaire1->add_child_array($monFormulaire1_label_1);
    $monFormulaire1->add_child_array($monFormulaire1_input_1);
    $monFormulaire1->add_child_array($monFormulaire1_label_2);
    $monFormulaire1->add_child_array($monFormulaire1_input_2);
    $monFormulaire1->add_child_array($monFormulaire1_div_1);

    if ($monFormulaire1->databaseHandler_verif == 1) {

      $monFormulaire1_div_3 = [
        [$btn, "div"],
        [$btn, "style", "background-color:blue;"]
      ];
    }

    $_SESSION["path_config"] = $monFormulaire1->databaseHandler_verif;
    $monFormulaire1->add_child_array($monFormulaire1_div_2);
    $monFormulaire1->select_Atribut("input", "select", "form_p_name.php");
    $monFormulaire1->select_Atribut_function("input");
    $monFormulaire1->add_child_array($monFormulaire1_div_3);
  } else {
    require_once 'class/path_config.php';
    require_once 'session_log.php';
  }



  ?>









</body>



<style>
  .xx {
    padding: 10px;

    margin-top: 10px;
    margin-bottom: 10px;
  }
  .taille_img:hover,
  .user_log:hover
  
  {
    cursor: pointer;
  }
</style>






</body>

</html>