<?php
    session_start();
    $con = mysqli_connect('localhost','root','','healthlms');
    // When form submitted, check and create user session.
    if (isset($_POST['submit'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `patientregistration` WHERE Name='$username' AND Password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1)
        {
            $_SESSION['username'] = $username; 
            header("Location: //localhost/PROJECT/patient-dashboard.php");
        }
        else
        {
            echo " Incorrect Username/password. ";
        }
    }
?>