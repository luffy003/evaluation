<?php
include('../dist/includes/dbcon.php');

$query = mysqli_query($con,"select COUNT(*) as count,AVG(knowledge) as knowledge,AVG(attitude) as attitude,AVG(attendance) as attendance, 
	AVG(skill) as skill,AVG(average) as average from evaluation");

$category = array();
$category['name'] = 'Count';

$series1 = array();
$series1['name'] = 'Skill and Quality of Work';

$series2 = array();
$series2['name'] = 'General Knowledge and Information';

$series3 = array();
$series3['name'] = 'Personality and General Attitude';

$series4 = array();
$series4['name'] = 'Attendance';

$series5 = array();
$series5['name'] = 'General Average';

while($r = mysqli_fetch_array($query)) {
	$count=$r['count'];
    $category['data'][] = "Evaluation Criteria";
    $series1['data'][] = $r['skill'];
    $series2['data'][] = $r['knowledge'];
    $series3['data'][] = $r['attitude'];   
    $series4['data'][] = $r['attendance'];  
    $series5['data'][] = $r['average'];  
    
    //$series7['data'][]=($r['jk']+$r['wq']+$r['at']+$r['init']+$r['wac']+$r['dep'])/6;
}

$result = array();
array_push($result,$category);
array_push($result,$series1);
array_push($result,$series2);
array_push($result,$series3);
array_push($result,$series4);
array_push($result,$series5);


print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 
