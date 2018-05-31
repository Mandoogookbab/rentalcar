<?php

include "connection.php";
$id=$_GET['car_type_id'];
// sql to delete a record
$sql = "DELETE FROM car_type WHERE car_type_id=$id";

if (mysqli_query($conn, $sql)) {
    echo "car type data is deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


 echo "<p><p><a href=?page=selectcar_typeView><button type=button>Show car Type</button></a>";
mysqli_close($conn);
?>