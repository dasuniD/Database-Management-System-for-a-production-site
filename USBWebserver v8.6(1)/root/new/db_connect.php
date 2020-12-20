<?php

$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database_in_use = "test";

// Create connection
$mysqli = new mysqli($host , $username, $user_pass ,$database_in_use );

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MYSQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
} 


?>