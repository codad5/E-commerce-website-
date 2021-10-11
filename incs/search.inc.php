
    <?php
    include "dbh.inc.php";
    $newsearchcount = $_POST['newsearchcount'];
    $keyword = $_POST['keyword'];
    
    $sql =  "SELECT * FROM ads WHERE paid = 'paid' AND adsCat LIKE '%$keyword%' OR Adsdes LIKE '%$keyword%' OR AdsName LIKE '%$keyword%' LIMIT $newsearchcount;";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);
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
    }
    else{
        echo "No Seacrh based on ".$_POST['search_word'];
    }
?>
    

<script>
        var ida = "";
        function setid(id) {
            ida = id;
            console.log(id);
            document.querySelector(".ModalBox").style.display = "inline-block";
        }
        $(document).ready(function() {
            
            $(".showmore").click(function() {
                
                
                $(".ModalBox").load("incs/getModal.inc.php", {
                    ida: ida
                });
            });
        });

        window.addEventListener("scroll", function(){

            document.querySelector(".ModalBox").style.display = "none";

        });
    </script>