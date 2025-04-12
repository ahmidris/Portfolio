<?php
$host = 'localhost';
$db   = 'portfolio_db';
$user = 'root'; // default in XAMPP
$pass = '';     // leave blank in XAMPP

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
