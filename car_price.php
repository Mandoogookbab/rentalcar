
<?php
include "connection.php";
$sql = "SELECT * from car_type order by car_type_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    ?>
	<h3>Car Price</h3><p>

    <p>
    <table border="1">
        <tr><th>Image</th>
            <th>Car Type</th>
            <th>Price</th>
            <th>Capacity</th>
            <th>Bluetooth</th>
            <th>Navigation</th></tr>
<?php
    while($row = mysqli_fetch_assoc($result)) {
?>
        <tr>
            <td><img src="car_image/<?php echo"$row[images]";?>" width=100 height=100> </td>
            <td><?php echo"$row[car_type]";?> </td>
            <td><?php echo"$row[price]";?> </td>
            <td><?php echo"$row[capacity]";?></td>
            <td><?php echo"$row[bluetooth]";?></td>
            <td><?php echo"$row[navigation]";?></td>
        </tr>


    </p></div></div></div>
</div>
<?php
}?>

 </table>
    <?php
} else {
    echo "0 results";
}


mysqli_close($conn);
?>
    
