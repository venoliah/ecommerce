<?php

require("connect2.php");
$sql ="SELECT product_name, product_image, subcategory_name FROM tbl_product";
$result = mysqli_query($conn,$sql);

?>


<html>
    <head>
        <title>Add product</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    
    </head>

    <body>
    <fieldset>
        <legend>Add Your Product Here</legend>
        <form action="product_view.php" method="post"></form>

        <label for="product_id">Item_id: </label>
        <input type="number" name="product_id" value="" id="product_id"><br><br>
        <label for="product_name">Item_name : </label>
        <input type="text" name="product_name" value="" id="product_name"><br><br>
        <label for="product_image">Item_Image : </label>
        <input type="file" id="product_image" name="product_image" value=""><br><br>
        <label for="product_description">Item_description : </label>
        <input type="text" name="product_description" value="" id="product_description"><br><br>
        <label for="subcategory_name">Subcategory : </label>
        <input type="text" id="subcategory_name" name="subcategory_name" value=""><br><br>
        <label for="unit_price">price : </label>
        <input type="number" name="unit_price" value="" id="unit_price"><br><br>
        <button type="submit" onclick="window.location.href='displayproducts.php'">ENTER</button >


    </fieldset>

    <?php
	 $result = mysqli_query($conn,$sql);

     if(mysqli_num_rows($result)>0){
	 
        while($row = mysqli_fetch_assoc($result)){;

     $product_name=$row["product_name"];
    $product_image=$row["product_image"];
    $subcategory_name=$row["subcategory_name"];

    
         }
		
       }
     ?>
    </body>
</html>