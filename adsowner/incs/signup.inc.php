<?php
    if (!isset($_POST['signup'])) {
        # code...
        header('Location:../index.php');

    }

   
    require "function.inc.php";
    require "dbh.inc.php";

    

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $nationality = $_POST['nationality'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (emptyInput($username, $fullname, $age, $profession, $email, $phone) !== false) {
        # code...
        header('location:../index.php?error=emptyinput');
    }
    else {
        # code...
    
    if (!checkUid($conn, $username, $email, $phone)) {
        # code...

        if (invalidUid($username)) {
        # code...
        header('location:../index.php?error=invalidusername');
    }
    if (invalidEmail($email)) {
        # code...
        header('location:../index.php?error=invalidemail');
    }

    if (createUser($conn, $fullname, $email, $username, $phone, $age, $nationality, $profession)) {
        # code...
        session_start();
        
        $_SESSION['user'] = $username;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;
        header('location:../home.php');


    }
    
        
    }

    else {
        header('location:../index.php?error=uidexist');
    }
    
}   
    