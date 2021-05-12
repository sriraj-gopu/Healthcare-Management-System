<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Stone Healthcare</title>
        <link rel="icon" href="images/S-logo-white.png" type="image/icon type">
    
    
        <!--Custom CSS file-->
        <link rel="stylesheet" href="./css/patient-prescription.css"/>
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
                <li><a href="patient-dashboard.php">DASHBOARD</a></li>
                <li><a href="patient-booking_appointment.php">BOOK AN APPOINTMENT</a></li>
                <li><a href="patient-prescription.php">CHECK PRESCRIPTION</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </div>
    </div>

    <br><br>

    <div class="table-responsive-sm">
    <table font-family= arial, sans-serif; border-collapse= collapse; width= 100%;>
        <thead>
            <tr>
                <th>Date Of Appointment</th>
                <th>Name</th>
                <th>Department</th>
                <th>Medical Condition</th>
                <th>Prescription</th>
                <th>Doctor Name</th>
            </tr>
        </thead>
        <tbody>
        <?php

            session_start();
            $con = mysqli_connect('localhost','root','','healthlms');
            $username = $_SESSION['username'];
            // $querry = "SELECT * FROM patientappointments ORDER BY ID DESC";
            $sql ="SELECT * FROM `patientappointments` where Name = '$username' ORDER BY DOA DESC ";
            $query = mysqli_query($con, $sql);
            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr >
            <td class="py-2"><?php echo $rows['DOA']; ?></td>
            <td class="py-2"><?php echo $rows['Name']; ?></td>
            <td class="py-2"><?php echo $rows['Department']; ?></td>
            <td class="py-2"><?php echo $rows['Medical Condition']; ?> </td>
            <td class="py-2"><?php echo $rows['Prescription']; ?> </td>
            <td class="py-2"><?php echo $rows['Doctor Name']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</body>
</html>