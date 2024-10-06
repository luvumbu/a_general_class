<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue - Créer un mot de passe</title>
 
</head>
<script src="class/js.js"></script>
<body>
<?php 
require_once 'change_css.php' ; 

?>
    <div class="container">
        <h1>Récupération de mot de passe</h1>
 
         <div id="div_info"></div>
        <form>
            <input style="padding: 15px; width:100%;border:1px solid rgba(0,0,0,0.1);margin-bottom:20px" type="text" id="password" name="password" placeholder="Entrez votre adresse mail" required>
            <div class="btn" onclick="change_password_submit(this)">Envoyer mail de récuperation</div>
        </form>

        <a href="index.php">
        <img style="margin-top:25px" width="50" height="50" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1"/>
        </a>
 
 <div id="info_mail"></div>

    </div>

</body>
</html>



 






<script>
    function change_password_submit(_this) {

document.getElementById("info_mail").innerHTML ="un mail viens d'etre envoyé dans votre boite mail "; 
        _this.style.display="none" ; 

        document.getElementById("info_mail").className ="info_mail" ;  
      var nom_user = document.getElementById("password").value ; 
     
       
var ok = new Information("reset_password_data.php"); // création de la classe 
ok.add("nom_user", nom_user); // ajout de l'information pour lenvoi 
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

    }
</script>
 


 

 

<style>
    .btn{
        background-color :rgb(26, 188, 156); 
        padding: 10px;
        text-align: center;
        color: white;
    }
    .btn_alert1{
           background-color :rgba(26, 250, 30,0.8);
           color:white;
        padding: 10px;
    }
    .btn_alert2{
           background-color :rgba(250, 88, 186,0.9);
           color:white;
        padding: 10px;
    }

    .info_mail{
        background-color: rgba(250, 0, 0,0.5);
        padding: 10px;
        color: white;
        box-shadow: 1px 1px 1px black;
    }
</style>

 