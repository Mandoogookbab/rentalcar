
<?php

include "connection.php";

$id=$_GET['reservation_id'];
// sql to delete a record
$sql = "DELETE FROM reservation WHERE reservation_id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Reservation is deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

echo "<br><p><a href=?page=selectMy_reservationView><button type=button>show my reservation</button></a>";
mysqli_close($conn);
?>