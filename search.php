<?php
    
    if (isset($_POST['search_word']) || isset($_GET['search_word'])) {
        # code...
        

    }
    else{
        header('Location:index');
        exit();
    }
    
    include_once 'header.php';
    if (isset($_POST['search_word'])) {
        # code...
        $keyword = filter_var($_POST['search_word'], FILTER_SANITIZE_STRING);
    }
    else{
        $keyword = filter_var($_GET['search_word'], FILTER_SANITIZE_STRING);
    }
    
    $sql =  "SELECT * FROM ads WHERE paid = 'paid' AND adsCat LIKE '%$keyword%' OR Adsdes LIKE '%$keyword%' OR AdsName LIKE'%$keyword%' LIMIT 10;";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);

    ?>
    <script>

        $(document).ready(function() {
            var searchcount = 10;
            $(".loadbtn").click(function() {
                searchcount = searchcount + 7;
                keyword = "<?php echo $keyword; ?>";
                $(".section-body").load("incs/search.inc.php", {
                    newsearchcount: searchcount,
                    keyword: keyword
                });
            });
        });
    </script>
    <section class="AdsMediumSection gallery">
        <h1 class="heading">
                <span>
                    Search Results of : <?php echo $keyword; ?>
                </span>
        </h1>
        <div class="section-body image-container">
           

            
            
    
<?php
    if ($numrow > 0) {
        # code...
        while ($row = mysqli_fetch_assoc($result)) {
            # code...
            echo "<div class='box phone'>
                            <div class='image'>
                                <img src='adsowner/img/gallery/".$row['AdsImg1']."' alt='".$row['adsCat']."'>
                            </div>
                            <div class='info'>
                                <a href=show/".$row['Adssn']."><h3>".$row['AdsName']."</a></h3>
                                <div class='subInfo'>
                                    <strong class='price'><span style='text-decoration:line-through;'>N</span> ".$row['price']."</strong>
                                    <div class='stars'>
                                    <button class='showmore' onclick='setid(`".$row['Adssn']."`)'>Show More</button>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star-half'></i>
                                    </div>
                                </div>
                            </div>
                        </div>";
        }
        echo '</div><button class="loadbtn" type="button">Load More</button>';
    }
    else{
        echo "No Seacrh based on ".$keyword;
    }
?>
        
    

        </section>
        <?php
    include_once 'footer.php';

        ?>