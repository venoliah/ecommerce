<?php
require("connect2.php");

print_r($_POST);

$reg_number=$_POST["reg_number"];
$First_Name=$_POST["First_Name"];
$Surname=$_POST["Surname"];
$Phone_Number=$_POST["Phone_Number"];
$Email=$_POST["Email"];
$User_Name=$_POST["User_Name"];
$Password=$_POST["Password"];
$Confirm_Password=$_POST["Confirm_Password"];
$Sex=$_POST["Gender"];

$sql = "INSERT INTO `registration`(`reg_number`, `First_Name`, `Surname`, `Phone_Number`, `Email`, `User_Name`, `Password`, `Confirm_Password`, `Gender`) 
VALUES ('$reg_number','$First_Name','$Surname','$Phone_Number','$Email','$User_Name','$Password','$Confirm_Password','$Sex')";



if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>