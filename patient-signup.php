<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stone Healthcare</title>
    <link rel="icon" href="images/S-logo-white.png" type="image/icon type">


    <!--Custom CSS file-->
    <link rel="stylesheet" href="./css/patient-signup.css" />
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
        <text x="590" y="70" fill="black" font-size="50px">PATIENT SIGNUP</text>
    </svg>
    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="100%">
        <g fill="orange">
            <rect x="0" y="0" width="50" height="50" transform = "rotate(45)"/>
            <rect x="55" y="-55" width="30" height="30" transform = "rotate(45)"/>
            <rect x="90" y="-90" width="30" height="30" transform = "rotate(45)"/>
            <rect x="145" y="-145" width="50" height="50" transform = "rotate(45)"/>
    </svg>

    <div class="signup">
        <div class="form animated flipInX">
            <h2>Signup To Your New Account</h2>
            <form action="action/patientaction.php" method="POST">
                <input placeholder="example@mail.com" type="email" name="email" required>
                <input placeholder="Username" type="text" name="username" required>
                <input placeholder="Password" type="password" name="password" required>
                <button name="submit">SIGN UP</button>
            </form>
            <h3>Already a user ? <a href="patient-login.php">Login</a></h3>
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