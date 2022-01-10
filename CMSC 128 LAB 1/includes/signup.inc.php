<?php

// if submit button was clicked
// if there's a post method
if(isset($_POST['submit'])){

    // connect to database
    require 'dbconnect.inc.php';

    // fetch info from form
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    // error handlers
    // no need to check if fields are empty since 'required' was included in html
    // check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signin.php?error=invalid-email&user_name=".$username);
        exit();

    // check if email and password is valid
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)){
        header("Location: ../signin.php?error=invalid-email-and-password");
        exit();

    // check password is valid
    } else if (!preg_match("/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $password)){
        header("Location: ../signin.php?error=invalid-password&email=".$email);
        exit();
    
    // check if username already exists
    } else{
        // for secure and avoid overwrite '?'
        $sql = "SELECT user_name FROM users WHERE user_name=?";
        // prepare statement
        $stmt = mysqli_stmt_init($conn);

        // check if mysqli_stmt_init($conn) fails
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signin.php?error=sqlerror");
            exit();

        //  grab data we got from query
        } else {
            // take input from user and send later on the database, s=string
            mysqli_stmt_bind_param($stmt, "s", $username);

            // execute data from user in database
            mysqli_stmt_execute($stmt);

            // get result from database and store back in variable stmt
            mysqli_stmt_store_result($stmt);

            // check matches in the database
            $checkResult = mysqli_stmt_num_rows($stmt);

            // check if username already exists
            if($checkResult > 0){
                header("Location: ../signin.php?error=user-already-exists&email=".$email);
                exit();

            // signup user into website
            } else{
                // 3 placeholders for security  ? ? ?
                $sql = "INSERT INTO users (user_name, email, password)
                        VALUES (?, ?, ?)";
                // prepare statement
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../signin.php?error=sqlerror");
                    exit();
        
                //  check in database
                } else {
                    // Bind: take input from user and send later on the database, s=string
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

                    // execute data from user and sql
                    mysqli_stmt_execute($stmt);

                    // signup successful
                    header("Location: ../signin.php?signup=success");
                    exit();
                }

            }

        }

    }
    // close off statements
    mysqli_stmt_close($stmt);

    // close connection
    mysqli_close($conn);
}

else{
    // redirect user to sign up page if they don't click sign up button or had an illegal access to this page
    header("Location: ../index.php");
    exit();
}