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
	<link href="../css/btn.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#8AC6EC">

<div class="header" align="center">
	<h3>
		<img src="../image/clogo.jpg" style="float: left;margin-left: 30px;">
		<a href="logout.php" style="float:right; margin-right: 30px; font-size: 25px; color: red;">Logout</a>
	</h3>
<h1 style="color: green;">WELCOME TO ACSCE HOSTEL ADMIN PANEL</h1>

</div>
<div align="center" style="margin-top: 30px;">
	<a href="addroom.php" class="button">Add Room</a>
	</div>
	<div align="center" style="margin-top: 60px;">
	<a href="updatestudent.php" class="btn">UpdateStudent</a>
	</div>
	<div align="center" style="margin-top: 60px;">
	<a href="deletestudent.php" class="btn">DeleteStudent</a>
	</div>
	<div align="center" style="margin-top: 60px;">
	<a href="payment.php" class="btn">Payment</a>
	</div>
</body>
</html>
