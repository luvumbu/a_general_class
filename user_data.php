<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
 
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

 
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<a href="../">
<img width="40" height="40" src="https://img.icons8.com/ios/40/home--v1.png" alt="home--v1"/>

</a>

    <?php





    for ($a = 0; $a < count($date_inscription_projet); $a++) {


        $name_projet_ =  AsciiConverter::asciiToString($name_projet[$a]);
        $title_projet_ = AsciiConverter::asciiToString($title_projet[$a]);
        $description_projet_ = AsciiConverter::asciiToString($description_projet[$a]);;
        $img_projet_src_ = $img_projet_src[$a];
        $heure_debut_projet_ = $heure_debut_projet[$a];
        $date_debut_projet_ = $date_debut_projet[$a];
        $heure_fin_projet_ = $heure_fin_projet[$a];
        $date_fin_projet_ = $date_fin_projet[$a];
        $date_inscription_projet_ = $date_inscription_projet[$a];


        $id_projet_ =   $id_projet[$a];
        $id_sha1_projet_ = $id_sha1_projet[$a];

 
    ?>

<h1 style="text-align: center;">
     <?php echo  $title_projet_ ?> 
</h1>
 
       <p  style="text-align: center;">
         <?php echo  $title_user_  ?> 
       </p>

       <p  style="text-align: center;">
           <?php echo  $date_inscription_projet_ ?> 
       </p>



                </p>
     

            <?php
            if ($img_projet_src_ != '') {
            ?>

                <div class="user_img">
                    <img src="<?php echo   "../img_user_action/" . $img_projet_src_ ?>" alt="">

                </div>

            <?php
            }






            ?>
  
                <h2 class="blog-title"><?php echo $name_projet_ ?></h2>
    

        </div>



        <div class="display_flexx">
    <?php



    }






    $give_url = give_url();


    $req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_parent_projet` ="' . give_url() . '" ';

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_projet");
    $id_projet = $databaseHandler->tableList_info;


 
    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
    $id_sha1_projet = $databaseHandler->tableList_info;


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_user_projet");
    $id_user_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_parents_projet");
    $id_parents_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "visit_projet");
    $visit_projet = $databaseHandler->tableList_info;




    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "name_projet");
    $name_projet = $databaseHandler->tableList_info;


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "statue_projet");
    $statue_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "title_projet");
    $title_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "description_projet");
    $description_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "qr_code_src_projet");
    $qr_code_src_projet = $databaseHandler->tableList_info;



    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "visibility_1_projet");
    $visibility_1_projet = $databaseHandler->tableList_info;


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "img_projet_src");
    $img_projet_src = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "group_projet");
    $group_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "heure_debut_projet");
    $heure_debut_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "date_debut_projet");
    $date_debut_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "heure_fin_projet");
    $heure_fin_projet = $databaseHandler->tableList_info;


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "date_fin_projet");
    $date_fin_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "date_inscription_projet");
    $date_inscription_projet = $databaseHandler->tableList_info;






 


 




    for ($a = 0; $a < count($date_inscription_projet); $a++) {
 


$name_projet__  =  AsciiConverter::asciiToString($name_projet[$a]); // Affiche "Hello" ; 
$title_projet__ = AsciiConverter::asciiToString($title_projet[$a]); ; 
$description_projet__ = AsciiConverter::asciiToString($description_projet[$a]); ; 




$req_sql = 'SELECT * FROM `projet` WHERE  `id_sha1_parent_projet` ="' .$id_sha1_projet[$a] . '" ';

 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
$id_sha1_projet___ = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "name_projet");
$name_projet___ = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "title_projet");
$title_projet___ = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "description_projet");
$description_projet___ = $databaseHandler->tableList_info;


 

 

 
?>
<div class="card largeur_card">
<h5 class="card-title"> </h5>

 
 <?php 
 
 
 $somm_text2 = "";


  
 echo AsciiConverter::asciiToString($title_projet[$a]); 
for($b = 0 ; $b <count($id_sha1_projet___) ; $b ++) {



 

     
    echo "<br/>" ; 

  $name_projet___x =   AsciiConverter::asciiToString($name_projet___[$b]); 
  $title_projet___x =   AsciiConverter::asciiToString($title_projet___[$b]); 
  $description_projet___x =   AsciiConverter::asciiToString($description_projet___[$b]); 



 

  $somm_text2= $somm_text2.$name_projet___x.$title_projet___x.$description_projet___x;
 

 
  


}
 

?>


     

    <p class="data_time"><?php echo $date_inscription_projet[$a]  ?></p>
   
  <img src="<?php echo   '../img_user_action/'.$img_projet_src[$a] ?>" alt="" srcset="">
 
        <div class="card-body">
      
      
            <?php 
 

echo "<br/>" ; 

$somm_text = $name_projet__.
$title_projet__.
$description_projet__;
$tempsEstime = tempsDeLecture($somm_text);


$tempsEstime2 = tempsDeLecture($somm_text.$somm_text2);


 

echo "⏰ Temps de lecture estimé : $tempsEstime minute(s)";
echo "<br/>" ; 
 

if(count($name_projet___)>0) {
   echo "⏰ Total: $tempsEstime2 minute(s)"; 
   echo "<br/>" ; 

   echo "sous articles ".count($name_projet___) ; 
}







 


?>
            
            
             
        <div class="qr_code">
                        <img style="width: 100px;" src="<?php echo '../src/img/qr/' . $id_sha1_projet[$a] . '.png' ?>" alt="" srcset="">
                    </div>
    
    

                    
        </div>
    
<?php




                
 

                    ?>


<a href="<?php echo  $id_sha1_projet[$a] ?>">
                        <div class="art_c">
                            VOIR ARTICLE COMPLET
                        </div>
                    </a>

</div>


<?php 
        /*

        $name_projet_ =  AsciiConverter::asciiToString($name_projet[$a]);
        $title_projet_ = AsciiConverter::asciiToString($title_projet[$a]);
        $description_projet_ = AsciiConverter::asciiToString($description_projet[$a]);;
        $img_projet_src_ = $img_projet_src[$a];
        $heure_debut_projet_ = $heure_debut_projet[$a];
        $date_debut_projet_ = $date_debut_projet[$a];
        $heure_fin_projet_ = $heure_fin_projet[$a];
        $date_fin_projet_ = $date_fin_projet[$a];
        $date_inscription_projet_ = $date_inscription_projet[$a];


        $id_projet_ =   $id_projet[$a];
        $id_sha1_projet_ = $id_sha1_projet[$a];


    ?>

<h1>
     <?php echo  $title_projet_ ?> 
</h1>
 
       <p>
         <?php echo  $title_user_  ?> 
       </p>

       <p>
           <?php echo  $date_inscription_projet_ ?> 
       </p>



                </p>
     

            <?php
            if ($img_projet_src_ != '') {
            ?>

                <div class="user_img">
                    <img src="<?php echo   "../img_user_action/" . $img_projet_src_ ?>" alt="">

                </div>

            <?php
            }






            ?>
  
                <h2 class="blog-title"><?php echo $name_projet_ ?></h2>
    

        </div>

    <?php


*/
    }




    $PHP_SELF = $_SERVER['PHP_SELF'];

    $SERVER_NAME = $_SERVER['SERVER_NAME'];

    $HTTP_HOST = $_SERVER['HTTP_HOST'];

    $HTTP_REFERER = $_SERVER['HTTP_REFERER'];

    $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];

    $SCRIPT_NAME = $_SERVER['SCRIPT_NAME'];



    $ipUser = getUserIP();
    $port = $_SERVER['REMOTE_PORT'];

    /*
 $ipUser = getUserIP();
 echo "Adresse IP de l'utilisateur : " . $ipUser;

*/
    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->action_sql("INSERT INTO `visit_user` (
    ip1_visit_user,
    ip2_visit_user,
    ip3_visit_user,
    ip4_visit_user,
    ip5_visit_user,
    ip6_visit_user,
    ip7_visit_user,
    ip8_visit_user,
    ip9_visit_user
     
    

    ) VALUES (
    '$give_url',
    '$ipUser',
    '$port', 
    '$PHP_SELF',
    '$SERVER_NAME',
    '$HTTP_HOST',
    '$HTTP_REFERER',
    '$HTTP_USER_AGENT',
    '$SCRIPT_NAME'
   
    )");








    ?>
    
</div>
    <div class="blog-container">
        <footer class="blog-footer">
            <p>&copy; 2024 - Tous droits réservés.</p>
        </footer>

    </div>
 
</body>
<style>
    .display_flexx{
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
body {
    font-family: 'Abel';font-size: 22px;
}


.largeur_card{
        border: 1px solid rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 300px;
        padding: 20px;
    }
    .largeur_card img {
        max-width: 100%;  /* La largeur maximale est de 100% du conteneur parent */
    max-height: 200px; /* Hauteur maximale fixée à 200px */
    object-fit: cover;  /* Garde les proportions de l'image sans déformation */
    }
    .display_flex__{
     
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
     
    }
    .display_flex__ p{
        text-align: justify;
    }
    .data_time{
        font-size: 0.8em ;
        color: rgba(0, 0, 0, 0.6);
      
    }
</style>
</html>



<?php 






?>
