<?php
session_start();
include('dt_con.php');

if (isset($_POST['login_btn'])) {
    $email=mysqli_real_escape_string($mysql,$_POST['user_name']);
    $pass=mysqli_real_escape_string($mysql,$_POST['user_pass']);
    $passen=MD5($pass);
    $login="SELECT * FROM `login` WHERE `user_email`='$email' AND `password`='$passen' LIMIT 1 ";
    $login_run=$mysql->query($login);
    if ($login_run->num_rows > 0) {
        while($data=$login_run->fetch_assoc()){
             $user_id=$data['id'];
             $type=$data['type'];
             $user_name=$data['full_name'];
             $user_email=$data['user_email'];
             $auth_st=$data['status'];
             $_SESSION['auth']=true;
             $_SESSION['auth_st']= $auth_st;
             $_SESSION['type']= $type;
             $_SESSION['auth_user']=[
            'name'=>$user_name,
            'user_id'=> $user_id,
            'email'=> $user_email

        ];
             $_SESSION['name']=$user_name;

        }
        
        if ($_SESSION['auth_st']=='1') {
            $_SESSION['msg']="YOU Login";
          header("Location:home.php");
        }
        elseif($_SESSION['auth_st']=='0'){
            header("Location:../index.php");

        }
        


    }
    else{
        $_SESSION['msg']="Invakid Login";
        header("Location:login.php");
        exit(0);
    }
} else {
    $_SESSION['msg']="Invakid Login";
    header("Location:login.php"); 
    exit(0);

}








?>