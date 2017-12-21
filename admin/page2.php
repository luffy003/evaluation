<style type="text/css">
	
		.page2 tr
		{
			height: 28px;
		}
		.center{
			text-align: center;
		}
		.cola
		{
			width: 10px	
		}
		.colc,.cold,.cole,.colf,.colg,.colh,.coli,.colj,.colk,.coll,.colm{
			width:100px!important;
		}
		.colb{
			width:50px
		}
	}
</style>

<table width="100%" class="page2">
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
		<td class="coll"></td>
		<td class="colm"></td>
	</tr>
	<tr class="header">
		<td>IV.</td>
		<td colspan="12"> CIVIL SERVICE ELIGIBILITY</td>
	</tr>
	<tr>
		<td rowspan="2" class="heading">27.</td>
		<td colspan="4" rowspan="2" class="heading">CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ BARANGAY ELIGIBILITY / DRIVER'S LICENSE</td>
		<td rowspan="2" class="heading">RATING (If Applicable)</td>
		<td colspan="2" class="heading" rowspan="2">DATE OF EXAMINATION / CONFERMENT</td>
		<td colspan="3" class="heading" rowspan="2">PLACE OF EXAMINATION / CONFERMENT</td>
		<td colspan="2" class="heading">LICENSE (if applicable)</td>
	</tr>
	<tr>
		<td class="heading">NUMBER</td>
		<td class="heading">Date of Validity</td>
	</tr>
<?php 
 $queryeduc=mysqli_query($con,"select * from civil where faculty_id='$id'")or die(mysqli_error());
 					$i=0;
                   while($rowe=mysqli_fetch_array($queryeduc)){
?>   					
	<tr>
		<td colspan="5"><?php echo $rowe['eligibility'];?></td>
		<td><?php echo $rowe['rating'];?></td>
		<td colspan="2"><?php echo $rowe['date_taken'];?></td>
		<td colspan="3"><?php echo $rowe['place'];?></td>
		<td><?php echo $rowe['licenseno'];?></td>
		<td><?php if ($rowe['validity']=='0000-00-00') echo "";else echo $rowe['validity'];?></td>
	</tr>
<?php $i++;}?>
<?php 
	
	for ($loop=1;$loop<=10-$i;$loop++)
	{
		echo "<tr>
			<td colspan='5'></td>
			<td></td>
			<td colspan='2'></td>
			<td colspan='3'></td>
			<td></td>
			<td></td>
		</tr>";
	}

?>
	<tr>
		<td colspan="13" style="background-color: #ffbb22;text-align: center">(Continue on separate sheet if necessary)</td>
	</tr>
	<tr class="header">
		<td>V.</td>
		<td colspan="12"> WORK EXPERIENCE </td>
	</tr>
	<tr>
		<td colspan="13" class="bg">(Include private employment.  Start from your recent work) Description of duties should be indicated in the attached Work Experience sheet.</td>
	</tr>
	<tr>
		<td rowspan="2" class="heading">28.</td>
		<td colspan="2" class="heading">INCLUSIVE DATES </td>
		<td colspan="3" class="heading" rowspan="3">POSITION TITLE <br>(Write in full/Do not abbreviate)</td>
		<td colspan="3" class="heading" rowspan="3">DEPARTMENT / AGENCY / OFFICE / (Write in full/Do not abbreviate)</td>
		<td class="heading" rowspan="3">MONTHLY SALARY</td>
		<td class="heading" rowspan="3">SALARY/ JOB/ PAY GRADE (if applicable)& STEP  (Format "00-0")/ INCREMENT</td>
		<td rowspan="3" class="heading">STATUS OF APPOINTMENT</td>
		<td rowspan="3" class="heading">GOV'T SERVICE (Y/N)</td>
	</tr>
	<tr>
		<td colspan="2" class="center heading">(mm/dd/yyyy)</td>
	</tr>
	<tr>
		<td colspan="2" class="heading">From</td>
		<td class="heading">To</td>
	</tr>
<?php 
 $queryeduc=mysqli_query($con,"select * from work_exp where faculty_id='$id'")or die(mysqli_error());
 					$i2=0;
                   while($rowe=mysqli_fetch_array($queryeduc)){
?>   
	<tr>
		<td colspan="2" width="500px"><?php echo $rowe['work_start'];?></td>
		<td width="100px"><?php echo $rowe['work_end'];?></td>
		<td colspan="3"><?php echo $rowe['position'];?></td>
		<td colspan="3"><?php echo $rowe['agency'];?></td>
		<td><?php echo $rowe['salary'];?></td>
		<td><?php echo $rowe['grade'];?></td></td>
		<td><?php echo $rowe['appoint_status'];?></td>
		<td><?php echo $rowe['govt'];?></td>
	</tr>
<?php $i2++;}?>
<?php 
	
	for ($loop2=1;$loop2<=22-$i2;$loop2++)
	{
		echo "<tr>
			<td colspan='2'></td>
			<td></td>
			<td colspan='3'></td>
			<td colspan='3'></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>";
	}

?>
		<tr style="height: 100px">
			<td colspan="13" class="bg center">(Continue on separate sheet if necessary)</td>
		</tr>
</table>
