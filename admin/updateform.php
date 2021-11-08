<?php
	
	session_start();

	if ($_SESSION['uid']) {
	   
	   echo " ";
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
<h1 style="color: green;">WELCOME TO ACSCE HOSTEL ADMIN PANEL</h1>

</div>
<?php
include('../dbcon.php');

$sid=$_GET['sid'];

$sql="SELECT * FROM `student` WHERE `usn`='$sid'";

$run=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($run);

?>
<form action="updatedata.php" method="post">
<table align="center" style="margin-top: 10px; width: 50%;" border="1">
	
		<tr>
			<th>USN</th>
			<td><input type="text" name="usn" value=<?php echo $data['usn'];?> required="required"></td>
		</tr>
		<tr>
			<th>Student Name</th>
			<td><input type="text" name="name" value=<?php echo $data['sname'] ;?> required="required"></td>
		</tr>
		<tr>
			<th>Father Name</th>
			<td><input type="text" name="fname" value=<?php echo $data['fname'];?> required="required"></td>
		</tr>
		<tr>
			<th>Department</th>
			<td><input type="text" name="dept" value=<?php echo $data['dept'];?> required="required"></td>
		</tr>
		<tr>
			<th>Room Id</th>
			<td><input type="number" name="roomid" value=<?php echo $data['room_id'];?> required="required"></td>
		</tr>
		<tr>
			<th>Mobile No.</th>
			<td><input type="number" name="mobile" value=<?php echo $data['mobile'];?> required="required"></td>
		</tr>
		<tr>
			<th>Date Of Birth</th>
			<td><input type="text" name="dob" value=<?php echo $data['dob'];?> required="required"></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="hidden" name="sid" value=<?php echo $data['usn'];?>>
				<input type="submit" name="submit"></td>
		</tr>
</table>
</form>
</body>
</html>