<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        # code...
        header('Location:index.php');
    }

    else {
        require "incs/function.inc.php";
        require "incs/dbh.inc.php";
         $username =  $_SESSION['user'];
         $phone =  $_SESSION['phone'];
         $email =  $_SESSION['email'];
        
    }
    if ($userd = checkUid($conn, $username, $email, $phone)) {
        # code...
        
        
        
        
    }
    else {
        session_unset();
        session_destroy();
        header('Location:index.php');
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
    <title>Document</title>
</head>
<body>

<a href="incs/logout.inc.php">Logout</a>

<form action="incs/uploadads.inc.php" method="post" enctype="multipart/form-data">
<label for="adsName">Ads Name</label>
    <input type="text" name="adsName" id="" placeholder="ads Name">
    <label for="adsDes">Ads Description</label>
    <textarea name="adsDes" id="adsDes" cols="30" rows="10"></textarea>
    <label for="AdsCat">AdsCat</label>
    <input type="text" name="adsCat">
    <label for="PrdPrice">Your Price</label>
    <input type="number" name="Price" id="">
    <select name="Adsclass" id="">
        <option value="Xbig">Xbig --#700</option>
        <option value="big">big --#600</option>
        <option value="medium">Medium --#400</option>
        <option value="Smail">small --#300</option>
        <option value="Xsmall">Xsmall --#100</option>
        
    </select>
    <input type="file" maxlength="3" name="adsImage1"  multiple="3" max="3" >
    <input type="file" maxlength="3" name="adsImage2"  multiple="3" max="3" >
    <input type="file" maxlength="3" name="adsImage3"  multiple="3" max="3" >

    <button type="submit" name="SubmitAds" value="Submit Ads">Submit</button>
</form>
    

        <?php
                 
         
            $sql = "SELECT * FROM ads WHERE userName = '".$username."';";
            
            $resultmsg = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($resultmsg);
            
            //to know number of new msg

            if ($resultcheck > 0) {
                
            while ($row = mysqli_fetch_assoc($resultmsg)) {
                echo $row['userName'];
            }
            }
        
             
            
    
        

        
    ?>

        
</body>
</html>