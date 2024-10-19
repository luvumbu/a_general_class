<?php
$session_general = $_SESSION["session_general"][0];

$req_sql_parent44 = 'SELECT * FROM `option_projet` WHERE `sha1_option_projet`="' . give_url() . '" AND ip7_option_projet ="' . $session_general . '"';
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent44, "start_option_projet");
$start_option_projet = $databaseHandler->tableList_info;






$req_sql_parent55 = 'SELECT AVG(`start_option_projet`) AS moyenne_start_option_projet
FROM `option_projet` WHERE `sha1_option_projet`="' . give_url() . '";
';
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent55, "moyenne_start_option_projet");
$moyenne_start_option_projet = $databaseHandler->tableList_info;






$req_sql_parent66 = 'SELECT * FROM `option_projet` WHERE `sha1_option_projet`="' . give_url() . '"';
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql_parent66, "start_option_projet");
$total_result__ = $databaseHandler->tableList_info;




$note = isset($start_option_projet[0]) ? max(1, min(5, $start_option_projet[0])) : null;

$note0 = intval($moyenne_start_option_projet[0]); // Pour la deuxième section



$_SESSION['sha1_option_projet'] = give_url();

$verif1 = $start_option_projet[0];


?>





<br />


<table class="table">
    <thead>
        <tr>

            <th scope="col">
                <?php

                if ($verif1 == "") {
                    echo "Vous n'avez pas encore noté cette page.";
                } else {

                    echo ' Vous avez noté la page '.$verif1.'/5';

                ?>
                    <!-- Premier bloc de notation -->

                <?php
                }
                ?>
            </th>
            <th scope="col">Note global</th>
            <th scope="col">Total notes</th>


        </tr>
    </thead>
    <tbody>
        <tr>

            <td>
                <div class="star-rating">
                    <input type="radio" name="rating2" id="star52" value="5" <?php if ($note == 5) echo 'checked'; ?>><label for="star52">★</label>
                    <input type="radio" name="rating2" id="star42" value="4" <?php if ($note == 4) echo 'checked'; ?>><label for="star42">★</label>
                    <input type="radio" name="rating2" id="star32" value="3" <?php if ($note == 3) echo 'checked'; ?>><label for="star32">★</label>
                    <input type="radio" name="rating2" id="star22" value="2" <?php if ($note == 2) echo 'checked'; ?>><label for="star22">★</label>
                    <input type="radio" name="rating2" id="star12" value="1" <?php if ($note == 1) echo 'checked'; ?>><label for="star12">★</label>
                </div>
            </td>
            <td>
                <div class="star-rating">
                    <input type="radio" name="rating1" id="star51" value="5" <?php if ($note0 == 5) echo 'checked'; ?>><label for="star51">★</label>
                    <input type="radio" name="rating1" id="star41" value="4" <?php if ($note0 == 4) echo 'checked'; ?>><label for="star41">★</label>
                    <input type="radio" name="rating1" id="star31" value="3" <?php if ($note0 == 3) echo 'checked'; ?>><label for="star31">★</label>
                    <input type="radio" name="rating1" id="star21" value="2" <?php if ($note0 == 2) echo 'checked'; ?>><label for="star21">★</label>
                    <input type="radio" name="rating1" id="star11" value="1" <?php if ($note0 == 1) echo 'checked'; ?>><label for="star11">★</label>
                </div>
            </td>
            <td>
                <?php
                
                echo  count($total_result__); 
                ?>
            </td>

        </tr>

    </tbody>
</table>


<script>
    const stars = document.querySelectorAll('.star-rating input');
    stars.forEach(star => {
        star.addEventListener('change', function() {
            console.log('Vous avez cliqué sur ' + this.value + ' étoiles.');
            var ok = new Information("../update/start.php");
            ok.add("start_option_projet", this.value);
            ok.push();
        });
    });
</script>
<style>
    .star-rating {
        direction: rtl;
        font-size: 30px;
        unicode-bidi: bidi-override;
        display: inline-block;
    }

    .star-rating input {
        display: none;
    }

    .star-rating label {
        color: #ddd;
        cursor: pointer;
    }

    .star-rating input:checked~label,
    .star-rating label:hover,
    .star-rating label:hover~label {
        color: rgba(0, 0, 220, 0.8);
        /* Applique la même couleur pour toutes les étoiles */
    }

    .star-rating input:checked~label:hover,
    .star-rating input:checked~label:hover~label,
    .star-rating input:checked~label~label {
        color: rgba(0, 0, 220, 0.8);
        /* La même couleur pour les étoiles après clic */
    }

    .rating-value {
        font-size: 18px;
        margin-top: 10px;
        color: #333;
    }
</style>