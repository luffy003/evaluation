<?php
include('dbcon.php');
include('header.php');
?>



<body>
<div class="container">
<div class="row-fluid">
<div class="span12">

<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
	<ul class="nav">
<li class="active"><a  href="#myModal" data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
</ul>
</div>
</div>





<!--content-->
             <div class="container">
			 <div class="hero-unit-header">
 <div class="container-con">
   <div class="row-fluid">
      <div class ="span12">
   
         <img src="images/banner.png">
		
		</div>
      </div>
	  
     </div>
	 
    </div>
  <br>
<!--end-->
  <!--functions-->          
<div id="content">
	
		<?php
		if (isset($_POST['evaluate'])) {
		$teacherid=$_POST['teacherid'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$sem=$_POST['sem'];
		$ay=$_POST['ay'];
		$totalave=$_POST['totalave'];
		
		
		
		mysql_query("INSERT INTO admindetails (teacherid, fname, lname, sem, ay, totalave) VALUES('$teacherid','$fname', '$lname' ,  '$sem' , '$ay' , '$totalave' )")or die(mysql_error());
		header("location: userhome.php");
		mysql_close($con);
		}
		?>
	
    		
		 <?php
				  if (isset($_GET['id']))
	{
	
	echo '<form action="" method="post" name="autosum" >';
	
	
	
			
			$id=$_GET['id_teacher'];
			$result = mysql_query("SELECT * FROM teacher WHERE id_teacher = $id");

			while($row = mysql_fetch_array($result))
  			{ ?>
			
				<p>You're Evaluating:<strong><br><?php echo $row['fname']; ?> <?php echo $row['lname']; ?> </p></strong>
				<input type="hidden" name="teacherid" value="<?php echo  $row['teacherid']; ?>">
				<input type="hidden" name="fname" value="<?php echo $row['fname']; ?>">
				<input type="hidden" name="lname" value="<?php echo $row['lname']; ?>">
				<input type="hidden" name="subject" value="<?php echo $row['subject']; ?>">
				
				
				
				
				<?php
  			}
			}
			?>
        
       
		<div class="span3">
 
        <label class="control-label" for="inputEmail">Semester:</label>
                                    
       <select name="semester" required>
        <option>1st</option>
        <option>2nd</option>
        
        </select>			
  </div>                              
        <div class="span3">
 
        <label class="control-label" for="inputEmail">Academic Year:</label>
           <select name="sy" required>
			<?php
			$int=2050; $i=2012; 
			while ($i <= $int){
			echo "<option>".$i."</option>";
			$i++;
			}
			?>
			</select>                         
                                       
												
  </div>
  <br>
  <br>
  <br>
  
<div class="container">
	
    	<div class="hero-unit">
		
        <legend>Administrator rating</legend>






		
            <div class="accordion" id="myaccordion">
            	<div class="accordion-group">
                	<div class="accordion-heading">
                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#myaccordion" href="#first">
                        	A. Commitment
                        </a>
                     </div>
                     <div class="accordion-body collapse in" id="first">
                     		<div class="accordion-inner">
                            <table class="table table-bordered table-hover">
    						<th>A. Commitment</th>
    						<th>Scale</th>
	
    						<tr class="success">
    						<td>1.	Follows approved class schedule strictly</td>
							<td width="190">
				             <label class="radio inline">
							<input type="radio" class="firstGroup" name="qa1" value="1" required>1
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa1" value="2" required>2
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa1" value="3" required>3
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa1" value="4" required>4
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa1" value="5" required>5
				            </label>
							</td>
							</tr>
	
    						<tr class="success">
    						<td>2.	Inspires students to perform better</td>
							<td width="190">
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa2" value="1" required>1
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa2" value="2" required>2
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa2" value="3" required>3
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa2" value="4" required>4
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa2" value="5" required>5
							</label>
							</td>
    						</tr>
    
    						<tr class="success">
    						<td>3.	Orients students and realizes learning objectives of the course.</td>
							<td width="190">
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa3" value="1" required>1
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa3" value="2" required>2
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa3" value="3" required>3
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa3" value="4" required>4
							</label>
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa3" value="5" required>5
							</label>
							</td>
    						</tr>
    
                            <tr class="success">
                            <td>4.	Coordinates students needs with concerned units</td>
                               <td width="190">
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa4" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa4" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa4" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa4" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa4" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>5.	Display continuous interest for acquisition of new knowledge</td>
                                <td width="190">
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa5" value="1" required />1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa5" value="2" required />2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa5" value="3" required />3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa5" value="4" required />4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa5" value="5" required />5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>6.	Inculcates desirable values and right attitude in the lesson</td>
                               <td width="190">
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa6" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa6" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa6" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa6" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa6" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                              <tr class="success">
                             <td>7.	Provides necessary resources to enhance learning.</td>
                                <td width="190">
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa7" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa7" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa7" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa7" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa7" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>8.	Provides consultation time for students.</td>
                                <td width="190">
							<label class="radio inline">
							<input type="radio" class="firstGroup" name="qa8" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa8" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa8" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa8" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="firstGroup" name="qa8" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                                     <tr class="success">
                                     <td align="right"><b>Total Score</b></td>
                                     <td align="center"><input  value="0" name="total" align ="left" id="firstGroup"
                                     readonly="readonly" 
                                     size="3" type="text" readonly="readonly" class="span5 totalClass"></td>
                                     
                                     </tr>
                                     </table>
                            	
                            </div>
                     	</div>   
                  </div>
                    
                 <div class="accordion-group">    
					<div class="accordion-heading">
                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#myaccordion" href="#second">
                        	B. Knowledge of the Subject - Click here to proceed
                        </a>
                     </div>
                     
                     <div class="accordion-body collapse" id="second">
                     		<div class="accordion-inner">
                            <table class="table table-bordered table-hover" cellspacing="3px" cellpadding="5px">
    						<th>B. Knowledge of the Subject</th>
     						<th width= "100px">1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp; 5 </th>
     
                             <tr class="success">
                             <td>1.	Exhibits mastery of the subject matter</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="secondGroup" name="qb1" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb1" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb1" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb1" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb1" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>2.	Relates subject matter to actual situations, experiences and other relevant topics.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="secondGroup" name="qb2" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb2" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb2" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb2" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb2" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>3.	Presents the subject matter in a logical, clear, and understandable manner.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="secondGroup" name="qb3" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb3" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb3" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb3" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb3" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>4.	Presents updated knowledge in the subject being taught.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="secondGroup" name="qb4" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb4" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb4" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb4" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb4" value="5" required>5
							</label>
							</td>
    						</tr>
                             <tr class="success">
                             <td>5.	Explains the subject matter using varied instructional resources.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="secondGroup" name="qb5" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb5" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb5" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb5" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb5" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>6.	Has good command of the language or vocabulary in the subject being taught.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="secondGroup" name="qb6" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb6" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb6" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb6" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb6" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>7.	Summarizes problems and issues relevant to the topics of discussion.</td>
                            <td width="190">
							<label class="radio inline">
							<input type="radio" class="secondGroup" name="qb7" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb7" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb7" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb7" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb7" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>8.	Raises problems and issues relevant to the topics of discussions.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="secondGroup" name="qb8" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb8" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb8" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb8" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="secondGroup" name="qb8" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td align="right"><b>Total Score</b></td>
                             <td align="center"><input value="0" name="total1" id="secondGroup" 
                             readonly="readonly" size="3" type="text" readonly="readonly" class="span5 totalClass"></td>
                             </tr>
                            
                            </table>
                                                        
                           </div>
                       </div>   
                   </div>
                                        
                                            
                   <div class="accordion-group"> 
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#myaccordion" href="#third">
                               C. Teaching for Independent Learning
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="third">
                            <div class="accordion-inner">
                             <table class="table table-bordered table-hover" cellspacing="3px" cellpadding="5px">
                            
                             <th>C. Teaching for Independent Learning</th>
                             <th width= "100px">1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp; 5 </th>
                             
                             <tr class="success">
                             <td>1.	Provides opportunities for interactive discussions and cooperative learning.</td>
                                <td width="190">
							<label class="radio inline">
							<input type="radio" class="thirdGroup" name="qc1" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc1" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc1" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc1" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc1" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>2.	Allows students to practice the concepts or theories learned (Experiential learning).</td>
                                <td width="190">
							<label class="radio inline">
							<input type="radio" class="thirdGroup" name="qc2" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc2" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc2" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc2" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc2" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>3.	Provides activities which develop analytical thinking among students.</td>
                                <td width="190">
							<label class="radio inline">
							<input type="radio" class="thirdGroup" name="qc3" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc3" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc3" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc3" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc3" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>4.	Provides an atmosphere that stimulates learning by encouraging students to raise problems
                              and make solutions.</td>
                            <td width="190">
							<label class="radio inline">
							<input type="radio" class="thirdGroup" name="qc4" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc4" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc4" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc4" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc4" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>5.	Prepares students to think and do further independent study .</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="thirdGroup" name="qc5" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc5" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc5" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc5" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc5" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>6.	Enhances students' self-esteem through proper recognition of their .</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="thirdGroup" name="qc6" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc6" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc6" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc6" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc6" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>7.	Shows respect and consideration of students opinions, suggestions and choices in the
                              exercise of their responsibilities.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="thirdGroup" name="qc7" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc7" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc7" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc7" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc7" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>8.	Encourage students to learn beyond what is required.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="thirdGroup" name="qc8" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc8" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc8" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc8" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="thirdGroup" name="qc8" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td align="right"><b>Total Score</b></td>
                             <td align="center"><input value="0" name="total2" id="thirdGroup" readonly="readonly" 
                             size="3" type="text" readonly="readonly" name="avec"class="span5 totalClass"></td>
                             </tr>
                             </table>
                            	
                            </div>
                     </div>   
                    </div>
                  
                  
                  
                  <div class="accordion-group"> 
                    <div class="accordion-heading">
                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#myaccordion" href="#fourth">
                        	D. Management of Learning
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="fourth">
                     		<div class="accordion-inner">
                            <table class="table table-bordered table-hover" cellspacing="3px" cellpadding="5px">
    
    <th>D. Management of Learning</th>
     <th width= "100px">1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp; 5 </th>
     
     <tr class="success">
     <td>1.	Gives appropriate and challenging tests, exercises and assignments.</td>
    <td width="190">
							<label class="radio inline">
							<input type="radio" class="fourthGroup" name="qd1" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd1" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd1" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd1" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd1" value="5" required>5
							</label>
							</td>
    						</tr>
     
     <tr class="success">
     <td>2.	Provides opportunities for maximum student participation.</td>
      <td width="190">
							<label class="radio inline">
							<input type="radio" class="fourthGroup" name="qd2" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd2" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd2" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd2" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd2" value="5" required>5
							</label>
							</td>
    						</tr>
     
     <tr class="success">
     <td>3.	Assumes various appropriate roles, (facilitators, coach, resource speaker).</td>
     <td width="190">
							<label class="radio inline">
							<input type="radio" class="fourthGroup" name="qd3" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd3" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd3" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd3" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd3" value="5" required>5
							</label>
							</td>
    						</tr>
     
     <tr class="success">
     <td>4.	Adopts various  teaching methods/strategies and techniques</td>
       <td width="190">
							<label class="radio inline">
							<input type="radio" class="fourthGroup" name="qd4" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd4" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd4" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd4" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd4" value="5" required>5
							</label>
							</td>
    						</tr>
     
     <tr class="success">
     <td>5.	Maintains decorum and disciplines in the class.</td>
       <td width="190">
							<label class="radio inline">
							<input type="radio" class="fourthGroup" name="qd5" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd5" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd5" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd5" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd5" value="5" required>5
							</label>
							</td>
    						</tr>
	 
	 <tr class="success">
     <td>6.	Keeps subject matter in agreement with the learning objectives.</td>
      <td width="190">
							<label class="radio inline">
							<input type="radio" class="fourthGroup" name="qd6" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd6" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd6" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd6" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd6" value="5" required>5
							</label>
							</td>
    						</tr>
	 
	 <tr class="success">
     <td>7.	Promotes healthy exchange of ideas.</td>
     <td width="190">
							<label class="radio inline">
							<input type="radio" class="fourthGroup" name="qd7" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd7" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd7" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd7" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd7" value="5" required>5
							</label>
							</td>
    						</tr>
	 
	 <tr class="success">
     <td>8.	Inspires the students in developing  self-confidence and love for learning.</td>
       <td width="190">
							<label class="radio inline">
							<input type="radio" class="fourthGroup" name="qd8" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd8" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd8" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd8" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fourthGroup" name="qd8" value="5" required>5
							</label>
							</td>
    						</tr>
     <tr class="success">
     <td align="right"><b>Total Average</b></td>
     <td align="center"><input value="0" name="total3" id="fourthGroup" readonly="readonly" size="3" type="text" readonly="readonly" class="span5 totalClass" align="right"/></td>
     </tr>
    						</table>
                            	
                            </div>
                     </div>   
                    </div>
                  
                   
                   <div class="accordion-group"> 
                    <div class="accordion-heading">
                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#myaccordion" href="#fifth">
                        	E. Professionalism
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="fifth">
                     		<div class="accordion-inner">
                            <table class="table table-bordered table-hover" cellspacing="3px" cellpadding="5px">
                           	<tr>
                             <th>E. Professionalism</th>
                             <th align="center">   </th>
                             </tr>
                             
                             <tr class="success">
                             <th><em>Attendance</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>1.	Is punctual in starting and ending classes on specified time.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe1" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe1" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe1" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe1" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe1" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>2.	Attends classes regularly, absences are rare and reasonable.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe2" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe2" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe2" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe2" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe2" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>3.	Attends punctually meeting and other co-curricular function during days.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe3" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe3" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe3" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe3" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe3" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <th><em>Physical Mental and Emotional Health</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>4.	Is able to tackle workload with enough physical.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe4" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe4" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe4" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe4" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe4" value="5" required>5
							</label>
							</td>
    						</tr>
                             <tr class="success">
                             <td>5.	Has a happy attitude towards work, peers, superiors and students.</td>
                            <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe5" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe5" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe5" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe5" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe5" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>6.	Is emotionally well-balance.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe6" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe6" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe6" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe6" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe6" value="5" required>5
							</label>
							</td>
    						</tr>
                             <tr class="success">
                             <th><em>Personality</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>7.	Observes proper grooming</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe7" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe7" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe7" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe7" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe7" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>8.	Possesses self-confidence and poise</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe8" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe8" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe8" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe8" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe8" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>9.	Has a pleasing personality.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe9" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe9" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe9" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe9" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe9" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>10. Demonstrates high sense of responsibility.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe10" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe10" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe10" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe10" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe10" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>11. Is a remarkable role model.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe11" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe11" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe11" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe11" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe11" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <th><em>Dynamism and Industry</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>12. Is resourceful, enthusiastic and creative.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe12" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe12" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe12" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe12" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe12" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>13. Demonstrates good leadership among peers.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe13" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe13" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe13" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe13" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe13" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>14. Complies with the demands of the profession wholeheartedly.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe14" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe14" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe14" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe14" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe14" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <th><em>Initiative</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>15. Manifests initiative in one�s work.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe15" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe15" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe15" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe15" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe15" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>16. Introduces practical suggestions for doing work and co-curricular activities in .</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe16" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe16" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe16" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe16" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe16" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <th><em>Honesty and Reliability</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>17. Practices professional values and attitudes.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe17" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe17" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe17" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe17" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe17" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>18. Sets good examples as a professional in words and actions.</td>
                            <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe18" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe18" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe18" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe18" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe18" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>19. Has a high sense of honesty to one�s self and to others.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe19" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe19" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe19" value="3" required>3
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe19" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe19" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>20. Is consistent in his/her good acts as a teacher.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe20" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe20" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe20" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe20" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe20" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <th><em>Working Relationship</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>21. Is looked up with respect by the students, peer and supervisors.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe21" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe21" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe21" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe21" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe21" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>22. Treats students equally and fairly-like responsible and mature individuals.</td>
                            <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe22" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe22" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe22" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe22" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe22" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>23. Keeps himself easily available for advice and consultation.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe23" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe23" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe23" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe23" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe23" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>24. Exhibits admirable respects for human dignity.</td>
                            <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe24" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe24" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe24" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe24" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe24" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>25. Is fair and accept weaknesses of others.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe25" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe25" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe25" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe25" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe25" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>26. Does assign task willingly and to the best of his/her ability.</td>
                            <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe26" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe26" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe26" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe26" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe26" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>27. Refrains from putting students, peers and superiors in bad light.</td>
                            <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe27" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe27" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe27" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe27" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe27" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <th><em>Discipline</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>28. Submits requirements on time (DTR, faculty load, syllabi, grade sheets, etc.).</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe28" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe28" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe28" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe28" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe28" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>29. Abide by the policies and regulations of the University (wearing of proper uniforms with
                              ID's, non-smoking on campus, etc.).</td>
                            <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe29" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe29" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe29" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe29" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe29" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <th><em>Cooperation</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>30. Willingly participates in school work activities.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe30" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe30" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe30" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe30" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe30" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>31. Assists willingly fellow members in task and assignments where he/she could be of 
                             help.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe31" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe31" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe31" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe31" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe31" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <th><em>Respect</em></th>
                             <th width= "100px">Scale</th>
                             </tr>
                             
                             <tr class="success">
                             <td>32. Considers peers and co-equal.</td>
                              <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe32" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe32" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe32" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe32" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe32" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>33. Respects the office which the superior represents.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe33" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe33" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe33" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe33" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe33" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td>34. Treats subordinates with due respect.</td>
                             <td width="190">
							<label class="radio inline">
							<input type="radio" class="fifthGroup" name="qe34" value="1" required>1
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe34" value="2" required>2
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe34" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="fifthGroup" name="qe34" value="4" required>4
							</label>                                       
							<label class="radio inline">                   
							<input type="radio" class="fifthGroup" name="qe34" value="5" required>5
							</label>
							</td>
    						</tr>
                             
                             <tr class="success">
                             <td align="right"><b>Total Average</b></td>
                             <td align="center"><input value="0" readonly="true" size="8" type="text" name="total4" 
                             class="totalClass span5" id ="fifthGroup"></td>
                             </tr>  
                             
                             
                             <tr class="success">
                             <td align="right"><b>Total Average (50%)</b></td>
                             <td align="center"><input value="0" readonly="true" size="8" type="text" name="totalave" 
                             id ="totalave" class="span5"></td>
                             </tr>  
                             </table>
                            
     						</div>
                     </div>   
                    </div>
                    
                   <!--Reasearch-->
                   <div class="accordion-group"> 
                    <div class="accordion-heading">
                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#myaccordion" href="#research">
                        	II. Reasearch
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="research">
                     		<div class="accordion-inner">
                             <table class="table table-bordered table-hover" cellspacing="3px" cellpadding="5px">
    
                    <thead>
                    <th>II. Research (15%)</th>
                    <th width= "100px"></th>
                    </thead>
                    
                    
                    <tr class="success">
                    <th>1.	For every research and development project completed and presented in </th>
                    <th></th>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; International </td>
                    <td>
                        <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf1" value="5">5
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; National </td>
                    <td>
                        <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf1" value="4">4
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; Regional </td>
                    <td>
                        <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf1" value="3">3
							</label>
                    </td>			
                    </tr>
                    <tr class="success">
                    <td>&nbsp; Local </td>
                    <td>
                       <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf1" value="2">2
							</label>
                    </td>			
                    </tr>
                    
                    
                    <tr class="success">
                    <th>2.	For every research and development project completed and published </th>
                    <th></th>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; International </td>
                    <td>
                       <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf2" value="5">5
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; National </td>
                    <td>
                       <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf2" value="4">4
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; Regional </td>
                    <td>
                       <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf2" value="3">3
							</label>
                    </td>			
                    </tr>
                    <tr class="success">
                    <td>&nbsp; Local </td>
                    <td>
                        <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf2" value="2">2
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                    <th>3.	For every research and development project completed </th>
                    <th></th>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; Program </td>
                    <td>
                        <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf3" value="9">9
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; Project </td>
                    <td>
                       <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf3" value="6">6
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                    <th>4.	For every research and development project proposal approved for </th>
                    <th></th>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; Program </td>
                    <td>
                       <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf4" value="9">9
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; Project </td>
                    <td>
                       <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf4" value="4">4
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                    <td>&nbsp; Study </td>
                    <td>
                        <label class="checkbox inline">                   
							<input type="checkbox" class="sixthGroup" name="qf4" value="2">2
							</label>
                    </td>			
                    </tr>
                    
                    <tr class="success">
                     <td align="right"><b>Total Points /Average </b></td>
                     <td align="center"><input value="" readonly="true" size="8" type="text" name="totalresearch" 
                     id ="sixthGroup" class="span7 totalclass1"></td>
                     </tr>  
                     <tr class="success">
                             <td align="right"><b>Total Average (15%)</b></td>
                             <td align="center"><input value="" readonly="true" size="8" type="text" name="totalclass1" id ="totalclass1" class="span7"></td>
                             </tr>  
                  
                    </table>          
                       		</div>
                      </div>
                    </div>
                    
                    <!--Extension-->
                    
                    <div class="accordion-group"> 
                    <div class="accordion-heading">
                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#myaccordion" href="#ext">
                        	III. Extension
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="ext">
                     		<div class="accordion-inner">
                            <table class="table table-bordered table-hover" cellspacing="3px" cellpadding="5px">
                            <thead>
                            <th>III. Extension (15%)</th>
                            <th width= "100px"></th>
                            </thead>
                            
                            <tr class="success">
                            <td>&nbsp; A.	Extension/Community Outreach Activity Proposed, Approved for 
                            Implementation and Implemented </td>
                            <td>
                                <label class="checkbox inline">                   
							<input type="checkbox" class="seventhGroup" name="qg1" value="7">7 pts
							</label>
                            </td>			
                            </tr>
                            
                            <tr class="success">
                            <td>&nbsp; &nbsp; 1. Submitted extension proposal, approved for implementation and implanted </td>
                            <td>
                                <label class="checkbox inline">                   
						      <input type="checkbox" class="seventhGroup" name="qg1" value="5">5 pts
							</label>
                            </td>			
                            </tr>
                            
                            <tr class="success">
                            <td>&nbsp; &nbsp; 2. Submitted proposal and approved for implemented for prioritization</td>
                            <td>
                                <label class="checkbox inline">                   
						      <input type="checkbox" class="seventhGroup" name="qg1" value="3">3 pts
							</label>
                            </td>			
                            </tr>
                            
                            <tr class="success">
                            <td>&nbsp; &nbsp; 3. Submitted proposal only</td>
                            <td>
                               <label class="checkbox inline">                   
						      <input type="checkbox" class="seventhGroup" name="qg1" value="2">2 pts
							</label>
                            </td>			
                            </tr>
                            
                            <tr class="success">
                            <td>&nbsp;B. Participation in extension Community Outreach Activities of the unit </td>
                            <td>
                                <label class="checkbox inline">                   
						      <input type="checkbox" class="seventhGroup" name="qg1" value="5">5 pts
							</label>
                            </td>			
                            </tr>
                            
                            <tr class="success">
                            <td>&nbsp;1. Chairmen/Leader (per year)</td>
                            <td>
                                <label class="checkbox inline">                   
						      <input type="checkbox" class="seventhGroup" name="qg1" value="3">3 pts
							</label>
                            </td>			
                            </tr>
                            
                            <tr class="success">
                            <td>&nbsp;2. Member (per year)</td>
                            <td>
                                <label class="checkbox inline">                   
						      <input type="checkbox" class="seventhGroup" name="qg1" value="2">2 pts
							</label>
                            </td>			
                            </tr>
                            
                            <tr class="success">
                            <td> C.	Participation in Special Community Service Activities such as: Barangay Community
                            Development/Civil Action Activities/Consultation/Resource Speakers/Expert, etc...</td>
                            <td>
                                
                            </td>			
                            </tr>
                            <tr class="success">
                             <td align="right"><b>Total Points / Average</b></td>
                             <td align="center"><input value="" readonly="true" size="8" type="text" name="extensionTotal" 
                     id ="seventhGroup" class="span7 totalclass1"></td>
                             </tr>  
							 <td align="right"><b>Total Average (15%)</b></td>
							 <td align="center"><input value="" readonly="true" size="8" type="text" name="totalclass1" id ="totalclass1" class="span7"></td>
                            </table>
                           
                       		</div>
                      </div>
                    </div>
                    
                    <!--Production-->
                    <div class="accordion-group"> 
                    <div class="accordion-heading">
                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#myaccordion" href="#prod">
                        	IV. Production
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="prod">
                     		<div class="accordion-inner">
                            <table class="table table-bordered table-hover" cellspacing="3px" cellpadding="5px">
                            <th>IV. Production (10%)</th>
    						<th width= "100px"></th>
							</thead>
                            
                            <tr class="success">
                            <td>Management of income-generating project of the college shall be credited on the</td>
                            <td></td>
                            </tr>
                            
                            <tr class="success">
                            <td>Below P3, 000 per year</td>
                            <td> 
							<label class="radio inline">                   
						      <input type="radio" class="eightGroup" name="qh1" value="1">1
							</label>
							</td>
                            </tr>
                            
                            <tr class="success">
                            <td>P3, 000 to P5, 000 a year</td>
                            <td>
							 <label class="radio inline">                   
						      <input type="radio" class="eightGroup" name="qh1" value="3">3
							</label>
							</td>
                            </tr>
                            
                            <tr class="success">
                            <td>P6, 000 to P10, 000 a year	</td>
                            <td>
							<label class="radio inline">                   
						      <input type="radio" class="eightGroup" name="qh1" value="6">6
							</label>
							</td>
                            </tr>
                            
                            <tr class="success">
                            <td>P11, 000 to P25, 000 a year </td>
                            <td>
							<label class="radio inline">                   
						      <input type="radio" class="eightGroup" name="qh1" value="9">9
							</label>
							</td>
                            </tr>
                            
                            <tr class="success">
                            <td>P26, 000 to P50, 000 a year </td>
                            <td>
							<label class="radio inline">                   
						      <input type="radio" class="eightGroup" name="qh1" value="12">12
							</label>
							</td>
                            </tr>
                            
                             <tr class="success">
                            <td>Above P51, 000 a year</td>
                            <td>
							<label class="radio inline">                   
						      <input type="radio" class="eightGroup" name="qh1" value="15">15
							</label>
							</td>
                            </tr>
	
                            
                            <tr class="success">
     						<td align="right"><b>Total Credits</b></td>
     						<td align="center"><input value="" readonly="true" size="8" type="text" name="totalProduction" id ="eightGroup" class="span7 totalclass1"></td>
     						</tr>
							<tr class="success">
                             <td align="right"><b>Total Average (15%)</b></td>
                             <td align="center"><input value="" readonly="true" size="8" type="text" name="totalclass1" id ="totalclass1" class="span7"></td>
                             </tr> 
                            </table>
                       		</div>
                      </div>
                    </div>
                    <!--PlusFactor-->
                    
                    <div class="accordion-group"> 
                    <div class="accordion-heading">
                		<a class="accordion-toggle" data-toggle="collapse" data-parent="#myaccordion" href="#plus">
                        	IV. Plus Factor
                        </a>
                     </div>
                     <div class="accordion-body collapse" id="plus">
                     		<div class="accordion-inner">
                            <table class="table table-bordered table-hover" cellspacing="3px" cellpadding="5px">
                            <th>A. Plus Factor (10%)</th>
    						<th width= "100px">Scale</th>
	
    						<tr class="success">
    						<td>1.	Has brought honor in form of awards, officerships in organizations for the department,
                             college, University at the local, regional, national level as a professional.</td>
							 <td width="190">
							<label class="radio inline">
							<input type="radio" class="nineGroup" name="qi1" value="1" required>1
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi1" value="2" required>2
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi1" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi1" value="4" required>4
							</label>                                      
							
							</td>
    						</tr>
                            
                            <tr class="success">
    						<td>2.	Does work voluntarily for the good of the department, college, University, beyond the
                            usual assignment as a professional, like an organizer, chairman or committee member..</td>
							 <td width="190">
							<label class="radio inline">
							<input type="radio" class="nineGroup" name="qi2" value="1" required>1
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi2" value="2" required>2
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi2" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi2" value="4" required>4
							</label>                                      
							
							</td>
    						</tr>
                            
                            <tr class="success">
    						<td>3.	Render unconditional service for the welfare of the department, college, university
                             (attendance of parades, important university functions, such as commencement receptions for
                             guest, attendance to university/college activities beyond regular office hours as and or usual
                             assignment.).</td>
							 <td width="190">
							<label class="radio inline">
							<input type="radio" class="nineGroup" name="qi3" value="1" required>1
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi3" value="2" required>2
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi3" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi3" value="4" required>4
							</label>                                      
							
							</td>
    						</tr>
                            
                            
                            <tr class="success">
    						<td>4.	Makes Exemplary contribution to the unit, Department, College, University as a person 
                            and as a professional.</td>
							 <td width="190">
							<label class="radio inline">
							<input type="radio" class="nineGroup" name="qi4" value="1" required>1
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi4" value="2" required>2
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi4" value="3" required>3
							</label>                                      
							<label class="radio inline">                  
							<input type="radio" class="nineGroup" name="qi4" value="4" required>4
							</label>                                      
							
							</td>
    						</tr>
                            
                            <tr class="success">
     						<td align="right"><b>Total Points / Credits/ Average</b></td>
     						<td align="center"><input value="" readonly="true" size="8" type="text" name="totalFactor" 
                     id ="nineGroup" class="span7 totalclass1"></td>
     						</tr>
                            
                            
                            <tr class="success">
     						<td align="right"><b>General Average</b></td>
     						 <td align="center"><input value="" readonly="true" size="8" type="text" name="totalclass1" id ="totalclass1" class="span7"></td>
     						</tr>
                            
                           
                            
                            </table>
                            
                            <button type="submit" name="evaluate" class="btn btn-primary" data-loading-text="Loading..."/>
    						<i class="icon-pencil icon-white"></i>&nbsp;Submit Evaluation</button>
							</form>
                       		</div>
                      </div>
                    </div>
                 
                 
                 
                 
            	</div>
            </div>
        </div>
    </div>
	
</div>       
</div>
</div>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
	<script type="text/javascript">
	jQuery(document).ready( function($){
		$(".firstGroup").change(function(){
			recalculate($(this).attr('class'),8);
		});
		$(".secondGroup").change(function(){
			recalculate($(this).attr('class'),8);
		});
		$(".thirdGroup").change(function(){
			recalculate($(this).attr('class'),8);
		});
		$(".fourthGroup").change(function(){
			recalculate($(this).attr('class'),8);
		});
		$(".fifthGroup").change(function(){
			recalculate($(this).attr('class'),34);
		});
		
		$(".plusgroup").change(function(){
			recalculate($(this).attr('class'),4);
		});
		
		function recalculate(classVar,dividend){
			var sum = 0;
			$("."+classVar+":checked").each(function(){
			  sum += parseInt($(this).val());
			});
			console.log(sum);
			sum = sum / dividend;
			$("#"+classVar).val(sum.toFixed(2));
			
			var total = 0;

			$(".totalClass").each(function(){
				var val = parseInt($(this).val());
				total += val;
			});
			total = (total / 5) * .5;
			$("#totalave").val(total.toFixed(2));
			
			
		}
	});
	</script>
   <script>
   jQuery(document).ready( function($){
		$(".sixthGroup").change(function(){
			recalculate($(this).attr('class'));
		});
   function recalculate(classVar){
			var sum = 0;
		$("."+classVar+":checked").each(function(){
			  sum += parseInt($(this).val());
			});
			console.log(sum);
			sum = sum ;
			$("#"+classVar).val(sum.toFixed(2));
			
			var total = 0;

			$(".totalResearch").each(function(){
				var val = parseInt($(this).val());
				total += val;
			});
			total = total * .15;
			$("#researchtotal").val(total.toFixed(2));
		}
	});	
   
   
   </script>
<script>
   jQuery(document).ready( function($){
		
		$(".seventhGroup").change(function(){
			recalculate($(this).attr('class'));
		});
		
   function recalculate(classVar){
			var sum = 0;
		$("."+classVar+":checked").each(function(){
			  sum += parseInt($(this).val());
			});
			console.log(sum);
			sum = sum ;
			$("#"+classVar).val(sum.toFixed(2));
			
			var total = 0;

			$(".extensionTotal").each(function(){
				var val = parseInt($(this).val());
				total += val;
			});
			total = total * .15;
			$("#extensiontotal").val(total.toFixed(2));
		}
	});	
   
   
   </script>
    <script>
   jQuery(document).ready( function($){
		$(".eightGroup").change(function(){
			recalculate($(this).attr('class'));
		});
   function recalculate(classVar){
			var sum = 0;
		$("."+classVar+":checked").each(function(){
			  sum += parseInt($(this).val());
			});
			console.log(sum);
			sum = sum ;
			$("#"+classVar).val(sum.toFixed(2));
			
			var total = 0;

			$(".totalProduction").each(function(){
				var val = parseInt($(this).val());
				total += val;
			});
			total = total * .15;
			$("#totalproduction").val(total.toFixed(2));
		}
	});	
   
   
   </script>
   
<script>
   jQuery(document).ready( function($){
		$(".nineGroup").change(function(){
			recalculate($(this).attr('class'));
		});
   function recalculate(classVar){
			var sum = 0;
		$("."+classVar+":checked").each(function(){
			  sum += parseInt($(this).val());
			});
			console.log(sum);
			sum = sum ;
			$("#"+classVar).val(sum.toFixed(2));
			
			var total = 0;

			$(".totalclass1").each(function(){
				var val = parseInt($(this).val());
				total += val;
			});
			total = (total / 5) * .5;
			$("#totalfactor").val(total.toFixed(2));
		}
	});	
   
   
   </script>
   

   


</div>

</div>

</div>
<?php include('modal.php'); ?>	
</body>
</html>