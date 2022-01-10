<?php

// check if we have a name atrribute called submit
if(isset($_POST['submit'])){

    // connect to database
    require 'dbconnect.inc.php';

    // fetch info from form
    $username = $_POST['user_name'];
    $password = $_POST['password'];

    // no need to check if fields are empty since 'required' was included in html

    // check if username and password is in database
    // select all from the users table
    $sql = "SELECT * FROM users WHERE user_name=?;";

    // prepare statement by running sql in the database and check if this has any errors
    $stmt = mysqli_stmt_init($conn);

    // prepare statement by running sql in the database and check if this has any errors
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../login.php?error=sqlerror");
        exit();

    //  grab data we got from query
    } else {
        // take input from user and send later on the database, s=string
        mysqli_stmt_bind_param($stmt, "s", $username);

        // execute data from user and sql, and like bind it with parameters above
        mysqli_stmt_execute($stmt);

        // get result from database and insert in variable result
        $result = mysqli_stmt_get_result($stmt);

        // if we get result from database, fetch the data from $result and store in associative array for php
        if ($row = mysqli_fetch_assoc($result)){

            // if we have the username, then here we get the password from the database and compare it to the user's input
            // take user's input password and get the password from the database, and compare
            if ($password !== $row['password']){
                header("Location: ../login.php?error=wrong-password");
                exit();

            } else if ($password == $row['password']) {
                
                session_start();

                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['user_name'];

                header("Location: ../account.php");
                exit();

            } else {
                // otherwise
                header("Location: ../login.php?error=wrong-password");
                exit();
            }

        } else{
            header("Location: ../login.php?error=no-user");
            exit();
        }
    }
    // close off statements
    mysqli_stmt_close($stmt);

    // close connection
    mysqli_close($conn);
}

else{
    // illegal access of this page will direct to index page
    header("Location: ../index.php");
    exit();
}