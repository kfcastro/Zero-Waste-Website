<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Go Zero Waste</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&family=Raleway:ital,wght@0,200;0,400;0,600;0,700;1,100;1,200;1,500&display=swap" rel="stylesheet">
   <style>
    body{
        background: white;
        font-size: 36px;
        font-family: 'Poppins', sans-serif;
        color: #749100;
        text-align: center;
        margin: 10px 50px 10px 50px ;   
    }
    h3{
        font-size: 26px;
        font-family: "Railway", sans-serif;
        font-weight: 100;
        padding-top: 20px;
        border-top: 1px solid #749100;
    }
   </style>
</head>
<body>

<?php

// connect to database connector
include 'DBConnector.php';

if(isset($_POST['submit'])){
    // get the name, email, and message from the contact form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // query to insert the data to the contact_us table
    $sql = "INSERT INTO contact_us (contactID, cname, email, contactDate, cmessage) 
            VALUES (NULL, '$name', '$email', NOW(), '$message');";

    // connecting and do the query
    $result = $conn -> query($sql);

    // check if query was successfully done
    if ($result == TRUE){

        // This indicates that data is successfully inserted into the database.
        // Print the message.
        echo "<h2>Thank you!</h2><br>";
        echo "<h3>Your message has been recorded. We'll contact you soon!</h3>";

    }else{
        // Print the error since query is unsuccessful
        echo "Error from contact us form: ".$sql . "<br/>". $conn-> error;
    }
}
// exit
$conn -> close();
    
?>

</body>
</html>
