<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box from-box">

      <?php
      include("php/config.php");
      if(isset($_POST['submit'])){
        $username =$_POST['username'];
        $email =$_POST['email'];
        $age =$_POST['age'];
        $password =$_POST['password'];
        //verifying if the email is unique
        $verify_query =mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
        if(mysqli_num_rows($verify_query) !=0){
            echo "<div class='message'>
                <p>this email is used by another user,Try another one please</p>
                 </div> <br>";
            echo" <a href='javascript:self.histry.back()'><button class='btn'>Goback</button>";  
        }else{
            mysqli_query($con,"INSERT INTO users(username,email,age,password) VALUES('$username','$email','$age','$password')") or die("error occured");
            echo "<div class='message'>
                <p>Registration successfull</p>
                 </div> <br>";
            echo" <a href='index.php'><button class='btn'>Login now</button></a>";
        }

      }else{
      ?>
        <form  action=" " method="post">
            <h2>Register</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"  required>
           
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="age">age:</label>
            <input type="age" id="age" name="age" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            
            

        
            <input type="submit" name="submit" value="submit">Login</button>
            <div class="links">
                Already have an account ? <a href="index.php">login</a>
            </div>
        </form>
    </div>
</div>
<?php } ?>

    
</body>
</html>