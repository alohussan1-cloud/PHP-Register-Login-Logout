<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, rgb(58, 123, 213), rgb(58, 213, 178));
        }

        .container {
            background: white;
            padding: 40px 60px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            animation: fadeIn 0.8s ease-in-out;
        }

        h1 {
            font-size: 28px;
            color: rgb(40, 40, 40);
            margin-bottom: 10px;
        }

        h1 span {
            color: rgb(58, 123, 213);
        }

        h3 {
            font-weight: 400;
          color: rgb(255, 200, 120);
            margin-bottom: 25px;
        }

        a {
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            background: rgb(255, 80, 80);
            color: white;
            font-weight: 500;
            transition: 0.3s ease;
            display: inline-block;
        }

        a:hover {
            background: rgb(220, 50, 50);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            }
            to {
                opacity: 1;
                transform: translateY(0);
        }
        .box{
        display: flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
        background: white;
        background: #ffffff;
        padding: 30px 25px;
        width: 340px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
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