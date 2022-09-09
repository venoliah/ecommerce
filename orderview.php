<?php
require("connect2.php");

?>

<html>
    <head>
        <title>Order View</title>
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
                <a href="admin2.php" class="active">
                    <span class="material-icons-sharp"> dashboard</span>     
                    <h3>Dashboard</h3>
                </a>
                <a href="addcategory.php">
                    <span class="material-icons-sharp">
                        add_circle_outline
                        </span>
                            <h3>Add new category</h3>
                </a>
                <a href="subcategory.php">
                    <span class="material-icons-sharp">
                        add_circle
                        </span>
                                        <h3>Add new subcategory</h3>
                </a>
                <a href="products.php">
                    <span class="material-icons-sharp">
                        checkroom
                        </span>
                                        <h3>Add a clothing item</h3>
                </a>
                <a href="orderview.php">
                    <span class="material-icons-sharp">
                        shopping_bag
                        </span>
                                        <h3>Orders</h3>
                </a>
    
                <a href="userview.php">
                <span class="material-icons-sharp">
                                group
                                   </span>
                                        <h3>Users</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        email
                        </span>
                                        <h3>messages</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        report_problem
                        </span>
                                        <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                        </span>
                                        <h3>Logout</h3>
                </a>
            </aside>
            <main>
        <h1>Customer Orders</h1><br><br><br>

        <table>

            <tr>
            <th>First_Name</th>
            <th>Surname</th>
            <th>Phone_number</th>
            <th>Order_status</th>
            <th>Country</th>
            <th>Product name</th>
            <th>Total Cost</th>
            <th>Quantity</th>
            <th>Operation</th>
        </tr>

        <?php
        
        $sql = "SELECT *FROM tbl_order" ;
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

        if($count>0)
        {
            while($row=mysqli_fetch_assoc($res))
        {
    
            $First_Name=$row['First_Name'];
            $Surname=$row['Surname'];
            $Phone_Number=$row['Phone_Number'];
            $order_status=$row['order_status'];
            $country=$row['country'];
            $product=$row['product'];
            $cost=$row['cost'];
            $quantity=$row['quantity'];

        
        
        ?>
        <tr>

                  <td> <?php echo $First_Name; ?> </td>
                  <td> <?php echo $Surname; ?> </td>
                  <td> <?php echo $Phone_Number; ?> </td>
                  <td> <?php echo $order_status; ?> </td>
                  <td> <?php echo $country; ?> </td>
                  <td> <?php echo $product; ?> </td>
                  <td> <?php echo $cost; ?> </td>
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

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>