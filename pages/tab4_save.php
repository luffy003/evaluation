<?php 
session_start();
include('../includes/dbcon.php');
	$id=$_SESSION['id'];
	//$id=7;

if(isset($_POST['finish']))

{
	$name = $_POST['contact'];
	$relation = $_POST['relation'];
	$haddress = $_POST['haddress'];
	$hcontact = $_POST['hcontact'];
	$oaddress = $_POST['oaddress'];
	$ocontact = $_POST['ocontact'];
	
	mysqli_query($con,"INSERT INTO contact(contact_name,contact_relation,contact_haddress,contact_hno,contact_oaddress,contact_ono,faculty_id) 
		VALUES('$name','$relation','$haddress','$hcontact','$oaddress','$ocontact','$id')")or die(mysqli_error($con));  
	echo "<script type='text/javascript'>alert('Successfully updated your profile! You will now be redirected to your home page');</script>";
	echo "<script>document.location='profile.php'</script>";   
}
?>