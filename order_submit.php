<?php
require("connect2.php");

print_r($_POST);

$Food_Item=$_POST['Food_Item'];

$Quantity=$_POST["Quantity"];


$Cookies=$_POST["Cookies"];
$Cakes=$_POST["Cakes"];
$Buns=$_POST["Buns"];
$Dougnuts=$_POST["Dougnuts"];
$Croissants=$_POST["Croissants"];

$data=array($Food_Item,$Quantity);

if ($data){
    echo "Order successful! Here is what you ordered :";


while ($Quantity>=6){
    echo $Cookies."<br>";
}
}

else{

echo error_log("Kindly fill in the form adequately");
}

?>