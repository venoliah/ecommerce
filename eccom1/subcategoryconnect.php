<?php
require("connect2.php");

print_r($_POST);

$subcategory_id=$_POST["subcategory_id"];
$subcategory_name=$_POST["subcategory_name"];
$category_name=$_POST["category_name"];
$subcategory_image=$_POST["subcategory_image"];


$sql = "INSERT INTO `tbl_product`(`subcategory_id`, `subcategory_name`, `category_name`, `subcategory_image`) 
VALUES ('$subcategory_id','$subcategory_name','$category_name','$subcategory_image')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>