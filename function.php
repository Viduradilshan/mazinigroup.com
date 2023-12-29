<?php
//require_once ('dt_con.php');

////$country,$cat\

//SELECT MAX(page_id) FROM 'post' WHERE 'country'='tz' AND 'cat_name'='spices'
function page_id() {

   
   $select_last="SELECT MAX(`page_id`) AS page_id FROM `post` WHERE `country`='tz' AND `cat_name`='spices'";
   $select_last_run=mysqli_query($mysql,$select_last);
   
  
   $data=mysqli_fetch_assoc($select_last_run);
   $page_id=$data['page_id'];
   $get_num_row="SELECT `id` FROM `post` WHERE `page_id`='$page_id' AND `country`='tz' AND `cat_name`='spices'";
   $get_num_run=mysqli_query($mysql,$get_num_row);

   $numberofrow= $get_num_run->num_rows;

   $limit=6;
   $page_ids=$numberofrow;

   if($numberofrow >=$limit){
    $page_ids=$page_ids+1;
   }
   return $page_ids;

  }


  
   function no_select(){
    require_once ('dt_con.php');
    //$cat=$cat;
    $select_maxno="SELECT MAX(`page_id`) AS page_id FROM `post` WHERE `country`='tz' AND `cat_name`='Spices'";
    $select_maxno_run=mysqli_query($mysql,$select_maxno);

    $maxnos=mysqli_fetch_assoc($select_maxno_run);
    $maxno=$maxnos['page_id'];



    return $maxno;





    

    

   }

   //

     ?>
                         




















