<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Pro</title>
    
    <link rel = "stylesheet" href = "login.css"> 
</head>
<body>
<header>
        <div class="logo">
            <img src="Images/logo.png" alt="property pro logo">
        </div>
        
        <input type="checkbox" id="check">

        <nav class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="property.php">Property</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <div class="nav-icon">
            <a href="home.php"><abbr title="Home"><i class='bx bxs-home'></i></abbr></a>
            <a href="#"><abbr title="My Picks"><i class='bx bxs-hand-up'></i></abbr></a>
            <a href="#"><abbr title="Login/Sign Up"><i class='bx bx-user'></i></abbr></a>
        </div>

        <label for="check" class="menu-btn">
            <i class='bx bx-menu'></i>
        </label>

    </header>

 <div class="form">
    <h2 style="text-align: center;"> LOGIN </h2>

        <div class="form-container">

        <form action="includes/login.inc.php" method="POST">
        <label for= "username">Username</label>
        <br><br>
        <input type= "text" id="username" name="username" placeholder="Enter your username.." required>
        <br><br>

        <label for= "password">Password</label>
        <br><br>
        <input type= "password" id="password" name="password" placeholder="Enter your password.." required>
        <br><br><br>  
    
        <div class="role-selection">
            <label for="role">Register As:</label><br><br>
            <input type="radio" id="admin" name="role" value="Admin"> Admin
            <input type="radio" id="seller" name="role" value="Seller"> Seller
            <input type="radio" id="buyer" name="role" value="Buyer"> Buyer
        </div>
        <br>
        
       
        <br>
        
        <button type="submit" class="sign-in-btn" name="submit">Sign In</button>
        <br><br>
        <p> New here? <a href="#"> Signup </a></p> 
</form>
</div>
</div>
<hr>
    <footer>
        <section>
            <div class="contact">
                <div class="first-info">
                    <img src="Images/logo.png" alt="logo">
                </div>
                <div class="details">
                    <h3>Contact Us</h3>
                    <p><i class='bx bxs-phone-call'></i>0778986338</p>
                    <p><i class='bx bxs-envelope' ></i>propertypro@gmail.com</p>
                </div>
                <div class="second-info">
                    <ul>
                    <h3>Navigation</h3>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="property.php">Property</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Condition</a></li>
                    </ul>
                </div>
                <div class="social-info">
                    <h3>Follow Us</h3>
                    <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram-alt' ></i></a></li>
                </div>
            </div>
        </section>
    </footer>




</body>
