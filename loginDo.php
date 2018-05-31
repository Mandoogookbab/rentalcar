<?php 
    $user = $_POST['username'];
    $pass= $_POST['password'];
    $status= $_POST['status'];

include "connection.php";

if ($status=='customer'){
$sql = "SELECT * from customer where username='$user' and password='$pass'";
}else if ($status=='admin'){
$sql = "SELECT * from admin where username='$user' and password='$pass'";
}
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
     

        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['status'] = $status;

        header('location:index.php');
}else{

    	echo "Username or password is wrong. Please try again.<br>";
    	echo "<p><p><a href=?page=loginView><button type=button>Back</button></a>";
}
?>