<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stone Healthcare</title>
    <link rel="icon" href="images/S-logo-white.png" type="image/icon type">


    <!--Custom CSS file-->
    <link rel="stylesheet" href="./css/prescribe-medicine.css"/>
    <link rel="stylesheet" href="./css/global.css">
    <!--fontawsome icons-->
    <script src="https://kit.fontawesome.com/dd8c49730d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="center">
        <img src="images/S-logo-white.png" height=80px alt="">
        <h1><a href="" target="_blank">STONE HEALTHCARE</a></h1>
    </div>

    <div class="navbar">
        <div class="menu">
            <ul>
                <li><a href="doctor-dashboard.php">DASHBOARD</a></li>
                <li><a href="view-patients.php">VIEW PATIENTS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>

    <form action="action/prescribe-medicine-action.php" method="POST">
        <center>
            <h1>Prescription</h1>
        </center>

        <hr>
        <h3 class="ID">Appointment ID</h3>
        <input type="number" name="ID">

        <h3>Prescribe Medicines Here</h3>
        <textarea name="prescription" rows="4" cols="50">
        </textarea>
        <button name="submit">SUBMIT</button>

    </form>
</body>
</html>