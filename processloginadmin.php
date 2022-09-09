<?php

require("connect2.php");
if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST['submit'])) {

    $User_Name = $_POST['User_Name'];
    $Password = $_POST['Password'];
    


    $sql = "select * from registration where User_Name='" . $User_Name . "'and Password='" . $Password . "' limit 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

          //  $_SESSION["Password"] = $row["Password"];

           $_SESSION['User_Name'] = $row['User_Name'];
            $_SESSION['reg_number'] = $row['reg_number'];
            header("location:admin2.php");
           
        } 
    } else {

        header("location:loginadmin2.php");
    }