<?php include('../Eccomerce/connect2.php'); ?>

<?php

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $unit_price = $_POST['unit_price'];
    $product_image= $_POST['product_image'];

   // $Quantity = 1;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `shopping_cart` WHERE product_name= '$product_name'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart';
    }else{
       $insert_product = mysqli_query($conn, "INSERT INTO `shopping_cart`(product_name, unit_price, product_image) VALUES('$product_name', '$unit_price', '$product_image')");
       $message[] = 'product added to cart succesfully';
    }
 
 }



?>

<html>
    <head>
        <title>womens category</title>
        <link rel="stylesheet" href="userprofile.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    </head>

    <body>

    <ul>
    <li><a href="#weddingcategory.php" target="_self">WeddingBans</a></li>
    <li> <a href="teenscategory.php" target="_self">Teens</a></li>
    <li><a href="menscategory.php" target="_self">Men</a></li>
    <li><a href="womencategory.php" target="_self">Women</a></li>
    <li><a href="userprofilepage.php" target="_self">Profile</a></li>

  </ul>

  <div class="sidetop">
            <aside>  
            <div class="top"> 
                <div class="logo">
          
                </div>   
            </div>
        <div class="sidebar">
            <a href="#" class="active">
                <span class="material-icons-sharp"> dashboard</span>     
                <h3>Dashboard</h3>
            </a>
            <a href="addcategory.php">
            <span class="material-icons-sharp">home</span>
                        <h3>Home</h3>
            </a>
            <a href="shoppingcart.php">
            <span class="material-icons-sharp">shopping_cart</span>
                                    <h3>Cart</h3>
            </a>
            <a href="products.php">
            <span class="material-icons-sharp">favorite</span>
                                    <h3>Liked</h3>
            </a>
            <a href="#">
            <span class="material-icons-sharp">settings</span>
                                    <h3>settings</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">
                    email
                    </span>
                                    <h3>Contact</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">
                    report_problem
                    </span>
                                    <h3>Report</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">
                    logout
                    </span>
                                    <h3>Logout</h3>
            </a>
        </aside>

        <main>
            

        <?php

        if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
    

     <!----------------------view products/clothes table----------------->
     
        <?php
        
        $sql = "SELECT *FROM tbl_product WHERE category_name='Women'" ;
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

        if($count>0)
        {
            while($fetch_product = mysqli_fetch_assoc($res)){
                ?>
          
                <form action=" " method="post">
                   <div class="box">
                      <img src="<?php echo $fetch_product['product_image']; ?>" alt="">
                      <h3><?php echo $fetch_product['product_name']; ?></h3>
                      <div class="unit_price">ksh.<?php echo $fetch_product['unit_price']; ?></div>
                      <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
                      <input type="hidden" name="unit_price" value="<?php echo $fetch_product['unit_price']; ?>">
                      <input type="hidden" name="product_image" value="<?php echo $fetch_product['product_image']; ?>">
                      <!--<input type="submit" class="btn" value="add to cart" name="add_to_cart">-->
                      <button type="submit" class="btn" name="add_to_cart" value="add to cart"><span class="material-icons-sharp"> shopping_cart</span></button> 
                      <span class="material-icons-sharp"> favorite</span>

                   </div>
                </form>
          
            
                 
               <?php
            }
        }
        else
        {
           // echo"<tr> <td colspan="6" class=" "> not added yet</td> </tr>";
        }
        
        ?>
        </main>



       


        
    </body>
</html>