<?php 

/*include('includes/dbcon.php');

	$last = $_POST['last'];
	$first = $_POST['first'];
	$bday1 = $_POST['bday'];
	$major = $_POST['major'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$date=date("Y-m-d");

	$bday=date("Y-m-d",strtotime($bday1));
	
	$query=mysqli_query($con,"select * from faculty where faculty_last='$last' and faculty_first='$first' and major_id='$major' and bday='$bday'")or die(mysqli_error($con));
			$row=mysqli_fetch_array($query);
				$id=$row['faculty_id'];
				$status=$row['reg_status'];

			$count=mysqli_num_rows($query);

				if ($count>0)
				{
					if ($status==1)
					{
						echo "<script type='text/javascript'>alert('You are already registered!');</script>";
						echo "<script>document.location='index.php'</script>";  	
					}
					else
					{
						mysqli_query($con,"UPDATE faculty SET username='$user',password='$pass',reg_status='1',reg_date='$date',faculty_pic='default.gif',email='$email' where faculty_id='$id'")or die(mysqli_error()); 
*/

						 ini_set( 'display_errors', 1 );
    
						    error_reporting( E_ALL );
						    
						    $from = "chmsc_faculty@yahoo.com";
						    
						    $to = "emoblazz@gmail.com";
						    
						    $subject = "BSIT Registration Details";
						    
						    $message = "Hi $first!
						    Thank you for registering to BSIT faculty Evaluation System. Below are your registration details.
						    Username: $user
						    Password: $pass
						    Email: $email


						    Thanks,

						    On-The-Job Training Officer
						    ";
						    
						    $headers = "From:" . $from;
						    
						    mail($to,$subject,$message, $headers);
						    


						  echo "<script type='text/javascript'>alert('You have successfully registered! An email has been sent for your account details. You may now login');</script>";

						/*  echo "<script>document.location='index.php'</script>";   

					}
					
				}
				else{

						  echo "<script type='text/javascript'>alert('No record found!');</script>";
						  echo "<script>document.location='index.php'</script>";   
					
				}*/
?>
