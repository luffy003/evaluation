<?php session_start();
      if(empty($_SESSION['id'])):
      header('Location:../index.php');
      endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include('../dist/includes/title.php');?> | major</title>
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
            List of Major 
            <span class="col-xs-2 col-sm-2 pull-right" style="margin-right:700px;">
            <a class="btn btn-block btn-primary" data-target="#addcat" class="btn btn-primary" data-toggle="modal" rel="tooltip" title="Update">
              Add Major</a>
            </span>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Major</li>
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
                        <th>Major ID</th>                      
                        <th>Major</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../dist/includes/dbcon.php');

    $query=mysqli_query($con,"select * from major order by major")or die(mysqli_error());
      while ($row=mysqli_fetch_array($query)){
        $id=$row['major_id'];
        $major=$row['major'];

?>

<div id="update<?php echo $id;?>" class="modal modal-primary fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Update Major</h4>
                      </div>
                      <div class="modal-body">
        <form class="form-horizontal" method="post" action="major_update.php" enctype='multipart/form-data'>
          <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">  
          <div class="form-group">
            <label class="control-label col-lg-3" for="last">Major</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" id="last" name="major" placeholder="major" value="<?php echo $major;?>">  
            </div>
          </div> <br>
         
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
 </div>
               <!--end of modal-->
               
<div id="del<?php echo $id;?>" class="modal modal-primary fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Delete Major</h4>
                      </div>
                      <div class="modal-body">
        <form class="form-horizontal" method="post" action="">
          <input type="hidden" name="id" value="<?php echo $id;?>">
          <p>Are you sure you want to delete <?php echo $major;?>?</p> 
                             
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
                      <tr>
                      <td><?php echo $id;?></td>
                        <td><?php echo $major;?></td>
                        <td><button class="btn btn-success" data-target="#update<?php echo $id;?>" data-toggle="modal">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </button>
                         <button class="btn btn-danger" data-target="#del<?php echo $id;?>" data-toggle="modal"><i class="glyphicon glyphicon-trash"></i></button>
            </td>
                      </tr>
                      
<?php }?>                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Major</th>
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
                        <h4 class="modal-title">Add New Major</h4>
                      </div>
                      <div class="modal-body">
                       <form class="form-horizontal" method="post" action="major_save.php" enctype='multipart/form-data'>
                          <!-- Title -->
                          <div class="form-group">
                            <label class="control-label col-lg-3" for="last">Major</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="last" name="major" placeholder="Enter major here...">  
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
  mysqli_query($con,"delete from major WHERE major_id='$id'")
  or die(mysqli_error());
  echo "<script>document.location='major.php'</script>";
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
