<?php include("php/config.php");
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$email = $_POST['email'];
$password = $_POST['password'];

$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from users where email='$email' and password='$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if (mysqli_num_rows($result) == 1) {
    
    header('location: home.php');

}else{

             echo "<div class='message'>
             <p>wrong email or password </p>
              </div> <br>";
         echo" <a href='index.php'><button class='btn'>Goback</button>";

         }}
         ?>
