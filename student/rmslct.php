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
	<meta charset="UTF-8">
	<title>WELCOME TO ACSCE HOSTEL</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/styl.css" rel="stylesheet" type="text/css">
	</head>
<body bgcolor="green">

<div class="header" align="center">
	<h3>
		<img src="../image/clogo.jpg" style="float: left;margin-left: 30px;">
		<a href="../logout.php" style="float:right; margin-right: 30px; font-size: 25px; color: red;">Logout</a>
</h3>
<h1>WELCOME TO ACSCE HOSTEL</h1>

</div>

<form action="rmslct.php" method="post">
<table align="center" style="margin-top: 10px; width: 50%;" border="1">
	
		<tr>
			<th>USN</th>
			<td><input type="text" name="usn" placeholder="Enter USN" required="required"></td>
		</tr>
		<tr>
			<th>Student Name</th>
			<td><input type="text" name="name" placeholder="Enter Your Name" required="required"></td>
		</tr>
		<tr>
			<th>Father Name</th>
			<td><input type="text" name="fname" placeholder="Enter Father Name" required="required"></td>
		</tr>
		<tr>
			<th>Department</th>
			<td><input type="text" name="dept" placeholder="Enter Department" required="required"></td>
		</tr>
		<tr>
			<th>Room Id</th>
			<td><input type="number" name="roomid" placeholder="Enter Room Id" required="required"></td>
		</tr>
		<tr>
			<th>Mobile No.</th>
			<td><input type="number" name="mobile" placeholder="Enter Mobile No." required="required"></td>
		</tr>
		<tr>
			<th>Date Of Birth</th>
			<td><input type="date" name="dob" placeholder="Enter Date Of Birth" required="required"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit"></td>
		</tr>
</table>
</form>





<?php

	if (isset($_POST['submit'])) {

		include('../dbcon.php');

		$usn=$_POST['usn'];
		$name=$_POST['name'];
		$fname=$_POST['fname'];
		$dept=$_POST['dept'];
		$roomid=$_POST['roomid'];
		$mobile=$_POST['mobile'];
		$dob=$_POST['dob'];

		$qry="INSERT INTO `student`( `usn`, `sname`, `fname`, `dept`, `room_id`, `mobile`, `dob`) VALUES ('$usn','$name','$fname','$dept','$roomid','$mobile','$dob')";
		$run=mysqli_query($con,$qry);

		if ($run == true) {
			?>
			<script type="text/javascript">
				alert('Data submitted succcesfuly');
			
			</script>
			<?php



		}
	

		 
	}

?>
</body>
</html>