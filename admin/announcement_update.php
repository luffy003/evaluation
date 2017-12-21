<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $announcement = $_POST['announcement'];

 mysqli_query($con,"UPDATE announcement SET announcement='$announcement' where announcement_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated announcement!');</script>";
	echo "<script>document.location='announcements.php'</script>";
 } 

