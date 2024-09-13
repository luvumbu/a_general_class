 <style>
     .card-img-top {
         width: 100%;
         height: 180px;
         object-fit: cover;
         /* Empêche la déformation de l'image */
     }
 </style>


 <div class="container mt-5">
     <div class="card" style="width: 18rem;">
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
                     <div class="taille_img">
                         <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                             <img src="<?php echo $file_path ?>" alt="" srcset="">
                         </div>
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

             <div class="taille_img">
                 <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                     <img src="src/img/0.png" alt="" srcset="">
                 </div>
             </div>

         <?php
            }
            ?>
         <div class="card-body">
             <input type="text" value="<?php echo $title_projet_; ?>" onkeyup="style_blog_3_2_up(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  't_' . $id_projet[$a] ?>" placeholder="MON TITRE" class="title_projet">
             <input type="text" style="opacity: 0.3;" value="<?php echo $description_projet_; ?>" onkeyup="style_blog_3_2_up(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  'h_' . $id_projet[$a] ?>" placeholder="autre element" class="title_projet">
         </div>




         <div class="display_flex">
             <div>
                 <a href="<?php echo "user.php/" . $id_sha1_projet[$a] ?>">
                     <img class="cursor_pointer" width="50" height="50" src="https://img.icons8.com/emoji/50/link-emoji.png" alt="link-emoji" />

                 </a>
             </div>
             <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_sha1_projet[$a] ?>" onclick="session_switch(this)">
                 <img width="50" height="50" src="https://img.icons8.com/ios/50/settings--v1.png" alt="settings--v1" />
             </div>
         </div>



     </div>

 </div>


 <style>
     .cursor_pointer:hover {
         cursor: pointer;
     }

     .taille_img {
         width: 100%;
         min-width: 200px;
         background-color: black;
         min-height: 200px;
     }
 </style>





 <script>
     function session_switch(_this) {
         

        _this.style.display="none" ; 

         var ok = new Information("cookie/session_switch.php"); // création de la classe 
         ok.add("session_switch", _this.className); // ajout de l'information pour lenvoi 
        
         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 



         const myTimeout = setTimeout(myGreeting, 100);

function myGreeting() {
 location.reload() ; 
}



     }
 </script>