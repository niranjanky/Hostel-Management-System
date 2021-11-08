<?php
include('../dbcon.php');

		$usn=$_POST['usn'];
		$name=$_POST['name'];
		$fname=$_POST['fname'];
		$dept=$_POST['dept'];
		$roomid=$_POST['roomid'];
		$mobile=$_POST['mobile'];
		$dob=$_POST['dob'];
		$sid=$_POST['sid'];

		$qry="UPDATE `student` SET `usn` = '$usn', `sname` = '$name', `fname` = '$fname', `dept` = '$dept', `room_id` = '$roomid', `mobile` = '$mobile', `dob` = '$dob' WHERE `usn` = '$sid';";
		$run=mysqli_query($con,$qry);

		if ($run == true) {
			?>
			<script type="text/javascript">
				alert('Data updated succcesfuly');
				window.open('updateform.php?sid=<?php echo $sid;?>','_self');
			
			</script>
			

<?php
}
?>