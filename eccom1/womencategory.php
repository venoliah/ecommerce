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
        <?php include('../Eccomerce/connect2.php'); ?>



<div >
    
    <div class="insights" >
   


  


       <?php
       $sql = "SELECT *FROM tbl_product WHERE category_name='WOMEN'" ;
       $res = mysqli_query($conn, $sql);
       
       $count= mysqli_num_rows($res);

       $sn = 1;

       if($count>0)
       {
           while($row=mysqli_fetch_assoc($res))
       {
        $product_id=$row['product_id'];
           $product_name=$row['product_name'];
           $unit_price=$row['unit_price'];
           $product_description=$row['product_description'];
           $product_image=$row['product_image'];

          
        
       ?>

       <div class="expenses">
       <tr>

                
                 <td> <?php echo $product_name; ?> </td>
                 <td> <?php echo $product_description; ?> </td>
                 <td> <?php echo $unit_price; ?> </td>


                 <td>
                    <?php

if(isset($_POST['add_products'])){
    print_r($_POST['product_id']);}
                     if($product_image=="")
                     {
                     //  echo "<div class=""> image not added</div>";
                     }
                     else
                     {
                       ?>
                       
                       <img src=" <?php echo $product_image; ?>"  width="150px" >

                       <?php
                     }
                     
                     ?> 
                     </td>

                 
                 

                 <td> <br><br> 
                 <button type="submit" class="btn" name="add_Product" value="add"><span class="material-icons-sharp"> shopping_cart</span></button> 
                 <input type="hidden" name="product_id" value="$product_id">
                    <!--<a href="shoppingcart.php"><span class="material-icons-sharp"> shopping_cart</span></a>  -->          
                 <span class="material-icons-sharp"> favorite</span>
 
               
           </td>
           &nbsp; &nbsp; 
                 
       </tr>
       </div>


              <?php



           }
       }
       else
       {
          // echo"<tr> <td colspan="6" class=" ">User not added yet</td> </tr>";
       }

       
       ?>
</div>
    
    </div>

    </form>

        </main>


        
    </body>
</html>






















<!--<?php include('../Eccomerce/connect2.php'); ?>

 <div class="main-content">
     
     <div class="wrapper">
     <h1>WOMEN</h1>

     <br><br>


     <br><br>


   


        <?php
        $sql = "SELECT *FROM tbl_product WHERE category_name='WOMEN'" ;
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

        if($count>0)
        {
            while($row=mysqli_fetch_assoc($res))
        {
    
            $product_name=$row['product_name'];
            $unit_price=$row['unit_price'];
            $product_image=$row['product_image'];

           
         
        ?>
        <tr>

                 
                  <td> <?php echo $product_name; ?> </td>
                  <td> <?php echo $unit_price; ?> </td>

                  <td>
                     <?php
                      if($product_image=="")
                      {
                      //  echo "<div class=""> image not added</div>";
                      }
                      else
                      {
                        ?>
                        
                        <img src=" <?php echo $product_image; ?>"  width="150px" >

                        <?php
                      }
                      
                      ?> 
                      </td>

                  
                  

                  <td>               
                <a href="" class="btn-primary">ADD TO CART</a>
                
            </td>
            &nbsp; &nbsp; 
                  
        </tr>

               <?php



            }
        }
        else
        {
           // echo"<tr> <td colspan="6" class=" ">User not added yet</td> </tr>";
        }

        
        ?>
 </div>
     
     </div>-->
     