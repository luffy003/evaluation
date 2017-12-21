<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?php include('../includes/dbcon.php');?> | Account Settings </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
<link href="../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css">
<link href="../assets/global/css/plugins-md.css" rel="stylesheet" type="text/css">
<link href="../assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="../assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="../assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body class="page-md">
<!-- BEGIN HEADER -->
	<?php include('../includes/header.php');?>
<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-md-12">
					<!-- BEGIN PROFILE SIDEBAR -->
					<div class="profile-sidebar" style="width: 250px;">
						<!-- PORTLET MAIN -->
						<div class="portlet light profile-sidebar-portlet">
							<!-- SIDEBAR USERPIC -->
							<div class="profile-userpic">
								<img src="../dist/uploads/<?php echo $row['faculty_pic'];?>" class="img-responsive" alt="" style="height: 120px;width: 120px">
							</div>
							<!-- END SIDEBAR USERPIC -->
							<!-- SIDEBAR USER TITLE -->
							<div class="profile-usertitle">
								<div class="profile-usertitle-name">
									 <?php echo $_SESSION['name'];?>
								</div>
								<div class="profile-usertitle-job">
									 <button type="button" class="btn btn-circle green-haze btn-sm">
									 	<?php echo $row['major'];?>
									 </button>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							
							<!-- SIDEBAR MENU -->
							<div class="profile-usermenu">
								<ul class="nav">
									<li class="active">
										<a href="profile.php">
										<i class="icon-home"></i>
										Profile </a>
									</li>
									<li>
										<a href="account.php">
										<i class="icon-settings"></i>
										Account Settings </a>
									</li>
									<li>
										<a href="agency.php">
										<i class="icon-settings"></i>
										Training Agency</a>
									</li>
									<li>
										<a href="skills.php">
										<i class="icon-settings"></i>
										Language/Skills</a>
									</li>
									
								</ul>
							</div>
							<!-- END MENU -->
						</div>
						<!-- END PORTLET MAIN -->
						<!-- PORTLET MAIN -->
						<div class="portlet light">
							
							<div>
								<h4 class="profile-desc-title">About <?php echo $row['faculty_first'];?></h4>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-twitter"></i>
									<a href="http://www.twitter.com/keenthemes/"><?php echo $row['email'];?></a>
								</div>
								<div class="margin-top-20 profile-desc-link">
									<i class="fa fa-facebook"></i>
									<a href="http://www.facebook.com/keenthemes/"><?php echo $row['contact'];?></a>
								</div>
							</div>
						</div>
						<!-- END PORTLET MAIN -->
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							
							<div class="col-md-9">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Training Agency</span>
										</div>
										<ul class="nav nav-tabs">
											<li class="active">
												<a aria-expanded="true" href="#tab_1_1" data-toggle="tab">1st 600 Hours</a>
											</li>
											<li class="">
												<a aria-expanded="false" href="#tab_1_2" data-toggle="tab">2nd 600 Hours</a>
											</li>
											<li class="">
												<a aria-expanded="false" href="#tab_1_3" data-toggle="tab">Add Training Details</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane" id="tab_1_3">
												<form role="form" action="agency1_add.php" method="post">
												<?php 
												
												$query=mysqli_query($con,"select * from faculty_emp natural join agency where faculty_id='$id' and training_period='1st 600'")or die(mysqli_error($con));
														$row=mysqli_fetch_array($query);
														
												?>
													<div class="form-group">
														<label class="control-label">Select Agency Name</label>
															<select class="form-control select2me" data-placeholder="Select..." name="agency">
<?php
			
		$query=mysqli_query($con,"select * from agency order by agency_name")or die(mysqli_error());

  		while ($row=mysqli_fetch_array($query)){
    		$aid=$row['agency_id'];
    		$name=$row['agency_name'];

       
?>															
			<option value="<?php echo $aid;?>"><?php echo $name;?></option>
<?php }?>																
		</select>
														
													</div>
													<div class="form-group">
														<label class="control-label">Training Period</label>
															<select class="form-control select2me" data-placeholder="Select..." name="period">
															<option>1st 600</option>
															<option>2nd 600</option>																								
		</select>
														
													</div>
													<div class="md-checkbox-list">
														<div class="md-checkbox">
															<input id="checkbox11111" class="md-check" type="checkbox" name="others" value="1">
															<label for="checkbox11111">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Click here if not in the list </label>
														</div>
													</div>

													<div id="new">
													<div class="form-group">
														<label class="control-label">Agency Name</label>
														<input placeholder="First Name" class="form-control" type="text" name="name" value="<?php echo $row['agency_name'];?>">
													</div>
																						<div class="form-group">
														<label class="control-label">Select Agency Name</label>
															<select class="form-control select2me" data-placeholder="Select..." name="industry">
