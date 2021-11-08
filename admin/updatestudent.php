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
<div>
	<form method="post" action="updatestudent.php">
		<table align="center" style="margin-top: 15px;">
			<tr>
				<th>Enter USN.</th>
				<th><input type="text" name="usn" placeholder="Enter USN" required="required"></th>
				<th><input type="submit" name="submit" value="Search"></th>
			</tr>
		</table>
	</form>
</div>

<table align="center" border="1" style="margin-top: 20px; width: 60%; background-color: #fff; color: #000;">
	<tr>
		<th>USN</th>
		<th>NAME</th>
		<th>FNAME</th>
		<th>DEPT</th>
		<th>ROOMID</th>
		<th>MOBILE</th>
		<th>DOB</th>
		<th>EDIT</th>
	</tr>

<?php
include('../dbcon.php');

	if (isset($_POST['submit'])) {
		
		$usn=$_POST['usn'];

		$qry="SELECT * FROM `student` WHERE `usn` LIKE'%$usn%' ";
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
 					<td><?php echo $data['usn']; ?></td>
 					<td><?php echo $data['sname']; ?></td>
 					<td><?php echo $data['fname']; ?></td>
 					<td><?php echo $data['dept']; ?></td>
 					<td><?php echo $data['room_id']; ?></td>
 					<td><?php echo $data['mobile']; ?></td>
 					<td><?php echo $data['dob']; ?></td>
 					<td><a href="updateform.php?sid=<?php echo($data['usn']);?>">Edit</a></td>

 				</tr>

 			<?php
 			}
 		}
	}

?>
</table>
</body>
</html>