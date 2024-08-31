<link rel="stylesheet" href="style_blog_3_2.css">
<link rel="stylesheet" href="style_blog_3.css">





<div class="class_t">
    <?php


    require_once 'style_blog_3_req_1.php';

    require_once 'form_event.php';



    for ($a = 0; $a < count($id_sha1_projet); $a++) {




        require 'style_blog_3_req_2.php';





        $valeur_a_chercher = $group_projet[$a];

        $resultat = chercherIndex($id_group, $valeur_a_chercher);








        $resultat = chercherIndex($id_group, $valeur_a_chercher);





    ?>
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
                        <div class="taille_img" >
                            <div title="<?php echo $id_projet[$a] ?>" class="<?php echo $id_projet[$a] ?>" onclick="img_user_action(this)">
                                <iframe  src="<?php echo $file_path ?>" width="100%" height="500px"></iframe>
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

            <?php



            ?>




            <div class="display_flex">

            
                <div onclick="editor_container(this)" title="<?php echo  $id_projet[$a] ?>">
                    <img class="add_element" width="47" height="47" src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/47/external-design-design-thinking-flatart-icons-outline-flatarticons-6.png" alt="external-design-design-thinking-flatart-icons-outline-flatarticons-6" />
                </div>
 
            </div>

            <div class="custom-editor">
                <div class="display_none2" id="<?php echo  "editor-container_" . $id_projet[$a] ?>">
                    <div id="toolbar">
                        <div>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('bold')"><strong>Gras</strong></button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('italic')"><em>Italique</em></button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('underline')"><u>Souligner</u></button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('strikeThrough')">Barré</button>
                            <select title="<?php echo  $id_projet[$a] ?>" onchange="style_blog_3_2_up(this); execCmd('formatBlock', this.value)">
                                <option value="">Style de texte</option>
                                <option value="h1">Titre 1</option>
                                <option value="h2">Titre 2</option>
                                <option value="h3">Titre 3</option>
                                <option value="p">Paragraphe</option>
                            </select>
                            <select title="<?php echo  $id_projet[$a] ?>" onchange="style_blog_3_2_up(this); execCmd('fontSize', this.value)">
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
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('justifyLeft')">Gauche</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('justifyCenter')">Centrer</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('justifyRight')">Droite</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('justifyFull')">Justifier</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('insertUnorderedList')">Puces</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('insertOrderedList')">Numéros</button>


                            <div>


                            </div>
                            <div>


                            </div>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('createLink', prompt('Entrer URL', 'http://'))">Lien</button>
                            <button title="<?php echo  $id_projet[$a] ?>" onclick="style_blog_3_2_up(this); execCmd('unlink')">Supprimer Lien</button>
                        </div>
                        <div style="margin-top: 25px;">
                            <div>
                                <a>Couleur text</a>
                                <input value="couleur" type="color" onchange="style_blog_3_2_up(this); execCmd('foreColor', this.value)" title="Couleur du texte" />
                            </div>
                            <div>
                                <a>Couleur arrier</a>
                                <input type="color" onchange="style_blog_3_2_up(this); execCmd('backColor', this.value)" title="Couleur de fond" />
                            </div>

                        </div>
                    </div>
                </div>
                <div title="<?php echo  $id_projet[$a] ?>" id="<?php echo  $id_projet[$a] ?>" onkeyup="style_blog_3_2_up(this)" class="editor" contenteditable="true"><?php echo $name_projet_ ?></div>

            </div>

 

            <div id="<?php echo  "planification_" . $id_projet[$a] ?>" class="display_none2">
                <div class="custom-form-container centrer">
                    <h2>Planification de l'événement</h2>







                    <div class="form-group">
                        <label for="start-date">Date de commencement :</label>
                        <input value="<?php echo $heure_debut_projet[$a] ?>" id="<?php echo  "inputs_form_1_" . $id_projet[$a] ?>" type="date" name="start-date" required>
                    </div>

                    <div class="form-group">
                        <label for="start-time">Heure de commencement :</label>
                        <input value="<?php echo $date_debut_projet[$a] ?>" id="<?php echo  "inputs_form_2_" . $id_projet[$a] ?>" type="time" name="start-time" required>
                    </div>

                    <div class="form-group">
                        <label for="end-date">Date de fin :</label>
                        <input value="<?php echo $heure_fin_projet[$a] ?>" id="<?php echo  "inputs_form_3_" . $id_projet[$a] ?>" type="date" name="end-date" required>
                    </div>

                    <div class="form-group">
                        <label for="end-time">Heure de fin :</label>
                        <input value="<?php echo $date_fin_projet[$a] ?>" id="<?php echo  "inputs_form_4_" . $id_projet[$a] ?>" type="time" name="end-time" required>
                    </div>

                    <button type="submit" onclick="submit_inputs_form(this)" title="<?php echo  $id_projet[$a] ?>">Valider</button>
                </div>
            </div>


            <div class="display_flex2">
                <div>
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QE7RXhpZgAASUkqAAgAAAAFAA4BAgDPAAAASgAAAJiCAgAKAAAAGQEAABIBAwABAAAAAQAAABoBBQABAAAAIwEAABsBBQABAAAAKwEAAAAAAABBbiBpbGx1c3RyYXRpb24gb2YgdGhlIGV4dGluY3QgRG9kbyBCaXJkIG9uIGEgd2hpdGUgYmFja2dyb3VuZC4gVGhlIGRvZG8gKFJhcGh1cyBjdWN1bGxhdHVzKSBpcyBhbiBleHRpbmN0IGZsaWdodGxlc3MgYmlyZCB0aGF0IHdhcyBlbmRlbWljIHRvIHRoZSBpc2xhbmQgb2YgTWF1cml0aXVzLCBlYXN0IG9mIE1hZGFnYXNjYXIgaW4gdGhlIEluZGlhbiBPY2Vhbi5BdW50X1NwcmF5LAEAAAEAAAAsAQAAAQAAAP/tASxQaG90b3Nob3AgMy4wADhCSU0EBAAAAAABDxwCUAAKQXVudF9TcHJheRwCeADPQW4gaWxsdXN0cmF0aW9uIG9mIHRoZSBleHRpbmN0IERvZG8gQmlyZCBvbiBhIHdoaXRlIGJhY2tncm91bmQuIFRoZSBkb2RvIChSYXBodXMgY3VjdWxsYXR1cykgaXMgYW4gZXh0aW5jdCBmbGlnaHRsZXNzIGJpcmQgdGhhdCB3YXMgZW5kZW1pYyB0byB0aGUgaXNsYW5kIG9mIE1hdXJpdGl1cywgZWFzdCBvZiBNYWRhZ2FzY2FyIGluIHRoZSBJbmRpYW4gT2NlYW4uHAJ0AApBdW50X1NwcmF5HAJuABhHZXR0eSBJbWFnZXMvaVN0b2NrcGhvdG8A/+EGRWh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8APD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyI+Cgk8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgoJCTxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6SXB0YzR4bXBDb3JlPSJodHRwOi8vaXB0Yy5vcmcvc3RkL0lwdGM0eG1wQ29yZS8xLjAveG1sbnMvIiAgIHhtbG5zOkdldHR5SW1hZ2VzR0lGVD0iaHR0cDovL3htcC5nZXR0eWltYWdlcy5jb20vZ2lmdC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBsdXM9Imh0dHA6Ly9ucy51c2VwbHVzLm9yZy9sZGYveG1wLzEuMC8iICB4bWxuczppcHRjRXh0PSJodHRwOi8vaXB0Yy5vcmcvc3RkL0lwdGM0eG1wRXh0LzIwMDgtMDItMjkvIiB4bWxuczp4bXBSaWdodHM9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9yaWdodHMvIiBkYzpSaWdodHM9IkF1bnRfU3ByYXkiIHBob3Rvc2hvcDpDcmVkaXQ9IkdldHR5IEltYWdlcy9pU3RvY2twaG90byIgR2V0dHlJbWFnZXNHSUZUOkFzc2V0SUQ9IjUxMTk0NDE5MCIgeG1wUmlnaHRzOldlYlN0YXRlbWVudD0iaHR0cHM6Ly93d3cuZ2V0dHlpbWFnZXMuY29tL2V1bGE/dXRtX21lZGl1bT1vcmdhbmljJmFtcDt1dG1fc291cmNlPWdvb2dsZSZhbXA7dXRtX2NhbXBhaWduPWlwdGN1cmwiIHBsdXM6RGF0YU1pbmluZz0iaHR0cDovL25zLnVzZXBsdXMub3JnL2xkZi92b2NhYi9ETUktUFJPSElCSVRFRC1FWENFUFRTRUFSQ0hFTkdJTkVJTkRFWElORyIgPgo8ZGM6Y3JlYXRvcj48cmRmOlNlcT48cmRmOmxpPkF1bnRfU3ByYXk8L3JkZjpsaT48L3JkZjpTZXE+PC9kYzpjcmVhdG9yPjxkYzpkZXNjcmlwdGlvbj48cmRmOkFsdD48cmRmOmxpIHhtbDpsYW5nPSJ4LWRlZmF1bHQiPkFuIGlsbHVzdHJhdGlvbiBvZiB0aGUgZXh0aW5jdCBEb2RvIEJpcmQgb24gYSB3aGl0ZSBiYWNrZ3JvdW5kLiBUaGUgZG9kbyAoUmFwaHVzIGN1Y3VsbGF0dXMpIGlzIGFuIGV4dGlu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" alt="" srcset="">
                </div>
                <?php 
for($x = 0 ; $x < count($img_projet_src_img) ; $x++) {
    $file_path = 'img_user_action/' . $img_projet_src_img[$x];
    
    // Extraire l'extension du fichier
    $extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

    // Vérifier le type de fichier et afficher en conséquence
    if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
        // Si c'est une image, l'afficher avec une balise <img>
        ?>
        <div>
            <img src="<?php echo $file_path ?>" alt="Image">
        </div>
        <?php
    } elseif ($extension == 'pdf') {
        // Si c'est un PDF, l'afficher dans un iframe
        ?>
        <div>
            <iframe  style="height: 50px;" src="<?php echo $file_path ?>" width="100%" height="500px"></iframe>
        </div>
        <?php
    } elseif (in_array($extension, ['mp4', 'webm', 'ogg'])) {
        // Si c'est une vidéo, l'afficher dans une balise <video>
        ?>
        <div>
            <video width="100%" controls>
                <source src="<?php echo $file_path ?>" type="video/<?php echo $extension ?>">
                Votre navigateur ne supporte pas la balise video.
            </video>
        </div>
        <?php
    } elseif (in_array($extension, ['mp3', 'wav', 'ogg'])) {
        // Si c'est un fichier audio, l'afficher dans une balise <audio>
        ?>
        <div>
            <audio controls>
                <source src="<?php echo $file_path ?>" type="audio/<?php echo $extension ?>">
                Votre navigateur ne supporte pas la balise audio.
            </audio>
        </div>
        <?php
    } else {
        // Pour les autres fichiers, afficher un lien de téléchargement
        ?>
        <div>
            <a href="<?php echo $file_path ?>" target="_blank">Télécharger le fichier</a>
        </div>
        <?php
    }
}
?>

            </div>

            <div class="display_flex">
                <div title="<?php echo  $id_projet[$a] ?>" onclick="my_pictures_click(this)">

                    <img class="add_element" width="50" height="50" src="https://img.icons8.com/plumpy/47/file.png" alt="external-Images-images-and-image-files-those-icons-lineal-those-icons-2" />

                </div>

                <div title="<?php echo  $id_projet[$a] ?>" onclick="planification_click(this)">
                    <div class="add_element">
                        <img width="50" height="50" src="https://img.icons8.com/color/50/calendar--v1.png" alt="calendar--v1" />
                    </div>
                </div>
                <div onclick="projet_child(this)" class="<?php echo  $id_sha1_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>">
                    <img class="add_element" width="50" height="50" src="https://img.icons8.com/ios/50/add--v1.png" alt="add--v1" />

                </div>

                <?php

                if ($visibility_1_projet[$a] != "") {
                ?>
                    <div>
                        <img width="50" name="<?php echo $visibility_1_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" onclick="visibility_1_projet(this)" class="add_element" height="50" src="https://img.icons8.com/ios-glyphs/50/invisible.png" alt="invisible" />
                    </div>
                <?php
                } else {
                ?>
                    <div id="<?php echo  'confirmer_' . $id_projet[$a] ?>">
                        <img width="50" name="<?php echo $visibility_1_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" onclick="visibility_1_projet(this)" class="add_element" height="50" src="https://img.icons8.com/ios/50/invisible.png" alt="invisible" />
                    </div>
                <?php
                }
                ?>
                <div>
                    <img title="<?php echo  $id_projet[$a] ?>" onclick="remove_projet_(this)" class="add_element" width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />
                </div>

                <div>
                    <img class="display_none" id="<?php echo  'remove_' . $id_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" onclick="remove_projet(this)" class="add_element" width="50" height="50" src="https://img.icons8.com/fluency/50/delete-forever.png" alt="delete-forever" />

                </div>


            </div>





            <div id="<?php echo  'date_form_' . $id_projet[$a] ?>" class="display_none">


                <form>
                    <label for="event-date">Date de l'événement debut :</label>
                    <input id="<?php echo  'date_form_1_' . $id_projet[$a] ?>" type="date" id="event-date" name="event-date" required>

                    <label for="event-time">Heure de l'événement debut:</label>
                    <input id="<?php echo  'date_form_2_' . $id_projet[$a] ?>" type="time" id="event-time" name="event-time" required>



                </form>

                <form>
                    <label for="event-date">Date de l'événement fin :</label>
                    <input id="<?php echo  'date_form_3_' . $id_projet[$a] ?>" type="date" id="event-date" name="event-date" required>

                    <label for="event-time">Heure de l'événement fin:</label>
                    <input id="<?php echo  'date_form_4_' . $id_projet[$a] ?>" type="time" id="event-time" name="event-time" required>

                    <div style="margin-top: 30px;" class="date_form_click" onclick="date_form_click2(this)" title="<?php echo    $id_projet[$a] ?>"> Valider</div>


                </form>

            </div>
        </div>

        <?php






        /*

$req_sql__ = "SELECT * FROM `projet_child` WHERE `id_parent_projet_child` ='" . $id_projet[$a] . "' ";
 
$databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler__->getDataFromTable($req_sql__, "id_projet_child");
$id_projet_child = $databaseHandler__->tableList_info;

 */



        require  'style_blog_3_child.php';

        ?>


    <?php
    }
    ?>
