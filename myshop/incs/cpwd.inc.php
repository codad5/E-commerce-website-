<?php
    session_start();
    require 'dbh.inc.php';
    require 'function.inc.php';
    $Cuser = $_SESSION['user'];
    if (isset($_POST['Cmp'])) {
        # code...
        echo "<span>CHANGING.....</span>";
        $newpwd = $_POST['Npwd'];
        $Cpwd = $_POST['Cpwd'];
        $Rpwd = $_POST['Rpwd'];

        $errorsame = false;
        $verOld = false;

        if ($newpwd != $Rpwd) {
            # code...
            echo "<span>password are not same</span>";
            $errorsame = true;
            header("location:../cpwd.php?msg=changepass&error=passnotsame");
        }
        else {
            # code...
            $sql = "SELECT * FROM users WHERE userName = '".$Cuser."'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if (empty($row['pwd'])) {
                # code...
                if (change_password($conn, $newpwd, $Cuser)) {
                    # code...
                    // echo "TRUE AND DONE";
                    header("location:../index.php");
                }
                
            }
            
            else if (password_verify($Cpwd, $row['pwd'])) {
                // change_password($conn, $newpwd, $Cuser);
                if (change_password($conn, $newpwd, $Cuser)) {
                    # code...
                    // echo "TRUE AND DONE";
                    header("location:../index.php");
                }
                else{
                   
                echo "<span>Error</span>";
                $verOld = true;
                header("location:../cpwd.php?msg=changepass&error=wrongpassword");
            
                }
            }
            else{
                header("location:../cpwd.php?msg=changepass&error=emptyinput");
            }
            

        }
    }
    else {
        echo "<span>Error</span>";
        header("location:../");
    }
 ?>

<!-- <script>
    $("#Npwd, #Cpwd, #Rpwd").removeClass("input-error");
    var errorsame = "<?php echo $errorsame; ?>";
    var verOld = "<?php echo $verOld; ?>";

    if (errorsame == true) {
        $(".form-message").val("Pwd not same");
        
    }
    if (verOld == true) {
        $("#Npwd, #Cpwd, #Rpwd").val('');
        $(".form-message").val("Pwd not same");
    }
    if (errorsame == false && verOld == false) {
        $(".form-message").val("Sucess Click here to proceed <a href='index.php'>Continue</a>");
    }
</script> -->

HELLO