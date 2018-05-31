<?php

include "connection.php";

$customer_id=$_POST['customer_id'];
$car_type=$_POST['car_type'];
$rent=$_POST['rent'];
$return_time=$_POST['return_time'];
$car_station=$_POST['car_station']

$sql = "INSERT INTO reservation (customer_id,rent,return,is_confirmed,is_paid,car_type_id,car_station)
 VALUES ($customer_id,'$rent','$return_time','no','no','$car_type','$car_station')";

if (mysqli_query($conn, $sql)) {
    echo "New reservation data is created successfully<br>";
    echo "<p><p><a href=?page=selectMy_reservationView><button type=button >Check My Reservation</button></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>	