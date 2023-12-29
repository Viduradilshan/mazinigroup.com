<?php
session_start();
require_once ('../dt_con.php');


if (isset($_POST['place-oder'])) {
    
$name     = $_POST['name'];
$email    = $_POST['email'];
$phone     = $_POST['phone'];
$comments = $_POST['comments'];

$data_add="INSERT INTO `order`(`name`, `email`, `phone`, `comments`) VALUES ('$name','$email','$phone','$comments')";
            $data_add_run=mysqli_query($mysql,$data_add);
            if($data_add_run){ 
                require ('mail.php');
                $mail->send();
                header('Location:../contact-us');


            }
            else{
               






            header("Location:../index.php");

            }


}
?>

<?php


if (isset($_POST['oder'])) {
    
$name     = $_POST['name'];
$email    = $_POST['email'];
$phone     = $_POST['phone'];
$comments = $_POST['comments'];

$data_add="INSERT INTO `order`(`name`, `email`, `phone`, `comments`) VALUES ('$name','$email','$phone','$comments')";
            $data_add_run=mysqli_query($mysql,$data_add);
            if($data_add_run){ 
                require ('mail.php');
                $mail->send();
                header('Location:../contact-us');


            }
            else{
               






            header("Location:../index.php");

            }


}?>



<?php

if (isset($_POST['incon'])) {
    

    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];

    $addcon_data="INSERT INTO `home_msg`( `name`, `email`, `msg`) VALUES ('$name','$email','$msg')";
    $addcon_data_run=mysqli_query($mysql,$addcon_data);
    if($addcon_data_run){
        
        $_SESSION['msg']=true;
        $script = "<script>
window.location = 'index.html';</script>";
echo $script;

        

    }
}







?>