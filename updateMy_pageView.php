<!DOCTYPE html>
<html>
<head>
   <title>Update Customer</title>
</head>
<body>
<?php
include "connection.php";
$user=$_SESSION['username'];
$sql = "SELECT * from customer where username='$user'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<h3>Update My Information</h3><p>
<form method = "post" action = "?page=updateMy_pageDo">
                  <table border="1">
                   <tr>
                        <td>Username</td>
                        <td>
                           <?php echo"$row[username]";?>
                           <input type = "hidden" name="customer_id" value="<?php echo"$row[customer_id]";?>">
                        </td>
                     </tr>
                     <tr>
                        <td>Password</td>
                        <td><input name = "password" type = "text" value="<?php echo"$row[password]";?>"></td>
                     </tr>
                     <tr>
                        <td>Customer Name</td>
                        <td><input name = "customer_name" type = "text" value="<?php echo"$row[customer_name]";?>"></td>
                     </tr>
                    
                     <tr>
                        <td>Address</td>
                        <td><input name = "customer_address" type = "text" value="<?php echo"$row[address]";?>"></td>
                     </tr>
                  
                    
                     <tr>
                        <td> </td>
                        <td>
                          <input type="reset" value="Reset"> <input name = "add" type = "submit" value = "Update Customer">
                        </td>
                     </tr>
                  
                  </table>
               </form>
</body>
</html>