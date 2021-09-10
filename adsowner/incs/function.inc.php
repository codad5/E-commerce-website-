<?php


function invalidUid($username){
    
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    $result = true;
  }
    else {
      $result = false;

    }
    return $result;
  }

  function emptyInput($username, $fullname, $age, $profession, $email, $phone){
    if (empty($username) || empty($phone) || empty($email) || empty($age) || empty($fullname) || empty($profession)) {
        # code...
        return true;
    }
    else {
      # code...
      return false;
    }
  }

function invalidEmail($email){
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $result = true;

  }
  else {
    $result = false;

  }
  return $result;
}


function checkUid($conn, $username, $email, $phone){
  $sql = "SELECT * FROM users WHERE userName = ? OR email = ? OR phone = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location:../home.php?er2");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sss", $username, $email, $phone);
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




function  createUser($conn, $fullname, $email, $username, $phone, $age, $nationality, $profession) {
  $sql = "INSERT INTO users (fullName, email, userName, phone, age, nationality, prof) VALUES (?, ?, ?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: index.php?error=stmtfailed");
    exit();
  }


  mysqli_stmt_bind_param($stmt, "sssssss", $fullname, $email, $username, $phone, $age, $nationality, $profession);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  //  header("location: index.php?error=none");
  //  exit();

  return true;


}

function createusertable($conn, $name){
        $sql = "CREATE TABLE ".$name." (
            adsId int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
            AdsName varchar(450) NOT NULL,
            Adssn varchar(850) NOT NULL,
            AdsDes varchar(850) NOT NULL,
            AdsCat varchar(850) NOT NULL,
            adsImg1 varchar(450) NOT NULL,
            adsImg2 varchar(450) NOT NULL,
            adsImg3 varchar(450) NOT NULL,
            date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        );";
          $resultfinal = mysqli_query($conn, $sql);
          return $resultfinal;
}











function uploadAds($conn, $adsName, $adsDes, $adsCat, $user, $adsclass, $price){
  $adsId = uniqid('Jiads', true);
      $sql = "INSERT INTO ads (AdsName,userName, Adsdes, AdsCat, Adssn, class, price) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ../home.php?error=stmtfailEd");
          exit();
        }

    
        else{
          
        mysqli_stmt_bind_param($stmt, "sssssss", $adsName, $user, $adsDes, $adsCat, $adsId, $adsclass, $price);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
          
        
          if (count($_FILES) >= 1) {
                # code...
                $files = $_FILES;
               uploadImageGen($conn, $adsId, $files);
                
                
                
            }   

          }

          
       return true;
}



function uploadImageGen($conn, $adsId, $files){



    $n = 1;

      foreach ($files as $file) {

        # code...
        
        echo "uploadImage";
            $fileName =  $file['name'];
      $fileTmpName =  $file['tmp_name'];
      $fileSize =  $file['size'];
      $fileError =  $file['error'];
      $fileType =  $file['type'];

      $fileExt = explode('.', $fileName);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array('jpg', 'jpeg', 'png', 'gif');
      $fileNameNew = "";
      
        # code...
      
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
          
            if ($fileSize < 10000000) {
              $fileNameNew = uniqid('', true).".".$fileActualExt;
              $fileDestination = "../img/gallery/".$fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);
              $sql = "UPDATE ads set adsImg".$n."='".$fileNameNew."' WHERE Adssn='".$adsId."';";
              mysqli_query($conn, $sql);
              
              $n++;

              if ($n >= 3) {
                # code...
                header("Location:../home.php?error=sucess");
              }
              
            //   uploadtodb($conn, $prdname, $fileNameNew, $prdsize, $prdprice, $prdcat, $prdsex, $prddis, $prdqty, $prdaddedby, $prdid);


            }
            else {
              header("location:../admin/?filetobig");
            }
        }

        else {
          header("location:../admin/?fileerror");
        }
      }
      else {
        header("location:../home.php?fileerror=wrongfiletype");
      }
    



      }
      }

function login($conn, $username, $pwd){
  $uidExist = checkUid($conn, $username, $username, $username);
  if ($uidExist === false) {
    # code...
    
  }
  $pwdHashed = $uidExist['pwd'];
  $checkpwd = password_verify($pwd, $pwdHashed);
  if ($checkpwd === false) {
    # code...
    header("location:../?wrongLogin");
  }

  else {
    session_start();
    $_SESSION['user'] = $uidExist['userName'];
    $_SESSION['phone'] =$uidExist['phone'];
    $_SESSION['email'] =$uidExist['email'];
    header("Location:../home.php");
  }
}

     

  