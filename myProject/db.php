<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = 'Facebook';
$mysqli = new mysqli($servername, $username, $password,$database);
//$link =new mysqli("localhost", $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
//echo "Connected successfully";

/* $sql = "CREATE DATABASE Facebook IF NOT EXISTS ";
if ($mysqli->query($sql) === TRUE) {
    //echo "Database created successfully";
} else {
    echo "Error creating database: " . $mysqli->error;
}

//$conn->close();               
        */        

?>