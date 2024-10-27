<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style> 
  </style>

  <?php

  require_once 'class/Creat_form.php';
  require_once 'class/AsciiConverter.php';
  require_once 'class/path_config.php';
  require_once 'class/chercherIndex.php';
  require_once 'class/IsLocal.php';
  require_once 'class/give_url.php';
  require_once 'class/getUserIP.php';
  require_once 'class/tempsDeLecture.php';
  require_once 'class/Get_anne.php';
  require_once 'class/js.php';
  require_once 'class/Publication.php';
  require_once 'class/Creat_form.php';
  require_once 'class/AsciiConverter.php';
  require_once 'class/path_config.php';
  require_once 'class/chercherIndex.php';
  require_once 'class/IsLocal.php';
  require_once 'class/give_url.php';
  require_once 'class/getUserIP.php';
  require_once 'class/tempsDeLecture.php';
  require_once 'mysq_req/user_sql1.php';

  if ($visibility_1_projet[0] == "") {
    require_once 'mysq_req/user_sql2.php';
  ?>
<body id="capture-zone">
  <?php

    if (!count($id_projet) < 1) {

      $visibility_1_projet_ = $visibility_1_projet[0];

      if ($visibility_1_projet_ == "") {


        if ($shop_projet__ != "0") {
  ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        <style>
          body {
            font-family: "Trirong", serif;
          }
        </style>

        <?php
        }

        switch ($shop_projet__) {


          case "0":
            require "user_data.php";
            break;

          case "5":
        ?>
          <script async
            src="https://js.stripe.com/v3/buy-button.js">
          </script>

          <div class="btn_stripe">
            <h1>Pour accéder à cette page, il est nécessaire d'acheter le produit</h1>

            <stripe-buy-button
              buy-button-id="buy_btn_1QDUIEJQrZ3QGIIxQclGtW25"
              publishable-key="pk_live_s5meJKaagOujynKyXXLkqcQT">
            </stripe-buy-button>
          </div>
        <?php

            break;

          case "10":

        ?>

          <script async
            src="https://js.stripe.com/v3/buy-button.js">
          </script>
          <div class="btn_stripe">
            <h1>Pour accéder à cette page, il est nécessaire d'acheter le produit</h1>

            <stripe-buy-button
              buy-button-id="buy_btn_1QDUUGJQrZ3QGIIxgQOq8n7P"
              publishable-key="pk_live_s5meJKaagOujynKyXXLkqcQT">
            </stripe-buy-button>
          </div>
        <?php

            break;

          case "15":
        ?>

          <script async
            src="https://js.stripe.com/v3/buy-button.js">
          </script>
          <div class="btn_stripe">
            <h1>Pour accéder à cette page, il est nécessaire d'acheter le produit</h1>

            <stripe-buy-button
              buy-button-id="buy_btn_1QDTfWJQrZ3QGIIx9DZwDqpf"
              publishable-key="pk_live_s5meJKaagOujynKyXXLkqcQT">
            </stripe-buy-button>
          </div>

        <?php
            break;

          case "20":
        ?>
          <div class="btn_stripe">
            <h1>Pour accéder à cette page, il est nécessaire d'acheter le produit</h1>

            <script async
              src="https://js.stripe.com/v3/buy-button.js">
            </script>

            <stripe-buy-button
              buy-button-id="buy_btn_1QDUbGJQrZ3QGIIxdyLN5aLF"
              publishable-key="pk_live_s5meJKaagOujynKyXXLkqcQT">
            </stripe-buy-button>
          </div>
<?php
            break;
        }
      } else {
        echo '<div class="err404">';
        echo '<img src="../src/img/404.png" alt="">';
        echo '</div>';
      }
    } else {
      echo '<div class="err404">';
      echo '<img src="../src/img/404.png" alt="">';
      echo '</div>';
    }
  } else {
    echo '<div class="err404">';
    echo '<img src="../src/img_const/404.png" alt="">';
    echo '</div>';
  }


?>



<p class="footer_250">&copy; 2024 - Tous droits r&eacute;serv&eacute;s.</p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>


</html>
<link rel="stylesheet" href="style.abc123.css">
<script>
  /*
        document.addEventListener('mousemove', function(event) {


            let x = event.clientX;
            let y = event.clientY;
            console.log(`Position de la souris: X = ${x}, Y = ${y}`);





            var ok = new Information("php.php"); // création de la classe 
ok.add("x", "root"); // ajout de l'information pour lenvoi 
ok.add("y", "root"); // ajout d'une deuxieme information denvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 







        });

        */
</script>


<?php






$screen_shoot_projet__ = $screen_shoot_projet[0];





if ($screen_shoot_projet__ != "") {
  require_once "scrip_screen.php";
}

?>



</body>





</html>


<?php



?>