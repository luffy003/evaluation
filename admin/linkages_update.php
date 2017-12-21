<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $name = $_POST['name'];
 $address = $_POST['address'];
 $contact = $_POST['contact'];
 $email = $_POST['email'];
 $incharge = $_POST['incharge'];
 $position = $_POST['position'];
 $dept = $_POST['dept'];
 $industry = $_POST['industry'];
 $status = $_POST['status'];

 mysqli_query($con,"UPDATE agency SET agency_name='$name',agency_address='$address',agency_contact='$contact',
 	agency_email='$email',person_in_charge='$incharge',dept='$dept',position='$position',industry_id='$industry',status='$status' where agency_id='$id'")
 or die(mysqli_error($con)); 

	echo "<script type='text/javascript'>alert('Successfully updated agency details!');</script>";
	echo "<script>document.location='linkages.php'</script>";
 } 

