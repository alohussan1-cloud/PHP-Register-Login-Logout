<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
 body{
    margin:0;
    font-family: Arial, sans-serif;
}

/* center everything */
.container{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg, rgb(0,123,255), rgb(111,66,193));
}

/* card */
.box{
    text-align:center;
    padding:40px;
    border-radius:15px;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    color:white;
}

/* button */
.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 30px;
    border-radius:30px;
    background: rgb(40, 53, 167);
    color:white;
    text-decoration:none;
    font-weight:600;
}

/* text under button */
.subtext{
    margin-top:10px;
    font-size:0.9rem;
    opacity:0.8;
}
    </style>
<body>
    
<body>

    <div class="container">
        <div class="box">
            <h1>Congratulations</h1> 
            <h3>You have successfully Registered</h3>

            <a href="login.php" class="btn">Log In</a>
            <p class="subtext">Continue to your account</p>
        </div>
    </div>

</body>
</body>
</html>