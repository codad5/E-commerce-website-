<?php include "header.php";
?>
    
<div class="deal" style="min-height: 0vh;">
<?php
            $cat = array("All", "Clothing", "Phone", "Fax", "Cheap");
        
        // for selecting random array position
        function randomCat(){
            $cat = array("All", "Clothing", "Cheap", "shoe", "shirt");
            $rrr = random_int(0, count($cat)-1);
            return $rrr;
        }
        
        ?>
    <div class="box-container">
    
        <div class="home-slider owl-carousel">
            <div class="item">
                <img src="images/deal1.jpg" alt="">
                <div class="content">
                    <h3>latest laptop</h3>
                    <p>upto 25% off on first purchase</p>
                    <a href="#"><button class="btn">explore</button></a>
                </div>
            </div>
            <div class="item">
                <img src="images/deal2.jpg" alt="">
                <div class="content">
                    <h3>new headphone</h3>
                    <p>upto 25% off on first purchase</p>
                    <a href="#"><button class="btn">explore</button></a>
                </div>
            </div>
            <div class="item">
                <img src="images/deal2.jpg" alt="">
                <div class="content">
                    <h3>new headphone</h3>
                    <p>upto 25% off on first purchase</p>
                    <a href="#"><button class="btn">explore</button></a>
                </div>
            </div>
            <?php
            
                $rrp = randomCat();
                // echo $cat[$rrp];
                
        //    echo ' </span></h1><div class="section-body image-container">';
             
            
               GetAds($conn, $cat[$rrp], "medium", 10, 1, true); 
            ?>
        </div>
    
    </div>
</div>

    <section class="caresoul">

    </section>
    <section class="AdsMediumSection gallery ">
        
        <h1 class="heading">
            <span>
                <!-- clothing -->
                <?php
                $rrp = randomCat();
                echo $cat[$rrp];
                
           echo ' </span>
    </h1>
        <div class="section-body image-container">';
             
            
               GetAds($conn, $cat[$rrp], "medium", 10, 1, false); 

            ?>
        </div>

            
            
    </section>

     <section class="AdsMediumSection gallery">
        <h1 class="heading">
            <span>
                <?php
                $rrp = randomCat();
                echo $cat[$rrp];
                
           echo ' </span></h1><div class="section-body image-container">';
             
            
               GetAds($conn, $cat[$rrp], "medium", 10, 1, false); 

            ?>

            
        </div> 
    </section>
    
   
<?php
        // GetAds($conn, "All", 15);
        // GetAds($conn, "cheap", 1);
?>

<?php
    include "footer.php";
?>