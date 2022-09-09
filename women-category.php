<?php include('../admin/partial/connect.php'); ?>

 <div class="main-content">
     
     <div class="wrapper">
     <h1>WOMEN</h1>

     <br><br>


     <br><br>

     <?php
     if(isset($_SESSION['add']))
     {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
     }

     if(isset($_SESSION['delete']))
     {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
     }

     if(isset($_SESSION['edit']))
     {
        echo $_SESSION['edit'];
        unset($_SESSION['edit']);
     }

     if(isset($_SESSION['unauthorized']))
     {
        echo $_SESSION['unauthorized'];
        unset($_SESSION['unauthorized']);
     }

     ?>

     <!----------------------view products/clothes table----------------->
     
        <?php
        
        $sql = "SELECT *FROM product WHERE Category='Women'" ;
        $res = mysqli_query($conn, $sql);
        
        $count= mysqli_num_rows($res);

        $sn = 1;

        if($count>0)
        {
            while($row=mysqli_fetch_assoc($res))
        {
    
            
            $ProductName=$row['ProductName'];
            $Price=$row['Price'];
            $available_quantity=$row['available_quantity'];

            $Image=$row['Image'];
           
            
        
        
        ?>
        <tr>

                 
                  <td> <?php echo $ProductName; ?> </td>
                  <td> <?php echo $Price; ?> </td>
                  <td> <?php echo $available_quantity; ?> </td>


                  <td>
                     <?php
                      if($Image=="")
                      {
                      //  echo "<div class=""> image not added</div>";
                      }
                      else
                      {
                        ?>
                        
                        <img src="<?php echo SITEURL; ?> ../images/ <?php echo $Image; ?>"  width="150px" >

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
     
 </div>

