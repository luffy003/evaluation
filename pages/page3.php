<style type="text/css">
	
		.page3 tr
		{
			height: 25px;
		}
		.center{
			text-align: center;
		}
		.cola,.colc,.coli
		{
			width: 10px;	
		}
		.cold,.cole,.colf,.colg,.colh,.colj,.colk{
			width:100px!important;
		}
		.colb{
			width:50px
		}
	}
</style>

<table width="100%" class="page3">
	<tr class="hide">
		<td class="cola"></td>
		<td class="colb"></td>
		<td class="colc"></td>
		<td class="cold"></td>
		<td class="cole"></td>
		<td class="colf"></td>
		<td class="colg"></td>
		<td class="colh"></td>
		<td class="coli"></td>
		<td class="colj"></td>
		<td class="colk"></td>
	</tr>
	<tr class="header">
		<td>VI.</td>
		<td colspan="10"> VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</td>
	</tr>
	<tr>
		<td class="heading" rowspan="3">29.</td>
		<td colspan="3" class="heading">NAME & ADDRESS OF ORGANIZATION</td>
		<td class="heading" colspan="2">INCLUSIVE DATES</td>
		<td rowspan="3" class="heading">NUMBER OF HOURS</td>
		<td rowspan="3" colspan="4" class="heading ">POSITION / NATURE OF WORK</td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2" class="heading">(Write in full)</td>
		<td class="heading" colspan="2">(mm/dd/yyyy)</td>
	</tr>
	<tr>
		<td class="heading">From</td>
		<td class="heading">To</td>
	</tr>
<?php 
 $queryeduc=mysqli_query($con,"select * from voluntary where faculty_id='$id'")or die(mysqli_error($con));
 	$i3=0;
                   while($rowe=mysqli_fetch_array($queryeduc)){


?>  
	<tr>
		<td colspan="4"><?php echo $rowe['org_name'].", ".$rowe['org_address'];?></td>
		<td><?php echo date("m/d/Y",strtotime($rowe['voluntary_start']));?></td>
		<td><?php echo date("m/d/Y",strtotime($rowe['voluntary_end']));?></td>
		<td><?php echo $rowe['hours'];?></td>
		<td colspan="4"><?php echo $rowe['voluntary_position'];?></td>
	</tr>	
<?php $i3++; }?>
<?php 
	
	for ($loop3=1;$loop3<=7-$i3;$loop3++)
	{
		echo "<tr>
			<td colspan='4'></td>
			<td></td>
			<td></td>
			<td></td>
			<td colspan='4'></td>
		</tr>";
	}

?>	
	<tr>
		<td colspan="11" class="heading">(Continue on separate sheet if necessary)</td>
	</tr>

	<tr class="header">
		<td>VII.</td>
		<td colspan="10"> LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</td>
	</tr>
	<tr class="header">
		<td colspan="11"> (Start from the most recent L&D/training program and include only the relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</td>
	</tr>

	<tr>
		<td rowspan="2" class="heading">30.</td>
		<td colspan="3" rowspan="2" class="heading">TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS <br>(Write in full)</td>
		<td rowspan="1" colspan="2" class="heading">INCLUSIVE DATES OF ATTENDANCE <br>(mm/dd/yyyy)</td>
		<td class="heading" rowspan="2">NUMBER OF HOURS</td>
		<td class="heading" rowspan="2">Type of LD ( Managerial/ Supervisory/Technical/etc) </td>
		<td class="heading" colspan="3" rowspan="2">CONDUCTED/ SPONSORED BY (Write in full)</td>
	</tr>	
	<tr>
		<td class="heading">From</td>
		<td class="heading">To</td>
	</tr>
<?php 
 $queryeduc=mysqli_query($con,"select * from training where faculty_id='$id'")or die(mysqli_error($con));
 					$i4=0;
                   while($rowe=mysqli_fetch_array($queryeduc)){
?>  		
	<tr>
		<td colspan="4"><?php echo $rowe['training'];?></td>
		<td><?php echo date("m/d/Y",strtotime($rowe['training_start']));?></td>
		<td><?php echo date("m/d/Y",strtotime($rowe['training_end']));?></td>
		<td><?php echo $rowe['training_hours'];?></td>
		<td><?php echo $rowe['type'];?></td>
		<td colspan="3"><?php echo $rowe['sponsor'];?></td>
	</tr>
<?php $i4++;}?>
<?php 
	
	for ($loop4=1;$loop4<=20-$i4;$loop4++)
	{
		echo "<tr>
			<td colspan='4'></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td colspan='3'></td>
		</tr>";
	}
?>
	<tr>
		<td colspan="11" class="heading">(Continue on separate sheet if necessary)</td>
	</tr>
	<tr class="header">
		<td>VIII.</td>
		<td colspan="10"> OTHER INFORMATION</td>
	</tr>
	<tr>
		<td class="heading">31.</td>
		<td class="heading" colspan="2">SPECIAL SKILLS and HOBBIES</td>
		<td class="heading">32.</td>
		<td class="heading" colspan="4">NON-ACADEMIC DISTINCTIONS / RECOGNITION<br> (Write in full)</td>
		<td class="heading">33.</td>
		<td colspan="2" class="heading">MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br>(Write in full)</td>
	</tr>
	<tr>
		<td colspan="3">
		<?php 
			echo "<table width='100%'>";

			$queryh=mysqli_query($con,"select * from skill where faculty_id='$id'")or die(mysqli_error($con));
				$i5=0;
            	while($rowh=mysqli_fetch_array($queryh)){
            		echo "<tr>
					
					<td colspan='3'>$rowh[skill]</td>
					
				</tr>";
				$i5++;
			}
			for ($loop5=1;$loop5<=7-$i5;$loop5++)
			{
				echo "<tr>
					
					<td colspan= '3'></td>
					
				</tr>";
			}
			echo "</table>";
		?>	

		</td>

		<td colspan="5">
		<?php 
			echo "<table width='100%'>";
			$queryh=mysqli_query($con,"select * from recognition where faculty_id='$id'")or die(mysqli_error($con));$i6=0;
                 while($rowh=mysqli_fetch_array($queryh)){
                 	echo "<tr>
					
					<td colspan= '5'>$rowh[recognition]</td>
					
				</tr>";
				$i6++;
			}
			for ($loop6=1;$loop6<=7-$i6;$loop6++)
			{
				echo "<tr>
					
					<td colspan= '5'></td>
					
				</tr>";
			}
			echo "</table>";
		?>	

		</td>
		<td colspan="3">
		<?php 
			echo "<table width='100%'>";
			$queryh=mysqli_query($con,"select * from membership where faculty_id='$id'")or die(mysqli_error($con)); $i7=0;
                    while($rowh=mysqli_fetch_array($queryh)){
                    	echo "<tr>
					
					<td colspan= '3'>$rowh[membership_org]</td>
					
				</tr>";
				$i7++;}
			for ($loop7=1;$loop7<=7-$i7;$loop7++)
			{
				echo "<tr>
					
					<td colspan= '3'></td>
					
				</tr>";
			}
			echo "</table>";
		?>	

		</td>

	</tr>
	<tr style="height: 60px">
		<td colspan="11" class="heading">(Continue on separate sheet if necessary)</td>
	</tr>
</table>
