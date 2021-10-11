<?php
    include_once "header.php";

?>

<section class="hero">

</section>

<section class="business-detail-minor">
        <details>
            <summary>
               View business Description
            </summary>
            <div class="detail-body">
            <h2>Tap details to edit</h2>
                <div class="details-form-cnt">
                    <form action="incs/change.inc.php" method="post" class="cdetail">
                        <div class="detail-input-container">
                            <label for="">Business Name:</label>
                            <input type="text" name="busname" id="busname" value="<?php echo $userd['userName']; ?>">
                        </div>
                         <div class="detail-input-container">
                            <label for="">Owner Full-Name:</label>
                            <input type="text" name="fullname" id="fullname" value="<?php echo $userd['fullName']; ?>">
                        </div>
                        <div class="detail-input-container">
                            <label for="">Your Age:</label>
                            <input type="text" name="age" id="" value="<?php echo $userd['age']; ?>" readonly>
                        </div>
                        <div class="detail-input-container">
                            <label for="">Your Nationality:</label>
                            <select name="state"  id="state"  class="">
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>

                </select>
                        </div>
                         <div class="detail-input-container">
                            <label for="">Your Email:</label>
                            <input type="text" name="email" id="email" value="<?php echo $userd['email']; ?>" >
                        </div>
                         <div class="detail-input-container">
                            <label for="">Your Phone:</label>
                            <input type="text" name="phone" id="phone" value="<?php echo $userd['phone']; ?>" >
                        </div>
                        <div class="detail-input-container">
                            <label for="">Business Category:</label>
                            <select name="profession" id="" >
                                <option value="Mid-wife">Mid-wife</option>
                                <option value="Doctor">Doctor</option>
                            </select>
                        </div>
                        <button type="submit" name="save" id="save">Submit</button>
                        <div class="errormsg">

                        </div>
                    </form>
                </div>
            </div>
        </details>
    </section>

<section class="add-prd-cnt">
    
    <div class="form-cnt">
        <form action="incs/uploadads.inc.php" method="post" enctype="multipart/form-data" class="">
            
                <div class="form-input-wrapper">
                    <input type="text" name="adsName" id="" >
                    <label for="adsName">Ads Name</label>
                </div>
            <div class="form-input-wrapper">
                
                <textarea name="adsDes" id="adsDes" cols="30" rows="10"></textarea>
                <label for="adsDes">Ads Description</label>
            </div>
            <div class="form-input-wrapper">
                <input type="text" name="adsCat">
                <label for="AdsCat">AdsCat</label>
            </div>
            <div class="form-input-wrapper">
                <input type="number" name="Price" id="">
                <label for="PrdPrice">Your Price</label>
            </div>
            <div class="form-input-wrapper not-text-input">
                <select name="Adsclass" id="">
                    <option value="Xbig">Xbig --#700</option>
                    <option value="big">big --#600</option>
                    <option value="medium">Medium --#400</option>
                    <option value="Smail">small --#300</option>
                    <option value="Xsmall">Xsmall --#100</option>
                </select>
            </div>
            <div class="form-input-wrapper  not-text-input">
                <input type="file" maxlength="3" name="adsImage1"  multiple="3" max="3" >
                
            </div>
            <div class="form-input-wrapper not-text-input">
                <input type="file" maxlength="3" name="adsImage2"  multiple="3" max="3" >
            </div>
            <div class="form-input-wrapper not-text-input">
               
                <input type="file" maxlength="3" name="adsImage3"  multiple="3" max="3" >
            </div>
            <div class="form-input-wrapper form-submit">
            <button type="submit" name="SubmitAds" value="Submit Ads" id="savePro">Submit</button>
            </div>
        </form>
    </div>
</section>
    

        <?php
                 
         
            $sql = "SELECT * FROM ads WHERE userName = '".$username."';";
            
            $resultmsg = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($resultmsg);
            
            //to know number of new msg

            if ($resultcheck > 0) {
                
            while ($row = mysqli_fetch_assoc($resultmsg)) {
               
            }
            }
        
             
            
    
        

        
    ?>

    

    

  <?php
  include_once "footer.php";
  ?>