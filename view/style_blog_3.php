<link rel="stylesheet" href="css/style_blog_3_2.css">
<link rel="stylesheet" href="css/style_blog_3.css">
<link rel="stylesheet" href="css/form_event.css"> 

<div class="class_t">
    <?php


  
if(isset($_SESSION["session_switch"])){
    require_once 'mysq_req/style_blog_3_req_0.php';
}
else {
    require_once 'mysq_req/style_blog_3_req_1.php';
}



 

 echo '<div class="display_flex3">';

    for ($a = 0; $a < count($id_sha1_projet); $a++) {

        $title_projet_ = AsciiConverter::asciiToString($title_projet[$a]); // Affiche "Hello"
        $description_projet_ = AsciiConverter::asciiToString($description_projet[$a]); // Affiche "Hello"
        $name_projet_ = AsciiConverter::asciiToString($name_projet[$a]); // Affiche "Hello"
        $valeur_a_chercher = $group_projet[$a];
        $resultat = chercherIndex($id_group, $valeur_a_chercher);

// require 'mysq_req/style_blog_3_req_2.php';
$valeur_a_chercher = $group_projet[$a];
$resultat = chercherIndex($id_group, $valeur_a_chercher);
$resultat = chercherIndex($id_group, $valeur_a_chercher);    
              if(isset($_SESSION["session_switch"])){       
                require 'style_blog_3_option_1.php';                  
            }
            else {
          
                 require 'style_blog_3_option_3.php';
            
            }
      
    } 
    

    echo '</div>';
    ?>



<style>
    .display_flex3{
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .display_flexX{
        background-color: red;
    }

</style>


 
</div>
<?php
require 'view/style_blog_3_scrypt_1.php';

?>

<script>
    function my_pictures_click(_this) {

        var all_docs_ = document.getElementById("all_docs_" + _this.title);




        if (all_docs_.className == "display_none2") {
            all_docs_.className = "display_flex2";
        } else {
            all_docs_.className = "display_none2";

        }

    }

    function planification_click(_this) {



        var val = document.getElementById("planification_" + _this.title);



        if (val.className == "display_none2") {
            val.className == "";



            document.getElementById("planification_" + _this.title).className = "";


        } else {


            document.getElementById("planification_" + _this.title).className = "display_none2";


        }
    }

    function submit_inputs_form(_this) {

        var inputs_form_1_ = document.getElementById("inputs_form_1_" + _this.title).value;
        var inputs_form_2_ = document.getElementById("inputs_form_2_" + _this.title).value;
        var inputs_form_3_ = document.getElementById("inputs_form_3_" + _this.title).value;
        var inputs_form_4_ = document.getElementById("inputs_form_4_" + _this.title).value;



        var ok = new Information("update/submit_inputs_form.php");
        ok.add("id_projet", _this.title);



        ok.add("heure_debut_projet", inputs_form_1_);
        ok.add("date_debut_projet", inputs_form_2_);
        ok.add("heure_fin_projet", inputs_form_3_);
        ok.add("date_fin_projet", inputs_form_4_);




        ok.push();







    }

    function iframes_doc(_this) {



        var ok = new Information("update/iframes_doc.php");
        ok.add("id_projet", _this.title);

        let img_projet_src = _this.className.replace("img_user_action/", "");

        ok.add("img_projet_src", img_projet_src);




        ok.push();


        const myTimeout = setTimeout(myGreeting, 200);

        function myGreeting() {
            location.reload();
        }

    }

    function cryptographie_input(_this) {
        var el = document.getElementById("cryptographie_input_" + _this.title);
        console.log(el.value);

    }




</script>

<style>
    .projet2:hover,
    .sup_projet2:hover {
        cursor: pointer;
    }

    .projet2,
    .sup_projet2 {


        background-color: black;

       
        margin-top: 25px;
        text-align: center;
        color: white;
        width: 150px;
    }

    .cryptographie_input {
        margin: auto;
        width: 100%;
        margin-top: 50px;
        margin-bottom: 50px;

    }

    .cryptographie_input input {

        width: 100%;
       


    }

    .sup_projet2 {}

    .display_flex2 {

        display: flex;
        justify-content: space-around;
        margin-top: 50px;
        flex-wrap: wrap;
        margin-bottom: 50px;
    }

    .display_flex2 div {

 
        margin-top: 25px;
        width: 100px;
        height: 100px;

    }



    .display_flex2 div:hover {
        cursor: pointer;
        opacity: 0.3;

    }

    .display_flex2 img {

        width: 100%;
        max-height: 200px;

    }

    .sup_projet2 {
        background-color: rgba(220, 40, 12, 0.6);
    }
</style>