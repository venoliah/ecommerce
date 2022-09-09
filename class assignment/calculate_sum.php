<?php
require("connect2.php");

print_r($_POST);

$First_Number=$_POST["First_Number"];
$Second_Number=$_POST["Second_Number"];
$sum=$First_Number+$Second_Number;


echo "The sum of $First_Number and $Second_Number is " .$sum;


?>