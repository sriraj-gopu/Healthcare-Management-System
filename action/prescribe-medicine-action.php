<?php
session_start();
$con = mysqli_connect('localhost','root','','healthlms');

if(mysqli_connect_errno()){
    echo " Failed To connect Database due to -> ", mysqli_connect_error() ;
}else{
    if(isset($_POST['submit']))
    {
        $username = $_SESSION['username'];
        $prescription = $_POST['prescription'];
        $idnum = $_POST['ID'];
        

        $query = "UPDATE `patientappointments` SET `Prescription`= '$prescription',`Doctor Name` = '$username', `Status` = 'Done' WHERE ID = '$idnum'";

        $result = mysqli_query($con,$query);

        if($result)
        {
            echo "
                <script> alert('Prescription Successful. ');
                window.location.replace('//localhost/PROJECT/view-patients.php');
                </script>
            ";
        }
        else
        {
            echo "
                <script> alert('Prescription Successful. ');
                window.location.replace('//localhost/PROJECT/view-patients.php');
                </script>
        ";
        }
    }
}
?>