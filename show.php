<?php
   
    require_once 'incs/dbh.inc.php';
    require_once 'incs/function.inc.php';
    require_once 'incs/getads.inc.php';
    require_once 'incs/header.inc.php';

    if (!isset($_GET['prdid'])) {
        # code...
        header("location:index");
        
    }
    $adsid = $_GET['prdid'];
    if (adsExists($conn, $adsid) === false) {
    # code...
    header('Location:../index');
        }
        else {
            $adsrow = adsExists($conn, $adsid);
        }

        

    
    $direction = "";
    if (isset($_SERVER['REDIRECT_URL'])) {
        # code...
        $direction = "../";
    }
    
    
    

    

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/master.css"> -->
    
    <link rel="stylesheet" href="<?php echo $direction; ?>css/smscreen.css">
    <link rel="stylesheet" href="<?php echo $direction; ?>css/lgscreen.css">
    <link rel="stylesheet" href="<?php echo $direction; ?>css/master1.css">
    <link rel="stylesheet" href="<?php echo $direction; ?>css/master.css">
     <!-- owl carousel css file cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

     <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="<?php echo $direction; ?>css/fontawesome-free-5.15.4-web/css/all.min.css">
    <script src="<?php echo $direction; ?>scripts/jquery-3.6.0.min.js"></script>
   
    <script>
        

        
        var ida = "";
        function offMdoal(){
            document.querySelector(".XModalBox").style.display="none";
            document.querySelector(".nav-bar-wrapper").style.display="inline-block";
        }
        function setid(id) {
            ida = id;
            document.querySelector(".nav-bar-wrapper").style.display="none";

            document.querySelector(".XModalBox").style.display = "grid";
        }
        $(document).ready(function() {
            
             

            $(".showmore").click(function() {
                
                // $(".XModalBox").removeClass("Display-none");
                
                $(".ModalBox").load("incs/getModal.inc.php", {
                    ida: ida
                });
            });

            


        });
        
        
        window.addEventListener("scroll", function(){

            document.querySelector(".XModalBox").style.display = "none";

        });

        

    
    </script>
    <script>
        
        //     document.querySelector(".XModalBox").addEventListener("click", function(){ 
        //         offMdoal();
        //     });
        </script>
    <title>Martel

    </title>
</head>
<body>
    <!-- <header class=""> <div class="header-logo">LOGO</div>
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
    </header> -->
    <header>
        
<div class="header-1">

    <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  Martel </a>

    <li><a href="adsowner/index.php" class="header-login">LOGIN</a></li>
    <li><a href="adsowner/index.php" class="header-signup">SIGNUP</a></li>
    
    <div class="header-2" style="background: none;">
        <nav class="navbar">
            <div class="nav-bar-wrapper " >
                <div class="header-1" style="position: absolute; top:10px;">
                    <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  Martel </a>
                </div>
                <ul>
                    <li><a  href="#home">need help ?</a></li>
                    <li><a href="#">become a seller</a></li>
                    <li><a href="#deal">advertise your product</a></li>
                    <li><a href="#featured">Open a Shop</a></li>
                    <li><a href="#gallery">categories</a>
                        <div style="margin-left: 3rem;"class="categories-nav-section">
                            <ul>
                                <li>Clothes</li>
                            </ul>
                            <ul>
                                <li>Shoes</li>
                            </ul>
                            <ul>
                                <li>Gadgets</li>
                            </ul>
                            <ul>
                                <li>Food</li>
                            </ul>
                            <ul>
                                <li>Service</li>
                            </ul>
                            <ul>
                                <li>Supermarket</li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#featured">Contact </a></li>
                </ul>
            </div>
            <!-- <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-user"></a>
            </div> -->
        </nav>
    </div>
    
    
    <div id="menu" class="fas fa-bars fa-3x"></div>
</div>

<div class="header-2">
    <div class="form-container" style="width: 100%;">
        <form action='search' method='post' style="display: flex;justify-content:space-between; width: 100%;height: 5rem;background-color: white; display: flex;flex-direction: row;"action="">
            <input name='search_word' style="padding: 1rem;outline: 0;width: 100%;border: none;" type="search" placeholder="search products" id="search" /> 
            <div style="width:7rem;display: flex;justify-content: center;align-items: center;">
                <label for="search" class="fas fa-search fa-2x"></label>
            </div>
        </form>
    </div>

</div>

</header>



    <main class="">
<?php

  


// require "incs/getads.inc.php";
echo "".$adsrow['AdsName'];






?>


<?php
    include_once "footer.php";
?>
