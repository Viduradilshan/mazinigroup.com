<?php  
session_start();
ob_start();



if(isset($_SESSION['auth'])){
    if($_SESSION['type']!=='admin'){
      header("Location:index.php");
    }
    
     

}else {
    header("Location:login.php");
     exit(0);
}










?>