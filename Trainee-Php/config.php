<?php
$host = "localhost";
$user = "root";         // default XAMPP username
$pass = "";             // default XAMPP password
$db   = "simple_blog";

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>