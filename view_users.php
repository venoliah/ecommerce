<?php

require("connect2.php");

/*$sql="SELECT product_id,product_name,product_description FROM `tbl_product`";
$result= mysqli_query($conn, $sql);
print_r($result);

$row =mysqli_fetch_assoc($result);
echo "product_id" .$row["product_id"];
//below set before this 

/*if (mysqli_num_rows($result)>0){

        echo "product_id: " . $row["product_id"]. " _ product_name: " . $row["firstname"]. " " .
        $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn)*/


$sql = "SELECT product_image, product_name, unit_price FROM tbl_product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["product_image"]. "</td><td>" . $row["product_name"]. " " . $row["unit_price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


