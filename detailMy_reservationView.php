<a href=index.php?page=insertReservationView><button type="button" class="btn btn-primary">Add New Reservation</button></a>
<p><p>
<?php
$user=$_SESSION['username'];
$reservation_id=$_GET['reservation_id'];
include "connection.php";
$sql = "select reservation.*, customer.*, car_type.*, datediff(return_time, rent) as total_day,  (datediff(return_time, rent) * price ) AS total_price FROM 
reservation, customer, car_type
 WHERE reservation.car_type_id=car_type.car_type_id AND 
 reservation.customer_id=customer.customer_id and username='$user' and reservation_id='$reservation_id' order by reservation_id ";
// echo"$sql";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    ?>
	<h3>Detail of reservation </h3><p>
<table border="1">
	
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>Customer Name</td><td>" . $row["customer_name"]. " </td></tr> ";
        echo "<tr><td>Car Type</td><td>" . $row["car_type"]. " </td></tr> ";
        echo "<tr><td>Price</td><td>" . $row["price"]. " </td></tr> ";
        echo "<tr><td>Max of Capacity (Persons)</td><td>" . $row["capacity"]. " </td></tr> ";
        echo "<tr><td>Bluetooth</td><td>" . $row["bluetooth"]. " </td></tr> ";
        echo "<tr><td>Navigation</td><td>" . $row["navigation"]. " </td></tr> ";

  echo "<tr><td>Image</td><td><img src=car_image/$row[images] width=200 height=200 class=img-rounded></td></tr> ";
    echo "<tr><td>Rent Start Time</td><td>" . $row["rent"]. " </td></tr> ";
      echo "<tr><td>Rent End Time</td><td>" . $row["return_time"]. " </td></tr> ";

           echo "<tr><td>Confirmed</td><td>" . $row["is_confirmed"]. " </td></tr> ";
             
    }
    ?>
</table>
    <?php
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
