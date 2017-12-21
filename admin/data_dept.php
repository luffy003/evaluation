<?php
session_start();
      if(empty($_SESSION['id'])):
      header('Location:../index.php');
      endif;include('../dist/includes/dbcon.php');


$result = mysqli_query($con,"SELECT dept,COUNT(*) FROM faculty natural join dept
 where status='1' and inactive='Active' group by dept");
	
$rows = array();
while($r = mysqli_fetch_array($result)) {
		$row[0] = $r[0];	
	    $row[1] = $r[1];
	    array_push($rows,$row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);

mysqli_close($con);
?>

