<?php 
 
include('includes/dbcon.php');
	
	$email = $_POST['email'];
	
	$query=mysqli_query($con,"select * from faculty where email='$email''")or die(mysqli_error($con));

			$count=mysqli_num_rows($query);
			if ($count<1)
				{
					echo "<script type='text/javascript'>alert('Email not found!');</script>";
					echo "<script>window.history.back(); </script>";
				}
			else
			{
					 $code="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
					 	$limit=5;
					 	$i=0;
					 	$code="";
    					while($i<=$limit)
    					{
    						$rand=rand(0,62);
    						$code=$code.$string[$rand];
    						$i++;
    					}

					 mysqli_query($con,"UPDATE faculty SET password='$code' where email='$email'") or die(mysqli_error($con)); 
				

						 ini_set( 'display_errors', 1 );
    
						    error_reporting(E_ALL);
						    
						    $from = "info@dlnhs.com";
						    
						    $to = "$email";
						    
						    $subject = "Web-Based Faculty IS Registration Details";
						    
						    $message = "Hi!
						    Your password has been reset. Below are your new login details.
						    Email: $email
						    Password: $code



						    Thanks,

						    Domingo Lacson National High School 
						    ";
						    
						    $headers = "From:" . $from;
						    
						    mail($to,$subject,$message, $headers);
						    


						  echo "<script type='text/javascript'>alert('Password was reset. An email containing your new password has been sent.');</script>";
						  echo "<script>document.location='login_page.php'</script>";  	
			}
?>
