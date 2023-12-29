<?php
function uniqslug($slug){
    $counts=
    $unslug="SELECT `slug` FROM `post` WHERE `slug` LIKE '$slug%' ";
    $selectslug=mysqli_query($mysql, $selectslug);

    if(mysqli_num_rows($selectslug)>0){
        foreach ($selectslug as $slugs){

        }
    }
}













?>