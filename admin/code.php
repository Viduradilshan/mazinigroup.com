<?php require_once ('dt_con.php');?>


<?php


///delete post--------------------->

if (isset($_POST['post-delete'])){
  $post_id=$_POST['post-delete'];
  $rem_img=$_POST['oldimg'];
  $sle_post="DELETE FROM post WHERE id='$post_id' LIMIT 1";
  $sle_post_run=mysqli_query($mysql,$sle_post);

  if ($sle_post_run) {
    if (file_exists('../upload/post/'.$rem_img)) {
      unlink("'../upload/post/".$rem_img);
    }
    header('Location:post-view.php');
    exit(0);
    
  }





}









///add post--------------------->




if (isset($_POST['post-add'])) 
{

    $cat_id=$_POST['category_id'];
    $title=$_POST['name'];
    $coun_id=$_POST['cou_id'];
    $short_dis=filter_var(htmlentities($_POST['short_dis']), FILTER_SANITIZE_STRING);
    
   
    $description=filter_var(htmlentities($_POST["description"]), FILTER_SANITIZE_STRING);
    //$description=$_POST["description"];
    //$description=filter_var(htmlentities($_POST["description"]), FILTER_SANITIZE_STRING);
    //$description=filter_var(htmlentities($_POST["description"]), FILTER_SANITIZE_STRING);
    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keyword=$_POST['meta_keyword'];
    $image=$_FILES['image']['name'];
    

    if ($_POST['slug']!= NULL) {
        $slugc=strtolower($_POST['slug']);
        
    }
    else{
        $slugc=strtolower($_POST['name']);
       

    }
       $csug=preg_replace('/[^a-z0-9\-]/ ','-',$slugc);
        $fin_csug=preg_replace('/-+/','-',$csug);
        $slug=$fin_csug;
    if ( $image!= NULL) {
      //reaname img
      $img_ex= pathinfo($image,PATHINFO_EXTENSION);
      $filename =time().'.'. $img_ex;
    }
    else{
      $filename='';
    }
      
    
}



  require_once ('dt_con.php');
  $select_last="SELECT MAX(`page_id`) AS page_id FROM `post` WHERE `country`='$coun_id' AND `cat_name`='$cat_id'";
  $select_last_run=mysqli_query($mysql,$select_last);
  $page_ids=0;
 
  $data=mysqli_fetch_assoc($select_last_run);
  $page_id=$data['page_id'];
      if($page_id>0){
        $get_num_row="SELECT `id` FROM `post` WHERE `page_id`='$page_id' AND `country`='$coun_id' AND `cat_name`='$cat_id'";
        $get_num_run=mysqli_query($mysql,$get_num_row);

        $numberofrow= $get_num_run->num_rows;

        $limit=5;
        $page_ids=$numberofrow;

        if($numberofrow >=$limit){
        $page_ids=$page_ids+1;
        }
    }else if($page_id==0){
      $page_ids=$page_ids+1;
    }

  

 





     $inserpost= "INSERT INTO `post`( `cat_name`, `name`, `description`, `short_dis`, `slug`, `image`, `meta_title`, `meta_discription`, `key_word`,`country`,`page_id` )
     VALUES ('$cat_id','$title','$description','$short_dis','$slug','$filename','$meta_title','$meta_description','$meta_keyword','$coun_id','$page_ids')";
     $inserpost_run= mysqli_query($mysql,$inserpost);
     if ( $inserpost_run) {
        move_uploaded_file($_FILES['image']['tmp_name'],'../upload/post/'.$filename );
        $_SESSION['message']="Post Created";
        header('Location:post-create.php');
        exit(0);
     } else {
        header('Location:index.php');
        exit(0);
     }










     ///update post--------------------->





     










?>