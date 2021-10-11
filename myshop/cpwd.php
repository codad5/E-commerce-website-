<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        # code...
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../scripts/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>

<main class="">

    <form action="incs/cpwd.inc.php" method="POST">
        Current Password: <input type="password" name='Cpwd' id="Cpwd">
         <br>
         New Password: <input type="password" name="Npwd" id="Npwd">
         <br>
         Repeat Password:<input type="password" name="Rpwd" id="Rpwd">
         <br>
         <input type="submit" value="SUBMIT" name="Cmp" id="Cmp">
    </form>
    <p class="form-message"></p>
</main>
<!-- <script>
    $(document).ready(function() {
            $("form").submit(function(event) {
                    event.preventDefault();
                    var Cpwd = $("#Cpwd").val();
                    var Npwd = $("#Npwd").val();
                    var Rpwd = $("#Rpwd").val();
                    $(".form-message").load("incs/cpwd.inc.php", {
                        Cpwd: Cpwd,
                        Npwd: Npwd,
                        Rpwd: Rpwd,
                        Cmp: Cmp
                    });
            });
    });
</script> -->
    
</body>
</html>