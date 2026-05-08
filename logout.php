<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
 <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #3d5a80;
        }

        h1 {
            font-size: 22px;
            font-weight: 600;
            color: #111;
            margin-bottom: 6px;
        }

        h3 {
            font-weight: 400;
            color: #999;
            font-size: 13px;
            margin-bottom: 28px;
        }

        a {
            text-decoration: none;
            padding: 11px 28px;
            border-radius: 8px;
            background: #111;
            color: white;
            font-weight: 500;
            font-size: 14px;
            letter-spacing: 0.01em;
            transition: background 0.2s ease;
            display: inline-block;
        }

        a:hover {
            background: #333;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(16px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #ffffff;
            padding: 40px 48px;
            width: 340px;
            border-radius: 16px;
            box-shadow: 0 8px 40px rgba(0,0,0,0.35);
            animation: fadeIn 0.5s ease;
        }
    </style>
<body>
    <div class="box">
        <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
        <h3>You have successfully logged in</h3>
        
        <a href="login.php">Log Out </a>
    </div>
    

</body>
</html>