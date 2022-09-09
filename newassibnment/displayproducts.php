<?php
require("connect2.php");

?>

<html>
   <head>
    <title>Product View</title>
    <link rel="stylesheet" href="user.css">

   </head>

   <body>
    
   <table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Item_Id</th>
            <th scope="col">Item_name</th>
            <th scope="col">Item_Image</th>
            <th scope="col">Item_description</th>
            <th scope="col">price</th>      
          </tr>

    </thead>

    <tbody>
        <?php

        $sql = "SELECT * FROM tbl_product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row=mysqli_fetch_assoc($result)){
        
        $product_id=$row["product_id"];
        $product_name=$row["product_name"];
       $product_image=$row["product_image"];

        $product_description=$row["product_description"];
        $unit_price=$row["unit_price"];
        
        echo ' <tr>
        <td scope="row">'.$product_id.'</td>
        <td>'.$product_name.'</td>
        <td>'.$product_image.'</td>
        <td>'.$product_description.'</td>
        <td>'.$unit_price.'</td>
        
        <td>
            <button class="btn"><a href="edit.php? editproductid='.$product_id.'">EDIT</a></button>
            <button class="btn"><a href="delete.php? product_id='.$product_id.'">DELETE</a></button>
        </td>
        
        </tr>';
            
        }
    }
        ?>
    </tbody>
   </body>
</html>