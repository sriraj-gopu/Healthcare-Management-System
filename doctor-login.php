<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stone Healthcare</title>
    <link rel="icon" href="images/S-logo-white.png" type="image/icon type">


    <!--Custom CSS file-->
    <link rel="stylesheet" href="./css/doctor-login.css" />
    <link rel="stylesheet" href="./css/global.css">
    <!--fontawsome icons-->
    <script src="https://kit.fontawesome.com/dd8c49730d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="navbar">
        <div class="menu">
            <img src="images/S-logo-white.png" height=80px alt="">
            <h1><a href="index.php">STONE HEALTHCARE</a></h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="login-signup.html">Login / Signup</a></li>
            </ul>
        </div>
    </div>
    <svg height="100" width="100%">
        <text x="610" y="100" fill="black" font-size="50px">DOCTOR LOGIN</text>
    </svg>
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="100%">
        <g fill="#a29bfe">
            <circle cx="5" cy="20" r="20"></circle>
            <circle cx="130" cy="20" r="20"></circle>
            <circle cx="60" cy="80" r="30"></circle>
            <circle cx="180" cy="80" r="30"></circle>
        </g>
    </svg>
    <div class="login">
        <div class="form animated flipInX">
            <h2>Login To Your Account</h2>
            <form action="action/doctorlogin-action.php" method="POST">
                <input placeholder="Username" type="text" name="username"></input>
                <input placeholder="Password" type="password" name="password"></input>
                <button name="submit">LOGIN</button>
            </form>
            <h3>Not a user ? <a href="doctor-signup.php">Sign Up</a></h3>
        </div>
    </div>

    <div class="social">
        <a href="mailto: abc@example.com"><i class="fa fa-envelope fa-2x"></i></a>
        <a href="" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="" target="_blank"><i class="fa fa-phone fa-2x"></i></a>
    </div>
    <footer>Copyright © 2021 All rights reserved</footer>
</body>

</html>