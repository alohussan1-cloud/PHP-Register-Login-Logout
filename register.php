<?php
require_once "./conn.php";

$errors =[]??'';


if(isset($_POST['register'])){

$username = $_POST['username']??'';
$email = $_POST['email']??'';
$password = $_POST['password']??'';



if(empty($username)){
    $errors['username'] = "Username is required";
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
 *{
    
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, rgb(45, 108, 223), rgb(102, 51, 153));
}

.box{
    background: #fff;
    padding: 30px;
    width: 350px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    text-align: center;
}

.box h2{
    margin-bottom: 20px;
    color: #333;
}

form{
    position: relative;
    display: flex;
    flex-direction: column;
}

input{
    margin: 10px 0;
    padding: 12px;
    border-radius: 8px;
    border: 1px solid rgb(200,200,200);
    outline: none;
    font-size: 14px;
    transition: 0.3s;
}

input:focus{
    border-color: rgb(45,108,223);
    box-shadow: 0 0 5px rgba(45,108,223,0.3);
}

input[type="submit"]{
    background: rgb(45,108,223);
    color: white;
    border: none;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

input[type="submit"]:hover{
    background: rgb(30, 85, 190);
}

p{
    margin-top: 15px;
    font-size: 14px;
    color: #555;
}

a{
    text-decoration: none;
    color: rgb(45,108,223);
    font-weight: bold;
}

a:hover{
    text-decoration: underline;
}
.icon{
    position: absolute;
    top:59%;
    left:88%;
    cursor: pointer;
}
</style>
<body>
    
    <div class="box">
        <form  method="POST">
            <input type="text" name="username" placeholder="Enter Username">
            <span> <?php echo  $errors['username']??''; ?></span>
            <input type="email" name="email" placeholder="Enter Email">
            <span> <?php echo  $errors['email']??''; ?></span>
            <input type="password" name="password" id="pass" placeholder="Enter Password">
            <div class="icon">
                <span id="eye"><!-- Eye Open Icon -->
<svg xmlns="http://www.w3.org/2000/svg" 
     width="20" 
     height="20" 
     viewBox="0 0 24 24" 
     fill="none" 
     stroke="currentColor" 
     color = "rgb(45,108,223)"
     stroke-width="2" 
     stroke-linecap="round" 
     stroke-linejoin="round">

    <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/>
    <circle cx="12" cy="12" r="3"/>

</svg></span>
            </div>
            <span> <?php echo  $errors['password']??''; ?></span>
        <input type="submit" name="register" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Log In</a> </p>
</div>

<script>
    const eye = document.querySelector('#eye');
    const pass = document.querySelector('#pass');

         eye.addEventListener("click", ()=>{

            if(pass.type == 'password'){
             pass.type = 'text';
             eye.innerHTML = `<!-- Eye Closed / Hide Password Icon -->
<svg xmlns="http://www.w3.org/2000/svg" 
     width="20" 
     height="20" 
     viewBox="0 0 24 24" 
     fill="none" 
     stroke="currentColor" 
     color = "rgb(45,108,223)"
     stroke-width="2" 
     stroke-linecap="round" 
     stroke-linejoin="round">

    <path d="M17.94 17.94A10.94 10.94 0 0 1 12 19C5 19 1 12 1 12a21.77 21.77 0 0 1 5.06-5.94"/>
    
    <path d="M9.9 4.24A10.94 10.94 0 0 1 12 5c7 0 11 7 11 7a21.77 21.77 0 0 1-2.16 3.19"/>
    
    <path d="M1 1l22 22"/>

</svg>`
            } else{
                pass.type = 'password';
                eye.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" 
     width="20" 
     height="20" 
     viewBox="0 0 24 24" 
     fill="none" 
     stroke="currentColor" 
     color = "rgb(45,108,223)"
     stroke-width="2" 
     stroke-linecap="round" 
     stroke-linejoin="round">

    <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/>
    <circle cx="12" cy="12" r="3"/>

</svg>`
            }

})
            </script>
</body>
</html>
