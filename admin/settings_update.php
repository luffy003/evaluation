<?php
session_start();
include('../dist/includes/dbcon.php');

 $sy = $_POST['sy'];
 
 if (isset($_POST['update']))
 { 
 
  mysqli_query($con,"UPDATE settings SET school_year='$sy'") or die(mysqli_error()); 
	
 } 
  if (isset($_POST['add']))
 { 
  mysqli_query($con,"INSERT INTO settings(school_year) VALUES('$sy')")or die(mysqli_error());   
	
 } 
 
 	echo "<script type='text/javascript'>alert('Successfully updated settings!');</script>";
	echo "<script>document.location='settings.php'</script>";
