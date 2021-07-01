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
        echo "Thank you! Your inquiry has been recorded. We'll contact you soon!";

    }else{
        // Print the error since query is unsuccessful
        echo "Error from contact us form: ".$sql . "<br/>". $conn-> error;
    }
}
// exit
$conn -> close();
    
?>