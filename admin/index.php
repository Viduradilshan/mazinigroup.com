<?php  
session_start();
if (isset($_SESSION['auth'])) {
    if($_SESSION['auth_st'] =='1'){
      header("Location:home.php");

    }else{
         header("Location:../index.php");
    }
}else{
     header("Location:login.php");

}












?>