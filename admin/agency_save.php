<?php 

include('../dist/includes/dbcon.php');

	$name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$industry = $_POST['industry'];
	$incharge = $_POST['incharge'];
	$position = $_POST['position'];
	$dept = $_POST['dept'];
	$status = $_POST['status'];

	$string="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$code="";
	$limit=5;
	$i=0;
	while($i<=$limit)
	{
		$rand=rand(0,61);
		$code.=$string[$rand];
		$i++;
	}
		

	mysqli_query($con,"INSERT INTO agency(agency_name,agency_address,agency_contact,agency_email,person_in_charge,position,dept,status,industry_id,agency_code) VALUES('$name','$address','$contact','$email','$incharge','$position','$dept','$status','$industry','$code')")or die(mysqli_error($con));  
	echo "<script type='text/javascript'>alert('Successfully added new agency!');</script>";
	echo "<script>document.location='linkages.php'</script>";   
	
	
?>