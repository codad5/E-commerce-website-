<?php
    require_once 'incs/dbh.inc.php';
    require_once 'incs/function.inc.php';
    require_once 'incs/getads.inc.php';
?>
 <?php

    function GetAds($conn, $cat, $class, $num){
        if ($cat == 'All') {
            $sql = "SELECT * FROM ads WHERE paid = 'paid';";
        }
        else {
            $sql = "SELECT * FROM ads WHERE paid = 'paid' AND adsCat LIKE '%$cat%' AND class = '".$class."' LIMIT $num;";
        }
        
        switch ($class) {
            case 'Xbig':
                $style = "XbigAds";
                break;
                case 'big':
                $style = "bigAds";
                break;
                case 'medium':
                $style = "mediumAds";
                break;
                case 'small':
                $style = "smallAds";
                break;
                case 'Xsmall':
                $style = "XsmallAds";
                break;
            
            default:
                # code...
                break;
        }
          
            $result = mysqli_query($conn, $sql);
            
            
            $resultcheck = mysqli_num_rows($result);
            
            $n = 1; // to limit number of results to show
            if ($resultcheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // if ($n <= $num && $n !== 0) {
                        # code...
                        $userDetails = getadsOwner($conn, $row['userName']);
                    
                    
                    switch ($class) {
                        case 'medium':
                            # code...
                            echo "<div class='mediumAds'>

                <div class='adsImg'>
                    <img src='adsowner/img/gallery/".$row['AdsImg1']."' alt='".$row['adsCat']."'>
                </div>
                <div class='adsWriteup'>
                    <span class='name'>
                            ".$row['AdsName']."
                    </span>
                    <span class='price'>
                        # ".$row['price']."
                    </span>
                </div>
            </div>";
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                    
                    // }
                    // $n++;
                }
                }

            }

        
        
        

        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/smscreen.css">
    <link rel="stylesheet" href="css/lgscreen.css">
    <title>Document</title>
</head>
<body>
    <header class=""> <div class="header-logo">LOGO</div>
        <nav>
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="">CATEGORIES</a></li>
                <li><a href="">CONTACT</a></li>
            </ul>
            
        </nav>
        <nav class="signav">
                <ul>
                    <li><a href="adsowner/index.php" class="header-login">LOGIN</a></li>
                    <li><a href="adsowner/index.php">SIGNUP</a></li>
                </ul>
                <form action="search.php" method="post">
                    <input type="search" name="search_word" id="">
                    <input type="submit" value="SEARCH">
                </form>
            </nav>  
    </header>
    <main class="">