<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_POST['mood'])) {
    header("Location: welcome.php");
    exit();
}

$mood = $_POST['mood'];
$songs = [
    'happiness' => ['title' => 'Happy Song', 'artist' => 'Rashid Ali', 'file' => 'happy.mp3'],
    'sadness' => ['title' => 'Sad Melody', 'artist' => 'Atif Aslam', 'file' => 'sad.mp3'],
    'anger' => ['title' => 'Angry Rock', 'artist' => 'Brijesh Shandilya', 'file' => 'angry.mp3'],
    'fear' => ['title' => 'Creepy Ambience', 'artist' => 'Parampara Tandon', 'file' => 'fear.mp3'],
    'romantic' => ['title' => 'Love in Bloom', 'artist' => 'Vishal-Shekhar', 'file' => 'romantic.mp3'],
    'surprise' => ['title' => 'Unexpected Beat', 'artist' => 'Pritam', 'file' => 'surprise.mp3']
];

$song = $songs[$mood];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Now Playing</title>
    <style>
        body {
            margin: 0; padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url('https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: center;
        }
        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            margin: 100px auto;
            width: 500px;
            border-radius: 20px;
            box-shadow: 0 0 25px #ff4b2b;
        }
        h1 { color: #ff4b2b; }
        .player {
            margin: 30px 0;
        }
        audio {
            width: 100%;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #ff416c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎵 Playing: <?php echo $song['title']; ?></h1>
        <p>Artist: <?php echo $song['artist']; ?></p>
        <p>Mood: <?php echo ucfirst($mood); ?></p>
        
        <div class="player">
            <audio controls autoplay>
                <source src="music/<?php echo $song['file']; ?>" type="audio/mpeg">
                Your browser doesn't support audio.
            </audio>
        </div>
        
        <a href="mood_selection.php" class="btn">Choose Another Mood</a>
        <a href="welcome.php" class="btn">Back to Dashboard</a>
    </div>
</body>
</html>