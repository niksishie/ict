<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">ITALIAN BANQUET<span>.</span></a>
        <nav class="navbar">
            <a href="home.html#home">Home</a>
            <a href="home.html#about">About Us</a>
            <a href="home.html#menu">Menu</a>
            <a href="home.html#services">Services</a>
            <a href="home.html#contact">Contact Us</a>
        </nav>
        <div class="icons">
            <a href="home.html#home" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="index.php" class="fas fa-user"></a>
        </div>
    </header>
    <section class="signup">
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
        <div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="fname" id="signup-fname" placeholder="First Name" required>
    <label for="signup-fname">First Name</label>
</div>
<div class="input-group">
    <i class="fas fa-user"></i>
    <input type="text" name="lname" id="signup-lname" placeholder="Last Name" required>
    <label for="signup-lname">Last Name</label>
</div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="email" name="email" id="signin-email" placeholder="Email" required>
<input type="password" name="password" id="signin-password" placeholder="Password" required>
            </div>
            <input type="submit" class="btn"  value="Sign Up" name="signup">
        </form>
        <p class="or">
            ----------or----------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have an Account?</p>
            <button id="signinbutton">Sign In</button>
        </div>
    </div>
    </section>
    <section class="signin">
        <div class="container" id="signin" style="display: block;">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn"  value="Sign In" name="signin">
        </form>
        <p class="or">
            ----------or----------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have an account yet?</p>
            <button id="signupbutton">Sign Up</button>
        </div>
    </div>
</section>
    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#menu">Menu</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact Us</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#signup">Sign Up</a>
                <a href="#log">Login</a>
                <a href="#cart">Add to Cart</a>
                </div>
                <div class="box">
                    <h3>locations</h3>
                    <a href="#">Marikina</a>
                    <a href="#">Manila</a>
                    </div>
                    <div class="box">
                        <h3>contact info</h3>
                        <a href="#">number</a>
                        <a href="#">email</a>
                        <a href="#">fb</a>
                        </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Italian Banquet. All Rights Reserved.</p>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>