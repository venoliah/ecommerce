<?php

include('../Eccomerce/connect2.php'); 

if(isset($_POST['order_btn'])){

  $First_Name = $_POST['First_Name'];
  $Surname = $_POST['Surname'];
  $Phone_Number = $_POST['Phone_Number'];
   $payment_type = $_POST['payment_type'];
   $quantity = $_POST['quantity'];
   $unit_price = $_POST['unit_price'];

   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `shopping_cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name = $product_name['product_name'] .'('. $product_item['Quantity'] .') ';
         $grand_total= number_format($product_name['unit_price'] * $quantity['quantity']);
         $price_total += $product_price;
      };
   };

  $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `tbl_order`(First_Name, Surname, Phone_Number, payment_type,city,state, country, unit_price,quantity) VALUES('$First_Name','$Surname','$Phone_Number','$payment_type','$city','$state','$country','$price_total','$quantity')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : $".$price_total."/-  </span>
         </div>
         <div class='customer-details'>
            <p>  name : <span>".$First_Name."</span> </p>
            <p>  number : <span>".$Phone_Number."</span> </p>
            <p>  email : <span>".$Surname."</span> </p>
            <p>  address : <span> ".$city.", ".$state.", ".$country." - </span> </p>
            <p>  payment mode : <span>".$payment_type."</span> </p>
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

   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

   <link rel="stylesheet" href="categories.css">

</head>
<body>

<!--<?php include 'header.php'; ?>-->

<div class="container">
<div class="admin-form">




   <form action="" method="post">

   <h3>Order Details</h3>

      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `shopping_cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['unit_price'] * $fetch_cart['quantity']);
          // echo $grand_total = $total += $total_price;
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
         <div class="admin-form">
            <input type="text" placeholder="enter your name" name="First_Name" required>
         </div>
         <div class="admin-form">
            <input type="number" placeholder="enter your number" name="Phone_Number" required>
         </div>
         <div class="admin-form">
            <input type="email" placeholder="enter your email" name="Email" required>
         </div>
         <div class="admin-form">
            <select name="PaymentMethod">               
               <option value="m-pesa" selected>m-pesa</option>
               <option value="cash on delivery" >cash on delivery</option>
               <option value="credit card">credit card</option>
            </select>
         </div>
         
         <div class="admin-form">
            <input type="text" placeholder="County Name" name="city" required>
         </div>
         <div class="admin-form">
            <input type="text" placeholder="Division Name" name="state" required>
         </div>
         <div class="admin-form">
            <input type="text" placeholder="Country Name" name="country" class="box" required>
         </div>
         
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

</div>

<!-- custom js file link  -->
<!--<script src="js/script.js"></script>-->
   

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>