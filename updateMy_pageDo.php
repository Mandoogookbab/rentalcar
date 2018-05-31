<?php

include "connection.php";
$id=$_POST['customer_id'];
$customer_name=$_POST['customer_name'];
$password=$_POST['password'];
$address=$_POST['customer_address'];


$sql = "UPDATE customer SET customer_name='$customer_name', address='$address',password='$password' WHERE customer_id=$id";

if (mysqli_query($conn, $sql)) {
    echo "My Information is updated successfully <br>";
    echo "<p><p><a href=?page=selectMy_pageView><button type=button>My Page</button></a>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>