<?php 

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

$monFormulaire1 = new Creat_form("editor-container", "div", "");
$monFormulaire1_ = new Creat_form("editor-container", "div", "editor-container");



 
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


 

$btn01 = [
    ["btn_01", "button"],
    ["btn_01", "", "GRAS"]
  ];

  $btn02 = [
    ["btn_02", "button"],
    ["btn_02", "", "GRAS"]
  ];

  $btn03 = [
    ["btn_03", "button"],
    ["btn_03", "", "GRAS"]
  ];
  $btn04 = [
    ["btn_04", "button"],
    ["btn_04", "", "GRAS"]
  ];
  $btn05 = [
    ["btn_05", "button"],
    ["btn_05", "", "GRAS"]
  ];
  $btn06 = [
    ["btn_06", "button"],
    ["btn_06", "", "GRAS"]
  ]; 

/*
 

*/

 


$monFormulaire1->select_Atribut("input", "select", "form_p_name.php");
$monFormulaire1->add_child_array($btn01);
$monFormulaire1->add_child_array($btn02);
$monFormulaire1->add_child_array($btn03);
$monFormulaire1->add_child_array($btn04);
$monFormulaire1->add_child_array($btn05);
$monFormulaire1->add_child_array($btn06);
$monFormulaire1->add_child_array($btn07);

 

 
$monFormulaire1->select_Atribut_function("input");
 


?>