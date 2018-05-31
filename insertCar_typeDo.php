<?php

include "connection.php";

$car_type=$_POST['car_type'];
$car_price=$_POST['car_price'];
$capacity=$_POST['capacity'];
$bluetooth=$_POST['bluetooth'];
$navigation=$_POST['navigation'];
$filename=$_FILES["image"]["name"];


$target_dir = "car_image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
        echo "<p><p><a href=?page=insertcar_typeView><button type=button>Back</button></a>";
    }

$sql = "INSERT INTO car_type (car_type, price,capacity,bluetooth,navigation,images)
 VALUES ('$car_type','$car_price','$capacity','$bluetooth','$navigation','$filename')";

if (mysqli_query($conn, $sql)) {
    echo "New Car Type Data is Created Successfully<p>";
    echo "<p><p><a href=?page=selectCar_typeView><button type=button>Show Car Type</button></a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>