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
    ?>
        <div class="card">




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
            <img class="add_element" width="50" height="50" src="https://img.icons8.com/ios/50/add--v1.png" alt="add--v1" />


        </div>
    <?php
    }
    ?>
</div>

<script>
    function execCmd(command, value = null) {
        document.execCommand(command, false, value);
    }

    function style_blog_3_2_up(_this) {
        const myTimeout = setTimeout(myGreeting, 500);

        function deux_a() {
            onkeyup_action_bool2 = false;
            console.log(_this.title);

            var id_projet = document.getElementById(_this.title);

            var ok = new Information("update/style_blog_3_2_up.php");
            ok.add("name_projet", id_projet.innerHTML);
            ok.add("id_projet", _this.title);

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
    .projet {
        background-color: black;
        padding: 25px;
        margin-top: 25px;
        text-align: center;
        color: white;
    }
    .projet div {
        padding : 15px ; 
        
    }

    .editor {
        overflow-y: scroll;
    }

    .projet:hover {
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
</style>