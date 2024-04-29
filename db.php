<?php

$servername = "localhost";
$database = "texi_app";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

$db = mysqli_select_db($conn,$database);
// Check connection

if ($conn) {
    echo "Connected successfully";
}
else{
    echo "Connected not successfully";
    // die("Connected not successfully" .mysqli_connect_error());
}
?>

