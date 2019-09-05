<?php
session_start();
if($_SESSION['isLogin']!=true){
    echo "belum login";
    header('location:login.php');
} else{
    echo "anda telah login";
}