<?php
$host = "localhost";
$user = "root";  // Default user for XAMPP
$pass = "";      // Default password is empty for XAMPP
$db = "login";   // The database name you just created

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Failed to connect to DB" . $conn->connect_error);
}
?>
