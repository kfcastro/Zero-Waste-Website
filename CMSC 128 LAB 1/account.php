<?php 
    session_start();
    if(isset($_POST["submit"])){
        $_SESSION['username'] = $_POST["user_name"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Go Zero Waste | Account</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&family=Raleway:ital,wght@0,200;0,400;0,600;0,700;1,100;1,200;1,500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="sessiontimeout.js"></script>

</head>
<body>

<body>
    <!---------- HEADER SECTION  ---------->
    <header>
        <img class="logo" src="images/WEBLOGO.png" alt="Go Zero Waste Logo">
        <nav>
            <ul class="sign_nav_links">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">TAKE ACTION</a></li>
            </ul>
        </nav>
    
    </header>

    <!---------- WELCOME SECTION  ---------->
    <section class="welcome_section">
        <div class="account_image">
                <img src="images/account-image.png" alt="Welcome">
        </div>
        <div class="account">
            <h2>Login successfully. <br>Welcome, @<?php echo $_SESSION['username']?>!</h2>
            <a class="link-button" href="logout-normal.php">LOGOUT</a>
        </div> 
    </section>
    
</body>
</html>
