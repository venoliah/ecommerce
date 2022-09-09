<?php
require("connect2.php");
if (!isset($_SESSION)) {
    session_start();
}
?>

<html>
    <head>
        <title>Order View</title>
        <link rel="stylesheet" href="userprofilepurchase.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    </head>


    <body>

    <ul>
<li><a href="wedding2.php" target="_self">WeddingBans</a></li>
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
        <h1>Customer Orders</h1><br><br>

        <table>

            <tr>
            <th>First Name</th>
            <th>Surname</th>
            <th>Phone number</th>
            <th>Order status</th>
            <th>Country</th>
            <th>Quantity</th>
            <!--<th>Product name</th>
            <th>Total Cost</th>-->
            <th>Operation</th>
        </tr>

        <?php
            $id=$_SESSION['User_Name'];

        $sql = "SELECT *FROM tbl_order WHERE First_Name='$id'";
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

        if($count>0)
        {
            while($row=mysqli_fetch_assoc($res))
        {
           // $First_Name=$row['First_Name'];
           $_SESSION['First_Name'] = $row['First_Name'];
            $Surname=$row['Surname'];
            $Phone_Number=$row['Phone_Number'];
            $order_status=$row['order_status'];
            $country=$row['country'];
           $quantity=$row['quantity'];

        
        
        ?>
        <tr>

                  <td> <?php echo $First_Name; ?> </td>
                  <td> <?php echo $Surname; ?> </td>
                  <td> <?php echo $Phone_Number; ?> </td>
                  <td> <?php echo $order_status; ?> </td>
                  <td> <?php echo $country; ?> </td>
                  <!--<td> <?php echo $product_name; ?> </td>
                  <td> <?php echo $grand_total; ?> </td>-->
                  <td> <?php echo $quantity; ?> </td>



                  <td>   
                               
                <a href="# ?id=<?php echo $ProductId; ?> &Image=<?php echo $Image; ?> " class="btn-primary">REMOVE</a>
            </td> 
                  
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



    </body>
</html>