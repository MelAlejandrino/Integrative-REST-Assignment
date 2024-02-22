<?php
session_start();
include("../db/config.php");
 
if (isset($_POST['login_button'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $sql = "SELECT email, password, role FROM `users` WHERE email = '$email';";
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $dbemail = $row["email"];
            $dbpassword = $row["password"];
            $dbrole = $row["role"];
        }
 
        if ($email == $dbemail) {
            if ($password == $dbpassword) {
                if ($dbrole == 0) {
                    header("Location: ../roles/user.php");
                    $_SESSION["user"] = "user";
                } elseif ($dbrole == 1) {
                    header("Location: ../roles/admin.php");
                    $_SESSION["user"] = "admin";
                } else {
                    header("Location: login.php");
                }
            } else {
                header("Location: login.php");
            }
        } else {
            header("Location: login.php"); 
        }
    } else {
    }
}

if(isset($_POST['register_button'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_name = $_POST['middle_name'];

    $sql = "SELECT email FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        header('Location: login.php');
    }
    else{
        $sql = "INSERT INTO users (email, password , first_name , middle_name , last_name , date_created, role)  VALUES ('$email', '$password', '$first_name', '$middle_name', '$last_name', current_timestamp(), 0)";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: login.php");
            } else {
                header("Location: register.php");
            }
    }
}

if(isset($_POST["insert_button"])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_name = $_POST['middle_name'];
}