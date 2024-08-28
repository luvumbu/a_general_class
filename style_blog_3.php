<link rel="stylesheet" href="style_blog_3_2.css">

<div class="class_t">
    <?php

    $req_sql = 'SELECT * FROM `projet` WHERE `id_user_projet` = "' . $_SESSION["session_general"][0] . '" ORDER BY `projet`.`id_projet` DESC';

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
    $id_sha1_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "id_projet");
    $id_projet = $databaseHandler->tableList_info;

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
    $databaseHandler->getDataFromTable($req_sql, "password_projet");
    $password_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "visibility_1_projet");
    $visibility_1_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "visibility_2_projet");
    $visibility_2_projet = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql, "img_projet_src");
    $img_projet_src = $databaseHandler->tableList_info;

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









        //  var_dump($id_sha1_projet__ ) ; 


    ?>
        <div class="card">
            <input type="text" value="<?php echo $title_projet_; ?>" onkeyup="style_blog_3_2_up(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  't_' . $id_projet[$a] ?>" placeholder="MON TITRE" class="title_projet">
            <input type="text" style="opacity: 0.3;" value="<?php echo $description_projet_; ?>" onkeyup="style_blog_3_2_up(this)" title="<?php echo  $id_projet[$a] ?>" id="<?php echo  'h_' . $id_projet[$a] ?>" placeholder="autre element" class="title_projet">



            <div class="custom-editor">
                <div id="editor-container">
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
                    <div title="<?php echo  $id_projet[$a] ?>" id="<?php echo  $id_projet[$a] ?>" onkeyup="style_blog_3_2_up(this)" class="editor" contenteditable="true"><?php echo $name_projet_ ?></div>
                </div>
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

                <div>
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
                    <div id="<?php echo  'confirmer_'.$id_projet[$a] ?>">
                        <img width="50" name="<?php echo $visibility_1_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" onclick="visibility_1_projet(this)" class="add_element" height="50" src="https://img.icons8.com/ios/50/invisible.png" alt="invisible" />
                    </div>
                <?php
                }
                ?>
                <div>
                <img title="<?php echo  $id_projet[$a] ?>" onclick="remove_projet_(this)" class="add_element" width="50" height="50" src="https://img.icons8.com/ios/50/delete-forever--v1.png" alt="delete-forever--v1"/>
                </div>

                <div>
                <img  class="display_none" id="<?php echo  'remove_'.$id_projet[$a] ?>" title="<?php echo  $id_projet[$a] ?>" onclick="remove_projet(this)" class="add_element" width="50" height="50" src="https://img.icons8.com/fluency/50/delete-forever.png" alt="delete-forever"/>
                            
                </div>


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

<script>


function remove_projet_(_this) {

   
    _this.style.display="none" ; 

   
   document.getElementById('remove_'+_this.title).className ="add_element" ;
 
}

    function remove_projet(_this){
     
         _this.style.display = "none";
        var ok = new Information("remove/remove_projet.php");
    
        ok.add("id_projet", _this.title);

        ok.push();


        const myTimeout = setTimeout(myGreeting, 100);

        function myGreeting() {
           location.reload();
        }


    }
    function projet_child(_this) {


        _this.style.display = "none";
        var ok = new Information("add/projet_child.php");
        ok.add("id_sha1_projet", _this.className);
        ok.add("id_projet", _this.title);

        ok.push();


        const myTimeout = setTimeout(myGreeting, 100);

        function myGreeting() {
            location.reload();
        }

    }


    function sup_img_user_action(_this) {
        var ok = new Information("remove/sup_img_user_action.php");
        ok.add("img_projet_src", _this.title);
        ok.push();

        const myTimeout = setTimeout(myGreeting, 100);

        function myGreeting() {
            location.reload();
        }




    }



    function visibility_1_projet(_this) {

        var img1 = "https://img.icons8.com/ios-glyphs/50/invisible.png";
        var img2 = "https://img.icons8.com/ios/50/invisible.png";


        var ok = new Information("update/visibility_1_projet.php");

        if (_this.src == img1) {
            var visibility_1_projet = "";
            _this.src = img2;
        } else {
            _this.src = img1;
            var visibility_1_projet = "(0-0)";
            _this.src = img1;


        }



        ok.add("visibility_1_projet", visibility_1_projet);
        ok.add("id_projet", _this.title);





        ok.push();

    }

    function execCmd(command, value = null) {
        document.execCommand(command, false, value);
    }

    function style_blog_3_2_up(_this) {
        const myTimeout = setTimeout(myGreeting, 500);

        function deux_a() {
            onkeyup_action_bool2 = false;
            console.log(_this.title);

            var id_projet = document.getElementById(_this.title);



            var title_projet = document.getElementById('t_' + _this.title).value;
            var description_projet = document.getElementById('h_' + _this.title).value;





            var ok = new Information("update/style_blog_3_2_up.php");
            ok.add("name_projet", id_projet.innerHTML);
            ok.add("id_projet", _this.title);
            ok.add("title_projet", title_projet);
            ok.add("description_projet", description_projet); 
            ok.push();

            onkeyup_action_bool = true;
        }

        function myGreeting() {
            if (onkeyup_action_bool2 == false) {
                onkeyup_action_bool2 = true;
                const deux = setTimeout(deux_a, 500);
            }
        }
    }
</script>

<style>
    .display_none{
      opacity: 0;
    }
    .card_child {
        background-color: #cac8d4;
    }

    .child_photo {
        text-align: center;
        justify-content: space-around;
        background-color: black;
        color: white;
        padding: 25px;
        margin-top: 25px;
        margin-bottom: 50;

    }

    .input_child_div input {
        width: 100%;
        margin: auto;
        border: 1px solid rgba(0, 0, 0, 0.2);
        padding: 15px;
    }

    .textarea_child_div textarea {
        width: 100%;
        margin: auto;
        margin-top: 25px;
        height: 100px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        margin-bottom: 50px;


    }

    .display_flex {
        display: flex;
        justify-content: space-around;
    }

    .projet,
    .sup_projet {


        background-color: black;
        padding: 25px;
        margin-top: 25px;
        text-align: center;
        color: white;

    }

    .sup_projet {
        background-color: rgba(200, 15, 15, 0.8);
    }

    .projet div {
        padding: 15px;

    }

    .editor {
        overflow-y: scroll;
    }

    .projet:hover,
    .sup_projet:hover,
    .child_photo:hover {
        cursor: pointer;
    }

    .add_element {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .add_element:hover,
    .fake_img:hover {
        cursor: pointer;
    }

    .taille_img img {
        width: 100%;

    }

    .taille_img {
        width: 400px;
        text-align: center;

        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;


    }

    .fake_img {
        background-color: grey;
        padding-top: 50px;
        padding-bottom: 50px;
        margin-top: 25px;
    }

    .title_projet {
        width: 100%;
        margin-top: 25px;
        margin-bottom: 25px;
        padding: 15px;
        border: 1px solid rgba(0, 0, 0, 0.1);


    }
</style>