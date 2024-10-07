 

 

 
<div class="card card2" style="width: 18rem;">
 
  <?php
            if ($img_projet_src[$a] != "") {
                $file_path = "img_user_action/" . $img_projet_src[$a];

                if (checkFileExists($file_path)) {
                    // Extraire l'extension du fichier
                    $extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

                    // Afficher l'extension du fichier


                    // Vérifier le type de fichier et afficher en conséquence
                    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                        // Si c'est une image, l'afficher avec une balise <img>
            ?>
                          <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                             <img  style="width:200px"  class="card-img-top" src="<?php echo $file_path ?>" alt="" srcset="">
                         
                            </div>
                 <?php
                    } elseif ($extension == 'pdf') {
                        // Si c'est un PDF, l'afficher dans un iframe
                    ?>
                     <div class="taille_img">
                         <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                             <iframe src="<?php echo $file_path ?>" width="100%" height="500px"></iframe>
                         </div>
                     </div>
                 <?php
                    } elseif (in_array($extension, ['mp4', 'webm', 'ogg'])) {
                        // Si c'est une vidéo, l'afficher dans une balise <video>
                    ?>
                     <div class="taille_img">
                         <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                             <video width="100%" controls>
                                 <source src="<?php echo $file_path ?>" type="video/<?php echo $extension ?>">
                                 Votre navigateur ne supporte pas la balise video.
                             </video>
                         </div>
                     </div>
                 <?php
                    } elseif (in_array($extension, ['mp3', 'wav', 'ogg'])) {
                        // Si c'est un fichier audio, l'afficher dans une balise <audio>
                    ?>
                     <div class="taille_img">
                         <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                             <audio controls>
                                 <source src="<?php echo $file_path ?>" type="audio/<?php echo $extension ?>">
                                 Votre navigateur ne supporte pas la balise audio.
                             </audio>
                         </div>
                     </div>
                 <?php
                    } else {
                        // Pour les autres fichiers, afficher un lien de téléchargement
                    ?>
                     <div class="taille_img">
                         <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                             <a href="<?php echo $file_path ?>" target="_blank">Télécharger le fichier</a>
                         </div>
                     </div>
                 <?php
                    }
                } else {


                    ?>



                 <?php


                    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
                    $databaseHandler->action_sql("UPDATE `projet` SET `img_projet_src` = '' WHERE `id_projet` = '" . $id_projet[$a] . "'");
                    ?>

                 <script>
                     location.reload();
                 </script>

             <?php
                }
            } else {
                ?>

         
                 <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                     <img  style="width:200px"  class="card-img-top"  src="src/img/0.png" alt="" srcset="">
             
             </div>

         <?php
            }



            $name_projet_ = AsciiConverter::asciiToString($name_projet[$a] ); // Affiche "Hello"
            $description_projet_ = AsciiConverter::asciiToString($description_projet[$a]); // Affiche "Hello"

            $title_projet_ = AsciiConverter::asciiToString($title_projet[$a]); // Affiche "Hello"

            
            ?>




  <div class="card-body">
  
    <h1 class="card-text"><?php echo $title_projet_ ?></h1>
    <p>
        <?php echo $description_projet_ ?>
    </p>


 <div class="cursor_pointer">
        <div style="padding: 30px;" title="3" class="<?php echo $id_sha1_projet[$a] ?> " onclick="session_switch(this)">
                 <img style="width: 50;height:50px;" width="50" height="50" src="https://img.icons8.com/ios/50/settings--v1.png" alt="settings--v1">
             </div>
 </div>


 
  </div>
</div>

<style>
    .card2 img {
        width: 100%;
      
    
    
    }

    .card2   {
 
  
  
      
    }
    .cursor_pointer:hover{
        cursor: pointer;
    }
</style>

 