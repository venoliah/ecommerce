<?php
require("connect2.php");

/*print_r($_POST);*/
print_r($_FILES);


$product_id=$_POST["product_id"];
$product_name=$_POST["product_name"];
$product_description=$_POST["product_description"];

$unit_price=$_POST["unit_price"];
$available_quantity=$_POST["available_quantity"];
$subcategory_id=$_POST["subcategory_name"];
$created_at=$_POST["created_at"];
$updated_at=$_POST["updated_at"];
$added_by=$_POST["added_by"]; 

if(isset($_FILES)){
  echo "<br><br><br>";
  print_r($_FILES);

  $image_dir=addslashes('C:\xampp\htdocs\Eccomerce\Eccomerceimages');
  $temp_file=$_FILES['product_image']['tmp_name'];
  $uploaded_name=$_FILES['product_image']['name'];
  $to_upload=$image_dir.$uploaded_name;
  move_uploaded_file($temp_file,$to_upload);
  //echo $to_upload;

}




$sql = "INSERT INTO `tbl_product`(`product_id`, `product_name`, `product_description`, `product_image`, `unit_price`, `available_quantity`, `subcategory_name`, `created_at`, `updated_at`, `added_by`) 
VALUES ('$product_id','$product_name','$product_description','$to_upload','$unit_price','$available_quantity','$subcategory_id','$created_at','$updated_at ','$added_by')";

if (mysqli_query($conn, $sql)) {
  /*echo "New record created successfully";*/
  header('location:userproduct_view.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>




 