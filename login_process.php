<?php
session_start();
if($_POST){
    $email= $_POST['email'];
    $password= $_POST['password'];

    if($email=="mahmud@mail.com" && $password=="123"){
        $_SESSION["isLogin"] = true;
        header('location:index.php');
    } else{
        echo "password salah";
        header('location:login.php');
    }

} else{
    echo "not allowed";
}