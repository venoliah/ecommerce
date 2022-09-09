<?php
require("connect2.php");

// print_r($_POST);



$product_id=$_GET['editproductid'];
$sql = "SELECT * FROM tbl_product";
/*$result =mysqli_query($con,$sql);*/
$result = $conn->query($sql);
$row=mysqli_fetch_assoc($result);

$product_name=$row["product_name"];
$product_description=$row["product_description"];
$unit_price=$row["unit_price"];


if(isset($_POST['submit'])){
  $product_id=$_POST['product_id'];
  $product_name=$_POST['product_name'];
  $product_description=$_POST['product_description'];
  $unit_price=$_POST['unit_price'];


$sql = "update `tbl_product` set product_id='$product_id',product_name='$product_name',product_description='$product_description',unit_price='$unit_price' 
where product_id=$product_id ";


if (mysqli_query($conn, $sql)) {
  /*echo "New record created successfully";*/
  header('location:userproduct_view.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}


?>

