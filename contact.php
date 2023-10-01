
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    
<a id="login" href="logout.php"><button>logout</button></a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="home.php">Home</a>
</nav>
    <div class="container-bar">
        <form id="container">
            <h1>Contact Us Form</h1>
            <input type="text" id="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="Mobile" required>

        
            <fieldset>
        <legend>Gender:</legend>
        <label>
            <input type="radio" name="gender" value="male" >
            <p id="female" >Male</p>
        </label>
        <label>
            <input type="radio" name="gender" value="female" >
            <p id="female" >Female</p>
        </label>
            </fieldset>
   
            
            
            <label id="female">Your Message:</label>
        <textarea  name="message" placeholder="Type your message here..."></textarea>
        <input type ="submit" value="submit" name="submit">
    
        </form>
        
    </div>

    <footer>
        <section id="icons">
            <h2>Our social media platforms</h2>
        <a>
            <img src="images\facebook.png"><p>Facebook</p>
        </a>
        <a>
        <img src="images\twitter.png"><p> Twitter</p>
        </a>
        <a>
        <img src="images\instagram.jpeg"><p> Instagram</p>
        </a>
        </section>
</footer>
</html>

    
