<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: auth/login.php');
    } elseif ($_SESSION['user'] == "user"){
        header("Location: roles/user.php");
    } elseif($_SESSION['user'] == "admin"){
        header("Location: roles/admin.php");
    }
?>