</div>
<?php
require 'style_blog_3_scrypt_1.php';

?>

<script>
    function my_pictures_click(_this) {
        console.log(_this.title);
    }

    function planification_click(_this) {



        var val = document.getElementById("planification_" + _this.title);



        if (val.className == "display_none2") {
            val.className == "";



            document.getElementById("planification_" + _this.title).className = "";


        } else {


            document.getElementById("planification_" + _this.title).className = "display_none2";


        }
    }


    function submit_inputs_form(_this) {

        var inputs_form_1_ = document.getElementById("inputs_form_1_" + _this.title).value;
        var inputs_form_2_ = document.getElementById("inputs_form_2_" + _this.title).value;
        var inputs_form_3_ = document.getElementById("inputs_form_3_" + _this.title).value;
        var inputs_form_4_ = document.getElementById("inputs_form_4_" + _this.title).value;



        var ok = new Information("update/submit_inputs_form.php");
        ok.add("id_projet", _this.title);



        ok.add("heure_debut_projet", inputs_form_1_);
        ok.add("date_debut_projet", inputs_form_2_);
        ok.add("heure_fin_projet", inputs_form_3_);
        ok.add("date_fin_projet", inputs_form_4_);




        ok.push();







    }
</script>

<style>
    .projet2:hover,
    .sup_projet2:hover {
        cursor: pointer;
    }

    .projet2,
    .sup_projet2 {


        background-color: black;

        padding: 5px;
        margin-top: 25px;
        text-align: center;
        color: white;
        width: 150px;

    }

    .sup_projet2 {
       
    }
    .display_flex2   {
 
        display: flex;
        justify-content: space-around;
        margin-top: 50px;
        flex-wrap: wrap;
    }
    .display_flex2 div {
        
        padding: 10px;
        margin-top: 25px;
        width: 100px;
        height: 100px;
    
    }



    .display_flex2 div:hover {
 cursor: pointer;
 opacity: 0.3;
    
    }

    .display_flex2 img {
 
        width: 100%;
        max-height: 200px;
    
    }
</style>