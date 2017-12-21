<?php 
 
include('includes/dbcon.php');

	$last = $_POST['last'];
	$first = $_POST['first'];
	$bday1 = $_POST['bday'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$dept = $_POST['dept'];
	$date=date("Y-m-d");

	$bday=date("Y-m-d",strtotime($bday1));
	
	$query=mysqli_query($con,"select * from faculty where faculty_last='$last' and faculty_first='$first' and bday='$bday1'")or die(mysqli_error($con));

			$count=mysqli_num_rows($query);
			if ($count>0)
				{
					echo "<script type='text/javascript'>alert('You are already registered!');</script>";
					echo "<script>window.history.back(); </script>";
				}
			else
			{
					mysqli_query($con,"INSERT INTO faculty(faculty_last,faculty_first,faculty_pic,email,password,reg_date,bday,dept_id) VALUES('$last','$first','default.gif','$email','$pass','$date','$bday1','$dept')")or die(mysqli_error($con));
				

						 ini_set( 'display_errors', 1 );
    
						    error_reporting(E_ALL);
						    
						    $from = "info@dlnhs.com";
						    
						    $to = "$email";
						    
						    $subject = "Web-Based Faculty IS Registration Details";
						    
						    $message = "Hi!
						    Thank you for registering to Web-Based Faculty Information System. Below are your registration details.
						    Email: $email
						    Password: $password



						    Thanks,

						    Domingo Lacson National High School 
						    ";
						    
						    $headers = "From:" . $from;
						    
						    mail($to,$subject,$message, $headers);
						    


						  echo "<script type='text/javascript'>alert('You have successfully registered! An email has been sent for your account details. You may now login');</script>";
						  echo "<script>document.location='login_page.php'</script>";  	
			}
?>
