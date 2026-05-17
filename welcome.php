<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #0f172a, #1e293b);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box {
        background: #ffffff;
        border-radius: 16px;
        width: 340px;
        padding: 40px 30px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        text-align: center;
    }

    .user-icon {
        width: 72px;
        height: 72px;
        background: #f0f9ff;
        border: 2px solid #bae6fd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .user-icon svg {
        width: 32px;
        height: 32px;
        stroke: #0284c7;
        fill: none;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .badge {
        display: inline-block;
        background: #f0f9ff;
        color: #0369a1;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        padding: 4px 12px;
        border-radius: 20px;
        border: 1px solid #bae6fd;
        margin-bottom: 16px;
    }

    .box h1 {
        font-size: 22px;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 8px;
    }

    .box h3 {
        font-size: 16px;
        font-weight: 400;
        color: #7d8590;
        margin: 0 0 28px;
        line-height: 1.6;
    }

    .divider {
        border: none;
        border-top: 1px solid #e2e8f0;
        margin: 0 0 24px;
    }

    .box a {
        display: block;
        width: 100%;
        padding: 13px;
        background: #0f172a;
        color: #ffffff;
        font-weight: 600;
        font-size: 18px;
        border-radius: 8px;
        text-decoration: none;
        box-sizing: border-box;
        transition: 0.2s ease;
    }

    .box a:hover {
        background: #1e293b;
    }

</style>
<body>

    <div class="box">

        <div class="user-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
        </div>

        <h1>Welcome, <?php echo ($_SESSION['username']); ?>!</h1>
        <h3>You have successfully logged in</h3>
        <hr class="divider">
        <a href="logout.php">Log Out</a>

    </div>

</body>
</html>