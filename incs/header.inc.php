<?php
function GetAds($conn, $cat, $class, $num, $ran, $place){

        $dql = "SELECT *  FROM ads WHERE paid = 'paid';";
        $res = mysqli_query($conn, $dql);
        $Nor = mysqli_num_rows($res);
            // $ran = 0;
            $ran = random_int(45, 95)/100;
            $ran = $ran * $Nor;
            $ran = $Nor - $ran;
        
        // $ran = random_int($ran, $Nor);
        
        

        if ($cat == 'All') {
            $sql = "SELECT * FROM ads WHERE paid = 'paid' AND AdsId BETWEEN ".$ran." AND ".$Nor."  AND class = '".$class."' LIMIT ".$num.";";
        }
        else {
            $sql = "SELECT * FROM ads WHERE paid = 'paid' AND AdsId BETWEEN ".$ran." AND ".$Nor." AND adsCat LIKE '%$cat%' AND class = '".$class."' LIMIT ".$num.";";
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

                        if ($place) {
                            # code...
                            echo ' <div class="item">
                <img src="adsowner/img/gallery/'.$row['AdsImg1'].'" alt="">
                <div class="content">
                    <h3>'.$row['AdsName'].'</h3>
                    <p>upto 25% off on first purchase</p>
                    <a href="#"><button class="btn">explore</button></a>
                </div>
            </div>';
                        }
                        else{
                    
                    switch ($class) {
                        case 'Xbig':
                            # code...

                            echo "<div class='XbigAds'>

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
                        case 'medium':
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
                            break;
            //             case 'medium':
            //                 # code...
            //                 echo "<div class='mediumAds'>

            //     <div class='adsImg'>
            //         <img src='adsowner/img/gallery/".$row['AdsImg1']."' alt='".$row['adsCat']."'>
            //     </div>
            //     <div class='adsWriteup'>
            //         <span class='name'>
            //                 ".$row['AdsName']."
            //         </span>
            //         <span class='price'>
            //             # ".$row['price']."
            //         </span>
            //     </div>
            // </div>";
            //                 break;
                        
                        default:
                            # code...
                            break;
                    }
                    
                    // }
                    // $n++;
                }
            }
                }

            }

        
        

        
   
