<?php
    include_once 'header.php';
    if (!isset($_POST['search_word'])) {
        # code...
        header('Location:index.php');

    }
    $keyword = filter_var($_POST['search_word'], FILTER_SANITIZE_STRING);
    $sql =  "SELECT * FROM ads WHERE paid = 'paid' OR adsCat LIKE '%$keyword%' OR Adsdes LIKE '%$keyword%' OR AdsName OR '%$keyword%' ;";
    $result = mysqli_query($conn, $sql);
    $numrow = mysqli_num_rows($result);

    if ($numrow > 0) {
        # code...
        while ($row = mysqli_fetch_assoc($result)) {
            # code...
            echo $row['AdsName'];
        }
    }
    else{
        echo "No p";
    }
?>