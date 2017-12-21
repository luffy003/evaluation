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
            List of Linkages
            <span class="col-xs-2 col-sm-2 pull-right" style="margin-right:600px;">
            <a class="btn btn-block btn-primary" data-target="#addcat" class="btn btn-primary" data-toggle="modal" rel="tooltip" title="Update">
              Add Linkages</a>
            </span>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">Linkages</li>
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
                    		<th>Agency Name</th>
                        <th>Address</th>
                        <th>Contact #</th>
                        <th>Email</th>
                        <th>Industry</th>
                        <th>In-charge</th>
                        <th>Position</th>
                        <th>Dept</th>
                        <th>Status</th>
                        <th>Not Evaluated</th>
						        		<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../dist/includes/dbcon.php');
			
		$query=mysqli_query($con,"select * from agency natural join industry order by agency_name")or die(mysqli_error());

  		while ($row=mysqli_fetch_array($query)){
    		$id=$row['agency_id'];
    		$name=$row['agency_name'];
    		$address=$row['agency_address'];
    		$email=$row['agency_email'];
    		$contact=$row['agency_contact'];
    		$incharge=$row['person_in_charge'];
    		$dept=$row['dept'];
    		$position=$row['position'];
    		$status=$row['status'];
        $industry=$row['industry'];
        $code=$row['agency_code'];
        $iid=$row['industry_id'];

        $query1=mysqli_query($con,"select * from faculty_emp where agency_id='$id' and evaluation_status='0'")or die(mysqli_error());
            $count=mysqli_num_rows($query1);
        
?>
<div id="send<?php echo $id;?>" class="modal modal-primary fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Send Invitation</h4>
                      </div>
                      <div class="modal-body">
        <form class="form-horizontal" method="post" action="mail.php">
          <input type="hidden" name="id" value="<?php echo $id;?>">
          <p>Not yet evaluated: </p> 
          <?php 
          $query2=mysqli_query($con,"select * from faculty_emp natural join faculty where agency_id='$id' and evaluation_status='0'")or die(mysqli_error());
            while ($row2=mysqli_fetch_array($query2)){
              $last=$row2['faculty_last'];
              $first=$row2['faculty_first'];
        ?>
           <h5><b><?php echo $last.", ".$first;?></b></h5> 
        <?php }?>
          <p>Are you sure you want to send an invitation to <?php echo $name;?>?</p> 
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
                        <h4 class="modal-title">Update Linkage Details</h4>
                      </div>
					  
                      <div class="modal-body">
				<form class="form-horizontal" method="post" action="linkages_update.php" enctype='multipart/form-data'>
         <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">  
				<!-- Title -->
				<div class="form-group">
				  <label class="control-label col-lg-3" for="name">Agency Name</label>
				  <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="name" placeholder="Agency Name" value="<?php echo $name;?>" required>  
				  </div>
				</div> 
				<div class="form-group">
				  <label class="control-label col-lg-3" for="address">Address</label>
				  <div class="col-lg-8">
            <textarea class="form-control" id="address" name="address" placeholder="Agency Address" required><?php echo $address;?></textarea>
				  </div>
				</div>
							 
				<div class="form-group">
				  <label class="control-label col-lg-3" for="contact">Contact #</label>
				  <div class="col-lg-8">
				    <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $contact;?>" placeholder="Contact Number">  
				  </div>
				</div>
				
				<div class="form-group">
          <label class="control-label col-lg-3" for="email">Email</label>
          <div class="col-lg-8">
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>" placeholder="Email Address">  
          </div>
        </div>
        <div class="form-group">
                  <label class="control-label col-lg-3" for="first">Industry</label>
                  <div class="col-lg-8">
                    <select class="form-control" id="industry" name="industry" required>
                      <option value="<?php echo $iid;?>"><?php echo $industry;?></option>
                       <?php
                      $result = mysqli_query($con,"SELECT * FROM industry ORDER BY industry"); 
                        while ($row = mysqli_fetch_assoc($result)){?>
                        <option value="<?php echo $row['industry_id'];?>"><?php echo $row['industry'];?></option>
                        <?php } ?>
                      </select>
                      
                  </div>
              </div>
        <div class="form-group">
          <label class="control-label col-lg-3" for="incharge">Person in charge</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="incharge" name="incharge" value="<?php echo $incharge;?>" placeholder="Complete Name Person in Charge">  
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-lg-3" for="position">Position</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="position" name="position" value="<?php echo $position;?>" placeholder="Position in the agency">  
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-lg-3" for="dept">Department</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="dept" name="dept" value="<?php echo $dept;?>" placeholder="Department">  
          </div>
        </div>

        <div class="form-group">
                  <label class="control-label col-lg-3" for="status">Status</label>
                  <div class="col-lg-8">
                    <select class="form-control" id="status" name="status" required>
                      <option><?php echo $status;?></option>
                       <option>New</option>
                       <option>Old</option>
                      </select>
                      
                  </div>
              </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
			                  <td><?php echo $name;?></td>
                        <td><?php echo $address;?></td>
                        <td><?php echo $contact;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $industry;?></td>
                        <td><?php echo $incharge;?></td>
                        <td><?php echo $position;?></td>
                        <td><?php echo $dept;?></td>
                        <td><?php echo $status;?></td>
                        <td><button class="btn btn-info" data-target="#send<?php echo $id;?>" data-toggle="modal">
                           <?php echo $count;?>
                          </button></td>
						
						
                        <td>
                         
                          <button class="btn btn-success" data-target="#update<?php echo $id;?>" data-toggle="modal">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </button>
			                    
						</td>
                      </tr>
                      
<?php }?>                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Agency Name</th>
                        <th>Address</th>
                        <th>Contact #</th>
                        <th>Email</th>
                        <th>In-charge</th>
                        <th>Position</th>
                        <th>Dept</th>
                        <th>Status</th>
                        <th>Not Evaluated</th>
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
                        <h4 class="modal-title">Add New Agency</h4>
                      </div>
                      <div class="modal-body">
			                <form class="form-horizontal" method="post" action="agency_save.php" enctype='multipart/form-data'>
                        <!-- Title -->
        <div class="form-group">
          <label class="control-label col-lg-3" for="name">Agency Name</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="name" name="name" placeholder="Agency Name" required>  
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-lg-3" for="address">Address</label>
          <div class="col-lg-8">
            <textarea class="form-control" id="address" name="address" placeholder="Agency Address" required></textarea>
          </div>
        </div>
               
        <div class="form-group">
          <label class="control-label col-lg-3" for="contact">Contact #</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="contact" name="contact">  
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-lg-3" for="email">Email</label>
          <div class="col-lg-8">
            <input type="email" class="form-control" id="email" name="email">  
          </div>
        </div>
        <div class="form-group">
                  <label class="control-label col-lg-3" for="first">Industry</label>
                  <div class="col-lg-8">
                    <select class="form-control" id="cys" name="industry" required>
                       <?php
                      $result = mysqli_query($con,"SELECT * FROM industry ORDER BY industry"); 
                        while ($row = mysqli_fetch_assoc($result)){?>
                        <option value="<?php echo $row['industry_id'];?>"><?php echo $row['industry'];?></option>
                        <?php } ?>
                      </select>
                      
                  </div>
              </div>
        <div class="form-group">
          <label class="control-label col-lg-3" for="incharge">Person in charge</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="incharge" name="incharge">  
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-lg-3" for="position">Position</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="position" name="position">  
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-lg-3" for="dept">Department</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" id="dept" name="dept">  
          </div>
        </div>
        <div class="form-group">
                  <label class="control-label col-lg-3" for="status">Status</label>
                  <div class="col-lg-8">
                    <select class="form-control" id="status" name="status" required>
                       <option>New</option>
                       <option>Old</option>
                      </select>
                      
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

