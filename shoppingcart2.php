<?php
require("connect2.php");

?>
<?php


if(isset($_POST['update_update_btn'])){
   $quantity = $_POST['quantity'];
   $cart_number = $_POST['cart_number'];
   $quantity_query = mysqli_query($conn, "UPDATE `shopping_cart` SET quantity = '$quantity' WHERE cart_number = '$cart_number'");
   if($update_quantity_query){
      header('location:shoppingcart2.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `shopping_cart` WHERE cart_number= '$remove_id'");
   header('location:shoppingcart2.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `shopping_cart`");
   header('location:shoppingcart2.php');
}

?>

<html>

    <head>
        <meta charset="utf-8">
	<title>clothing website</title>
	<link rel="stylesheet" href="user.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    </head>

    <body class="cart-body">

 <div class="main-contents">
     
     <div class="wrappers">
     <h2>SHOPPING CART</h2> <br><br>
     </div>

     <br><br>

     

     <!----------------------view shopping cart details----------------->
     <div class="container">

<section class="shopping-cart">

   <table>

      <thead>
           <th>Count</th>
           <th>Image</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Operation</th>
            
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `shopping_cart`");
         $grand_total = 0;
         $sn = 1;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
             <td> <?php echo $sn++; ?> </td>
            <td><img src="<?php echo $fetch_cart['product_image']; ?>" width="100" alt=""></td>

            <td><?php echo $fetch_cart['product_name']; ?></td>

            <td>$<?php echo number_format($fetch_cart['unit_price']); ?>/-</td>

            <td>
               <form action="" method="post">
                  <input type="hidden" name="cart_number"  value="<?php echo $fetch_cart['cart_number']; ?>" >
                  <input type="number" name="quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn" class="btn-primary">
               </form>   
            </td>

            <td>ksh.<?php echo $sub_total = number_format($fetch_cart['unit_price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="shoppingcart2.php?remove=<?php echo $fetch_cart['cart_number']; ?>" onclick="return confirm('remove item from cart?')" class="btn-primary"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>

         <?php
          // $grand_total =$grand_total+ $sub_total;  

            };
         };
         ?>

         <tr class="table-bottom">
            <td><a href="userprofilepage.php" class="btn" style="margin-top: 0;">Profile Page</a></td>
            <td colspan="3">grand total</td>
            <td>$<?php echo $grand_total; ?>/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="btn-primary"> <i class="fas fa-trash"></i> delete all </a></td>
         </tr>
         
      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout2.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">CHECKOUT</a>
   </div>

</section>

</div>
   
    
    
    
     </div>
     
 </div>
    </body>
    </html>