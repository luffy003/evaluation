<?php 

include('../dist/includes/dbcon.php');

	$industry = $_POST['industry'];
	$desc = $_POST['desc'];

	mysqli_query($con,"INSERT INTO industry(industry,industry_desc) VALUES('$industry','$desc')")or die(mysqli_error());  
	echo "<script type='text/javascript'>alert('Successfully added new industry!');</script>";
	echo "<script>document.location='industry.php'</script>";   
	
	
?>