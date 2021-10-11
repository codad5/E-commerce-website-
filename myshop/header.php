<?php
    session_start();
    if (!isset($_SESSION['owner'])) {
        # code...
        header('Location:index');
    }

    else {
        require "incs/function.inc.php";
        require "incs/dbh.inc.php";
         $username =  $_SESSION['owner'];
         $phone =  $_SESSION['phone'];
         $email =  $_SESSION['email'];
        
    }
    if (checkUid($conn, $username, $email, $phone) === false) {
        # code...
        session_unset();
        session_destroy();
        header('Location:index.php');
        
        
        
        
    }
    else {
        
        $userd = checkUid($conn, $username, $email, $phone);
    }

    if (empty($userd['pwd'])) {
        # code...
        header('Location:cpwd.php?msg=changepassword');
    }
    
 

    
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    
    <title>Martel

    </title>
    <link rel="stylesheet" href="css/smscreen.css">
    <link rel="stylesheet" href="css/lgscreen.css">
    <link rel="stylesheet" href="css/master1.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="../css/fontawesome-free-5.15.4-web/css/all.min.css">

    <script src="../scripts/jquery-3.6.0.min.js"></script>
</head>
<body>
    
    <header>
        
<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  Martel </a>

    
    
    <div class="header-2" style="background: none;">
        <nav class="navbar">
            <div class="nav-bar-wrapper " >
                <div class="header-1" style="position: absolute; top:10px;">
                    
                </div>
                
                <ul>
                    <li>
<a href="incs/logout.inc.php">Logout</a></li>
                </ul>
            </div>
            
        </nav>
    </div>
    
    
    <div id="menu" class="fas fa-bars fa-3x"></div>

</div>
<div class="acc-ctrl-cnt">

</div>



</header>



    <main class="">
    