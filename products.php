<html>
    <head>
        <title>Category Parlor</title>
        <link rel="stylesheet" href="categories.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    </head>

    
    <body>
           
            <h1 ><i>Beu- th- ful </i><br><span class="index"><dd >thrift- shop</dd></span></h1>


        <div class="container">
            <div class="admin-form">

            
            <form action="productconnect.php" method="post" enctype="multipart/form-data">
                    <h3>Add a new product</h3>

                    <!--
                    <input type="text" placeholder="Enter the product id" name="product_id" class="box">
                    <input type="text" placeholder="Kindly enter the product name" name="product_name" class="box">
                    <input type="text" placeholder="Describe your product" name="product_description" class="box">
                    <input type="file" accept="image/png,image/jpeg,image/jpg" name="product_image" class="box">
                    <input type="number" placeholder="The price " name="unit_price" class="box">
                    <input type="text" placeholder="The available quantity" name="available_quantity" class="box">
                    <input type="text" placeholder="Enter the category name" name="category_name" class="box">
                    <input type="text" placeholder="Enter the subcategory name" name="subcategory_name" class="box">
                    <label for="created_at">created time</label>
                    <input type="datetime-local" name="created_at" id="created_at" value="" step="1"><br><br><br>
                    <label for="updated_at">update time</label>
                    <input type="datetime-local" name="updated_at" id="updated_at" value="" step="1">
                    <input type="text" placeholder="Name of admin" name="added_by" class="box">
                    <input type="submit" class="btn" name="add_Product" value="Add Product" >
                </form>
            </div>
        </div>


<form action="productconnect.php" method="post" enctype="multipart/form-data">
-->

     <table class="tbl-30">
         <tr>
             <td>Product id:</td>
             <td>
                 <input type="number" id="product_id" name="product_id"placeholder="Id number" class="box">
             </td>
         </tr>

         <tr>
             <td>Product name:</td>
             <td>
             <input type="text" id="product_name" name="product_name" placeholder="Add product name"  class="box">
             </td>
         </tr>

         <tr>
             <td>product_description:</td>
             <td>
                 <input type="text" id="product_description" name="product_description" placeholder="Add product description"  class="box">
             </td>
         </tr>

         <tr>
             <td>Product Image:</td>
             <td>
                 <input type="file" accept="image/png,image/jpeg,image/jpg" id="product_image" name="product_image"  class="box">
             </td>
         </tr>

         <tr>
             <td>Price:</td>
             <td>
                 <input type="number" id="unit_price" name="unit_price" placeholder="what is the cost"  class="box">
             </td>
         </tr>

         <tr>
             <td>Available quantity:</td>
             <td>
                 <input type="number" id="available_quantity" name="available_quantity" placeholder="what is the quantity"  class="box">
             </td>
         </tr>

         <tr>
         <td>Category:</td>
             <td>
                 <select name="category_name" type="text" id="category_name" class="box">

                 <?php
                 require_once("productconnect.php");
                 $sql="SELECT *FROM tbl_categories";
                 $res=mysqli_query($conn,$sql);
                 while($row=mysqli_fetch_array($res))
                 {
                    echo '<option>'.$row['category_name'] .'</option>';
                 }
                 ?>

                
                 </select>
             </td>
         </tr>


         
         <tr>
             <td>subcategory_name:</td>
             <td>
                 <input type="text" id="subcategory_name" name="subcategory_name" placeholder=""  class="box">
             </td>
         </tr>


         

         <tr>
             <td>Created at:</td>
             <td>
                 <input type="datetime-local" id="created_at" name="created_at" placeholder="">
             </td>
         </tr>

         <tr>
             <td>updated_at:</td>
             <td>
                 <input type="datetime-local" id="updated_at" name="updated_at" placeholder="" >
             </td>
         </tr>

         <tr>
             <td>added by:</td>
             <td>
                 <input type="text" id="added_by" name="added_by" placeholder=""  class="box">
             </td>
         </tr>

         
        

         <br>

         <tr>
         <td coolspan="2">
         <input type="submit" class="btn" name="add_Product" value="Add Product" >
             </td>
         </tr>
     </table>

     </form>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>