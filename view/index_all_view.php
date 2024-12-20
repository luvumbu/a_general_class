<?php

require_once 'mysq_req/req_index_all_sql.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets de formation</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<style>
    .art_c {
        background-color: rgb(26, 188, 156);
        color: white;
        width: 200px;
        padding: 5px;
        border-radius: 8px;
        margin-top: 50px;
        padding: 8px;
        text-align: center;
    }

    a {
        text-decoration: none;
        margin-top: 100px;
        margin-bottom: 100px;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 20px;
    }

    .project {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 0;
        border-left: 6px solid #008080;
        overflow: hidden;
       
    }

    .project-content {
        padding: 20px;
    }

    .project-header {
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 15px;
    }

    .project-number {
        background-color: #006400;
        color: white;
        display: inline-block;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .project img {
        width: 100px;
        margin-top: 100px;
        margin-bottom: 100px;

    }

    h2 {
        color: #333;
        font-size: 20px;
        margin: 0;
    }

    p {
        color: #666;
        margin: 10px 0;
    }

    .details {
        font-size: 14px;
        color: #555;
        margin-top: 10px;
    }

    .skills {
        margin-top: 20px;
    }

    .skills-header {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .skills-header .icon {
        font-size: 20px;
        color: #008080;
        margin-right: 10px;
    }

    .skills h3 {
        color: #008080;
        font-size: 18px;
        margin: 0;
    }

    .skills ul {
        list-style-type: none;
        padding: 0;
    }

    .skills ul li {
        color: #333;
        margin: 5px 0;
        display: flex;
        align-items: center;
    }

    .skills ul li::before {
        content: "•";
        color: #008080;
        font-weight: bold;
        display: inline-block;
        width: 20px;
        margin-right: 10px;
        font-size: 18px;
    }
</style>



<style>
    .limiter {
        max-height: 450px;
        /* Limite la largeur du conteneur */
        white-space: nowrap;
        /* Empêche le texte de passer à la ligne */
        overflow: hidden;
        /* Masque le texte qui dépasse */
        text-overflow: ellipsis;
        /* Ajoute des points de suspension à la fin */
    }
</style>

<style>
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
<div class="display_flex__">

 
    <?php

 
   

    for ($a = 0; $a < count($id_sha1_projet); $a++) {





        if($visibility_1_projet[$a]==""){

     

       
 $somm_text = "";
 $somm_text2 = "";


        $name_projet_  = AsciiConverter::asciiToString($name_projet[$a]);
        $title_projet_ = AsciiConverter::asciiToString($title_projet[$a]);
        $description_projet_ =  AsciiConverter::asciiToString($description_projet[$a]);





        $somm_text = $somm_text . $name_projet_ . $title_projet_ . $description_projet_;

  
 
/*

                    <img src="<?php echo 'img_user_action/' . $img_projet_src[$a] ?>" alt="" srcset="">


                    <div class="qr_code">
                        <img src="<?php echo 'src/img/qr/' . $id_sha1_projet[$a] . '.png' ?>" alt="" srcset="">
                    </div>



*/

?>

 



<?php 



                 






                    $req_sql = 'SELECT * FROM `projet` WHERE `id_sha1_parent_projet` ="' . $id_sha1_projet[$a] . '" ';
                    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
                    $databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
                    $id_sha1_projet_2 = $databaseHandler->tableList_info;

                     
                    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
                    $databaseHandler->getDataFromTable($req_sql, "title_projet");
                    $title_projet_2 = $databaseHandler->tableList_info;

                     
                    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
                    $databaseHandler->getDataFromTable($req_sql, "description_projet");
                    $description_projet_2 = $databaseHandler->tableList_info;


                     
                    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
                    $databaseHandler->getDataFromTable($req_sql, "name_projet");
                    $name_projet_2 = $databaseHandler->tableList_info;



                  
//  var_dump($id_sha1_projet_2) ; 
 


 
                    for ($ab = 0; $ab < count($id_sha1_projet_2); $ab++) {
 
                       

                        $name_projet__2  = AsciiConverter::asciiToString($title_projet_2[$ab]);
                        $title_projet__2 = AsciiConverter::asciiToString($description_projet_2[$ab]);
                        $description_projet__2 =  AsciiConverter::asciiToString($name_projet_2[$ab]);
 

 

                        $somm_text2 =$somm_text2.$name_projet__2.$title_projet__2.$description_projet__2;
               
                        }

 








?>


<div class="card largeur_card">
<h1 class="card-title"><?php echo  $title_projet_  ?></h1>

 



    <a href="<?php echo 'img_user_action/' . $img_projet_src[$a] ?>">

    <div class="data_time"><?php
    

    
    

    $publication = new Publication( $date_inscription_projet[$a]);
    $apple = new Get_anne( $date_inscription_projet[$a]);

    echo "<br/>" ; 
  echo    $apple ->get_temps_depuis_publication();
    echo "<br/>" ; 

    echo  $apple->get_jour();
    echo "/" ; 
    echo  $apple ->get_mois();
    echo "/" ; 
    echo  $apple ->get_anne();
   echo "  " ; 
    echo  $apple ->get_heure_complet() ;

    echo "<br/>" ; 


 
    
    
    
    ?></div>
   
  <img src="<?php echo 'img_user_action/' . $img_projet_src[$a] ?>" alt="" srcset="">
 </a>
        <div class="card-body">
      
            <p class="card-text"><?php echo $description_projet_ ?></p>
            
            
            
            
            <div class="qr_code">
                        <img style="width: 100px;" src="<?php echo 'src/img/qr/' . $id_sha1_projet[$a] . '.png' ?>" alt="" srcset="">
                    </div>
    

                    
        </div>
    
<?php




                    $tempsEstime1 = tempsDeLecture($somm_text);


                   


                    echo "⏰ Temps de lecture estimé : $tempsEstime1 minute(s)";

                    $tempsEstime2 = tempsDeLecture($somm_text2);
                    



                    if( count($id_sha1_projet_2)>0){


                        echo '<div>'.count($id_sha1_projet_2).'  :  sous projet </div>';
 
                        echo "⏰ Total avec sous projet: ".($tempsEstime1+$tempsEstime2)." minute(s)";
                    }
                 


                    ?>


<a href="<?php echo 'user.php/' . $id_sha1_projet[$a] ?>">
                        <div class="art_c">
                            VOIR ARTICLE COMPLET
                        </div>
                    </a>

</div>

        

    <?php


    }
    }


    ?>
</div>


<style>
    .data_time{
       
        text-align: center;
        padding: 10px;
        width: 100%;
        margin-bottom: 20px;
    }
</style>

</body>

</html>




