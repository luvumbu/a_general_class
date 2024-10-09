<div>

</div>
<?php



 
for ($bc_ = 0; $bc_ < count($id_sha1_parent_projet2); $bc_++) {



 $title_projet__=   AsciiConverter::asciiToString($title_projet2[$bc_]);
 $name_projet__=   AsciiConverter::asciiToString($name_projet2[$bc_]);

 

 
?>


    <div class="for_div">
        <input value="<?php echo $title_projet__ ?>"title="<?php echo $id_sha1_parent_projet2[$bc_] ?>"  onkeyup="id_sha1_parent_projet2_input(this)"  type="text" id="<?php echo 'title_projet_'.$id_sha1_parent_projet2[$bc_] ?>">

        <div class="for_img" ></div>
      
    </div>

    <div title="<?php echo $id_sha1_parent_projet2[$bc_]  ?>" class="cursor_pointer" onclick="gomme(this)">
    <img width="45" height="45" src="https://img.icons8.com/dusk/45/eraser.png" alt="eraser"/>
    </div>

    
    <div  id="<?php echo 'name_projet_'.$id_sha1_parent_projet2[$bc_] ?>" title="<?php echo $id_sha1_parent_projet2[$bc_] ?>" onkeyup="id_sha1_parent_projet2_input(this)" class="editor" contenteditable="true"><?php echo  $name_projet__ ?></div>
    <textarea style="width:100%" onkeyup="id_sha1_parent_projet2_input2(this)" style="width:100%" id="<?php echo "ifram_".$id_sha1_parent_projet2[$bc_]  ?>"  title="<?php echo $id_sha1_parent_projet2[$bc_]  ?>"  ><?php echo  $name_projet__ ?></textarea>


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

    .for_img {
        border: 1px solid black;
        width: 100px;
        height: 100px;
        margin: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        transition: 0.8s all;

    }

    .for_img:hover {
        cursor: pointer;
        background-color: black;
        transition: 1s all;
        border: 1px solid rgba(0, 0, 0, 0.1);

    }
</style>


<script>
    function id_sha1_parent_projet2_input(_this) {








        const myTimeout = setTimeout(myGreeting, 500);

function deux_a() {
    onkeyup_action_bool2 = false;
    
    onkeyup_action_bool = true;
 
 




 



var title_projet_ = document.getElementById("title_projet_"+_this.title).value ; 




var name_projet_ = document.getElementById("name_projet_"+_this.title).innerHTML ; 
 





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
 
 




 



var title_projet_ = document.getElementById("title_projet_"+_this.title).value ; 

 

var name_projet_ = _this.value ; 
 



 document.getElementById("name_projet_"+_this.title).innerHTML = _this.value ; 

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
    
        document.getElementById("name_projet_"+_this.title).innerHTML ="" ; 


        document.getElementById("ifram_"+_this.title).value ="" ; 
        id_sha1_parent_projet2_input(_this);
    }
    
</script>


<style>
    .cursor_pointer:hover {
        cursor: pointer;
    }
</style>