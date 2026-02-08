<!DOCTYPE html>
<html>
<head>
    <title>Music Login Page</title>
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
        input[type="text"], input[type="password"] {
            width: 100%; padding: 12px; margin: 10px 0;
            border: none; border-radius: 8px;
        }
        input[type="submit"] {
            width: 100%; padding: 12px;
            background: #ff416c; color: white;
            font-weight: bold; border: none; border-radius: 8px;
            cursor: pointer; transition: background 0.3s ease-in-out;
        }
        input[type="submit"]:hover { background: #ff4b2b; }
        .link { text-align: center; margin-top: 15px; }
        .link a { color: #ffffff; text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" value="Login">
            <div class="link">
                <p>Don't have an account? <a href="register.php">Register here</a></p>
            </div>
        </form>
    </div>
</body>
</html>
