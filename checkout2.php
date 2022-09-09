<?php

include('../Eccomerce/connect2.php'); 

if(isset($_POST['order_btn'])){

   $name = $_POST['First_Name'];
   $surname = $_POST['Surname'];
   $number = $_POST['Phone_Number'];
   $address = $_POST['address'];
   $order_status= $_POST['order_status'];
   $method = $_POST['payment_type'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $product = $_POST['product'];
   $cost = $_POST['cost'];
   $quantity = $_POST['quantity'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `shopping_cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['product_name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['unit_price'] * $product_item['quantity']);
        // $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `tbl_order`(First_Name, Surname, Phone_Number,address,order_status,payment_type, city,state, country,product,cost,quantity) VALUES('$name','$surname',' $number','$address','$order_status','$method','$city','$state','$country','$product','$cost','$quantity')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Come Again!!!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p>  name : <span>".$name."</span> </p>
            <p>  surname : <span>".$surname."</span> </p>
            <p>  number : <span>".$number."</span> </p>
            <p>  address : <span> ".$city.", ".$state.", ".$country." - ".$quantity."</span> </p>
            <p>  number : <span>".$product."</span> </p>
            <p>  number : <span>".$cost."</span> </p>

            <p>  payment mode : <span>".$method."</span> </p>
            <p>(pay when product arrives)</p>
         </div>
            <a href='all-clothing.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>


   <link rel="stylesheet" href="check.css">

</head>
<body>



<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `shopping_cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['unit_price'] * $fetch_cart['quantity']);
           echo $grand_total = $total and  $total_price;
      ?>
      <span><?= $fetch_cart['product_name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : ksh.<?= $grand_total; ?></span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <input type="text" placeholder="First Name" name="First_Name" required>
         </div>

         <div class="flex">
         <div class="inputBox">
            <input type="text" placeholder="Surname" name="Surname" required>
         </div>


         <div class="inputBox">
            <input type="number" placeholder="Phone Number" name="Phone_Number" required>
         </div>
         <div class="inputBox">
            <input type="text" placeholder="address" name="address" required>
         </div>

         <div class="flex">
         <div class="inputBox">
            <input type="text" placeholder="Order Status" name="order_status" required>
         </div>


         <div class="inputBox">
            <select name="payment_type">               
               <option value="m-pesa" selected>m-pesa</option>
               <option value="cash on delivery" >cash on delivery</option>
               <option value="credit cart">credit cart</option>
            </select>
         </div>
         
         <div class="inputBox">
            <input type="text" placeholder="city" name="city" required>
         </div>
         <div class="inputBox">
            <input type="text" placeholder="Region" name="state" required>
         </div>
         <div class="inputBox">
            <input type="text" placeholder="Country" name="country" required>
         </div>
         

         <div class="inputBox">
            <input type="text" placeholder="product name" name="product" required>
         </div>

         <div class="inputBox">
            <input type="text" placeholder="Total cost" name="cost" required>
         </div>

         <div class="inputBox">
            <input type="number" placeholder="no of items" name="quantity" required>
         </div>

         

         
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn-primary">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>