<?php
require('connect2.php');

if (isset($_POST)) {
    //$id = $_POST['id'];
    $reg_number=$_POST["reg_number"];
    $First_Name=$_POST["First_Name"];
    $Surname=$_POST["Surname"];
    $Phone_Number=$_POST["Phone_Number"];
    $Email=$_POST["Email"];
    $User_Name=$_POST["User_Name"];
    $Password=$_POST["Password"];
    $Confirm_Password=$_POST["Confirm_Password"];
    $Sex=$_POST["Gender"];
    $update_data = "UPDATE registration SET First_Name='$First_Name' ,Surname='$Surname',Email='$Email',Padssword='$Password',Confirm_Password='$Confirm_Password',Phone_Number='$Phone_Number' WHERE reg_number ='$reg_number'";

    if (mysqli_query($conn, $update_data)) {
        echo "Record updated successfully" . "<br/>";
        // header("location:viewuser.php");
    } else {

        echo "Error:" . $sql . "<br/>" . mysqli_error($conn);
        // header("location:view users.php");
    }
}
?>