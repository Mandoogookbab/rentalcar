<a href=index.php?page=insertCar_typeView><button type="button" class="btn btn-primary">Add New Car Type</button></a>
<p><p>
<?php
include "connection.php";
$sql = "SELECT * from car_type order by car_type_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    ?>
	Show Car Type<p>

    <p>

<table border="1">
	<tr><th>Car Type</th>
        <th>Price(USD)</th>
        <th>Capacity</th>
        <th>Image</th> 
        <th>Bluetooth</th>
        <th>Navigation</th>
        <th>Action</th></tr>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["car_type"];
      
         echo  " </td><td> ". $row["price"];
          echo " </td><td> ". $row["capacity"];
         echo   " </td><td> ". $row["images"];
          echo  " </td><td> ". $row["bluetooth"];
         echo   " </td><td> ". $row["navigation"];
         echo"</td><td>";
         echo"<a href=?page=deletecar_typeDo&car_type_id=$row[car_type_id]>[delete]</a></td>";
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
    
