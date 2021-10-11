    <?php
        session_start();
        if (isset($_SESSION['owner'])) {
            # code...
            // header('Location:home.php');
        }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/lgogin.css">

        <link rel="stylesheet" href="../css/fontawesome-free-5.15.4-web/css/all.min.css">
        <script src="../scripts/jquery-3.6.0.min.js"></script>
        <title>Document</title>
    </head>
    <body onload="switchForm('login')">
        <header class="">
        <div class="top-header">
                <div class="header-logo">
                <i class="fa fa-shopping-bag"></i> Txmart
            </div>
            <nav>
                <a class="fas fa-back"></a>
            </nav>
        </div>
        <div class="action-btn-ctn" >
            <div class="act-btn-brd">
                <button class="action-btn">Login</button>
                </div>
            <div class="act-btn-brd">
                <button class="action-btn" onclick="switchForm('signup')">Signup</button>
            </div>
                
        </div>
        </header>
    <main class="">

            
        
            <section class="login-signup-wrapper">
                <div class="cc-act-btn">
                        <div class="login-btn">LOGIN</div>
                        <div class="sign-up-btn">CREATE ACCOUNT</div>
                </div>
            <div class="wrapper login-box">
                <form action="incs/login.inc.php" method="post">
                    <label for="" class="">Username</label>
                    <input type="text" class="form-control" name="username">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="">
                    <button name="login" value="Login">LOGIN</button>
                    <div class="rem-me">
                        <span><input type="checkbox" name="remMe" id=""> Remember me</span> <a href="http://">Forgot your password?</a>
                    </div>
                    <div class="cre-ac">
                        <label for="">New to Txmart</label>
                        <a href="incs/changepwd.inc.php">CREATE AN ACCOUNT</a>
                    </div>
                </form>
                </div>
            
                <div class="wrapper sign-up-box" id="sign-up-box">
            
                    <form action="incs/signup.inc.php" method="post">
                    <label for="fullname" class="">FullName</label>
                    <input type="text" name="fullname" id="fullname">
                    <label for="username" class="">Business Name</label>
                    <input type="text" name="username" id="username">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" min="15" >
                    <label for="nationality">Region</label>
                    <select name="nationality" id="">
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="Akwa Ibom">Akwa Ibom</option>
    \
                    </select>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="">
                    <label for="phone">Telephone</label>
                    <input type="tel" name="phone" id="">
                    <label for="category">Category</label>
                    <select name="category" id="">
                        <option value="Doctor">Doctor</option>
                    </select>
                    <input type="checkbox" value='agreeed'>:Do you agree with our terms?
                        <button type="submit" name="signup" value="Signup">
                            Signup
                        </button>
                </form>
                </div>
            </section>
        
    </main>
    </body>
    <script>
        var loginBtn = document.querySelector(".login-btn");
        var SignupBtn = document.querySelector(".sign-up-btn");
        var loginform = document.querySelector(".login-box");
        var signupform = document.querySelector("#sign-up-box");

        SignupBtn.addEventListener("click", function(){
            switchForm('signup');
        });

        loginBtn.addEventListener("click", function(){
            switchForm('login');
        });


        function switchForm(form){
            // let style = "";
            switch (form) {
                case "login":
                    loginBtn.style = "border-bottom:solid 2px var(--main-color-1);";
                    SignupBtn.style = "border-bottom:none;";
                    loginform.style ="display:flex;";
                    signupform.style = "display:none;border:none;";
                    console.log("loginform");
                    break;
                    case "signup":
                    SignupBtn.style = "border-bottom:solid 2px var(--main-color-1);";
                    loginBtn.style = "border-bottom:none;";
                    signupform.style = "display:flex;";
                    loginform.style = "display:none;border:none;";
                    console.log("signupform");

                    break;
            
                default:
                    break;
            }
        };
    </script>
    </html>