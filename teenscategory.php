<html>
    <head>
        <title>Teens category</title>
        <link rel="stylesheet" href="userprofile.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    </head>

    <body>

    <ul>
    <li><a href="weddingcategory.php" target="_self">WeddingBans</a></li>
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
            <a href="subcategory.php">
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
       $sql = "SELECT *FROM tbl_product WHERE category_name='Teens'" ;
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
       <div class="expenses">
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
                 <span class="material-icons-sharp">shopping_cart </span> 
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
        </main>



        
    </body>
</html>