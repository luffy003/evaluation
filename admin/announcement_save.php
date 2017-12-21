<?php 

include('../dist/includes/dbcon.php');

	$announcement = $_POST['announcement'];
	$date = date("Y-m-d H:i");

	mysqli_query($con,"INSERT INTO announcement(announcement,date_posted) VALUES('$announcement','$date')")or die(mysqli_error());  
	
	 $query=mysqli_query($con,"select * from faculty where status='1' and inactive='Active'")or die(mysqli_error($con));
          while($row=mysqli_fetch_array($query))
          {
          	$contact=$row['contact'];
          	

			echo "<script>
				window.open('sendsms.php?contact=$contact&announcement=$announcement','_blank','fs','fullscreen=no,width=10,height=10')</script> ";
          }
	
	
	echo "<script type='text/javascript'>alert('Successfully posted new announcement!');</script>";
	echo "<script>document.location='announcements.php'</script>";  

?>


	