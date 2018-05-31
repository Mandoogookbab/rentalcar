<p><p><?php
include "connection.php";
$user=$_SESSION['username'];
$sql = "SELECT * from customer where username='$user' order by customer_id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    ?>
	<h3>Show My Information</h3> <p>

<table border="1">
  <tr>
    <td>Name</td>
    <td>Address</td>
    <td>Username</td>
    <td>Password</td>
    <td>E-mail</td>
    <td>Phone Number</td>
    <td>Action</td></tr>
    <?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td> " 
        . $row["customer_name"]. " </td><td> " 
        . $row["address"]."</td><td>"
        . $row["username"]. " </td><td>"
        . $row["password"]. " </td><td>"
        . $row["email"]. " </td><td>"
        . $row["phone"]. " </td>";
        
         echo"<td><a href=?page=updateMy_pageView>[update]</a></td>";
       
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
