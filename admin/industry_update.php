<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $industry = $_POST['industry'];
 $desc = $_POST['desc'];

 mysqli_query($con,"UPDATE industry SET industry='$industry',industry_desc='$desc' where industry_id='$id'")
 or die(mysqli_error()); 

	echo "<script type='text/javascript'>alert('Successfully updated industry!');</script>";
	echo "<script>document.location='industry.php'</script>";
 } 

