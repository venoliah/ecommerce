<?php
require("connect2.php");

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







            <?php
        
        $sql = "SELECT *FROM registration,tbl_product" ;
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

       if($count>0)
        {
            while($row=mysqli_fetch_assoc($res))
        {
    
            $User_Name=$row['User_Name'];
            $Email=$row['Email'];
            $product_name=$row['product_name'];
            $product_description=$row['product_description'];
            $product_image=$row['product_image'];
            $unit_price=$row['unit_price'];
        
        
        ?>
        
<!--
                 <?php echo $User_Name; ?> 
                   <?php echo $Email; ?> 
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
                        
                        <img src="<?php echo $product_image; ?>"  width="100px" >

                        <?php
                      }
                      
                      ?> 
                      </td>

                  <?php echo $unit_price; ?> 

                <a href="" class="btn-primary">EDIT</a>
                <a href="delete-clothes.php ?id=<?php echo $ProductId; ?> &Image=<?php echo $Image; ?> " class="btn-primary">DELETE</a>
                  

               <?php



            }
        }
        else
        {
           // echo"<tr> <td colspan="6" class=" ">User not added yet</td> </tr>";
        }

        
        ?> 
        -->


        <main>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights" >

                <div class="profile" >
                    <span class="material-icons-sharp">account_circle</span>
                    <div class="middle">
                        <div class="left">
                            <h3> <?php echo $User_Name; ?></h3>
                            <h1> <?php echo $Email; ?> </h1>
                        </div>
                       
                    </div>
                </div><br><hr>


               <!-- <div class="sales">
                    <span class="material-icons-sharp">shopping_cart</span>
                    <span class="material-icons-sharp"> favorite</span>
                    <span class="material-icons-sharp">
                        paid
                        </span><br><br>
                    <img src="https://i.pinimg.com/236x/e3/9a/1f/e39a1f5bdbbaaf0f8be5ce5e28750e8a.jpg" alt="https://i.pinimg.com/236x/e3/9a/1f/e39a1f5bdbbaaf0f8be5ce5e28750e8a.jpg">
                    <div class="middle">
                        <div class="left">
                            <h3>Palazo</h3>
                            <h1>Ksh 20000</h1>
                        </div>
                       
                    </div>
                </div>


                <div class="expenses">
                    <span class="material-icons-sharp">shopping_cart </span>  
                    <span class="material-icons-sharp"> favorite</span>
                    <span class="material-icons-sharp">
                        paid
                        </span>  <br><br>
                    <img src="https://i.pinimg.com/236x/ae/49/ed/ae49ed363f436ec80ce7a173c0c5f94a.jpg" alt="https://i.pinimg.com/236x/ae/49/ed/ae49ed363f436ec80ce7a173c0c5f94a.jpg">
                        <div class="middle">
                        <div class="left">
                            <h3>suits</h3>
                            <h1>Ksh 30000</h1>
                        </div>
                        
                    </div>
                </div>


                <div class="income">
                    <span class="material-icons-sharp">shopping_cart</span>
                    <span class="material-icons-sharp"> favorite</span>
                    <span class="material-icons-sharp">
                        paid
                        </span><br><br>
                    <img src="https://i.pinimg.com/236x/eb/f0/da/ebf0da310fb21af103d90f9837a73834.jpg" alt="https://i.pinimg.com/236x/eb/f0/da/ebf0da310fb21af103d90f9837a73834.jpg">
                    <div class="middle">
                        <div class="left">
                            <h3>gowns</h3>
                            <h1>Ksh 120000</h1>
                        </div>
                       
                    </div>
                </div> -->

                <div class="expenses">
                    <span class="material-icons-sharp">shopping_cart </span>  
                    <span class="material-icons-sharp"> favorite</span>
                    <span class="material-icons-sharp">
                        paid
                        </span>  <br><br>
                        <img src="<?php echo $product_image; ?>"  width="100px" >
                        <div class="middle">
                        <div class="left">
                        <h3> <?php echo $product_name; ?> </h3>
                            <h3> <?php echo $product_description; ?> </h3>
                       <h3> <?php echo $unit_price; ?> </h3>
                        </div>
                        
                    </div>
                </div>
            </div>
        </main>



        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        
    </body>
</html>