<?php 
session_start();
error_reporting(0);
include('../includes/dbcon.php');
	$fid = $_POST['fid'];
	$last = $_POST['last'];
	$first = $_POST['first'];
	$middle = $_POST['middle'];
	$relationship = $_POST['relationship'];
	$bday = $_POST['bday'];
	$id=$_SESSION['id'];	

	//spouse
	$sfid = $_POST['sfid'];
	$slast = $_POST['slast'];
	$sfirst = $_POST['sfirst'];
	$smiddle = $_POST['smiddle'];
	$srelationship = $_POST['srelationship'];
	$occupation = $_POST['occupation'];
	$emp_bus = $_POST['emp_bus'];
	$bus_address = $_POST['bus_address'];
	$sext = $_POST['sext'];
	$contact = $_POST['contact'];

	$querys=mysqli_query($con,"select * from family where faculty_id='$id' and relationship='Spouse'")or die(mysqli_error($con));
         $count=mysqli_num_rows($querys);
         if ($count<1)
         {
         	mysqli_query($con,"INSERT INTO family(faculty_id,last,first,middle,ext,relationship,emp_bus,occupation,bus_address,contact) VALUES('$id','$slast','$sfirst','$smiddle','$sext','$srelationship','$emp_bus','$occupation','$bus_address','$contact')")or die(mysqli_error($con));  
         }
         else
         {
			mysqli_query($con,"update family set last='$slast',first='$sfirst',middle='$smiddle',ext='$sext',occupation='$occupation',emp_bus='$emp_bus',bus_address='$bus_address',contact='$contact' where fam_id='$sfid'")or die(mysqli_error($con));  
		}	

	//old child	
	$i=0;
	foreach ($fid as $fam_id)
	{
		mysqli_query($con,"update family set last='$last[$i]',first='$first[$i]',middle='$middle[$i]',ext='$ext[$i]',bday='$bday[$i]' where fam_id='$fam_id'")or die(mysqli_error($con));
		$i++;
	}

	//new child
	$clast = $_POST['clast'];
	$cfirst = $_POST['cfirst'];
	$cmiddle = $_POST['cmiddle'];
	$cbday = $_POST['cbday'];
	$cext = $_POST['cext'];
	$ii=0;
	foreach ($clast as $lastc)
	{
		mysqli_query($con,"INSERT INTO family(faculty_id,last,first,middle,ext,relationship,bday) VALUES('$id','$lastc','$cfirst[$ii]','$cmiddle[$ii]','$cext[$ii]','Child','$cbday[$ii]')")or die(mysqli_error($con)); 
		$ii++;
	}

	mysqli_query($con,"update faculty set last_update='$date' where faculty_id='$id'")or die(mysqli_error($con));  
	
	echo "<script type='text/javascript'>alert('Successfully updated spouse/child details!');</script>";
	echo "<script>document.location='family.php'</script>"; 
	
	
?>