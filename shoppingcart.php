<?php
require("connect2.php");



?>
<html>
    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="user.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    </head>

    <body>
<h1>Shop With Us!!!</h1>
   

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
            <a href="userprofilepage.php">
            <span class="material-icons-sharp">person</span>
                                    <h3>Profile</h3>
            </a>
            <a href="addcategory.php">
            <span class="material-icons-sharp">home</span>
                        <h3>Home</h3>
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
    <table class="user-tbl">
        
    <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Number of Items</th>
        <th>Operations</th>
        <th>Total Cost</th>
       
        <?php

       
        
        $sql = "SELECT *FROM shopping_cart" ;
        $grand_total=0;
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

        if($count>0)
        {
            while($row=mysqli_fetch_assoc($res))
        {
    
            $product_name=$row['product_name'];
            $product_description=$row['product_description'];
            $product_image=$row['product_image'];
            $unit_price=$row['unit_price'];
            $available_quantity=$row['available_quantity'];

        
        
        ?>
        <tr>

                <td>
                  <?php echo $product_description; ?> 

                  
                     <?php
                      if($product_image=="")
                      {
                      //  echo "<div class=""> image not added</div>";
                      }
                      else
                      {
                        ?>
                        
                        <img src='<?php echo $product_image; ?>' width='100px' >

                        <?php
                      }
                      
                      ?> 
                      

                   <td> <?php echo $product_name; ?> </td>


                   <td> <?php echo "KSH"  .$unit_price; ?> </td>


                  <td>
                    <?php echo "number of items:"?><br>
                    <input type="number" id="no_items" name="available_quantity" min="1">
                   </td>


                     <td>   
                <a href="" class="btn-primary">EDIT</a>
                <a href="delete-clothes.php ?id=<?php echo $ProductId; ?> &Image=<?php echo $Image; ?> " class="btn-primary">DELETE</a>
                    </td>
                    <td> 
                    <?php $grand_total= $unit_price * $available_quantity ?>    
                    <?php echo "KSH"  .$grand_total; ?> </td>

                    </td>
                    
            
            
           
                  
        </tr><br>

      
        

        

               <?php



            }
        }
        else
        {
           // echo"<tr> <td colspan="6" class=" ">User not added yet</td> </tr>";
        }

        
        ?>

        
        </table>
          
        <tr class="table-bottom">
          
          <td><a href="userprofilepage.php" >Continue shopping</a></td><br>
          <td colspan="3">grand total</td>
          <?php $grand_total=$unit_price+$unit_price ?>
          <td><?php echo $grand_total;?></td><br>
            <td><a href="Incart.php?delete_all" class="cart-buttons" onclick="return confirm('are you sure you want to delete all?')">DELETE ALL</a></td>

            <div class="checkout-btn">
        <a href="checkout.php" class="btn <?=($grand_total >1)?'': 'disabled';?>">Proceed to checkout</a>

        </tr>

       
    
    
    </main>

     </div>
     
 </div>
    </body>
    </html>