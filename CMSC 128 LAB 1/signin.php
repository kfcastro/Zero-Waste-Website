<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Go Zero Waste | Sign In</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&family=Raleway:ital,wght@0,200;0,400;0,600;0,700;1,100;1,200;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <!---------- HEADER SECTION  ---------->
    <header class="signup-header">
        <img class="logo" src="images/WEBLOGO.png" alt="Go Zero Waste Logo">
        <!---------- NAV BAR  ---------->
        <nav>
            <ul class="sign_nav_links">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">TAKE ACTION</a></li>
            </ul>
        </nav>
        <a class="cta" href="#"><button>SIGN IN</button></a>
    </header>
    
    <!---------- SIGNUP FORM SECTION  ---------->
    <section class="login_form">
        <div class="login_image">
            <img src="images/signup-image.png" alt="Signup">
        </div>
        <!---------- SIGN UP FORM  ---------->
        <div class="form_div">
            <form action="includes/signup.inc.php" method="POST">
                <h2>SIGN UP</h2>
                <!---------- ERRORS  ---------->
                <?php
                    if (isset($_GET['error'])){
                        if ($_GET['error'] = "invalid-email"){
                            echo '<p class="error">Invalid email.</p>';
                        }
                        else if ($_GET['error'] = "invalid-email-and-password"){
                            echo '<p class="error">Invalid email and password.</p>';
                        }
                        else if ($_GET['error'] = "invalid-password"){
                            echo '<p class="error">Invalid password.</p>';
                        }
                    } else if (isset($_GET['signin'])){
                        if ($_GET['signin'] = "success"){
                            echo '<p class="success">Signed up successfully!</p>';
                        }
                    }
                ?>

                <label>Username</label>
                <input type="text" name="user_name" placeholder="Username" required><br>

                <label>Email</label>
                <input type="text" name="email" placeholder="name@mail.com" required><br>

                <label>Password</label>
                <h3>(at least 8 characters, containing at least 1 capital letter, 1 number, and 1 symbol)</h3>
                
                <div class= "password-box">
                    <input type="password" name="password" placeholder="Password" id="myInput" required>

                    <!---------- once clickED, it will run myFunction in script---------->
                    <span class="eye" onclick="myFunction()">
                        <img id="hide1" src="images/eye-regular.svg" class="far fa-eye-slash" alt="hidden"><br>
                        <img id="hide2" src="images/eye-slash-regular.svg" class="far fa-eye-slash" alt="hidden"><br>
                    </span>
                </div>

                <button type="submit" class="cta-button" name="submit">Sign Up</button>
                <p>Already have an account? <a href="login.php" target="_blank">Login</a></p>

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