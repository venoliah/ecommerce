<?php
require("connect2.php");

?>
<html>
    <head>
        <title>Product View</title>
        <link rel="stylesheet" href="user.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    </head>

    <table class="user-tbl">
        <tr>
            <th>product id</th>
            <th>Product Name</th>
            <th>Category Name</th>
            <th>product_description</th>
            <th>product_image</th>
            <th>unit_price</th>
            <th>Operation</th>

           
        </tr>
        <?php
        
        $sql = "SELECT *FROM tbl_product" ;
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

        if($count>0)
        {
            while($row=mysqli_fetch_assoc($res))
        {
    
            $product_id=$row['product_id'];
            $product_name=$row['product_name'];
            $category_name=$row['category_name'];
            $product_description=$row['product_description'];
            $product_image=$row['product_image'];
            $unit_price=$row['unit_price'];
        
        
        ?>
        <tr>

                  <td> <?php echo $product_id; ?> </td>
                  <td> <?php echo $product_name; ?> </td>
                  <td> <?php echo $category_name; ?> </td>
                  <td> <?php echo $product_description; ?> </td>

                  <td>
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
                      </td>

                  <td> <?php echo $unit_price; ?> </td>

                  <td>   
                    <form action="edit.php">
                        <input type="hidden" name="editproductid" id="editproductid" value="<?php echo $product_id?>" >
                        <input type="submit" value="EDIT" class="btn-primary">
                    </form>            
                <!-- <a href="" class="btn-primary">EDIT</a> -->
                <a href="delete-clothes.php ?id=<?php echo $ProductId; ?> &Image=<?php echo $Image; ?> " class="btn-primary">DELETE</a>
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




     </table>

     </div>
     
 </div>

