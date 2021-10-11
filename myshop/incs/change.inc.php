<?php
session_start();
if (!isset($_SESSION['userd'])) {
    # code...
    header("../");
}

if (isset($_POST['submit'])) {
    # code...
    $busname  = $_POST['busname'];
$fullname = $_POST['fullname'];
$state = $_POST['state'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$CbusN = $_SESSION['user'];

require_once "dbh.inc.php";
require_once "function.inc.php";
// echo "encrypted";

$NotEmpty = false;
foreach ($_POST as $key) {
    # code...
    if (empty($key)) {
        echo "<span>Fill in all Field</span>";
        exit();
        $NotEmpty = true;
        

      
}
elseif (!filter_var($email, FILTER_SANITIZE_STRING)) {
    # code...
    echo "<span>Write In a valid email address</span>";
    exit();
}


}
if (ChangeDetails($conn, $busname, $fullname, $state, $email, $phone, $CbusN)) {
    # code..

    echo "<span>Your Details have been updated</span>";
}
elseif (ChangeDetails($conn, $busname, $fullname, $state, $email, $phone, $CbusN) === 1) {
    # code...
    $_SESSION['user'] = $busname;
    echo "This Details are already in use";

}
else {
    echo "<span>An Unknown Error has occurred</span>";
}


}
else {
    echo "An Unknown Error occurred. Please try again";
}

?>