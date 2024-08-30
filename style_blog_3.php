<link rel="stylesheet" href="style_blog_3_2.css">
<link rel="stylesheet" href="style_blog_3.css">


<div class="class_t">
    <?php



    require_once 'style_blog_3_req_1.php';



    for ($a = 0; $a < count($id_sha1_projet); $a++) {


        $name_projet_ = AsciiConverter::asciiToString($name_projet[$a]);
        $title_projet_ = AsciiConverter::asciiToString($title_projet[$a]);

        $description_projet_ = AsciiConverter::asciiToString($description_projet[$a]);


        $req_sql__ = "SELECT * FROM `projet_child` WHERE `id_parent_projet_child` ='" . $id_projet[$a] . "' ";

        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "id_projet_child");
        $id_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "id_user_projet_child");
        $id_user_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "id_sha1_projet_child");
        $id_sha1_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "id_sha1_parent_projet_child");
        $id_sha1_parent_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "id_parent_projet_child");
        $id_parent_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "name_projet_child");
        $name_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "statue_projet_child");
        $statue_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "title_projet_child");
        $title_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "description_projet_child");
        $description_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "visibility_1_projet_child");
        $visibility_1_projet_child = $databaseHandler__->tableList_info;


        $databaseHandler__ = new DatabaseHandler($config_dbname, $config_password);
        $databaseHandler__->getDataFromTable($req_sql__, "img_projet_child_src");
        $img_projet_child_src = $databaseHandler__->tableList_info;








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






            <div onclick="editor_container(this)" title="<?php echo  $id_projet[$a] ?>">
                <img class="add_element" width="47" height="47" src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/47/external-design-design-thinking-flatart-icons-outline-flatarticons-6.png" alt="external-design-design-thinking-flatart-icons-outline-flatarticons-6" />
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

            <?php

            // Example usage



            if ($img_projet_src[$a] != "") {

                if (checkFileExists("img_user_action/" . $img_projet_src[$a])) {
            ?>
                    <div class="taille_img">
                        <img src="<?php echo  'img_user_action/' . $img_projet_src[$a]  ?>" alt="" srcset="">
                    </div>
                <?php
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

            <div class="projet">
                <div title="<?php echo  $id_projet[$a] ?>" class="<?php echo  $id_projet[$a] ?>" onclick="img_user_action(this)"> Modifier la photo</div>
            </div>


            <?php
            if ($img_projet_src[$a] != "") {

            ?> <div class="sup_projet">
                    <div title="<?php echo  $img_projet_src[$a] ?>" class="<?php echo  $id_projet[$a] ?>" onclick="sup_img_user_action(this)"> Suprimer la photo</div>
                </div>
            <?php
            }


            ?>

            <div class="display_flex">

                <div title="<?php echo  $id_projet[$a] ?>" onclick="date_form_click(this)">
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
        if (count($id_projet_child) > 0) {



            for ($z = 0; $z < count($id_projet_child); $z++) {
        ?>
                <div class="card card_child">
                    <div class="input_child_div">

                        <input placeholder="Mon titre" type="text" value="<?php echo $title_projet_child[$a] ?>" title=" <?php echo $id_projet_child[$a] ?>">

                    </div>
                    <div class="custom-editor">
                        <div id="editor-container">
                            <div id="toolbar">
                                <div>
                                    <button onclick="style_blog_3_2_up(this); execCmd('bold')"><strong>Gras</strong></button>
                                    <button onclick="style_blog_3_2_up(this); execCmd('italic')"><em>Italique</em></button>
                                    <button onclick="style_blog_3_2_up(this); execCmd('underline')"><u>Souligner</u></button>
                                    <button onclick="style_blog_3_2_up(this); execCmd('strikeThrough')">Barré</button>
                                    <select onchange="style_blog_3_2_up(this); execCmd('formatBlock', this.value)">
                                        <option value="">Style de texte</option>
                                        <option value="h1">Titre 1</option>
                                        <option value="h2">Titre 2</option>
                                        <option value="h3">Titre 3</option>
                                        <option value="p">Paragraphe</option>
                                    </select>
                                    <select onchange="style_blog_3_2_up(this); execCmd('fontSize', this.value)">
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
                                    <button onclick="style_blog_3_2_up(this); execCmd('justifyLeft')">Gauche</button>
                                    <button onclick="style_blog_3_2_up(this); execCmd('justifyCenter')">Centrer</button>
                                    <button onclick="style_blog_3_2_up(this); execCmd('justifyRight')">Droite</button>
                                    <button onclick="style_blog_3_2_up(this); execCmd('justifyFull')">Justifier</button>
                                    <button onclick="style_blog_3_2_up(this); execCmd('insertUnorderedList')">Puces</button>
                                    <button onclick="style_blog_3_2_up(this); execCmd('insertOrderedList')">Numéros</button>


                                    <div>


                                    </div>
                                    <div>


                                    </div>
                                    <button onclick="style_blog_3_2_up(this); execCmd('createLink', prompt('Entrer URL', 'http://'))">Lien</button>
                                    <button onclick="style_blog_3_2_up(this); execCmd('unlink')">Supprimer Lien</button>
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
                            <div onkeyup="style_blog_3_2_up(this)" class="editor" contenteditable="true"></div>
                        </div>
                    </div>



                    <div class="child_photo">
                        Ajouter une photo
                    </div>





                    <div class="display_flex">
                        <div class="add_element">
                            <img width="50" height="50" src="https://img.icons8.com/color/50/calendar--v1.png" alt="calendar--v1" />
                        </div>
                        <div>
                            <img width="50" class="add_element" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1" />
                        </div>
                        <div>
                            <?php


                            if ($visibility_1_projet_child[$z] != "") {
                            ?>
                                <div>
                                    <img width="50" name="<?php echo $visibility_1_projet_child[$z] ?>" title="<?php echo  $id_projet[$z] ?>" onclick="visibility_1_projet_child(this)" class="add_element" height="50" src="https://img.icons8.com/ios-glyphs/50/invisible.png" alt="invisible" />
                                </div>
                            <?php
                            } else {
                            ?>
                                <div>
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
            ?>


            <?php






            ?>

        <?php
        }
        ?>


    <?php
    }
    ?>
</div>
<?php
require_once 'style_blog_3_scrypt_1.php' ; 

?>