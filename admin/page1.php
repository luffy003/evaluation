<style type="text/css">
	.page1 .cola{
		width:10px;
	}
	.page1 .cold{
		width:250px!important;
	}
	
	.page1 .coll{
		width: 50px
	}
	.page1 .colb{
		width: 100px;
	}
	.page1 .coln
	{
		width: 50px
	}
	.page1 .colm
	{
		width: 250px!important
		}
	
</style>
<table style="width: 100%" class="page1">
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
		<td class="coln"></td>
	</tr>
		<tr>
			<td colspan="14">CS Form No. 212</td>
		</tr>
		<tr>
			<td colspan="14">Revised 2017</td>
		</tr>
		<tr>
			<td colspan="14"><h1 style="text-align: center">PERSONAL DATA SHEET</h1></td>
		</tr>
		<tr>
			<td colspan="14">WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal case/s against the person concerned.</td>
		</tr>
		<tr>
			<td colspan="14">READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM.</td>
		</tr>
		<tr>
			<td colspan="14">Print legibly. Tick appropriate boxes (     ) and use separate sheet if necessary. Indicate N/A if not applicable.  DO NOT ABBREVIATE.</td>
		</tr>
		<tr class="header">
			<td colspan="14">I. PERSONAL INFORMATION</td>
		</tr>
		<tr>
			<td class="bg">2.</td>
			<td colspan="2" class="bg">SURNAME</td>
			<td colspan="11"><?php echo $row['faculty_last'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td colspan="2" class="bg">FIRST NAME</td>
			<td colspan="8"><?php echo $row['faculty_first'];?></td>
			<td colspan="3" class="bg">NAME EXTENSION (JR., SR) <?php echo $row['faculty_ext'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">MIDDLE NAME</td>
			<td colspan="11"><?php echo $row['faculty_middle'];?></td>
		</tr>
		<tr>
			<td class="bg">3.</td>
			<td class="bg" colspan="2">DATE OF BIRTH (mm/dd/yyyy)</td>
			<td colspan="3"><?php echo date("m/d/Y",strtotime($row['bday']));?></td>
			<td colspan="3" class="heading">CITIZENSHIP</td>
			<td colspan="2"><input type="checkbox"> Filipino</td>
			<td colspan="3"><input type="checkbox"> Dual</td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"></td>
			<td colspan="3"></td>
			<td colspan="3"></td>
			<td colspan="2"></td>
			<td colspan="3"><input type="checkbox" style="margin-left: 20px"> by birth <input type="checkbox"> by naturalization</td>
		</tr>
		<tr>
			<td class="bg">4.</td>
			<td class="bg" colspan="2">PLACE OF BIRTH</td>
			<td colspan="3"><?php echo $row['pob'];?></td>
			<td colspan="3" class="heading">If holder of  dual citizenship, </td>
			<td colspan="2"></td>	
			<td colspan="3"><span style="margin-left: 20px">Pls. indicate country: ________________</span></td>
		</tr>
		<tr>
			<td class="bg">5.</td>
			<td class="bg" colspan="2">SEX</td>
			<td colspan="1"><?php $male="";$female=""; if ($row['gender']=="Male") $male="checked";if ($row['gender']=="Female") $female="checked";?><input type="checkbox" <?php echo $male;?>> Male
			</td>
			<td colspan="2" class="extend">
				 <input type="checkbox" <?php echo $female;?>> Female
			</td>
			<td colspan="3" class="heading">please indicate the details.</td>
			<td colspan="5"></td>
		</tr>
		<tr>
			<td class="bg">6.</td>
			<td class="bg" colspan="2">CIVIL STATUS</td>
			<td colspan="1">
			<?php 
				$single="";
				$married="";
				$widowed="";
				$separated=""; 
				$others=""; 
				if ($row['civil']=="Single") $single="checked";
				if ($row['civil']=="Married") $married="checked";
				if ($row['civil']=="Widow/Widower") $widowed="checked";
				if ($row['civil']=="Separated") $separated="checked";?>
			<input type="checkbox" <?php echo $single;?>> Single</td>
			<td colspan="2"> <input type="checkbox" <?php echo $married;?>> Married</td>
			</td>
			<td colspan="2" class="heading">17. RESIDENTIAL ADDRESS</td>
			<td colspan="6"></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2"></td>
			<td colspan="1">
				<input type="checkbox" <?php echo $widowed;?>> Widowed</td>
			<td colspan="2"> <input type="checkbox" <?php echo $separated;?>> Separated
			</td>
			<td colspan="2" class="heading"></td>
			<td colspan="3" class="center">House/Block/Lot No.</td>
			<td colspan="3" class="center">Street</td>
		</tr>
		<tr>
			<td class="bg" rowspan="2"></td>
			<td class="bg" colspan="2" rowspan="2"></td>
			<td colspan="3" rowspan="2">
				<input type="checkbox" <?php echo $male;?>> Others
			</td>
			<td colspan="2" rowspan="2" class="heading"></td>
			<td colspan="6" class="center" class="heading"></td>
		</tr>
		<tr>
			<td colspan="3" class="center">Subdivision/Village</td>
			<td colspan="3" class="center">Barangay</td>
		</tr>
		<tr>
			<td class="bg" rowspan="2">7.</td>
			<td class="bg" colspan="2" rowspan="2">HEIGHT (m)</td>
			<td colspan="3" rowspan="2"><?php echo $row['height'];?></td>
			<td colspan="2" rowspan="2" class="heading"></td>
			<td colspan="6" class="center"><?php ?></td>
			
		</tr>
		<tr>
			<td colspan="3" class="center">City/Municipality</td>
			<td colspan="3" class="center">Province</td>
		</tr>
		<tr>
			<td class="bg">8.</td>
			<td class="bg" colspan="2">WEIGHT (kg)</td>
			<td colspan="3"><?php echo $row['weight'];?></td>
			<td colspan="2" class="heading">ZIPCODE</td>
			<td colspan="6"><?php echo $row['res_zip'];?></td>
		</tr>
		<tr>
			<td class="bg" rowspan="2">9.</td>
			<td class="bg" colspan="2" rowspan="2">BLOOD TYPE</td>
			<td colspan="3" rowspan="2"><?php echo $row['blood_type'];?></td>
			<td colspan="2" rowspan="2" class="heading">18. PERMANENT ADDRESS</td>
			<td colspan="6" class="center"></td>
		</tr>
		<tr>
			<td colspan="3" class="center">House/Block/Lot No.</td>
			<td colspan="3" class="center">Street</td>
		</tr>
		
		<tr>
			<td class="bg" rowspan="2">10.</td>
			<td class="bg" colspan="2" rowspan="2">GSIS ID NO.</td>
			<td colspan="3" rowspan="2"><?php echo $row['gsis'];?></td>
			<td colspan="2" rowspan="2" class="heading"></td>
			<td colspan="6" class="center"></td>
		</tr>
		<tr>
			<td colspan="3" class="center">Subdivision/Village</td>
			<td colspan="3" class="center">Barangay</td>
		</tr>
		<tr>
			<td class="bg" rowspan="2">11.</td>
			<td class="bg" colspan="2" rowspan="2">PAG-IBIG ID NO.</td>
			<td colspan="3" rowspan="2"><?php echo $row['pagibig'];?></td>
			<td colspan="2" rowspan="2" class="heading"></td>
			<td colspan="6" class="center"></td>
		</tr>
		<tr>
			<td colspan="3" class="center">City/Municipality</td>
			<td colspan="3" class="center">Province</td>
		</tr>
		<tr>
			<td class="bg">12.</td>
			<td class="bg" colspan="2">PHILHEALTH NO.</td>
			<td colspan="3"><?php echo $row['philhealth'];?></td>
			<td colspan="2" class="heading">ZIPCODE</td>
			<td colspan="6"><?php echo $row['perm_zip'];?></td>
		</tr>
		<tr>
			<td class="bg">13.</td>
			<td class="bg" colspan="2">SSS NO.</td>
			<td colspan="3"><?php echo $row['sss'];?></td>
			<td colspan="2" class="heading">19. TELEPHONE NO.</td>
			<td colspan="6"><?php echo $row['perm_tel'];?></td>
		</tr>
		<tr>
			<td class="bg">14.</td>
			<td class="bg" colspan="2">TIN NO.</td>
			<td colspan="3"><?php echo $row['tin'];?></td>
			<td colspan="2" class="heading">20. MOBILE NO.</td>
			<td colspan="6"><?php echo $row['contact'];?></td>
		</tr>
		<tr>
			<td class="bg">15.</td>
			<td class="bg" colspan="2">AGENCY EMPLOYEE NO.</td>
			<td colspan="3"></td>
			<td colspan="2" class="heading">21. E-MAIL ADDRESS (if any)</td>
			<td colspan="6"><?php echo $row['email'];?></td>
		</tr>
		<tr class="header">
			<td colspan="14">II. FAMILY BACKGROUND</td>
		</tr>
				<?php
												$queryf=mysqli_query($con,"select * from family where faculty_id='$id' and relationship='Father'")or die(mysqli_error($con));
                    									$rowf=mysqli_fetch_array($queryf);
											?>
											<?php
												$querym=mysqli_query($con,"select * from family where faculty_id='$id' and relationship='Mother'")or die(mysqli_error($con));
                    									$rowm=mysqli_fetch_array($querym);
											?>
											<?php
												$querys=mysqli_query($con,"select * from family where faculty_id='$id' and relationship='Spouse'")or die(mysqli_error($con));
                    									$rows=mysqli_fetch_array($querys);
											?>
		<tr>
			<td class="bg">22.</td>
			<td colspan="2" class="bg">SPOUSE SURNAME</td>
			<td colspan="5"><?php echo $rows['last'];?></td>
			<td colspan="6" rowspan="13">
				<table width="100%">
					<tr>
						<td>23. NAME of CHILDREN  (Write full name and list all)</td>
						<td>DATE OF BIRTH <br> (mm/dd/yyyy) </td>
					</tr>
					<?php 
					$queryc=mysqli_query($con,"select * from family where faculty_id='$id' and relationship='Child'")or die(mysqli_error($con));
					$i=0;
                    	while($rowc=mysqli_fetch_array($queryc)){
                    			$bday=date("m/d/Y",strtotime($rowc['bday']));
                    		echo "<tr>
							
							<td>$rowc[last], $rowc[first] $rowc[middle] $rowc[ext]</td>
							<td>$bday</td>
							
						</tr>";

						$i++;
                    	}
					for ($loop=1;$loop<=12-$i;$loop++)
					{
						echo "<tr>
							
							<td></td>
							<td></td>
							
						</tr>";
					}

					?>
				</table>
			</td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td colspan="2" class="bg">FIRST NAME</td>
			<td colspan="3"><?php echo $rows['first'];?></td>
			<td colspan="2" class="bg">NAME EXTENSION (JR., SR) <?php echo $rows['ext'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">MIDDLE NAME</td>
			<td colspan="5"><?php echo $rows['middle'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">OCCUPATION</td>
			<td colspan="5"><?php echo $rows['occupation'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">EMPLOYER/BUSINESS NAME</td>
			<td colspan="5"><?php echo $rows['emp_bus'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">BUSINESS ADDRESS</td>
			<td colspan="5"><?php echo $rows['bus_address'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">TELEPHONE NO.</td>
			<td colspan="5"><?php echo $rows['contact'];?></td>
		</tr>
		<tr>
			<td class="bg">24.</td>
			<td colspan="2" class="bg">FATHER'S SURNAME</td>
			<td colspan="5"><?php echo $rowf['last'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td colspan="2" class="bg">FIRST NAME</td>
			<td colspan="3"><?php echo $rowf['first'];?></td>
			<td colspan="2" class="bg">NAME EXTENSION (JR., SR) <?php echo $rowf['ext'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">MIDDLE NAME</td>
			<td colspan="5"><?php echo $rowf['middle'];?></td>
		</tr>
		<tr>
			<td class="bg">25.</td>
			<td colspan="2" class="bg">MOTHER'S SURNAME</td>
			<td colspan="5"><?php echo $rowm['last'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td colspan="2" class="bg">FIRST NAME</td>
			<td colspan="5"><?php echo $rowm['first'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">MIDDLE NAME</td>
			<td colspan="5"><?php echo $rowm['middle'];?></td>
		</tr>
		<tr class="header">
			<td colspan="14">III.  EDUCATIONAL BACKGROUND</td>
		</tr>
		<tr>
			<td class="bg" rowspan="2">26</td>
			<td class="bg" colspan="2" rowspan="2">LEVEL</td>
			<td colspan="4" rowspan="2" class="heading" ">NAME OF SCHOOL <br>(Write in full)</td>
			<td colspan="2" rowspan="2" class="heading">BASIC EDUCATION/DEGREE/COURSE <br>(Write in full)</td>
			<td colspan="2" class="heading">PERIOD OF ATTENDANCE</td>
			<td class="heading" rowspan="2">HIGHEST LEVEL/UNITS EARNED (if not graduated)</td>
			<td class="heading" rowspan="2">YEAR GRADUATED</td>
			<td class="heading" rowspan="2">SCHOLARSHIP/ ACADEMIC HONORS RECEIVED</td>
		</tr>
		<tr>
			<td class="heading">FROM</td>
			<td class="heading">TO</td>
		</tr>
<?php 
 $queryelem=mysqli_query($con,"select * from educ where faculty_id='$id' and level='Elementary'")or die(mysqli_error());
        $rowelem=mysqli_fetch_array($queryelem);

$querysec=mysqli_query($con,"select * from educ where faculty_id='$id' and level='High School'")or die(mysqli_error());
        $rowsec=mysqli_fetch_array($querysec);
	$querycol=mysqli_query($con,"select * from educ where faculty_id='$id' and level='College'")or die(mysqli_error());
        $rowcol=mysqli_fetch_array($querycol);        

    $queryvoc=mysqli_query($con,"select * from educ where faculty_id='$id' and level='Vocational'")or die(mysqli_error());
        $rowvoc=mysqli_fetch_array($queryvoc);       

    $querygrad=mysqli_query($con,"select * from educ where faculty_id='$id' and level='Graduate Studies'")or die(mysqli_error());
        $rowgrad=mysqli_fetch_array($querygrad);       
?>     		
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">ELEMENTARY</td>
			<td colspan="4"><?php echo $rowelem['school'];?></td>
			<td colspan="2"><?php echo $rowelem['course'];?></td>
			<td><?php echo $rowelem['at_from'];?></td>
			<td><?php echo $rowelem['at_to'];?></td>
			<td><?php echo $rowelem['level_units'];?></td>
			<td><?php echo $rowelem['grad'];?></td>
			<td><?php echo $rowelem['honors'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">SECONDARY</td>
			<td colspan="4"><?php echo $rowsec['school'];?></td>
			<td colspan="2"><?php echo $rowsec['course'];?></td>
			<td><?php echo $rowsec['at_from'];?></td>
			<td><?php echo $rowsec['at_to'];?></td>
			<td><?php echo $rowsec['level_units'];?></td>
			<td><?php echo $rowsec['grad'];?></td>
			<td><?php echo $rowsec['honors'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">VOCATIONAL/TRADE COURSE</td>
			<td colspan="4"><?php echo $rowvoc['school'];?></td>
			<td colspan="2"><?php echo $rowvoc['course'];?></td>
			<td><?php echo $rowvoc['at_from'];?></td>
			<td><?php echo $rowvoc['at_to'];?></td>
			<td><?php echo $rowvoc['level_units'];?></td>
			<td><?php echo $rowvoc['grad'];?></td>
			<td><?php echo $rowvoc['honors'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">COLLEGE</td>
			<td colspan="4"><?php echo $rowcol['school'];?></td>
			<td colspan="2"><?php echo $rowcol['course'];?></td>
			<td><?php echo $rowcol['at_from'];?></td>
			<td><?php echo $rowcol['at_to'];?></td>
			<td><?php echo $rowcol['level_units'];?></td>
			<td><?php echo $rowcol['grad'];?></td>
			<td><?php echo $rowcol['honors'];?></td>
		</tr>
		<tr>
			<td class="bg"></td>
			<td class="bg" colspan="2">GRADUATE STUDIES</td>
			<td colspan="4"><?php echo $rowgrad['school'];?></td>
			<td colspan="2"><?php echo $rowgrad['course'];?></td>
			<td><?php echo $rowgrad['at_from'];?></td>
			<td><?php echo $rowgrad['at_to'];?></td>
			<td><?php echo $rowgrad['level_units'];?></td>
			<td><?php echo $rowgrad['grad'];?></td>
			<td><?php echo $rowgrad['honors'];?></td>
		</tr>
	</table>