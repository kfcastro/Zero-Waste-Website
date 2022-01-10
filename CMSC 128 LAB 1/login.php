<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Go Zero Waste | Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&family=Raleway:ital,wght@0,200;0,400;0,600;0,700;1,100;1,200;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <!---------- HEADER SECTION  ---------->
    <header>
        <img class="logo" src="images/WEBLOGO.png" alt="Go Zero Waste Logo">
        <nav>
            <ul class="sign_nav_links">
                    <li><a href="index.php" target="_blank">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">TAKE ACTION</a></li>
            </ul>
        </nav>
        <a class="cta" href="signin.php" target="_blank"><button>SIGN IN</button></a>
    
    </header>
    
    <!---------- LOGIN FORM SECTION  ---------->
    <section class="login_form">
        <div class="login_image">
            <img src="images/login-image.png" alt="Login">
        </div>
        
        <!---------- LOGIN FORM  ---------->
        <div class="form_div">
            <form action="includes/login.inc.php" method="POST">
                <h2>LOGIN</h2>
                <!---------- ERRORS  ---------->
                <?php
                    if (isset($_GET['error'])){
                        
                        if($_GET['error'] == "no-user"){
                            echo '<p class="error">User does not exist.</p>';
                        }
                        else if ($_GET['error'] == "wrong-password"){
                            echo '<p class="error">Wrong password.</p>';
                        }
                        else if (($_GET['error'] == "no-user") && ($_GET['error'] = "wrong-password")){
                            echo '<p class="error">User does not exist and wrong password.</p>';
                        }
                    }
                ?>

                <label>Username</label>
                <input type="text" name="user_name" placeholder="Username" required><br>

                <label>Password</label><br>
                
                <div class= "password-box">
                    <input type="password" name="password" placeholder="Password" id="myInput" required>
                    
                    <!---------- once clickED, it will run myFunction in script---------->
                    <span class="eye" onclick="myFunction()">
                        <img id="hide1" src="images/eye-regular.svg" class="far fa-eye-slash" alt="hidden"><br>
                        <img id="hide2" src="images/eye-slash-regular.svg" class="far fa-eye-slash" alt="hidden"><br>
                    </span>
                </div>
                
                <button type="submit" class="cta-button" name="submit">Login</button>
                <p>No account? <a href="signin.php" target="_blank">Create Account</a></p>
                
            </form>
        </div>
  
    </section>

    <!---------- SCRIPT SECTION  ---------->
    <script>
        function myFunction(){
            var x = document.getElementById("myInput");
            var y = document.getElementById("hide1");   // shown password icon eye-regular
            var z = document.getElementById("hide2");   // hidden password icon eye-slash

            // for password display
            if(x.type === 'password'){
                x.type = "text";                // show the text of password
                y.style.display = "block";      // display shown password icon eye-regular
                z.style.display = "none";       // don't display the eye-slash
            }else{
                x.type = "password";            // hide password
                y.style.display = "none";       // don't display the eye-regular
                z.style.display = "block";      // display hidden password icon eye-slash
            }
        }
    </script>

</body>
</html>