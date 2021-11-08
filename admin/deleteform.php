<?php
include('../dbcon.php');

		$sid=$_REQUEST['sid'];
		$qry="DELETE FROM `student` WHERE `usn`='$sid'";
		$run=mysqli_query($con,$qry);

		if ($run == true) {
			?>
			<script type="text/javascript">
				alert('Data Deleted succcesfuly');
				window.open('deletestudent.php','_self');
			
			</script>
			

<?php
}
?>