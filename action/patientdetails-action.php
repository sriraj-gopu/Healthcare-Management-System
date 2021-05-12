<?php
session_start();
$con = mysqli_connect('localhost','root','','healthlms');

if(mysqli_connect_errno()){
    echo " Failed To connect Database due to -> ", mysqli_connect_error() ;
}else{
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $dob = date('Y-m-d', strtotime($_POST['dob']));
        $gender = $_POST['gender'];
        $BG = $_POST['BG'];

        $sql_u = "SELECT * FROM patientregistration WHERE Name='$username'";
        $res_u = mysqli_query($con, $sql_u);

        if (mysqli_num_rows($res_u) > 0)
        {
            $query = "UPDATE `patientregistration` SET `Phone`= '$phone',`Gender`= '$gender' ,`DOB`= '$dob', `Blood Group` = '$BG' WHERE Name = '$username'";

            $result = mysqli_query($con,$query);

            if($result)
            {
                echo "
                    <script> alert('Registration Successful. Proceed to Login ');
                    window.location.replace('//localhost/PROJECT/patient-login.php');
                    </script>
                ";
            }
            else
            {
                echo "
                <script> alert('Registration failed. Please try again ');
                window.location.replace('//localhost/PROJECT/patient-details.php');
                </script>
            ";
            }	
        }
    }
}
?>