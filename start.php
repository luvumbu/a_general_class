<?php





 


$req_sql_parent33 = 'SELECT * FROM `option_projet` WHERE `ip2_option_projet`="'.$ip2_option_projet_.'" ORDER BY `option_projet`.`id_option_projet` DESC LIMIT 1';

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent33, "start_option_projet");
$start_option_projet = $databaseHandler->tableList_info;


 
// Supposons que vous ayez récupéré la note depuis votre base de données
$note = $start_option_projet[0]; // Exemple de note récupérée depuis la base de données

// S'assurer que la note est entre 1 et 5
$note = max(1, min(5, $note));

 
$_SESSION['sha1_option_projet'] = give_url()  ; 

$verif1 = $start_option_projet[0]  ; 
 
if($start_option_projet[0]==""){
echo '<div id="start_option_projet">Vous navez pas encore noté cette page</div>';
 
}
else {

 


$req_sql_parent33 = ' SELECT AVG(`start_option_projet`) AS moyenne_ip2_option_projet
FROM `option_projet`';



$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent33, "moyenne_ip2_option_projet");
$start_option_projet = $databaseHandler->tableList_info;


 
// Supposons que vous ayez récupéré la note depuis votre base de données
$note =intval( $start_option_projet[0]); // Exemple de note récupérée depuis la base de données



echo '<div id="start_option_projet">Note moyenne de l\'article '.$note.'/5 </div>';



 
 

// S'assurer que la note est entre 1 et 5
$note = max(1, min(5, $note));
}


?>
 

</head>
<body>

    <div class="star-rating">
        <input type="radio" name="rating" id="star5" value="5" <?php if($note == 5) echo 'checked'; ?>><label for="star5">★</label>
        <input type="radio" name="rating" id="star4" value="4" <?php if($note == 4) echo 'checked'; ?>><label for="star4">★</label>
        <input type="radio" name="rating" id="star3" value="3" <?php if($note == 3) echo 'checked'; ?>><label for="star3">★</label>
        <input type="radio" name="rating" id="star2" value="2" <?php if($note == 2) echo 'checked'; ?>><label for="star2">★</label>
   
        <input type="radio" name="rating" id="star1" value="1" <?php if($note == 1) echo 'checked'; ?>><label for="star1">★</label>
      
    </div>
 

    <?php 


if($verif1==""){
     ?>

<script>
        // Sélectionner toutes les étoiles (les inputs radio)
        const stars = document.querySelectorAll('.star-rating input');

        // Ajouter un événement pour capturer les clics
        stars.forEach(star => {
            star.addEventListener('change', function() {
                // Afficher le log dans la console quand une étoile est cliquée
                console.log('Vous avez cliqué sur ' + this.value + ' étoiles.');
                
 
                var ok = new Information("../update/start.php");
    ok.add("start_option_projet",this.value );

  document.getElementById("start_option_projet").innerHTML="Merci" ; 

        ok.push();




const myTimeout = setTimeout(myGreeting, 250);

function  myGreeting() {
  clearTimeout(myTimeout);
  
  location.reload() ; 
}



          
            });
        });
    </script>


<style>
        .star-rating {
            direction: rtl;
            font-size: 30px;
            unicode-bidi: bidi-override;
            display: inline-block;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            color: #ddd;
            cursor: pointer;
        }

        .star-rating input:checked ~ label,
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: #FFD700;
        }

        .star-rating input:checked ~ label:hover,
        .star-rating input:checked ~ label:hover ~ label,
        .star-rating input:checked ~ label ~ label {
            color: #FFD700;
        }

        .rating-value {
            font-size: 18px;
            margin-top: 10px;
            color: #333;
        }
    </style>
 
<?php 
}
else {
    ?>
    <style>
        .star-rating {
            direction: rtl;
            font-size: 30px;
            unicode-bidi: bidi-override;
            display: inline-block;
        }

        .star-rating input {
            display: none;
        }

        .star-rating label {
            color: #ddd;
            cursor: pointer;
        }

        .star-rating input:checked ~ label,
        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: rgba(0, 0, 220,0.8);
        }

        .star-rating input:checked ~ label:hover,
        .star-rating input:checked ~ label:hover ~ label,
        .star-rating input:checked ~ label ~ label {
            color: rgba(0, 0, 220,0.8);
        }

        .rating-value {
            font-size: 18px;
            margin-top: 10px;
            color: #333;
        }
    </style>
    <?php 
}


?>

  



 