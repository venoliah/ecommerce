<?php
require("connect2.php");

?>
<html>
    <head>
        <title>Product View</title>
        <link rel="stylesheet" href="user.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    </head>

    <body>


    <div class="sidetop">
            <aside>  
            <div class="top"> 
                <div class="logo">
                    <h1 ><i>Beu- th- ful </i><br><span class="index"><dd >thrift- shop</dd></span></h1>
          
                </div>    
          
          <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
          </div>
            </div>
        <div class="sidebar">
            <a href="#" class="active">
                <span class="material-icons-sharp"> dashboard</span>     
                <h3>Dashboard</h3>
            </a>
            <a href="homepage.php">
                <span class="material-icons-sharp">
                    home
                    </span>
                        <h3>Home Page</h3>
            </a>
            <a href="subcategory.php">
                <span class="material-icons-sharp">
                    search
                    </span>
                                    <h3>Search</h3>
            </a>
            <a href="products.php">
                <span class="material-icons-sharp">
                    settings
                    </span>
                                    <h3>Settings</h3>
            </a>
            <a href="#">
                <span class="material-icons-sharp">
                    shopping_bag
                    </span>
                                    <h3>Orders</h3>
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

    
          
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Product_Id</th>
      <th scope="col">product_name</th>
      <th scope="col">product_description</th>
      <th scope="col">unit_price</th>
      <th scope="col">operation</th>


    </tr>
  </thead>
  <tbody>

  <?php
$sql = "SELECT * FROM tbl_product";
/*$result =mysqli_query($con,$sql);*/
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row=mysqli_fetch_assoc($result)){

$product_id=$row["product_id"];
$product_name=$row["product_name"];
$product_description=$row["product_description"];
$unit_price=$row["unit_price"];

echo ' <tr>
<td scope="row">'.$product_id.'</td>
<td>'.$product_name.'</td>
<td>'.$product_description.'</td>
<td>'.$unit_price.'</td>

<td>
    <button class="btn"><a href="edit.php? editproductid='.$product_id.'">EDIT</a></button>
    <button class="btn"><a href="delete.php? product_id='.$product_id.'">DELETE</a></button>
</td>

</tr>';
    }
}
  ?>



<!--
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
   
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
  -->
</table>

    </body>

    
</html>