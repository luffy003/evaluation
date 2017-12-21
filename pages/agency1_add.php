<?php 
session_start();
include('../includes/dbcon.php');

	$query=mysqli_query($con,"select school_year from settings")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query);
				$sy=$row['school_year'];

	$others = $_POST['others'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$agency = $_POST['agency'];
	$industry = $_POST['industry'];
	$period = $_POST['period'];
	$id=$_SESSION['id'];

	if ($others==0)
	{
		mysqli_query($con,"INSERT INTO faculty_emp(faculty_id,agency_id,training_period,training_start,training_end,school_year) 
		VALUES('$id','$agency','$period','$start','$end','$sy')")or die(mysqli_error($con));
	}
	else
	{
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

		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$incharge = $_POST['incharge'];
		$position = $_POST['position'];
		$department = $_POST['department'];	
	
	mysqli_query($con,"INSERT INTO agency(agency_name,agency_contact,agency_address,agency_email,person_in_charge,position,dept,industry_id,agency_code,status) 
		VALUES('$name','$contact','$address','$email','$incharge','$position','$department','$industry','$code','new')")or die(mysqli_error($con));  

	$aid=mysqli_insert_id($con);

	mysqli_query($con,"INSERT INTO faculty_emp(faculty_id,agency_id,training_period,training_start,training_end,school_year) 
		VALUES('$id','$aid','$period','$start','$end','$sy')")or die(mysqli_error($con));
	}
	
	echo "<script type='text/javascript'>alert('Successfully updated training agency details!');</script>";
	echo "<script>document.location='agency.php'</script>";   

?>