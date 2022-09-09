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
                    <input type="text" placeholder="Enter the product id" name="product_id" class="box">
                    <input type="text" placeholder="Kindly enter the product name" name="product_name" class="box">
                    <input type="text" placeholder="Describe your product" name="product_description" class="box">
                    <input type="file" accept="image/png,image/jpeg,image/jpg" name="product_image" class="box">
                    <input type="number" placeholder="The price " name="unit_price" class="box">
                    <input type="text" placeholder="The available quantity" name="available_quantity" class="box">
                    <input type="text" placeholder="Enter the subcategory name" name="subcategory_name" class="box">
                    <label for="created_at">created time</label>
                    <input type="datetime-local" name="created_at" id="created_at" value="" step="1"><br><br><br>
                    <label for="updated_at">update time</label>
                    <input type="datetime-local" name="updated_at" id="updated_at" value="" step="1">
                    <input type="text" placeholder="Name of admin" name="added_by" class="box">
                    <input type="submit" class="btn" name="add_Product" value="Add Product" formaction="addproduct_view.php">
                </form>
            </div>
        </div>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>