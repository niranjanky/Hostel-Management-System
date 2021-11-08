<?php


session_start();
if(isset($_SESSION['uid']))
	{
	header('location:student/rmavl.php');
}
?>
<?php
include('header.php');
?>
<div class="header" align="center">
	<h3>
		<img src="image/clogo.jpg" style="float: left;margin-left: 30px;">
		<a href="index.php" style="float:right; margin-right: 30px; font-size: 25px; color: red;">Back To HomePage</a>
	</h3>
<h1>WELCOME TO ACSCE HOSTEL</h1>
</div>
<div class="bg-img"> 
		<form action="login.php" method="post" class="container" style="margin-top: 40px">
			<h1 align="center">Student Login</h1>
			
			<label for="username"><b>USN</b></label>
			<input type="text" name="uname" placeholder="Enter USN" required>
			
			
			<label for="psw"><b>Password</b></label>
			<input type="password" name="pass" placeholder="Enter Password" required>

			
			
			<button type="submit" name="login" value="Login" class="btn">Login</button>

			

		</form>
	</div>
	<div class="footer">
  <h3>All Right Reserve ACSCE &reg</h3>
</div>

	<?php

	include('dbcon.php');
	if (isset($_POST['login'])) {
		

		$usn=$_POST['uname'];
		$pass=$_POST['pass'];

		$qry = "SELECT * FROM `slogin` WHERE `usn`='$usn' AND `pass`='$pass'";
		$run = mysqli_query($con,$qry);
		$row = mysqli_num_rows($run);
		if ($row<1) {
			
			?>
			<script type="text/javascript">
				alert('usn or password incorrect!!');
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

			header('location:student/rmavl.php');
		}
	}


	?>