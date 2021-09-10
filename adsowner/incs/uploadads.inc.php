<?php

    if (!isset($_POST['SubmitAds'])) {
        # code...
        header('Location:home.php?hy9');
    }

if (count($_FILES) > 3){
    header('Location:home.php?toomanyfiles');
    
}


    require "function.inc.php";
    require "dbh.inc.php";
    session_start();

    if (!isset($_SESSION['user'])) {
        # code...
        header('Location:indx.php?');
    }
$ready = 0;
 foreach ($_POST as $key){
        if (!empty($key)) {
            # code...
             
             $ready++;
        }
        else{
            header('Location:../home.php?emptyinput');
        }
        
        
    }


$adsName = $_POST['adsName'];
$adsDes = $_POST['adsDes'];
$adsCat = $_POST['adsCat'];
$user = $_SESSION['user'];
$adsclass = $_POST['Adsclass'];
$price = $_POST['Price'];

if ($ready >= 6) {
    # code...
    uploadAds($conn, $adsName, $adsDes, $adsCat, $user, $adsclass, $price);

}
else{
    header('Location:../home.php?emptyinput');
}


    



    # code...




