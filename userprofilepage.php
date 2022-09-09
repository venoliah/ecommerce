<?php
require("connect2.php");
if (!isset($_SESSION)) {
session_start();
}
?>
<html>
    <head>
        <title>Profile Page </title>
        <link rel="stylesheet" href="profile.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    </head>



    <body>

    <ul>
    <li><a href="weddingcategory.php" target="_self">WeddingBans</a></li>
    <li> <a href="teens2.php" target="_self">Teens</a></li>
    <li><a href="men2.php" target="_self">Men</a></li>
    <li><a href="women2.php" target="_self">Women</a></li>
    <li><a href="userprofilepage.php" target="_self">Profile</a></li>



            </ul>


            <div class="sidetop">
            <aside>  
            <div class="top"> 
                <div class="logo">
          
                </div>   
            </div>
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
            <a href="shoppingcart2.php">
            <span class="material-icons-sharp">shopping_cart</span>
                                    <h3>Cart</h3>
            </a>
            <a href="products.php">
            <span class="material-icons-sharp">favorite</span>
                                    <h3>Liked</h3>
            </a>

            <a href="purchaselogs.php">
            <span class="material-icons-sharp">
history
</span>
                                    <h3>History</h3>
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
            <a href="logout.php">
                <span class="material-icons-sharp">
                    logout
                    </span>
                                    <h3>Logout</h3>
            </a>
        </aside>
                  



        <main>

           

            <div class="insights" >

                <div class="profile" >
                    <span class="material-icons-sharp">account_circle</span>
                    <div class="middle">
                        <div class="left">
                        <?php
                        if (isset($_SESSION['reg_number'])) {
                        echo '<a>'. $_SESSION['User_Name'] . '</a>';
                    } else {
                    ?>
                        <!-- <a href="#" id="admin-btn"><img src="./Icons/lock-svgrepo-com.svg"><br>Admin</a> -->
                        <li><a href="login.php">Login/Sign Up</a></li>
                    <?php
                    }
                    ?>
                        </div>
                       
                    </div>
                </div><br><br><br><br>


            </div>



            <?php


if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
        <div class="insights" >

     <!----------------------view products/clothes table----------------->
     
        <?php

        
        $sql = "SELECT *FROM tbl_product" ;
        //$sql= "SELECT tbl_product.product_image,tbl_product.product_name,tbl_product.unit_price,registration.reg_number,registration.Phone_Number,registration.Email FROM  tbl_product,registration WHERE category_name='Women'";
        
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

        if($count>0)
        {
            while($fetch_product = mysqli_fetch_assoc($res)){
                ?>

          
                <form action=" " method="post">
                   <div class="expenses">
                      <img src="<?php echo $fetch_product['product_image']; ?>" alt="" width="300" height="400">
                      <h3><?php echo $fetch_product['product_name']; ?></h3>
                     <!-- <div class="unit_price">ksh.<?php echo $fetch_product['unit_price']; ?></div>
                      <input type="hidden" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
                      <input type="hidden" name="unit_price" value="<?php echo $fetch_product['unit_price']; ?>">-->
                      <input type="hidden" name="product_image" value="<?php echo $fetch_product['product_image']; ?>">

                      <!--<input type="hidden" name="reg_number" value="<?php echo $fetch_product['reg_number']; ?>">
                      <input type="hidden" name="Phone_Number" value="<?php echo $fetch_product['Phone_Number']; ?>">
                      <input type="hidden" name="Email" value="<?php echo $fetch_product['Email']; ?>">-->

                      <!--<button input type="submit" class="btn" value="add to cart" name="add_to_cart"><span class="material-icons-sharp">shopping_cart</span></button>
                      <span class="material-icons-sharp"> favorite</span>-->

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



     </div>
     
 </div>

        </main>



        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
    </body>
</html>