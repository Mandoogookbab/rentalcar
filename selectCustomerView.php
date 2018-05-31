<p><p><?php
include "connection.php";
$sql="SELECT * from customer order by customer_id";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
	?>
	<h3>Show Customer </h3><p>
<table border="1">
	<tr><th>Customer ID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Username</th>
		<th>Password</th>
		<th>E-mail</th>
		<th>Phone Number</th></tr>
		<?php
		while($row=mysqli_fetch_assoc($result)) {
			echo "<tr><td>"
			. $row["customer_id"] . "</td><td>" 
			. $row["customer_name"]. "</td><td>"
			. $row["address"]. "</td><td>"
			. $row["username"]. "</td><td>"
			. $row["password"]. "</td><td>"
			. $row["email"]. "</td><td>"
			. $row["phone"]. "</td></tr>";
		}
		?>
	</table>
	<?php
} else{
	echo "0 results";
}
mysqli_close($conn);
?>