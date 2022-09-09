<?php
require("connect2.php");

//print_r($_POST);
 //print_r($_FILES);

?>
<html>
    <head>
        <title>Shopping Cart</title>
        <link rel="stylesheet" href="user.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    </head>

    <body>

   

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
       
        <?php

       
        
        $sql = "SELECT *FROM shopping_cart" ;
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
        
        
        ?>
        <tr>
                <td>
                   <?php echo $product_name; ?> 
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
                      

                   <?php echo $unit_price; ?> 

                     <td>        
                <a href="" class="btn-primary">EDIT</a>
                <a href="delete-clothes.php ?id=<?php echo $ProductId; ?> &Image=<?php echo $Image; ?> " class="btn-primary">DELETE</a>
                    </td>
                    </td>
            
            
            <?php  
                      $x=$unit_price;  
                      $y=$unit_price;  
                      $Total_cost=$x+$y;  
                      echo "Total cost: ",$Total_cost;  
                ?>
                  
        </tr>

               <?php



            }
        }
        else
        {
           // echo"<tr> <td colspan="6" class=" ">User not added yet</td> </tr>";
        }

        
        ?>




     </table></main>

     </div>
     
 </div>
    </body>
    </html>