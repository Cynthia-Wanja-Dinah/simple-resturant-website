<?php 
 include("php/config.php");
 include("login.php");
session_start();
error_reporting(0);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="home">
  

    <div class="container">
        <div class="box box-form">
        
            
                 <form  action="" method="post" >
            <h2>Login</h2>
           
            <label for="email">email</label>
            <input type="email" id="email" name="email" autocomplete="off"required>
           
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" autocomplete="off" required>
            
            <input type ="submit" value="login" name="submit">
            <label>
                <input type="checkbox" id="rememberMe" name="rememberMe" value="1">
                Remember Me
            </label>
           
                Do not have an account? <a href="register.php">Sign up now</a>
           
        
        </div>
        </div>

    </div>

    
</body>
</html>

    
