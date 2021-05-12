<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Stone Healthcare</title>
        <link rel="icon" href="images/S-logo-white.png" type="image/icon type">
    
    
        <!--Custom CSS file-->
        <link rel="stylesheet" href="./css/patient-details.css" />
        <link rel="stylesheet" href="./css/global.css">
        <!--fontawsome icons-->
        <script src="https://kit.fontawesome.com/dd8c49730d.js" crossorigin="anonymous"></script>
    </head>
<body>
    <img src="images/S-logo-white.png" height=80px alt="">
    <h1><a href="" target="_blank">STONE HEALTHCARE</a></h1>
    <form action="action/patientdetails-action.php" method="POST">
        <center>
            <h1>Patient Details</h1>
        </center>

        <hr><br>
        
        <h3>Patient Username</h3>
        <input type="text" name="username" placeholder="Username" required>

        <h3>Date Of Birth</h3>
        <input type="date" name="dob" required>

        <h3>Gender</h3>
        <input type="radio" name="gender" value="male" class="male">
        <h2 class="male">Male</h2>
        <input type="radio" name="gender" value="female" class="female">
        <h2 class="female">Female</h2>
        <input type="radio" name="gender" value="others" class="others">
        <h2 class="others">Others</h2>

        <h3>Blood Group</h3>
        <select name="BG">
            <option>Select an option</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>

        <h3>Phone Number</h3>
        <input type="tel" name="phone"  pattern="[0-9]{10}"  maxlength="10" placeholder="0123456789" required/>   

        <button name="submit">SUBMIT</button>

    </form>

    <footer>Copyright © 2021 All rights reserved</footer>

</body>
</html>