<?php
    session_start();
    if (isset($_SESSION['user'])) {
        # code...
        header('Location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
   <main class="">
        <div class="wrapper sign-up-box">
        
            <form action="incs/signup.inc.php" method="post">
            <label for="fullname" class="">FullName</label>
            <input type="text" name="fullname" id="fullname">
            <label for="username" class="">Username</label>
            <input type="text" name="username" id="username">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" min="15" >
            <label for="nationality">Nationality</label>
            <input type="text" name="nationality" id="nationality">
            <label for="email">Email</label>
            <input type="email" name="email" id="">
            <label for="phone">Telephone</label>
            <input type="tel" name="phone" id="">
            <select name="profession" id="">
                <option value="Doctor">Doctor</option>
            </select>
            <input type="checkbox" value='agreeed'>:Do you agree with our terms?
                <button type="submit" name="signup" value="Signup">
                    Signup
                </button>
        </form>
    </div>

    <div class="login-box">

        <form action="incs/login.inc.php" method="post">
            <label for="" class="">Username</label>
            <input type="text" class="form-control" name="username">
            <label for="Password">Password</label>
            <input type="password" name="Password" id="">
            <button name="login" value="Login">LOGIN</button>
        </form>
    </div>
   </main>
</body>
</html>