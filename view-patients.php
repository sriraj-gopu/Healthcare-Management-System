<?php
    session_start();
    $con = mysqli_connect('localhost','root','','healthlms');
    $doctorname = $_SESSION['username'];
    $res1 = "SELECT Department from doctorsregistration where Name= '$doctorname' ";
    $dept = mysqli_query($con,$res1);
    $sql = "SELECT * FROM patientappointments where Status = 'Pending'";
    $result = mysqli_query($con,$sql);
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
    <link rel="stylesheet" href="./css/view-patients.css"/>
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

    <div class="container">
        <br>
            <div class="row">
                <div class="col">
                    <div>
                    <table font-family= arial, sans-serif; border-collapse= collapse; width= 100%;>
                        <thead>
                            <tr  border = 2px solid black; text-align = center; color = black; padding = 8px;>
                                <th border = 2px solid black; text-align = center; color = black; padding = 8px;>ID</th>
                                <th border = 2px solid black; text-align = center; color = black; padding = 8px;>DOA</th>
                                <th border = 2px solid black; text-align = center; color = black; padding = 8px;>Name</th>
                                <th border = 2px solid black; text-align = center; color = black; padding = 8px;>Gender</th>
                                <th border = 2px solid black; text-align = center; color = black; padding = 8px;>Blood Group</th>
                                <th border = 2px solid black; text-align = center; color = black; padding = 8px;>Medical Condition</th>
                                <th border = 2px solid black; text-align = center; color = black; padding = 8px;>Department</th>
                                <th border = 2px solid black; text-align = center; color = black; padding = 8px;>Prescription</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['ID'] ?></td>
                        <td><?php echo $rows['DOA'] ?></td>
                        <td><?php echo $rows['Name']?></td>
                        <td><?php echo $rows['Gender']?></td>
                        <td><?php echo $rows['Blood Group']?></td>
                        <td><?php echo $rows['Medical Condition']?></td>
                        <td><?php echo $rows['Department']?></td>
                        <!-- <td><a href="prescribe-medicine.php"> <button type="button" class="btn">Prescribe</button><s/a></td>  -->
                        <td><a href="prescribe-medicine.php?id=<?php echo $rows['ID'] ;?>"> <button type="button" name ='ok' class="btn">Prescribe</button></a></td>
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
</div>
</body>
</html>