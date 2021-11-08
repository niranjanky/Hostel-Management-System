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
	<style>
	.footer {
    position: fixed;
    margin-left: 40px;
    bottom: 0;
    width: 93%;
    background-color: red;
    color: white;
    text-align: center;
    }
</style>
</head>
<body bgcolor="green">

<div class="header" align="center">
	<h3>
		<img src="../image/clogo.jpg" style="float: left;margin-left: 30px;">
		<a href="../logout.php" style="float:right; margin-right: 30px; font-size: 25px; color: red;">Logout</a>
	</h3>
<h1>WELCOME TO ACSCE HOSTEL</h1>
</div>
<table align="center" style="margin-top: 10px;">
	<form action="rmavl.php" method="post">

		<th><input type="submit" name="submit" value="Check For Room"></th>

	</form>
</table>
<table align="center" border="1" style="width: 50%; background-color: #000; color: #fff; margin-top: 15px;">
	<tr>
		<th>room id</th>
		<th>room no.</th>
		<th>capacity</th>
	</tr>

<?php
 	if (isset($_POST['submit'])) {
 		include('../dbcon.php');

 		$qry="SELECT * FROM `room` WHERE 1";

 		$run=mysqli_query($con,$qry);

 		if (mysqli_num_rows($run)<1) {

 			echo "<tr><td colspan='5' align='center'>Record Not Found!</td></tr> ";
 		}
 		else
 		{
 			$count=0;
 			while ($data=mysqli_fetch_assoc($run)) {

 				$count++;
 				?>
 				<tr>
 					<td><?php echo $data['room_id']; ?></td>
 					<td><?php echo $data['room_no']; ?></td>
 					<td><?php echo $data['capacity']; ?></td>
 				</tr>

 			<?php
 			}
 		}



 	}
?>
                
</table>
<div>
<table align="center" border="1" style="background-color: #fff; color: red; margin-top: 15px;">
	<tr>
		<th><a style="text-decoration: none;" href="rmslct.php">BOOK ROOM</a></th>
	</tr>
</table>
</div>
<div class="footer">
  <h3>All Right Reserve ACSCE &reg</h3>
</div>
</body>
</html>