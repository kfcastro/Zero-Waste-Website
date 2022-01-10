<?php

// Open a connection to MySql server

$servername = "localhost";
$username = "root";     // Default username
$password = "";         // Default password
$dbname = "testdb_login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($conn->connect_error){

    die("Connection failed: ". $conn->connect_error);

}
