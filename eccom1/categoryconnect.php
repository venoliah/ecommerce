<?php
require("connect2.php");

print_r($_POST);

$category_id=$_POST["category_id"];
$category_name=$_POST["category_name"];
$category_image=$_POST["category_image"];


$sql = "INSERT INTO `tbl_categories`(`category_id`, `category_name`, `category_image`) 
VALUES ('$category_id','$category_name','$category_image')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>