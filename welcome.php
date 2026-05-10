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
body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(to right, #5a3e2b, #8b5e3c);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.box {
    background: #f5eee6;
    padding: 40px 30px;
    border-radius: 12px;
    width: 320px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    text-align: center;
}
.user-icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(to right, #6f4e37, #a47148);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}
.user-icon svg {
    width: 30px;
    height: 30px;
    stroke: #f5eee6;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
}
.box h1 {
    font-size: 22px;
    font-weight: 600;
    color: #4b2e2e;
    margin: 0 0 8px;
}
.box h3 {
    font-size: 14px;
    font-weight: 400;
    color: #8b5e3c;
    margin: 0 0 28px;
}
.divider {
    border: none;
    border-top: 1px solid #d2b48c;
    margin: 0 0 24px;
}
.box a {
    display: inline-block;
    width: 100%;
    padding: 12px;
    background: linear-gradient(to right, #6f4e37, #a47148);
    color: white;
    font-weight: 600;
    font-size: 14px;
    border-radius: 8px;
    text-decoration: none;
    box-sizing: border-box;
    transition: 0.3s ease;
}
.box a:hover {
    background: linear-gradient(to right, #5a3e2b, #8b5e3c);
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

        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <h3>You have successfully logged in</h3>
        <hr class="divider">
        <a href="logout.php">Log Out</a>
    </div>
</body>
</html>