<?php
session_start();
include('../includes/dbcon.php');

 $id = $_SESSION['id'];

 if (isset($_POST['profile']))
 {
	 $last = $_POST['last'];
	 $first = $_POST['first'];
	 $email = $_POST['email'];
	 $contact = $_POST['contact'];


	 mysqli_query($con,"UPDATE faculty SET contact='$contact',email='$email' where faculty_id='$id'") or die(mysqli_error()); 

		echo "<script type='text/javascript'>alert('Successfully updated account details!');</script>";
}		

 if (isset($_POST['passchange']))
 {
	 $pass = $_POST['pass'];
	 $oldpass = $_POST['oldpass'];
	 $newpass = $_POST['newpass'];
	 $rpass = $_POST['rpass'];

	 if ($newpass<>$rpass)
	 {
		echo "<script type='text/javascript'>alert('New Password Mismatch');</script>";	 	
	 }
	 else
	 {
	 	if($oldpass<>$pass)
	 	{
	 		echo "<script type='text/javascript'>alert('Password Mismatch');</script>";	 	
	 	}		
	 	else
	 	{
	 		mysqli_query($con,"UPDATE faculty SET password='$newpass' where faculty_id='$id'") or die(mysqli_error()); 
	 		echo "<script type='text/javascript'>alert('Password successfully changed!');</script>";	 	

	 	}
	 }
}
		echo "<script>document.location='account.php'</script>";

?>
