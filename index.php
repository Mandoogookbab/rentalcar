<!DOCTYPE html>
<html>
<head>
	<title>Car Rent System</title>
</head>
<body>
<?php  
	session_start();//session starts here  
?> 
<center>
<table width="800">
	<tr>
		<td colspan="2"> <img src="images/banner.jpg"></td> <!--배너 이미지 너무 큰거같은데 css적용하며 생각해 볼 것-->
	</tr>
		<tr>
		<td colspan="2" bgcolor="gray"><h3><center>Welcome to Dongguk Rent car</center></h3></td>
	</tr>
	<tr>
		<td bgcolor ="#A3A3C2" align="left" width="200" cellpadding="10">
			<h3><b>Menu</b></h3><p>
		
		<a href="index.php">Home </a><p>
        <a href="?page=car_price">Cars</a><p> 
        <a href="?page=selectReview">Review</a><p>        
 		<a href="map.html">Rental car Pickup Station</a><p>
       

        <?php
        if (!isset($_SESSION['username'])){
        ?>
          <a href="index.php?page=loginView"> Login </a><p>
        <?php
        }else if ($_SESSION['status']=='customer'){
        ?>
        <a href="index.php?page=selectMy_pageView">Welcome <?php echo"$_SESSION[username]"; ?></a><p>
        <a href="index.php?page=selectMy_reservationView"> My Reservation </a><p>
        <a href="index.php?page=insertReservationView">New Reservation </a><p>
        <a href="index.php?page=logoutDo"> Logout </a><p>
        <?php
        }else if ($_SESSION['status']=='admin'){
        ?>

        <a href="index.php?page=selectcar_typeView"> Car Type Management </a><p>
        <a href="index.php?page=selectCustomerView"> Customer Data </a><p>
        <a href="index.php?page=selectReservationView"> Reservation Data </a><p>
        <a href="index.php?page=logoutDo"> Logout </a><p>
        <?php
        }
        ?>
				
		</td>
		<td bgcolor="#EEEEEE" height="400">
		<?php
		echo "<br>";
		if (isset($_SESSION['username'])){
			echo "Welcome ".$_SESSION['username']."<p>";
		}
		if(isset($_GET['page'])) {
			$page=$_GET['page'];
			if (!file_exists("$page.php")){
	    		include "welcome.php";
			} else {
	    		include "$page.php";
			}
		}else{
			include "welcome.php";
		}
		?>
		</td>
	</tr>
	<tr>
		<td colspan="2" bgcolor ="#666699" height="50">
			Jina and Minseon Rent car</td>
	</tr>
</table>
</center>
</body>
</html>