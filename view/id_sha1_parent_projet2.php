<div>

</div>
<?php




for ($bc_ = 0; $bc_ < count($id_sha1_parent_projet2); $bc_++) {



    $title_projet__ =   AsciiConverter::asciiToString($title_projet2[$bc_]);
    $name_projet__ =   AsciiConverter::asciiToString($name_projet2[$bc_]);




?>
    <div id="<?php echo "all_" . $id_sha1_parent_projet2[$bc_] ?>">



        <div class="for_div">
            <input value="<?php echo $title_projet__ ?>" title="<?php echo $id_sha1_parent_projet2[$bc_] ?>" onkeyup="id_sha1_parent_projet2_input(this)" type="text" id="<?php echo 'title_projet_' . $id_sha1_parent_projet2[$bc_] ?>">
            <div class="img_class_eles">
                <img src="<?php echo 'img_user_action/' . $img_projet_src2[$bc_]  ?>" alt="" srcset="">

            </div>

            <div class="for_img">
                <div onclick="img_user_action(this)" title="<?php echo  $id_projet2[$bc_] ?>" class="<?php echo  $id_projet2[$bc_] ?>">Ajouter une photo</div>

            </div>



        </div>



        <div style="display: flex;">
            <div title="<?php echo $id_sha1_parent_projet2[$bc_]  ?>" class="cursor_pointer" onclick="gomme(this)">
                <img width="45" height="45" src="https://img.icons8.com/dusk/45/eraser.png" alt="eraser" />
            </div>



            <div id="<?php echo "my_" . $id_sha1_parent_projet2[$bc_]  ?>" class="cursor_pointer" onclick="remove_el_(this)" title="<?php echo $id_sha1_parent_projet2[$bc_] ?>">
                <img width="45" height="45" src="https://img.icons8.com/ios/45/delete-forever.png" alt="delete-forever" />
            </div>
            <div class="display_none" id="<?php echo "remove_el_" . $id_sha1_parent_projet2[$bc_]  ?>" onclick="remove_el_ok(this)" title="<?php echo $id_sha1_parent_projet2[$bc_] ?>">
                <img width="45" height="45" src="https://img.icons8.com/color/45/delete-forever.png" alt="delete-forever" />
            </div>

        </div>


        <div id="<?php echo 'name_projet_' . $id_sha1_parent_projet2[$bc_] ?>" title="<?php echo $id_sha1_parent_projet2[$bc_] ?>" onkeyup="id_sha1_parent_projet2_input(this)" class="editor" contenteditable="true"><?php echo  $name_projet__ ?></div>
        <textarea style="width:100%" onkeyup="id_sha1_parent_projet2_input2(this)" style="width:100%" id="<?php echo "ifram_" . $id_sha1_parent_projet2[$bc_]  ?>" title="<?php echo $id_sha1_parent_projet2[$bc_]  ?>"><?php echo  $name_projet__ ?></textarea>

    </div>
<?php
}
?>



<style>
    .for_div input,
    .for_div textarea {
        width: 100%;
        margin-bottom: 25px;
        border-color: rgba(0, 0, 0, 0.1);


    }

    .for_img div {
        border: 1px solid black;
        width: 300px;


        padding: 50px;


        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        transition: 0.8s all;
        text-align: center;

    }

    .for_img div:hover {
        cursor: pointer;
        background-color: black;
        transition: 1s all;
        border: 1px solid rgba(0, 0, 0, 0.1);
        color: white;

    }
</style>


<script>
    function id_sha1_parent_projet2_input(_this) {








        const myTimeout = setTimeout(myGreeting, 500);

        function deux_a() {
            onkeyup_action_bool2 = false;

            onkeyup_action_bool = true;










            var title_projet_ = document.getElementById("title_projet_" + _this.title).value;




            var name_projet_ = document.getElementById("name_projet_" + _this.title).innerHTML;






            var ok = new Information("update/id_sha1_parent_projet2_input.php"); // création de la classe 
            ok.add("id_sha1_projet", _this.title); // ajout de l'information pour lenvoi 
            ok.add("title_projet_", title_projet_); // ajout d'une deuxieme information denvoi  
            ok.add("name_projet_", name_projet_); // ajout d'une deuxieme information denvoi  

            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 




        }

        function myGreeting() {
            if (onkeyup_action_bool2 == false) {
                onkeyup_action_bool2 = true;
                const deux = setTimeout(deux_a, 500);
            }
        }





    }



    function id_sha1_parent_projet2_input2(_this) {




        const myTimeout = setTimeout(myGreeting, 500);

        function deux_a() {
            onkeyup_action_bool2 = false;

            onkeyup_action_bool = true;










            var title_projet_ = document.getElementById("title_projet_" + _this.title).value;



            var name_projet_ = _this.value;




            document.getElementById("name_projet_" + _this.title).innerHTML = _this.value;

            var ok = new Information("update/id_sha1_parent_projet2_input.php"); // création de la classe 
            ok.add("id_sha1_projet", _this.title); // ajout de l'information pour lenvoi 
            ok.add("title_projet_", title_projet_); // ajout d'une deuxieme information denvoi  
            ok.add("name_projet_", name_projet_); // ajout d'une deuxieme information denvoi  

            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 


        }

        function myGreeting() {
            if (onkeyup_action_bool2 == false) {
                onkeyup_action_bool2 = true;
                const deux = setTimeout(deux_a, 500);
            }
        }




    }




    function gomme(_this) {

 
        document.getElementById("name_projet_" + _this.title).innerHTML = "";
        document.getElementById("ifram_" + _this.title).value = "";
        id_sha1_parent_projet2_input(_this);
    }


    function remove_el_(_this) {
        console.log(_this.title);



        document.getElementById("remove_el_" + _this.title).className = "";
        document.getElementById("my_" + _this.title).style.display = "none";

    }


    function remove_el_ok(_this) {
        document.getElementById("all_" + _this.title).style.display = "none";



        var ok = new Information("remove/remove_el_ok.php"); // création de la classe 
        ok.add("id_sha1_projet", _this.title); // ajout de l'information pour lenvoi 

        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 




    }
</script>


<style>
    .cursor_pointer:hover {
        cursor: pointer;
    }
    .img_class_eles {
 
        text-align: center;
    }
</style>