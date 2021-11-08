<?php
include('header.php');
?>
<div class="header" align="center">
	<h3>
		<img src="image/clogo.jpg" style="float: left;margin-left: 30px;">
		<a href="admin/login.php" style="float:right; margin-right: 30px; font-size: 25px; color: red;">Admin Login</a>
	</h3>
<h1>WELCOME TO ACSCE HOSTEL</h1>
</div>
<table class="table" style="margin-top: 10px;width: 93%; margin-left: 48px;">
<thead>
	<tr>
	<th><a style="text-decoration: none;" rel="HOME" href="index.php">HOME</a></th>
	<th><a style="text-decoration: none;" rel="FACILTIES" href="facilties.php">FACILTIES</a></th>
	<th><a style="text-decoration: none;" href="login.php">JOIN</a></th>
	<th><a style="text-decoration: none;" rel="PAYMENT" href="fees.php">PAYMENT</a></th>
	<th><a style="text-decoration: none;" rel="RULE" href="rule.php">RULE</a></th>
</tr>
</thead>
</table>
<div>
	<form method="post" action="fees.php">
		<table align="center" style="margin-top: 15px;">
			<tr>
				<th>Enter USN.</th>
				<th><input type="text" name="usn" placeholder="Enter USN" required="required"></th>
				<th><input type="submit" name="submit" value="Search"></th>
			</tr>
		</table>
	</form>
</div>
<table align="center" border="1" style="width: 50%; background-color: #000; color: #fff; margin-top: 15px;">
	<tr>
		<th>USN</th>
		<th>TOTAL FEES</th>
		<th>AMOUNT PAID</th>
		<th>AMOUNT DUE</th>
	</tr>

<?php
 	if (isset($_POST['submit'])) {
 		include('dbcon.php');

 		$usn=$_POST['usn'];

 		$qry="SELECT * FROM `payment` WHERE `usn`='$usn'";

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
 					<td><?php echo $data['total']; ?></td>
 					<td><?php echo $data['paid']; ?></td>
 					<td><?php echo $data['due']; ?></td>
 				</tr>

 			<?php
 			}
 		}



 	}
?>