<?php


    include "dbh.inc.php";
    require "function.inc.php";
    $ida = $_POST['ida'];
    // $keyword = $_POST['keyword'];
    
    $sql =  "SELECT * FROM ads WHERE paid = 'paid' AND Adssn = '".$ida."';";
    $result = mysqli_query($conn, $sql);
    
    $numrow = mysqli_num_rows($result);
    if ($numrow > 0) {
        # code...
        $row = mysqli_fetch_assoc($result);;
    $user = getadsOwner($conn, $row['userName']);
    $cats = getTags($row['adsCat']);

            # code...
            echo "<div class='box phone modalshow'>
                            <div class='image'>
                                <img src='adsowner/img/gallery/".$row['AdsImg1']."' alt='".$row['adsCat']."'>
                            </div>
                            <div class='info'>
                                <h3>".$row['AdsName']."</h3>
                                <div class='subInfo'>
                                    <strong class='price'><span style='text-decoration:line-through;'>N</span> ".$row['price']."</strong>
                                    <div class='stars'>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star'></i>
                                        <i class='fas fa-star-half'></i>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class='modal-des'>".$row['adsCat']." <span>".$cats."</span></div>
                        <div class='modal-seller-details'>
                                <div class='seller-detail-modal modal-full-bar' >Seller Info</div>
                                <div class='seller-detail-modal modal-full-bar' >FullName: ".$user['fullName']."</div>
                                <div class='seller-detail-modal' >Username: ".$user['userName']."</div>
                                <div class='seller-detail-modal' >Business: ".$user['prof']."</div>
                                <div class='seller-detail-modal' >Telephone: ".$user['phone']."</div>
                                <div class='seller-detail-modal' >Region: ".$user['nationality']."</div>



                        </div>
                        <div class='modal-Contact'>
                            <a href='show/".$row['Adssn']."'>View Full</a>
                            <a href='tel:".$user['phone']."'>Call Seller</a>
                            <a href='mailto:".$user['email']."?subject=i saw this at'>Email Seller</a>
                            <a href='shop/".$user['userName']."'>View Shop</a>


                        </div>";
        
    }
    else{
        echo "No thing Avaliable".$ida."Hello";
    }
   
?>