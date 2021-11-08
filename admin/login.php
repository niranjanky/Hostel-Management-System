
<?php


session_start();
if(isset($_SESSION['uid']))
	{
	header('location:admindash.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO ACSCE HOSTEL</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/styl.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="header" align="center">
	<h3>
		<img src="../image/clogo.jpg" style="float: left;margin-left: 30px;">
		<a href="../index.php" style="float:right; margin-right: 30px; font-size: 25px; color: red;">Back To HomePage</a>
	</h3>
<h1>WELCOME TO ACSCE HOSTEL ADMIN LOGIN</h1>
</div>
<div class="bg-img"> 
		<form action="login.php" method="post" class="container" style="margin-top: 40px">
			<h1 align="center">Admin Login</h1>
			
			<label for="username"><b>Username</b></label>
			<input type="text" name="uname" placeholder="Enter USN" required>
			
			
			<label for="psw"><b>Password</b></label>
			<input type="password" name="pass" placeholder="Enter Password" required>

			
			
			<button type="submit" name="login" value="Login" class="btn">Login</button>

			

		</form>
	</div>
</body>
</html>
<?php
include('../dbcon.php');
	if (isset($_POST['login'])) {
		

		$username=$_POST['uname'];
		$password=$_POST['pass'];

		$qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
		$run = mysqli_query($con,$qry);
		$row = mysqli_num_rows($run);
		if ($row<1) {
			
			?>
			<script type="text/javascript">
				alert('username or password incorrect!!');
				window.open('login.php','_self');
			</script>
			<?php
		}
		else
		{
			$data = mysqli_fetch_assoc($run);
			$id = $data['id'];

			session_start();
			$_SESSION['uid']=$id;

			header('location:admindash.php');
		}
	}

?>