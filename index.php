<?php include "header.php";
?>
    
    <section class="caresoul">

    </section>
    <section class="AdsMediumSection">
        <div class="section-title">
            <span>
                clothing
            </span>
        </div>
        <div class="section-body">
            <?php 
               GetAds($conn, "All", "medium", 100); 

            ?>

            
            
    </section>

     <section class="AdsMediumSection">
        <div class="section-title" style="direction: ltr;">
            <span>
                Say Cheap:
            </span>
        </div>
        <div class="section-body">
            <?php 
               GetAds($conn, "chea", "medium", 100); 

            ?>

            
            
    </section>
   
<?php
        // GetAds($conn, "All", 15);
        // GetAds($conn, "cheap", 1);
?>

<?php
    include "footer.php";
?>