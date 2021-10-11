<?php

    if (!isset($_POST['login'])) {
        # code...
        session_start();
        session_unset();
        session_destroy();
        header('Location:../');
    }
    require "function.inc.php";
    require "dbh.inc.php";
    $username = $_POST['username'];
    $pwd = $_POST['Password'];

    if (empty($username) || empty($pwd)) {
        # code...
        header('Location:../?error=emptyform');
    }

   if (!filter_var($username, FILTER_SANITIZE_STRING)){
        $pwd = htmlspecialchars($pwd);

        }

    login($conn, $username, $pwd);