<?php
session_start();
$con = mysqli_connect('localhost','root','','healthlms');

if(mysqli_connect_errno()){
    echo " Failed To connect Database due to -> ", mysqli_connect_error() ;
}else{
    if(isset($_POST['submit']))
    {
        $username = $_SESSION['username'];
        $MC = $_POST['MC'];
        $doa = date('Y-m-d', strtotime($_POST['doa']));
        $gender = $_POST['gender'];
        $BG = $_POST['BG'];
        $Department = $_POST['Department'];

        

        $query = "INSERT INTO `patientappointments`(`Name`, `DOA`, `Blood Group`, `Department`, `Medical Condition`, `Gender`, `Status`) VALUES ('$username', '$doa','$BG', '$Department', '$MC', '$gender', 'Pending')";

        $result = mysqli_query($con,$query);

        if($result)
        {
            echo "
                <script> alert('Appointment Booking Successful. ');
                window.location.replace('//localhost/PROJECT/patient-dashboard.php');
                </script>
            ";
        }
        else
        {
            echo "
            <script> alert('Appointment Booking failed. Please try again ');
            window.location.replace('//localhost/PROJECT/patient-booking_appointment.php');
            </script>
        ";
        }	

    }
}
?>