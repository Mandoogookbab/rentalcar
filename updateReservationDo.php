<?php

include "connection.php";
$reservation_id=$_POST['reservation_id'];
$is_confirmed=$_POST['is_confirmed'];

$sql = "update reservation set is_confirmed='$is_confirmed' where reservation_id=$reservation_id";

if (mysqli_query($conn, $sql)) {
    echo "Reservation is updated successfully<br>";
     echo "<p><p><a href=?page=selectReservationView><button type=button>Show all reservation</button></a>";
  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>