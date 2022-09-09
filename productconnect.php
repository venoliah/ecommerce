<?php
require("connect2.php");

// print_r($_POST);
// print_r($_FILES);



$product_id=$_POST["product_id"];
$product_name=$_POST["product_name"];
$product_description=$_POST["product_description"];
$product_image=$_FILES['product_image']['name'];
$product_img_tmp_name=$_FILES['product_image']['tmp_name'];
$product_img_folder="Eccomerceimages/".$product_image;
$unit_price=$_POST["unit_price"];
$available_quantity=$_POST["available_quantity"];
$category_name=$_POST["category_name"];
$subcategory_name=$_POST["subcategory_name"];
$created_at=$_POST["created_at"];
$updated_at=$_POST["updated_at"];
$added_by=$_POST["added_by"]; 

/*if(isset($_FILES)){
  echo "<br><br><br>";
  print_r($_FILES);

  $image_dir='Eccomerceimages/';
  $temp_file=$_FILES['product_image']['tmp_name'];
  $uploaded_name=$_FILES['product_image']['name'];
  $to_upload=$image_dir.$uploaded_name;
  move_uploaded_file($temp_file,$to_upload);
  //echo $to_upload;

}*/





$sql = "INSERT INTO `tbl_product`(`product_id`, `product_name`, `product_description`, `product_image`, `unit_price`, `available_quantity`, `category_name`, `subcategory_name`, `created_at`, `updated_at`, `added_by`) 
VALUES ('$product_id','$product_name','$product_description','$product_img_folder','$unit_price','$available_quantity','$category_name','$subcategory_name','$created_at','$updated_at ','$added_by')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('location:'.'productedit_view.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn);




?>




 