<?php
$host = "localhost";
$db = "musicmatch";
$user = "root";
$pass = ""; // Your DB password if any

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
