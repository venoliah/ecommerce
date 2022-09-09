<?php

$servername="localhost";
$username="root";
$password="";
$database="eccomerce2";

$conn = mysqli_connect($servername,$username,$password,$database); 

if(!$conn){
    die("Sorry.Could not connect".mysqli_connect_error());
}
echo("connected successfully");
/*mysqli_connect("localhost","root","");*/



?>

