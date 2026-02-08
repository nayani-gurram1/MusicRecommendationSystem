<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed);
        $stmt->fetch();

        if (password_verify($password, $hashed)) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $id;
            header("Location: welcome.php");
            exit();
        } else {
            echo "<script>alert('Invalid credentials'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('User not found'); window.location.href='index.php';</script>";
    }
}
?>
