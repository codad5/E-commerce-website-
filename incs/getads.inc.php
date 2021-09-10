<?php

   function adsExists($conn, $Adsid){
          $sql = "SELECT * FROM ads WHERE Adssn = ?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("location:../home.php?er2");
                exit();
            }

            mysqli_stmt_bind_param($stmt, "s", $Adsid);
            mysqli_stmt_execute($stmt);

            $resultData = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($resultData)) {
                return $row;
            }

            else {
                $result = false;
                return $result;
            }

            mysqli_stmt_close($stmt);
            }

