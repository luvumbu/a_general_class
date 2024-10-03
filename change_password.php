<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue - Créer un mot de passe</title>
    <style>


    </style>
</head>
<body>
<?php 
require_once 'change_css.php' ; 

?>
    <div class="container">
        <h1>Bienvenue!</h1>
        <p>Nous sommes ravis de vous accueillir. Avant de continuer, veuillez créer un mot de passe sécurisé.</p>
        
         <div id="div_info"></div>
        <form>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmez votre mot de passe" required>
            <div class="btn" onclick="change_password_submit(this)">Enregistrer le mot de passe</div>
        </form>

        <a href="class/log_off.php">
        <img width="50" height="50" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1"/>
        </a>
 
 

    </div>

</body>
</html>



<script>
    function change_password_submit(_this) {

        var password = document.getElementById("password").value ; 
        var confirm_password = document.getElementById("confirm_password").value ; 


        if(password==confirm_password){
 
            if(password.length>5){
              
                document.getElementById("div_info").innerHTML ='<div class="btn_alert1"><strong>Formulaire Validé</strong>';
                
        var ok = new Information("update/update_password_user.php"); // création de la classe 
ok.add("update_password_user", password); // ajout de l'information pour lenvoi 
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

_this.style.display="none" ; 


const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
   location.reload() ; 
}

            }

            
            else{
  document.getElementById("div_info").innerHTML ='<div class="btn_alert2"><strong>Mot de passe trop court</strong>';
            }

        }
         
        else {
            document.getElementById("div_info").innerHTML ='<div class="btn_alert2"><strong> Les valeurs ne sont pas identiques</strong>';
                
        }

 







 


 

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
</style>

 