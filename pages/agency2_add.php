<?php 
session_start();
include('../includes/dbcon.php');

	$name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$incharge = $_POST['incharge'];
	$position = $_POST['position'];
	$department = $_POST['department'];
	
	$id=$_SESSION['id'];
	
		$query=mysqli_query($con,"select school_year from settings")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query);
				$sy=$row['school_year'];

	mysqli_query($con,"INSERT INTO agency(agency_name,agency_contact,agency_address,agency_email,person_in_charge,position,dept) VALUES('$name','$contact','$address','$email','$incharge','$position','$department')")or die(mysqli_error($con));  

	$aid=mysqli_insert_id($con);

	mysqli_query($con,"INSERT INTO faculty_emp(faculty_id,agency_id,training_period,school_year) VALUES('$id','$aid','2nd 600','$sy')")or die(mysqli_error($con));  
	
	echo "<script type='text/javascript'>alert('Successfully updated training agency details!');</script>";
	echo "<script>document.location='agency.php'</script>";   
	
	
?>