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
    <title>Select Your Mood</title>
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
        .mood-options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 30px;
        }
        .mood-btn {
            padding: 15px;
            font-size: 16px;
            background: rgba(255, 75, 43, 0.3);
            color: white;
            border: 2px solid #ff4b2b;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .mood-btn:hover {
            background: #ff4b2b;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>What's Your Current Mood?</h1>
        <form action="play_music.php" method="POST">
            <div class="mood-options">
                <button type="submit" name="mood" value="happiness" class="mood-btn">😊 Happiness</button>
                <button type="submit" name="mood" value="sadness" class="mood-btn">😢 Sadness</button>
                <button type="submit" name="mood" value="anger" class="mood-btn">😠 Anger</button>
                <button type="submit" name="mood" value="fear" class="mood-btn">😨 Fear</button>
                <button type="submit" name="mood" value="romantic" class="mood-btn">🫶 Romantic</button>
                <button type="submit" name="mood" value="surprise" class="mood-btn">😲 Surprise</button>
            </div>
        </form>
    </div>
</body>
</html>