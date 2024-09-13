<div class="contenue_boucle">   

<?php

?> <b>
     <div class="id_p">
         ID :<?php echo $id_sha1_projet[$a]  ?>
     </div>
 </b>
 <div class="card">
     <input type="text" value="<?php echo $title_projet_; ?>" onkeyup="style_blog_3_2_up(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  't_' . $id_projet[$a] ?>" placeholder="MON TITRE" class="title_projet">
     <input type="text" style="opacity: 0.3;" value="<?php echo $description_projet_; ?>" onkeyup="style_blog_3_2_up(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  'h_' . $id_projet[$a] ?>" placeholder="autre element" class="title_projet">
     <input type="text" id="<?php echo  "name_group_" . $id_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  'h_' . $id_projet[$a] ?>" class="input_group" placeholder="ajouter un groupe">
     <?php
     /*

$name_group
$id_group
*/
     ?>
     <select onchange="select_name_group(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  "form_select_" . $id_projet[$a] ?>" class="form_select" aria-label="Default select example">
         <?php
         $n_s = "";
         echo ' <option  id="select_name_group_' . $name_group[$resultat] . '"  value="' . $name_group[$resultat] . '">' . $name_group[$resultat] . '</option>';
         for ($n = 0; $n < count($name_group); $n++) {

             echo ' <option  id="select_name_group_' . $id_group[$n] . '"  value="' . $id_group[$n] . '">' . $name_group[$n] . '</option>';
             $n_s = $id_group[$n];
         }
         ?>
     </select>

     <div onclick="add_group(this)" title="<?php echo  $id_projet[$a] ?>">
         <img class="add_element" width="35" height="35" src="https://img.icons8.com/ultraviolet/35/plus--v1.png" alt="plus--v1" />
     </div>

     <?php
     //echo "".$name_group[$n_] ;  
     $image_remove = '<img   width="50" height="50" src="https://img.icons8.com/pulsar-line/50/clear-symbol.png" alt="clear-symbol"/>';


     /*
for ($n = 0; $n < count($name_group); $n++) {

?>
<br/> 
<div class="div_selection">
<input value="<?php echo $name_group[$n] ?>" style="position: relative;top:-25px" type="text"><img width="50" height="50" src="https://img.icons8.com/color/50/clear-symbol--v1.png" alt="clear-symbol--v1"/>

</div>
<?php 

}

*/







     ?>


     <div class="display_none" id="<?php echo "parent_div_" . $id_projet[$a]  ?>">
         <div class="div_selection">
             <input style="margin-top:15px" onkeyup="input_div_selection(this)" title="<?php echo $id_group[$a]  ?>" class="<?php echo $resultat ?>" id="<?php echo  'div_selection_' . $id_projet[$a] ?>" value="<?php echo $name_group[$resultat] ?>" style="position: relative;top:-25px" type="text">
         </div>
     </div>


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
             $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
             $databaseHandler->action_sql("UPDATE `projet` SET `img_projet_src` = '' WHERE `id_projet` = '" . $id_projet[$a] . "'");
             ?>

             <script>
                 location.reload();
             </script>

     <?php
         }
     }
     ?>
     <div class="display_flex">
         <div class="projet2">
             <div title="<?php echo  $id_projet[$a] ?>" class="<?php echo  $id_projet[$a] ?>" onclick="img_user_action(this)">Ajouter un fichier</div>
         </div>
         <div class="sup_projet2">
             <div title="<?php echo  $img_projet_src[$a] ?>" class="<?php echo  $id_projet[$a] ?>" onclick="sup_img_user_action(this)">Suprimer le fichier</div>
         </div>
     </div>
     <div class="display_flex">
         <div onclick="editor_container(this)" title="<?php echo  $id_projet[$a] ?>">
             <img class="add_element" width="47" height="47" src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/47/external-design-design-thinking-flatart-icons-outline-flatarticons-6.png" alt="external-design-design-thinking-flatart-icons-outline-flatarticons-6" />
         </div>
     </div>

 
    

     <style>
         .iframes iframe {
             background-color: black;
             padding: 25px;
         }
     </style>

 
        

 
 
 
<?php
echo '</div>';  