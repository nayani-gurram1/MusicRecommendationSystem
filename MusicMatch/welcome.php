<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome 🎧</title>
    <style>
        body {
            margin: 0; padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url('https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .container {
            background: rgba(0, 0, 0, 0.75);
            padding: 40px;
            margin: 120px auto;
            width: 500px;
            border-radius: 20px;
            box-shadow: 0 0 25px #ff4b2b;
            text-align: center;
        }
        h1 { font-size: 32px; color: #ff4b2b; margin-bottom: 20px; }
        p { font-size: 18px; }
        .btn {
            margin-top: 30px;
            padding: 12px 25px;
            font-size: 16px;
            background: #ff416c;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
            text-decoration: none;
        }
        .btn:hover { background: #ff4b2b; }
        .emoji { font-size: 48px; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>You're now logged in. Let the rhythm guide your soul 🎶</p>
        <a class="btn" href="logout.php">Logout</a>
        <!-- Add this after the logout button -->
<a class="btn" href="mood_selection.php" style="margin-left: 15px;">Select Mood & Play Music</a>
    </div>
</body>
</html>
