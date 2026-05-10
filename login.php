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
    <title>Login</title>
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

    .box-header {
        margin-bottom: 24px;
    }

    .box-header h2 {
        font-size: 22px;
        font-weight: 700;
        color: #0f172a;
        margin: 0 0 6px;
    }

    .box-header p {
        font-size: 13px;
        color: #64748b;
        margin: 0;
    }

    form {
        position: relative;
        display: flex;
        flex-direction: column;
        text-align: left;
    }

    input {
        width: 100%;
        padding: 12px 14px;
        margin-bottom: 4px;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
        outline: none;
        font-size: 14px;
        color: #0f172a;
        background: #f8fafc;
        transition: 0.2s;
        box-sizing: border-box;
    }

    input::placeholder {
        color: #94a3b8;
    }

    input:focus {
        border-color: #334155;
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(15,23,42,0.08);
    }

    form span.error {
        font-size: 12px;
        color: #dc2626;
        text-align: left;
        margin-bottom: 8px;
        min-height: 16px;
        display: block;
        padding-left: 2px;
    }

    input[type="submit"] {
        background: #0f172a;
        color: white;
        border: none;
        cursor: pointer;
        font-weight: 600;
        font-size: 14px;
        padding: 13px;
        margin-top: 8px;
        transition: 0.2s ease;
        width: 100%;
        border-radius: 8px;
    }

    input[type="submit"]:hover {
        background: #1e293b;
    }

    .box > p {
        margin-top: 20px;
        font-size: 13px;
        color: #64748b;
        text-align: center;
    }

    .box > p a {
        color: #0f172a;
        font-weight: 600;
        text-decoration: none;
    }

    .box > p a:hover {
        text-decoration: underline;
    }

    #eye {
        position: absolute;
        top: 54%;
        left: 88%;
        cursor: pointer;
    }
</style>
<body>

    <div class="box">

        <div class="box-header">
            <h2>Welcome back</h2>
            <p>Log in to continue to your account</p>
        </div>

        <form method="POST">
            <input type="email" name="email" placeholder="Enter Email">
            <span class="error"><?php echo $error['wEmail']??''; ?></span>

            <input type="password" name="password" id="pass" placeholder="Enter Password">
            <span id="eye">
                <svg id="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                color="#334155" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/>
                <circle cx="12" cy="12" r="3"/>
                </svg>
                <svg id="eye-closed" style="display:none" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" color="#334155" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17.94 17.94A10.94 10.94 0 0 1 12 19C5 19 1 12 1 12a21.77 21.77 0 0 1 5.06-5.94"/>
                <path d="M9.9 4.24A10.94 10.94 0 0 1 12 5c7 0 11 7 11 7a21.77 21.77 0 0 1-2.16 3.19"/>
                <path d="M1 1l22 22"/>
                </svg>
            </span>
            <span class="error"><?php echo $error['wPass']??''; ?></span>

            <input type="submit" name="login" value="Log In">
        </form>

        <p>Don't have an account yet? <a href="register.php">Sign up</a></p>

    </div>

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