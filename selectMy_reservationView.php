<a href=index.php?page=insertReservationView><button type="button" class="btn btn-primary">Add New Reservation</button></a>
<p><p>
<?php
$user=$_SESSION['username'];
include "connection.php";
$sql = "SELECT reservation.*, customer.*, car_type.*, datediff(return_time, rent) as total_day,  (datediff(return_time, rent) * price ) AS total_price FROM 
reservation, customer, car_type
 WHERE reservation.car_type_id=car_type.car_type_id AND 
 reservation.customer_id=customer.customer_id and username='$user' order by reservation_id ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    ?>
	<h3>Show my reservation </h3><p>
<table border="1">
	<tr><td>Customer</td>
	<td>Car Type</td><td>Price</td><td>Rent</td><td>Return</td><td>Total Rent</td><td>Total Price</td><td>Pickup Station</td><td>Confirmed</td><td>Action</td></tr>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["customer_name"]. " </td><td> " 
        . $row["car_type"]. " </td><td> " . $row["price"].
         " </td><td> ". $row["rent"].
        " </td><td> ". $row["return_time"].
        " </td><td> ". $row["total_day"].
        " </td><td> ". $row["total_price"].
        " </td><td> ". $row["car_station"].
          " </td><td> ". $row["is_confirmed"].
           " </td>";
         echo"<td><a href=?page=updateMy_ReservationView&reservation_id=$row[reservation_id]>  [update]  </a>";

         echo"<a href=?page=detailMy_reservationView&reservation_id=$row[reservation_id]>  [detail]  </a>";
        
         echo"<a href=?page=deleteMy_reservationDo&reservation_id=$row[reservation_id]>  [cancel]  </a></td>";
         echo"</tr>";
    }
    ?>
</table>
    <?php
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
