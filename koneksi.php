<?php
$servername = "localhost"; //nama server
$username   = "root"; // username dari mysql yang ada di phpmyadmin
$password   = "28051998"; // password dari mysql yang ada di phpmyadmin
$dbname     = "212mart"; // nama database yang sudah dibuat

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
