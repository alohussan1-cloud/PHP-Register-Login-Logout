<?php
require_once "./conn.php";

$errors =[]??'';

if(isset($_POST['register'])){

$username = trim($_POST['username']??'');
$email = trim($_POST['email']??'');
$password = trim($_POST['password']??'');
    if(empty($username)){
        $errors['username'] = "username is required";
    }
    if(empty($email)){
        $errors['email'] = "email is required";
    }
    if(empty($password)){
        $errors['password'] = "password is required";
    }
                     
    if(empty($errors)){
                
        $hashpass = password_hash($password, PASSWORD_DEFAULT)??'';  
                
        $sql = "INSERT INTO data(Name, Email, Password) values('$username', '$email', '$hashpass')";
        $run = $conn->query($sql);
        
        header("location: ./success.php"); 
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    }

    input::placeholder {
        color: #94a3b8;
    }

    input:focus {
        border-color: #334155;
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(15,23,42,0.08);
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
    }

    input[type="submit"]:hover {
        background: #1e293b;
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

    .box > p {
        margin-top: 20px;
        font-size: 13px;
        color: #64748b;
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
        top: 57%;
        left: 88%;
        cursor: pointer;
    }
</style>
<body>

    <div class="box">

        <div class="box-header">
            <h2>Create an account</h2>
            <p>Fill in your details to get started</p>
        </div>

        <form method="POST">
            <input type="text" name="username" placeholder="Enter Username">
            <span class="error"><?php echo $errors['username']??''; ?></span>

            <input type="email" name="email" placeholder="Enter Email">
            <span class="error"><?php echo $errors['email']??''; ?></span>

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
            <span class="error"><?php echo $errors['password']??''; ?></span>

            <input type="submit" name="register" value="Register">
        </form>

        <p>Already have an account? <a href="login.php">Log In</a></p>

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
        } else{
            pass.type = 'password';
            eye_open.style.display = "block";    
            eye_closed.style.display = "none"
        }
    })
</script>
</body>
</html>