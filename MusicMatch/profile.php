<?php
session_start();
require 'db.php';
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$username = $_SESSION['username'];
$stmt = $conn->prepare("SELECT email FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($email);
$stmt->fetch();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Profile</title>
    <style>
        body {
            margin: 0; padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url('https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            margin: 100px auto;
            width: 350px;
            border-radius: 15px;
            box-shadow: 0 0 20px #ff4b2b;
        }
        h2 { text-align: center; color: #ff4b2b; }
        .profile-info {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 8px;
            margin: 15px 0;
        }
        a {
            color: #ff416c;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Profile Page</h2>
        <div class="profile-info">
            <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
        </div>
        <a href="welcome.php">Back to Dashboard</a>
    </div>
</body>
</html>