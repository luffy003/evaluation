<?php
include('../dist/includes/dbcon.php');

 if (isset($_POST['update']))
 { 
 $id = $_POST['id'];
 $status = $_POST['status'];

 mysqli_query($con,"UPDATE faculty SET inactive='$status' where faculty_id='$id'")
 or die(mysqli_error()); 

 if ($status=="Inactive") $stat="deactivated"; else $stat="activated";
 ini_set( 'display_errors', 1 );
    
						    error_reporting(E_ALL);
						    
						    $from = "info@dlnhs.com";
						    
						    $to = "$email";
						    
						    $subject = "Web-Based Faculty Status";
						    
						    $message = "Hi!
						    
						    Your account has been $stat under the email $email. 



						    Thanks,

						    Domingo Lacson National High School 
						    ";
						    
						    $headers = "From:" . $from;
						    
						    mail($to,$subject,$message, $headers);

	echo "<script type='text/javascript'>alert('Successfully updated faculty status!');</script>";
	echo "<script>document.location='faculty.php'</script>";
 } 

