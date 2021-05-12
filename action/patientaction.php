<?php
session_start();
$con = mysqli_connect('localhost','root','','healthlms');

if(mysqli_connect_errno()){
    echo " Failed To connect Database due to -> ", mysqli_connect_error() ;
}else{
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql_u = "SELECT * FROM patientregistration WHERE Name='$username'";
        $sql_e = "SELECT * FROM patientregistration WHERE EMAIL='$email'";
        $res_u = mysqli_query($con, $sql_u);
        $res_e = mysqli_query($con, $sql_e);

        if (mysqli_num_rows($res_e) > 0)
        {
            echo "<script> alert('Sorry, Email Already taken.');
            window.location.replace('//localhost/PROJECT/doctor-signup.php');
            </script>
            "; 	
        }
        else if(mysqli_num_rows($res_u) > 0)
        {
            echo "<script> alert('Sorry, Username Already taken.');
            window.location.replace('//localhost/PROJECT/doctor-signup.php');
            </script>"; 	
        }
        else
        {
            $query = "INSERT INTO `patientregistration`(`Name`, `EMAIL`, `Password`) VALUES ('$username', '$email', '" . md5($password) . "')";

            $result = mysqli_query($con,$query);

            if($result)
            {
                echo "
                    <script> alert('Please Proceed to give more details. ');
                    window.location.replace('//localhost/PROJECT/patient-details.php');
                    </script>
                ";
            }
            else
            {
                echo "Failed.";
            }
        }
    }
}




?>