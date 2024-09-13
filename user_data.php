<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  




<?php 



 

for($a = 0 ; $a < count($date_inscription_projet) ; $a ++) {

 
  $name_projet_ =  AsciiConverter::asciiToString($name_projet[$a]);  
  $title_projet_ =AsciiConverter::asciiToString($title_projet[$a]);  
  $description_projet_ =AsciiConverter::asciiToString( $description_projet[$a]);   ; 
  $img_projet_src_ = $img_projet_src[$a] ; 
  $heure_debut_projet_ = $heure_debut_projet[$a] ; 
  $date_debut_projet_ = $date_debut_projet[$a] ; 
  $heure_fin_projet_ = $heure_fin_projet[$a] ; 
  $date_fin_projet_ = $date_fin_projet[$a] ; 
  $date_inscription_projet_ = $date_inscription_projet[$a] ; 

  
  $id_projet_ =   $id_projet[$a] ; 
  $id_sha1_projet_ = $id_sha1_projet[$a] ; 
  
 
  ?>

<div class="blog-container">
        <header class="blog-header">
        <h1><?php echo  $title_projet_ ?></h1>
     
            <p class="blog-metadata">
                Par <span class="author">Nom du créateur</span> | 
                <span class="date"><?php echo  $date_inscription_projet_ ?></span>
            </p>
        </header>
        
        <section class="blog-content">
            <h2 class="blog-title"><?php  echo $name_projet_ ?></h2>
        </section>
        
        <footer class="blog-footer">
            <p>&copy; 2024 - Tous droits réservés.</p>
        </footer>
    </div>

<?php 


  
}
 


?>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}

.blog-container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.blog-header {
    text-align: center;
    margin-bottom: 20px;
}

.blog-title {
    font-size: 2.5em;
    color: #333;
}

.blog-metadata {
    font-size: 0.9em;
    color: #777;
}

.author {
    font-weight: bold;
}

.date {
    font-style: italic;
}

.blog-content {
    margin-top: 20px;
}

.blog-content h2 {
    font-size: 1.8em;
    color: #333;
    margin-bottom: 10px;
}

.blog-content p {
    margin-bottom: 15px;
    line-height: 1.8;
}

.blog-footer {
    text-align: center;
    margin-top: 40px;
    padding: 10px;
    font-size: 0.8em;
    color: #777;
}

.blog-footer p {
    margin-bottom: 0;
}

</style>


</body>
</html>

 
</body>
</html>
 
