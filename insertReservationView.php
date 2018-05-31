<!DOCTYPE html>
<html><head><title>Add New Reservation</title></head>
<body>

<script src="datetimepicker_css.js"></script>
<?php
include "connection.php";
$username=$_SESSION['username'];
$sql_cust = "SELECT * from customer where username='$username'";
$result_cust = mysqli_query($conn, $sql_cust);

$sql_car = "SELECT car_type.* from car_type";
$result_car = mysqli_query($conn, $sql_car);

echo "<h3>New Reservation<p> </h3>";
?>  
<form method = "post" action = "?page=insertReservationDo">
                  <table border="1">
                     <tr>
                        <td>Name</td>
                        <td>
                        <?php 
                        $row_cust = mysqli_fetch_assoc($result_cust);
                        echo"$row_cust[customer_name]";?>
                         <input type = "hidden" name="customer_id" value="<?php 
                         echo "$row_cust[customer_id]";?>">
                        </td>
                     </tr>
                     <tr>
                        <td>Car Type (Price USD)</td>
                        <td>
                        <select name = "car_type">
                        <?php
                        while($row_car = mysqli_fetch_assoc($result_car)) {
                        ?>   
                           <option value="<?php echo"$row_car[car_type_id]";?>"><?php echo"$row_car[car_type] ($row_car[price])";?></option>        
                        <?php
                        }
                        ?>
                        </select>
                        </td>
                     </tr>
                     <tr>
                        <td>Rent</td>
                        <td><input type="text" name="rent" id="rent" maxlength="25" size="25"/>
                        <img src="images_date/cal.gif" alt="" onclick="javascript:NewCssCal('rent','yyyyMMdd','arrow',false,'24',false)" style="cursor:pointer"/></td>
                     </tr>
                     <tr>
                        <td>Return</td>
                        <td><input type="text" name="return_time" id="return_time" maxlength="25" size="25"/>
                        <img src="images_date/cal.gif" alt="" onclick="javascript:NewCssCal('return_time','yyyyMMdd','arrow',false,'24',false)" style="cursor:pointer"/></td>
                     </tr>
                     <tr>
                        <td>Pickup Station</td>
                        <td>
                           <select name = "car_station">
                              <option value="Yeouido">Yeouido</option>
                              <option value="Shinchon">Shinchon</option>
                              <option value="Jongro">Jongro</option>
                              <option value="Seoul Station">Seoul Station</option>
                              <option value="Gangnam">Gangnam</option>
                              <option value="Geondae">Geondae</option>
                          </select></td>
                     </tr>
                     <tr>
                        <td> </td>
                        <td><input type="reset" value="Reset"> <input name = "add" type = "submit" value = "Add Reservation">
                        </td>
                     </tr>
                  </table>
               </form>
</body>
</html>