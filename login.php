<?php

session_start();

require_once "./conn.php";

$Email = trim($_POST['email']??'');
$Password = trim($_POST['password']??'');

$error = []??'';

$sql = "SELECT * FROM data where Email = '$Email'";

$run = $conn->query($sql);

$user = mysqli_fetch_assoc($run);

if(isset($_POST['login'])){
    if($user){
        if(password_verify($Password, $user['Password'])){
            $success = "You have successfully logged in";
            header("location: ./welcome.php ");
            $_SESSION['username'] = $user['Name'];
        }else {
            $error['wPass']= "Password is incorrect";
        }
    } else{
        $error['wEmail']= "Email does not exist";
    }     
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    form {
        background: #f5eee6;
        padding: 30px 25px;
        border-radius: 12px;
        width: 320px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        position:relative;
    }

    form h6 {
        font-size: 22px;
        font-weight: 600;
        text-align: center;
        color: #4b2e2e;
        margin-bottom: 20px;
    }

    form input {
        width: 90%;
        padding: 12px;
        margin-bottom: 10px;
        border: 1px solid #d2b48c;
        border-radius: 8px;
        outline: none;
        font-size: 14px;
        background: #fffaf5;
    }

    form input:focus {
        border-color: #8b5e3c;
        box-shadow: 0 0 5px rgba(139,94,60,0.5);
    }

    form span {
        font-size: 12px;
        color: #b00020;
        display: block;
        margin-bottom: 10px;
    }

    form input[type="submit"] {
        background: linear-gradient(to right, #6f4e37, #a47148);
        color: white;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: 0.3s ease;
        width: 98%;
    }

    form input[type="submit"]:hover {
        background: linear-gradient(to right, #5a3e2b, #8b5e3c);
    }

    form p {
        text-align: center;
        font-size: 13px;
        margin-top: 10px;
        color: #5a3e2b;
    }

    form a {
        color: #8b5e3c;
        text-decoration: none;
        font-weight: 600;
    }

    form a:hover {
        text-decoration: underline;
    }
    #eye{
        position: absolute;
        top:54%;
        left:80%;
        cursor: pointer;
    }
</style>
<body>
    <form  Method="POST">
        <h6>Log In to Continue</h6>
        <input type="email" name="email" placeholder="Enter Email">
        <span> <?php echo $error['wEmail']??'';?> </span>
        <input type="password" name="password" id="pass" placeholder="Enter Password"> 
       <span id="eye">
            <svg id="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
            color = "#5a3e2b"stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/>
            <circle cx="12" cy="12" r="3"/>
            </svg>
            <svg id="eye-closed" style="display:none" xmlns="http://www.w3.org/2000/svg"  width="20" height="20" viewBox="0 0 24 24" fill="none" 
            stroke="currentColor" color = "#5a3e2b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17.94 17.94A10.94 10.94 0 0 1 12 19C5 19 1 12 1 12a21.77 21.77 0 0 1 5.06-5.94"/>
            <path d="M9.9 4.24A10.94 10.94 0 0 1 12 5c7 0 11 7 11 7a21.77 21.77 0 0 1-2.16 3.19"/>
            <path d="M1 1l22 22"/>
            </svg>
            </span>
        <span> <?php echo $error['wPass']??'';?> </span>
        <input type="submit" name="login" value="Log In">
        <p>Don't have an account yet? <a href="register.php">Sign in</a> </p>
    </form>

<script>
    const eye = document.querySelector('#eye');
    const pass = document.querySelector('#pass');
    const eye_open = document.querySelector('#eye-open');
    const eye_closed = document.querySelector('#eye-closed');


    eye.addEventListener("click", ()=>{
        if(pass.type == 'password'){
            pass.type = 'text';
            eye_open.style.display = "none";   
            eye_closed.style.display = "block"
        }else{
            pass.type = 'password';
            eye_open.style.display = "block";    
            eye_closed.style.display = "none"
        }

    })
</script>
</body>
</html>

