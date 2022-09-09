<?php
require("connect2.php");


$product_name=$_POST["product_name"];
$product_description=$_POST["product_description"];
$unit_price=$_POST["unit_price"];




$sql = "INSERT INTO `shopping_cart`(`product_name`, `product_description`, `unit_price`, `product_image`) 
VALUES ('$product_name','$product_description','$unit_price','$product_image')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('location:'.'productedit_view.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);




?>