 <?php
 
    if (count($id_projet_child) > 0) {


      



        for ($z = 0; $z < count($id_projet_child); $z++) {









            $title_projet_child_  =  AsciiConverter::asciiToString($title_projet_child[$z]);

            $description_projet_child_  =  AsciiConverter::asciiToString($description_projet_child[$z]);
            $name_projet_child_  =  AsciiConverter::asciiToString($name_projet_child[$z]);


    ?>



         <div class="card card_child">
             <div class="input_child_div">

                 <input onkeyup="onkeyup_src_input(this)" placeholder="Mon titre" type="text" value="<?php echo $name_projet_child_ ?>" id="<?php echo "input_3c_" . $id_projet_child[$z] ?>" title="<?php echo $id_projet_child[$z] ?>">

             </div>

             <div class="input_child_div" style="opacity: 0.3; margin-top:25px;margin-bottom:25px">

                 <input onkeyup="onkeyup_src_input(this)" placeholder="Mon titre" type="text" value="<?php echo $title_projet_child_ ?>" id="<?php echo "input_1c_" . $id_projet_child[$z] ?>" title="<?php echo $id_projet_child[$z] ?>">

             </div>

             <?php

                if ($img_projet_child_src[$z] != "") {

 
// Example usage
$path ="img_user_action/" . $img_projet_child_src[$z];
if (checkFileExists($path)) {
  

    ?>

    <div class="taille_img">
        <img src="<?php echo "img_user_action/" . $img_projet_child_src[$z]; ?>" alt="">

    </div>
<?php


} else {
 

   
 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("UPDATE `projet_child` SET `img_projet_child_src` = '' WHERE `id_projet_child` = ".$id_projet_child[$z].";") ;

 ?>

<script>

const myTimeout = setTimeout(myGreeting, 100);

function myGreeting() {
  location.reload() ; 
}

</script>
<?php 
 
}
 



 
                }

                ?>


             <div class="child_photo">
                 <div onclick="img_user_action_child(this);img_user_action(this) ;" class="<?php echo $id_projet_child[$z] ?>">
                     Ajouter une photo
                 </div>
             </div>

             <div class="custom-editor">
                 <div id="editor-container">
                     <div id="toolbar">
                         <div>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('bold')"><strong>Gras</strong></button>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('italic')"><em>Italique</em></button>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('underline')"><u>Souligner</u></button>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('strikeThrough')">Barré</button>
                             <select title="<?php echo $id_projet_child[$z] ?>" onchange="style_blog_3_2_up(this);  execCmd('formatBlock', this.value)">
                                 <option value="">Style de texte</option>
                                 <option value="h1">Titre 1</option>
                                 <option value="h2">Titre 2</option>
                                 <option value="h3">Titre 3</option>
                                 <option value="p">Paragraphe</option>
                             </select>
                             <select title="<?php echo $id_projet_child[$z] ?>" onchange="style_blog_3_2_up(this);  execCmd('fontSize', this.value)">
                                 <option value="3">Taille de police</option>
                                 <option value="1">Très petit</option>
                                 <option value="2">Petit</option>
                                 <option value="3">Normal</option>
                                 <option value="4">Grand</option>
                                 <option value="5">Très grand</option>
                                 <option value="6">Gigantesque</option>
                             </select>
                         </div>
                         <div>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('justifyLeft')">Gauche</button>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('justifyCenter')">Centrer</button>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('justifyRight')">Droite</button>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('justifyFull')">Justifier</button>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('insertUnorderedList')">Puces</button>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('insertOrderedList')">Numéros</button>


                             <div>


                             </div>
                             <div>


                             </div>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('createLink', prompt('Entrer URL', 'http://'))">Lien</button>
                             <button title="<?php echo $id_projet_child[$z] ?>" onclick="style_blog_3_2_up(this);  execCmd('unlink')">Supprimer Lien</button>
                         </div>
                         <div style="margin-top: 25px;">
                             <div>
                                 <a>Couleur text</a>
                                 <input value="couleur" type="color" title="<?php echo $id_projet_child[$z] ?>" onchange="style_blog_3_2_up(this);  execCmd('foreColor', this.value)" title="Couleur du texte" />
                             </div>
                             <div>
                                 <a>Couleur arrier</a>
                                 <input type="color" title="<?php echo $id_projet_child[$z] ?>" onchange="style_blog_3_2_up(this);  execCmd('backColor', this.value)" title="Couleur de fond" />
                             </div>

                         </div>
                     </div>

                     <div onkeyup="onkeyup_src_input(this)" id="<?php echo "input_2c_" . $id_projet_child[$z] ?>" title="<?php echo $id_projet_child[$z] ?>" class="editor" contenteditable="true"><?php echo $description_projet_child_ ?></div>
                 </div>
             </div>




             <div class="display_flex">
                 <div onclick="onkeyup_src_input(this);" class="val_form" title="<?php echo $id_projet_child[$z] ?>">Valider</div>

                 <div>
                     <button onclick="del_form(this)" class="del_form" title="<?php echo $id_projet_child[$z] ?>"><strong>Tout effacer</strong></button>

                 </div>
             </div>


     






             <div class="display_flex">
                 <div class="add_element">
                     <img width="50" height="50" src="https://img.icons8.com/color/50/calendar--v1.png" alt="calendar--v1" />
                 </div>
                 <div title="<?php echo $id_projet_child[$z] ?>" onclick="remove_projet_child(this)">
                     <img width="50" class="add_element" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />
                 </div>
                 <div>
                     <?php


                        if ($visibility_1_projet_child[$z] != "") {
                        ?>
                         <div title="<?php echo $id_projet_child[$z] ?>">
                             <img width="50" name="<?php echo $visibility_1_projet_child[$z] ?>" title="<?php echo  $id_projet[$z] ?>" onclick="visibility_1_projet_child(this)" class="add_element" height="50" src="https://img.icons8.com/ios-glyphs/50/invisible.png" alt="invisible" />
                         </div>
                     <?php
                        } else {
                        ?>
                         <div title="<?php echo $id_projet_child[$z] ?>">
                             <img width="50" name="<?php echo $visibility_1_projet_child[$z] ?>" title="<?php echo  $id_projet[$z] ?>" onclick="visibility_1_projet_child(this)" class="add_element" height="50" src="https://img.icons8.com/ios/50/invisible.png" alt="invisible" />
                         </div>
                     <?php
                        }


                        ?>
                 </div>
             </div>
         </div>
 <?php
        }
    }
    ?>


 <script>
     function img_user_action_child() {

         console.log("img_user_action_chil");

         var ok = new Information("cookie/img_user_action_chil.php"); // création de la classe 
         //    ok.add("id_projet_child", _this.title); // ajout de l'information pour lenvoi 

         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 


     }

     function remove_projet_child(_this) {


         var ok = new Information("remove/remove_projet_child.php"); // création de la classe 
         ok.add("id_projet_child", _this.title); // ajout de l'information pour lenvoi 

         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 



         const myTimeout = setTimeout(myGreeting, 250);

         function myGreeting() {

             location.reload();
         }






     }

     function onkeyup_src_input(_this) {
         const myTimeout = setTimeout(myGreeting, 500);

         function deux_a() {



             var input_1c_ = document.getElementById("input_1c_" + _this.title).value;
             var input_2c_ = document.getElementById("input_2c_" + _this.title).innerHTML;
             var input_3c_ = document.getElementById("input_3c_" + _this.title).value;













             var ok = new Information("update_child/onkeyup_src_input.php"); // création de la classe 
             ok.add("id_projet_child", _this.title); // ajout de l'information pour lenvoi 
             ok.add("title_projet_child", input_1c_); // ajout d'une deuxieme information denvoi  
             ok.add("description_projet_child", input_2c_); // ajout d'une deuxieme information denvoi  
             ok.add("name_projet_child", input_3c_); // ajout d'une deuxieme information denvoi  



             console.log(ok.info()); // demande l'information dans le tableau
             ok.push(); // envoie l'information au code pkp 


             onkeyup_action_bool2 = false;

             onkeyup_action_bool = true;
         }

         function myGreeting() {
             if (onkeyup_action_bool2 == false) {
                 onkeyup_action_bool2 = true;
                 const deux = setTimeout(deux_a, 500);
             }
         }
     }

     function del_form(_this) {
         var input_2c_ = document.getElementById("input_2c_" + _this.title).innerHTML = "";

     }
 </script>


 <style>
     .val_form {
         background-color: rgba(0, 0, 220, 0.3);
         width: 150px;
         text-align: center;
         margin-top: 20px;
         color: white;
     }

     .del_form {
         background-color: rgba(220, 0, 15, 0.3);
         width: 150px;
         text-align: center;
         margin-top: 20px;
         border: 1px solid rgba(220, 0, 15, 0.1);
         color: white;
     }

     .val_form:hover,
     .del_form:hover {
         cursor: pointer;
     }
 </style>