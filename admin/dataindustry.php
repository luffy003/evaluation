<?php
include('../dist/includes/dbcon.php');

$result = mysqli_query($con,"SELECT industry,COUNT(*) as count FROM faculty_emp natural join industry natural join agency group by industry_id,faculty_id");

$rows = array();
while($r = mysqli_fetch_array($result)) {
    $row[0] = $r[0];
    $row[1] = $r[1];
    array_push($rows,$row);
}

print json_encode($rows, JSON_NUMERIC_CHECK);

mysqli_close($con);
?>




