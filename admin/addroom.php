<?php


session_start();


			if($_SESSION['uid'])
			{
				echo "";
			}
			else
			{
				header('location: ../login.php');
			}
?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO ACSCE HOSTEL</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/styl.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#1EE9D7">

<div class="header" align="center">
	<h3>
		<img src="../image/clogo.jpg" style="float: left;margin-left: 30px;">
		<a href="logout.php" style="float:right; margin-right: 30px; font-size: 25px; color: red;">Logout</a>
	</h3>
<h1 style="color: #807907;">WELCOME TO ACSCE HOSTEL ADMIN PANEL</h1>

</div>
<div style="margin-top: 20px;">
	<table align="center">
		<form method="post" action="addroom.php">
		<tr>
			<th>Room No.</th>
			<th><input type="number" name="room" placeholder="Enter Room No." required="required"></th>
			<th>Capacity</th>
			<th><input type="number" name="capa" placeholder="Enter Room Capacity" required="required"></th>
			<th><input type="submit" name="submit"></th>
		</tr>
	</form>
	</table>
</div>
<?php
if (isset($_POST['submit'])) {
	

include('../dbcon.php');

   $room= $_POST['room'];
   $capa=$_POST['capa'];

   $qry="INSERT INTO `room`( `room_no`, `capacity`) VALUES ('$room','$capa')";
   $run=mysqli_query($con,$qry);

   if ($run==true) {

?>

	<script type="text/javascript">
		alert('Room Added Successfuly');
	</script>
	<?php
   }

}
 ?>