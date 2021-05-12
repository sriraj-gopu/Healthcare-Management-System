<?php
    session_start();
    $con = mysqli_connect('localhost','root','','healthlms');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stone Healthcare</title>
    <link rel="icon" href="images/S-logo-white.png" type="image/icon type">


    <!--Custom CSS file-->
    <link rel="stylesheet" href="./css/doctor-dashboard.css"/>
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

    <main class="main">
        <div class="main-title">
            <h1>User Details</h1><br>
        </div>

        <div class ="details" style = "margin-left:33%; border:2px solid; width:500px; margin-top:-10px">
            <?php 
                $result = mysqli_query($con,"SELECT * FROM `doctorsregistration` WHERE Name='" .$_SESSION['username']. "'");
                while($row = mysqli_fetch_array($result))
                {
                    echo "<table border=1px height=400px width=500px>
                    <tr>
                            <th>Username</th>
                            <th>" . $row['Name'] . "</th>
                            
                    </tr>
                    <tr>
                            <th>Department</th>
                            <th>" . $row['Department'] . "</th>
                        
                    </tr>
                    
                    <tr>
                            <th>Email</th>
                            <th>" . $row['EMAIL'] . "</th>
                    </tr>
                    
                    <tr>
                            <th>Blood Group</th>
                            <th>" . $row['Blood Group'] . "</th>
                    </tr>
                    
                    <tr>
                            <th>Gender</th>
                            <th>" . $row['Gender'] . "</th>
                    </tr>
                    
                    <tr>
                            <th>Phone Number</th>
                            <th>" . $row['Phone'] . "</th>
                    </tr>";
                    
                    echo "</table>";
                }
                
                mysqli_close($con);
            ?>
        </div>
    </main>

</body>
</html>