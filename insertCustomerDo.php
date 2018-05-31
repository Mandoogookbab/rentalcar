<?php

include "connection.php";

$customer_name=$_POST['customer_name'];
$address=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone'];


$sql = "SELECT * from customer where username='$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	 echo "The username is exist, please use different username!<br>";
     echo "<p><p><a href=?page=insertCustomerView><button type=button>Back</button></a>";
}else{	

	$sql = "INSERT INTO customer (customer_name, address, username, password, email, phone)
	 VALUES ('$customer_name','$address','$username','$password','$email','$phone')";

	if (mysqli_query($conn, $sql)) {
	    echo "Customer registration is created successfully<br>";
	    echo "<p><p><a href=?page=loginView><button type=button >Login</button></a>";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
mysqli_close($conn);
?>