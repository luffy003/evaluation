<?php session_start();
      if(empty($_SESSION['id'])):
      header('Location:index.php');
      endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include('../dist/includes/title.php');?> | faculty Students</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../dist/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <?php include('../dist/includes/header.php');?>
        <!-- Header Navbar: style can be found in header.less -->
        
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include('../dist/includes/admin_aside.php');?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            List of faculty Students
            <span class="col-xs-2 col-sm-2">
            <a class="btn btn-primary" data-target="#addcat" data-toggle="modal" rel="tooltip" title="Update">
              Add faculty Student</a>
            </span>
            <a href="faculty_import.php" class="btn btn-success">Import faculty List</a>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">faculty Students</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              

              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                    		<th>No.</th>
                    		<th>Picture</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Birthday</th>
                        <th>Contact #</th>
                        <th>Major</th>
                        <th>SY</th>
                        <th>Status</th>
						        		<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../dist/includes/dbcon.php');
			
		$query=mysqli_query($con,"select * from faculty natural join major order by sy,faculty_last,faculty_first")or die(mysqli_error());
		$i=0;
		while ($row=mysqli_fetch_array($query)){
		$id=$row['faculty_id'];
		$last=$row['faculty_last'];
		$first=$row['faculty_first'];
		$pic=$row['faculty_pic'];
		$bday=$row['bday'];
		$contact=$row['contact'];
		$email=$row['email'];
		$address=$row['address'];
		$course=$row['course'];
    $major=$row['major'];
    $major_id=$row['major_id'];
    $status=$row['reg_status'];
    $sy=$row['sy'];
		$i++;

?>


<div id="del<?php echo $id;?>" class="modal modal-primary fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
		  <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Delete faculty Student Details</h4>
                      </div>
                      <div class="modal-body">
			  <form class="form-horizontal" method="post" action="">
			    <input type="hidden" name="id" value="<?php echo $id;?>">
			    <p>Are you sure you want to delete the subject <?php echo $last." ".$first;?>?</p> 
                      </div>       
                      <!--end of modal body-->
                      <div class="modal-footer">
			<button type="submit" name="del" class="btn btn-primary">Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                      </div>
		    </div>
               
               <!--end of modal content-->
                </form>
           </div>
 </div>
</div>
               <!--end of modal-->     
      

<div id="update<?php echo $id;?>" class="modal modal-primary fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
		  <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Update faculty STudent Details</h4>
                      </div>
					  
                      <div class="modal-body">
				<form class="form-horizontal" method="post" action="faculty_update.php" enctype='multipart/form-data'>
         <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">  
				<!-- Title -->
				<div class="form-group">
				  <label class="control-label col-lg-3" for="last">Last Name</label>
				  <div class="col-lg-8">
                                    <input type="text" class="form-control" id="last" name="last" placeholder="Last Name" value="<?php echo $last;?>" required>  
				  </div>
				</div> 
				<div class="form-group">
				  <label class="control-label col-lg-3" for="first">First Name</label>
				  <div class="col-lg-8">
                                     <input type="text" class="form-control" id="first" name="first" placeholder="First Name" value="<?php echo $first;?>" required>  
				  </div>
				</div>
							 
				<div class="form-group">
				  <label class="control-label col-lg-3" for="pass">Birthday</label>
				  <div class="col-lg-8">
				    <input type="date" class="form-control" id="pass" name="bday" value="<?php echo $bday;?>">  
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-lg-3" for="first">BSIT Major in</label>
				  <div class="col-lg-8">
					<select class="form-control" id="cys" name="major" required>
					  <option value="<?php echo $major_id;?>"><?php echo $major;?></option>
					  <?php
						$result1 = mysqli_query($con,"SELECT * FROM major ORDER BY major"); 
						  while($row1 = mysqli_fetch_array($result1))
							  {?>
								<option value="<?php echo $row1['major_id'];?>"><?php echo $row1['major'];?></option>
						<?php	  }
					  ?>
					</select>			
				</div>
                             </div>
                            <br><br><br><br><br><br>
                      </div>      
                      <!--end of modal body-->
                      <div class="modal-footer">
			<button type="submit" name="update" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                      </div>
               </div>
               
               <!--end of modal content-->
                </form>
           </div>
 </div>
               <!--end of modal-->
                    
                      <tr>
			                  <td><?php echo $i;?></td>
                        <td><img src="../dist/uploads/<?php //echo $pic;?>default.gif" alt="Product Image" style="height:50px;width:50px;"></td>
                        <td><?php echo $first;?></td>
                        <td><?php echo $last;?></td>
                        <td><?php echo date("M d, Y",strtotime($bday));?></td>
                        <td><?php echo $contact;?></td>
                        <td><?php echo $major;?></td>
                        <td><?php echo $sy;?></td>
                        <td><?php if($status==1) echo "Registered"; ?></td>
						
						
                        <td>
                          <a class="btn btn-warning" href="profile.php?id=<?php echo $id;?>">
                            <i class="glyphicon glyphicon-share-alt"></i>
                          </a>
                          <button class="btn btn-success" data-target="#update<?php echo $id;?>" data-toggle="modal">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </button>
			                
						</td>
                      </tr>
                      
<?php }?>                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No.</th>
                        <th>Picture</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Birthday</th>
                        <th>Contact #</th>
                        <th>Major</th>
                        <th>SY</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>

    <div id="addcat" class="modal modal-primary fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog">
		  <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Add New faculty Student</h4>
                      </div>
                      <div class="modal-body">
			                <form class="form-horizontal" method="post" action="faculty_save.php" enctype='multipart/form-data'>
                        <!-- Title -->
                        <div class="form-group">
                          <label class="control-label col-lg-3" for="last">Last Name</label>
				                  <div class="col-lg-8">
                            <input type="text" class="form-control" id="last" name="last" placeholder="Last Name" required>  
				                  </div>
                        </div> 
                        <div class="form-group">
				                  <label class="control-label col-lg-3" for="first">First Name</label>
				                  <div class="col-lg-8">
                            <input type="text" class="form-control" id="first" name="first" placeholder="First Name" required>  
				                  </div>
                        </div>
							 <div class="form-group">
								  <label class="control-label col-lg-3" for="first">BSIT Major in</label>
								  <div class="col-lg-8">
										<select class="form-control" id="cys" name="major" required>
											 <?php
											$result = mysqli_query($con,"SELECT * FROM major ORDER BY major"); 
											  while ($row = mysqli_fetch_assoc($result)){?>
												<option value="<?php echo $row['major_id'];?>"><?php echo $row['major'];?></option>
												<?php } ?>
											</select>
											
								  </div>
              </div>
              <div class="form-group">
				        <label class="control-label col-lg-3" for="pass">Birthday</label>
				        <div class="col-lg-8">
                  <input type="date" class="form-control" id="pass" name="bday">  
				        </div>
              </div>
              <div class="form-group">
                          <label class="control-label col-lg-3" for="first">School Year</label>
                          <div class="col-lg-8">
                            <input type="text" class="form-control" id="first" name="sy" placeholder="Write School Year (ex. 2016-2017)" required>  
                          </div>
                        </div>
        </div>       
        <!--end of modal body-->
        <div class="modal-footer">
			     <button type="submit" name="save" class="btn btn-primary">Save</button>
           <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
    <!--end of modal content-->
  </form>
  </div>
</div>   
<!--end of modal-->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
<?php
    if (isset($_POST['del']))
    {
    $id=$_POST['id'];

	// sending query
	mysqli_query($con,"DELETE FROM faculty WHERE faculty_id='$id'")
	or die(mysqli_error());
	echo "<script>document.location='faculty.php'</script>";
    }
    ?>

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
