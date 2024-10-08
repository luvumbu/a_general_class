<div>

</div>
<?php




for ($bc_ = 0; $bc_ < count($id_projet_bv); $bc_++) {

?>


    <div class="for_div">
        <input type="text">

        <div class="for_img">
            <div></div>
        </div>
        <textarea name="" id=""></textarea>
    </div>


<?php
}
?>



<style>
    .for_div input , .for_div textarea{
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