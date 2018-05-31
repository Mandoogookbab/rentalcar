<!DOCTYPE html>
<html><head><title>Update Reservation</title></head>
<body>
   <script src="datetimepicker_css.js"></script>
<?php
include "connection.php";
$id=$_GET['reservation_id'];
$sql = "select reservation.*, customer.*, car_type.*, datediff(return_time, rent) as total_day,  (datediff(return_time, rent) * price ) AS total_price FROM 
reservation, customer, car_type
 WHERE reservation.car_type_id=car_type.car_type_id AND 
 reservation.customer_id=customer.customer_id and reservation_id='$id' order by reservation_id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>  
Update Reservation <p>
<form method = "post" action = "?page=updateReservationDo">
                  <table border="1">
                     <tr>
                        <td>Customer Name</td>
                        <td>
                           <?php echo" $row[customer_name]";?>
                           <input type = "hidden" name="reservation_id" value="<?php echo"$row[reservation_id]";?>">
                        </td>
                     </tr>
                     <tr>
                        <td>Car Name</td>
                        <td>
                            <td><input name = "car_type" type = "text"></td>
                        <?php echo"$row[car_type]";?>
                        </td>
                     </tr>
                     <tr>
                        <td>Price per day (USD)</td>
                        <td>
                        
                        <?php echo"$row[price]";?>
                        </td>
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
                        <td><input type="reset" value="Reset"> <input name = "add" type = "submit" value = "Update Reservation">
                        </td>
                     </tr>
                  </table>
               </form>
</body>
</html>