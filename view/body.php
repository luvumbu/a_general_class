<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/blog.css">
</head>
<div class="header_flex">
  <div>
    <a href="class/log_off.php">
      <div>
        <img width="50" height="50" src="https://img.icons8.com/fluency/50/switch-off.png" alt="switch-off" />
      </div>
    </a>
  </div>
  <div onclick="add_projet(this)">
    <img width="50" height="50" src="https://img.icons8.com/officel/50/add--v1.png" alt="add--v1" />
  </div>

</div>
<style>
  .header_flex {
    display: flex;
    justify-content: space-around;
    margin-bottom: 15px;
  }

  .header_flex div:hover {
    cursor: pointer;
  }
</style>

<?php
//require_once 'style_blog_1.php'; 
?>


<script>
  function add_projet(_this) {




    var ok = new Information("add/add_projet.php"); // création de la classe 
    ok.add("login", "root"); // ajout de l'information pour lenvoi 
    ok.add("id_sha1_parent_projet", _this.className); // ajout de l'information pour lenvoi 





    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 

    const myTimeout = setTimeout(myGreeting, 100);

    function myGreeting() {
      location.reload();
    }

  }
</script>


<div class="row rowrow">
  <div class="leftcolumn">
    <?php



    if (give_url() == "index.php") {




      require_once 'view/style_blog_3.php';




      if (isset($_SESSION["session_switch"])) {
 
        require_once 'mysq_req/style_blog_3_req_01.php';
 

 
?>

<div class="display_flex flew_wrap">



<?php 
        for ($a = 0;$a< count($id_projet); $a++) {


         require 'view/style_blog_3_option_3_1.php' ; 
        }


  

?>
</div>

<?php 
      }  
      
    }




    ?>
  </div>
  <div class="rightcolumn">
    <?php

    if (give_url() == "index.php") {
      require_once 'view/style_blog_4.php';
    }
    ?>
  </div>
</div>
<?php

//require_once 'style_blog_7.php';

?>



<style>
  .flew_wrap{
    display: flex;
    flex-wrap: wrap;
 
  }
</style>