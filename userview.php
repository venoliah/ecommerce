<?php
	require("connect2.php");
	$sql ="SELECT First_Name, Surname,Email,Phone_Number, User_Name FROM registration";
	$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="user.css">
<title> USERVIEW</title>
</head>
<body> 
	<section class="user">
		
		 <h1>user details</h1>
        
        <table>
            <tr>
                <th>First Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>PhoneNumber</th>
                <th>User Name</th>
                <th>Operations</th>
            </tr>
            
           <?php
		               $result = mysqli_query($conn,$sql);

                       if(mysqli_num_rows($result)>0){
	 
                         while($row = mysqli_fetch_assoc($result)){;

                            $First_Name=$row["First_Name"];
                            $Surname=$row["Surname"];
                            $Email=$row["Email"];
                            $Phone_Number=$row["Phone_Number"];
                            $User_Name=$row["User_Name"];
                            ?>
                            <!-- echo"<tr>
                             <td>$First_Name</td>
                             <td>$Surname</td>
                             <td>$Email</td>
                             <td>$Phone_Number</td>
                             <td>$User_Name</td>
                             <td><button>Edit</button>

                            </tr>";
                            }
		
                          }
                        ?> -->
                        <td><?php echo $row['First_Name'] ?></td>
                    <td><?php echo $row['Surname'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Phone_Number'] ?></td>
                    <td><?php echo $row['User_Name'] ?></td>
                    <td>
                        <button class="btn"><a href="edituser.php?reg_number=<?php echo $row['reg_number']?>">EDIT</a></button>

                    </td>




                </tr>
                <?php
                            }
		
                          }
                        ?>

            
          
        </table>
         <button onclick="window.location.href='admin2.php'">return</button>
    
      
    </section>
</body>
 
</html>
	
