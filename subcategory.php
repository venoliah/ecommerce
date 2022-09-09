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
            <form action="subcategoryconnect.php" method="post">
                    <h3>Add a new subcategory</h3>
                    <input type="text" placeholder="Enter the id number" name="subcategory_id" class="box">
                    <input type="text" placeholder="Kindly enter the subcategory name" name="subcategory_name" class="box">
                    <input type="text" placeholder="Enter the category name" name="category_name" class="box">
                    <input type="file" accept="image/png,image/jpeg,image/jpg" name="subcategory_image" class="box">
                    <input type="submit" class="btn" name="add_newsubcategory" value="add new subcategory" >
                </form>
            </div>
        </div>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>