<?php
			
		$query=mysqli_query($con,"select * from industry order by industry")or die(mysqli_error());

  		while ($row=mysqli_fetch_array($query)){
    		$iid=$row['industry_id'];
    		$industry=$row['industry'];

       
?>															
			<option value="<?php echo $iid;?>"><?php echo $industry;?></option>
<?php }?>																
		</select>
														
													</div>
				
													<div class="form-group">
														<label class="control-label">Agency Address</label>
														<input placeholder="Last Name" class="form-control" type="text" name="address" value="<?php echo $row['agency_address'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Agency Contact </label>
														<input placeholder="Write contact number" class="form-control" type="text" value="<?php echo $row['agency_contact'];?>" name="contact">
													</div>
													<div class="form-group">
														<label class="control-label">Email</label>
														<input placeholder="Contact #" class="form-control" type="email" name="email" value="<?php echo $row['agency_email'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">In Charge</label>
														<input placeholder="Write Full Name of In-Charge" class="form-control" type="text" name="incharge" value="<?php echo $row['person_in_charge'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Department</label>
														<input placeholder="Write department" class="form-control" type="text" name="department" value="<?php echo $row['dept'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Position</label>
														<input placeholder="Write position in agency" class="form-control" type="text" name="position" value="<?php echo $row['position'];?>">
													</div>
													
													</div>

													<div class="form-group">
														<label class="control-label">Start Date</label>
														<input class="form-control" type="date" name="start" value="<?php echo $row['training_start'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">End Date</label>
														<input class="form-control" type="date" name="end" value="<?php echo $row['training_end'];?>">
													</div>
													<div class="margiv-top-10">
														<button class="btn green-haze" name="profile" type="submit">
														Save Changes </button>
														<a href="javascript:;" class="btn default">
														Cancel </a>
													</div>
													
												</form>
											</div>
											<!-- END PERSONAL INFO TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane" id="tab_1_2">
												<form role="form" action="agency_update.php" method="post">
												<?php 
												include('../includes/dbcon.php');
												$query=mysqli_query($con,"select * from faculty_emp natural join agency where faculty_id='$id' and training_period='2nd 600'")or die(mysqli_error($con));
														$row=mysqli_fetch_array($query);
														
												?>
													<div class="form-group">
														<label class="control-label">Agency Name</label>
														<input placeholder="First Name" class="form-control" type="text" name="name" value="<?php echo $row['agency_name'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Agency Address</label>
														<input placeholder="Last Name" class="form-control" type="text" name="address" value="<?php echo $row['agency_address'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Agency Contact </label>
														<input placeholder="Write contact number" class="form-control" type="text" value="<?php echo $row['agency_contact'];?>" name="contact">
													</div>
													<div class="form-group">
														<label class="control-label">Email</label>
														<input placeholder="Contact #" class="form-control" type="email" name="email" value="<?php echo $row['agency_email'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">In Charge</label>
														<input placeholder="Write Full Name of In-Charge" class="form-control" type="text" name="incharge" value="<?php echo $row['person_in_charge'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Department</label>
														<input placeholder="Write department" class="form-control" type="text" name="department" value="<?php echo $row['dept'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Position</label>
														<input placeholder="Write position in agency" class="form-control" type="text" name="position" value="<?php echo $row['position'];?>">
													</div>
													<div class="margiv-top-10">
														<button class="btn green-haze" name="profile" type="submit">
														Save Changes </button>
														<a href="javascript:;" class="btn default">
														Cancel </a>
													</div>
														
								<table class="table table-hover">
								<thead>
								<tr>
									
									<th>
										 Start
									</th>
									<th>
										 End
									</th>
									<th>
										 Evaluation Status
									</th>
									
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 <?php echo $row['training_start']; ?>
									</td>
									<td>
										 <?php echo $row['training_end']; ?>
									</td>
									<td>
									<?php if ($row['evaluation_status']=='1') {$flag="success"; $display="evaluated";}else{$flag="danger";$display="not yet evaluated";}?>
										<span class="label label-sm label-<?php echo $flag;?>">
										<?php echo $display;?> </span>
									</td>
								</tr>
								
								</tbody>
								</table>
						
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
											<!-- CHANGE AVATAR TAB -->
											<div class="tab-pane active" id="tab_1_1">
												<form role="form" action="agency_update.php" method="post">
												<?php 
												include('../includes/dbcon.php');
												$query=mysqli_query($con,"select * from faculty_emp natural join agency where faculty_id='$id' and training_period='1st 600'")or die(mysqli_error($con));
														$row=mysqli_fetch_array($query);
														
												?>
													<div class="form-group">
														<label class="control-label">Agency Name</label>
														<input placeholder="First Name" class="form-control" type="text" name="name" value="<?php echo $row['agency_name'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Agency Address</label>
														<input placeholder="Last Name" class="form-control" type="text" name="address" value="<?php echo $row['agency_address'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Agency Contact </label>
														<input placeholder="Write contact number" class="form-control" type="text" value="<?php echo $row['agency_contact'];?>" name="contact">
													</div>
													<div class="form-group">
														<label class="control-label">Email</label>
														<input placeholder="Contact #" class="form-control" type="email" name="email" value="<?php echo $row['agency_email'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">In Charge</label>
														<input placeholder="Write Full Name of In-Charge" class="form-control" type="text" name="incharge" value="<?php echo $row['person_in_charge'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Department</label>
														<input placeholder="Write department" class="form-control" type="text" name="department" value="<?php echo $row['dept'];?>">
													</div>
													<div class="form-group">
														<label class="control-label">Position</label>
														<input placeholder="Write position in agency" class="form-control" type="text" name="position" value="<?php echo $row['position'];?>">
													</div>
													<div class="margiv-top-10">
														<button class="btn green-haze" name="profile" type="submit">
														Save Changes </button>
														<a href="javascript:;" class="btn default">
														Cancel </a>
													</div>
														
								<table class="table table-hover">
								<thead>
								<tr>
									
									<th>
										 Start
									</th>
									<th>
										 End
									</th>
									<th>
										 Evaluation Status
									</th>
									
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 <?php echo $row['training_start']; ?>
									</td>
									<td>
										 <?php echo $row['training_end']; ?>
									</td>
									<td>
									<?php if ($row['evaluation_status']=='1') {$flag="success"; $display="evaluated";}else{$flag="danger";$display="not yet evaluated";}?>
										<span class="label label-sm label-<?php echo $flag;?>">
										<?php echo $display;?> </span>
									</td>
								</tr>
								
								</tbody>
								</table>
						
												</form>
											</div>
											<!-- END CHANGE PASSWORD TAB -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<!-- BEGIN PORTLET -->
								<div class="portlet light ">
									<div class="portlet-title">
										<div class="caption caption-md">
											<i class="icon-bar-chart theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Members</span>
											
										</div>
									</div>
									<div class="portlet-body">

										<div class="table-scrollable table-scrollable-borderless">
											<table class="table table-hover table-light">
			<?php
              include('../includes/dbcon.php');
                  
                  $query=mysqli_query($con,"select * from faculty where reg_status='1'")or die(mysqli_error());
                    while($row=mysqli_fetch_array($query)){
                        
              ?>
											<tr>
												<td class="fit">
													<img class="user-pic" src="../dist/uploads/<?php echo $row['faculty_pic'];?>" style="height: 30px;width: 30px">
												</td>
												<td>
													<a href="javascript:;" class="primary-link"><?php echo $row['faculty_first'];?></a>
												</td>
												
											</tr>
				<?php }?>							
											</table>
										</div>
									</div>
								</div>
								<!-- END PORTLET -->
							</div>
						</div>
						
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<?php include('../includes/footer.php');?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="../assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/profile.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script src="../assets/admin/pages/scripts/components-dropdowns.js"></script>
<script type="text/javascript" src="../assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<script>
        jQuery(document).ready(function() {       
           // initiate layout and plugins
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
           ComponentsDropdowns.init();
        });   
    </script>
    <script>
	$( "#new" ).hide();
	$("#checkbox11111").click(function(){
    $("#new").toggle("slow");
});
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>