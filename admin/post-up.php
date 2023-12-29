<?php
require_once ('dt_con.php');


if (isset($_POST['post-update'])) 
{
    $postid=$_POST['post_id'];
    $cat_id=$_POST['category_id'];
   
    $title=$_POST['name'];
    $old_name=$_POST['oldimg'];
    //$slugc=strtolower($_POST['slug']);
    //$csug=preg_replace('/[^a-z0-9\-]/ ','-',$slugc);
    //$fin_csug=preg_replace('/-+/','-',$csug);
    //$slug=$_POST['slug'];
     $slugc=strtolower($_POST['slug']);
    $csug=preg_replace('/[^a-z0-9\-]/ ','-',$slugc);
    $fin_csug=preg_replace('/-+/','-',$csug);
    $slug=$fin_csug;
    //$slug=strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $_POST['slug'])));
    $description=filter_var(htmlentities($_POST["description"]), FILTER_SANITIZE_STRING);
    //$description=$_POST["description"];
    //$description=filter_var(htmlentities($_POST["description"]), FILTER_SANITIZE_STRING);
    //$description=filter_var(htmlentities($_POST["description"]), FILTER_SANITIZE_STRING);
    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keyword=$_POST['meta_keyword'];
    $image=$_FILES['image']['name'];
    $up_filename='';
      if ( $image!= NULL) {
        //reaname img
        $img_ex= pathinfo($image,PATHINFO_EXTENSION);
        $filename =time().'.'. $img_ex;
        $up_filename=$filename;
      }
      else{
        $up_filename=$old_name;
      }
      
    
}
     


     $inserpost= "UPDATE `post` SET `cat_name`='$cat_id',`name`='$title',`description`='$description',`slug`='$slug',
     `image`='$up_filename',`meta_title`='$meta_title',`meta_discription`='$meta_description',`key_word`='$meta_keyword'  WHERE id='$postid'";
     $inserpost_run= mysqli_query($mysql,$inserpost);
     if ( $inserpost_run) {
      
      if ($image!= NULL){
      if(file_exists('../upload/post/'.$old_name)){
       unlink("'../upload/post/".$old_name);
      }
      move_uploaded_file($_FILES['image']['tmp_name'],'../upload/post/'.$up_filename );
         
      }
        
        $_SESSION['message']="Post Created";
        header('Location:post-update.php?id='.$postid);
        exit(0);
     } else {
        header('Location:index.php');
        exit(0);
     }



?>