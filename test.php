<?php

session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome Modal</title>
<link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #111;
}

/* Overlay */
.overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Modal Box */
.modal-box {
    position: relative;
    background: #2b2b2b;
    padding: 40px 30px;
    width: 400px;
    text-align: center;
    border: 2px solid #00cfd1;
    box-shadow: 0 0 20px rgba(0, 207, 209, 0.3);
    border-radius: 6px;
}

/* Close Button */
.close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 22px;
    color: #ccc;
    cursor: pointer;
}

.close:hover {
    color: #fff;
}

/* Heading */
.modal-box h1 {
    color: #00cfd1;
    font-size: 32px;
    letter-spacing: 2px;
    margin-bottom: 20px;
}

/* Text */
.modal-box p {
    color: #ddd;
    font-size: 14px;
    margin-bottom: 25px;
}

/* Button */
.modal-box button {
    background: #00cfd1;
    color: #fff;
    border: none;
    padding: 12px 25px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

.modal-box button:hover {
    background: #00a6a8;
}
</style>
<body>

<!-- Overlay -->
<div class="overlay" id="modal">
    
    <!-- Modal Box -->
    <div class="modal-box">
       

        <h1>WELCOME TO <br> MY SITE <?php echo $_SESSION['username'] ?></h1>

        <p>
            Click the button below to continue to my site. You can find variety of things to buy here. 
        </p>

        <button>Let's buy</button>
    </div>

</div>

<script src="script.js"></script>
</body>
</html>