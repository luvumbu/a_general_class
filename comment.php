<?php



$give_url = give_url();


$req_sql_parent44 = 'SELECT * FROM `comment_projet` WHERE `sha1_comment_projet`="' . $give_url . '"';



$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent44, "name_comment_projet");
$name_comment_projet = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent44, "text_comment_projet");
$text_comment_projet = $databaseHandler->tableList_info;



$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent44, "timestamp_comment_projet");
$timestamp_comment_projet = $databaseHandler->tableList_info;






 

?>


<div class="comment-section">



    <?php

    for ($bhu = 0; $bhu < count($text_comment_projet); $bhu++) {



        
       
        ?>
    <div class="comment">
        <h3><?php echo AsciiConverter::asciiToString($text_comment_projet[$bhu]) ?></h3>
        <p><?php echo  AsciiConverter::asciiToString($name_comment_projet[$bhu]) ?></p>
        <time datetime="2024-10-19"><?php echo $timestamp_comment_projet[$bhu]?></time>
    </div>
        <?php 
    }

    ?>



</div>



<div class="comment-section">
    <h2>Ajouter un Commentaire</h2>
    <form class="comment-form">
        <input id="text_comment_projet" type="text" placeholder="Votre nom" required>
        <textarea id="name_comment_projet" rows="4" placeholder="Votre commentaire" required></textarea>
        <div class="btn btn-primary" onclick="btn_comment_section(this)">Primary</div>
    </form>
</div>
<style>
    /* Style général du blog */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }

    .comment-section {
        width: 80%;
        margin: auto;
    }

    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Titre du blog */
    h1 {
        text-align: center;
        color: #2c3e50;
    }

    /* Section des commentaires */
    .comment-section {
        margin-top: 30px;
    }

    .comment-section h2 {
        margin-bottom: 15px;
        color: #2c3e50;
    }

    /* Style du formulaire de commentaire */
    .comment-form {
        margin-bottom: 20px;
    }

    .comment-form input[type="text"],
    .comment-form textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .comment-form input[type="submit"] {
        background-color: #3498db;
        color: white;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 4px;
    }

    .comment-form input[type="submit"]:hover {
        background-color: #2980b9;
    }

    /* Style de la liste des commentaires */
    .comment {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 15px;
        margin-bottom: 15px;
        background: #f9f9f9;
    }

    .comment h3 {
        margin: 0;
        color: #2980b9;
    }

    .comment p {
        margin: 5px 0;
    }

    .comment time {
        font-size: 0.9em;
        color: #888;
    }
</style>

<script>
    function btn_comment_section(_this) {

        _this.style.display = "none";
        var text_comment_projet = document.getElementById("text_comment_projet").value;
        var name_comment_projet = document.getElementById("name_comment_projet").value;





        var ok = new Information("../add/btn_comment_section.php");
        ok.add("text_comment_projet", text_comment_projet);
        ok.add("name_comment_projet", name_comment_projet);


        document.getElementById("start_option_projet").innerHTML = "Merci";

        ok.push();








    }
</script>