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
	<table align="center" border="1">
		<form method="post" action="payment.php">
		<tr>
			<th>USN</th>
			<th><input type="text" name="usn" placeholder="Enter USN" required="required"></th>
		</tr>
		<tr>
			<th>TOTAL FEES</th>
			<th><input type="number" name="total" placeholder="Enter Total fees" required="required"></th>
		</tr>
		<tr>
			<th>AMOUNT PAID</th>
			<th><input type="number" name="paid" placeholder="Enter Paid Amount" required="required"></th>
		</tr>
		<tr>
			<th>AMOUNT DUE</th>
			<th><input type="number" name="due" placeholder="Enter Due Amount" required="required"></th>
		</tr>
		<tr>
			<th align="center" colspan="2"><input type="submit" name="submit"></th>
		</tr>
	</form>
	</table>
</div>
<?php
if (isset($_POST['submit'])) {
	

include('../dbcon.php');

   $usn= $_POST['usn'];
   $total=$_POST['paid'];
   $paid=$_POST['paid'];
   $due=$_POST['paid'];

   $qry="INSERT INTO `payment`( `usn`, `total`,`paid`,`due`) VALUES ('$usn','$total','$paid','$due')";
   $run=mysqli_query($con,$qry);

   if ($run==true) {

?>

	<script type="text/javascript">
		alert('Data Submited Successfuly');
	</script>
	<?php
   }

}
 ?>