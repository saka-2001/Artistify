<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Navbar.css">
    <link rel="stylesheet" href="CSS/Signin-body.css">
    <title>Signin For Artistify</title>
</head>

<body>
    <!-- NAVIGATION BAR -->
    <nav class="nav-section fixed-top clearfix">
        <a href="index.php" class="site-logo">
            <img src="logo.png" alt="site logo">
        </a>
        <div class="nav-right">
            <a href="Signin.php" class="login">Login</a>
            <span>|</span>
            <a href="Signup.php" class="register">Create an account</a>
        </div>
        <ul class="main-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>

    <!-- The main body of the website -->
    <div id="login-body">
        <form class="login-content" action="">
            <img src="avatar.svg">
            <h2 class="title">Welcome</h2>
            <div class="input-div one">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="div">
                    <input type="text" class="input" placeholder="Username">
                </div>
            </div>
            <div class="input-div pass">
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="div">
                    <input type="password" class="input" placeholder="Password">
                </div>
            </div>
            <a href="#">Forgot Password?</a>
            <a href="Signup.php">New here? Sign Up.</a>
            <input type="submit" class="btn login-btn" value="Login">
        </form>
    </div>

</body>

</html>