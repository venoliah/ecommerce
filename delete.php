<?php

require("connect2.php");

if(isset($_GET['product_id'])){
    $product_id=$_GET['product_id'];

    $sql="delete from 'tbl_product' where product_id=$product_id";
    $result = $conn->query($sql);

if ($result) {
echo "Deleted succesfully" ;
 } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
}

mysqli_close($conn);

?>