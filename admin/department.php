<?php
session_start();
if (empty($_SESSION['id'])):
    header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include('../dist/includes/title.php');?> | Department</title>
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
  <body class="hold-transition skin-green sidebar-mini">
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
            List of Departments
            <span class="col-xs-2 col-sm-2 pull-right" style="margin-right:673px;">
            <a class="btn btn-block btn-primary" data-target="#addcat" class="btn btn-primary" data-toggle="modal" rel="tooltip" title="Update">Add Department</a>
            </span>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Department</li>
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
			                  <th>Department</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../dist/includes/dbcon.php');
=======
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php include('../dist/includes/title.php'); ?> | Department</title>
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
>>>>>>> 955f60d848c2410139932c60b88871078c057821


    </head>
    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
<?php include('../dist/includes/header.php'); ?>
                <!-- Header Navbar: style can be found in header.less -->

            </header>
            <!-- Left side column. contains the logo and sidebar -->
<?php include('../dist/includes/admin_aside.php'); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        List of Departments
                        <span class="col-xs-2 col-sm-2 pull-right" style="margin-right:673px;">
                            <a class="btn btn-block btn-primary" data-target="#addcat" class="btn btn-primary" data-toggle="modal" rel="tooltip" title="Update">Add Department</a>
                        </span>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Department</li>
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
                                                <th>Department Code</th>
                                                <th>Department Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include('../dist/includes/dbcon.php');

                                            $query = mysqli_query($con, "select * from department")or die(mysqli_error());
                                            while ($row = mysqli_fetch_array($query)) {
                                                $code = $row['department_code'];
                                                $title = $row['department_title'];
                                                ?>

                                            <div id="update<?php echo $code; ?>" class="modal modal-primary fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title">Update Department Details</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" method="post" action="dept_update.php" enctype='multipart/form-data'>
                                                                <div class="form-group">
                                                                    <label class="control-label col-lg-3" for="departmentCode">Department Code</label>
                                                                    <div class="col-lg-8">
                                                                        <input type="text" class="form-control" id="departmentCode" name="departmentCode" value="<?php echo $code; ?>">  
                                                                    </div>
                                                                </div><br>
                                                                <div class="form-group">
                                                                    <label class="control-label col-lg-3" for="departmentTitle">Department Title</label>
                                                                    <div class="col-lg-8">
                                                                        <input type="text" class="form-control" id="departmentTitle" name="departmentTitle" value="<?php echo $title; ?>">  
                                                                    </div>
                                                                </div><br>
                                                                <!-- Title -->
                                                                <br>
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

                                            <tr>
                                                <td><?php echo $code; ?></td>
                                                <td><?php echo $title; ?></td>
                                                <td><button class="btn btn-success" data-target="#update<?php echo $code; ?>" data-toggle="modal">
                                                        <i class="glyphicon glyphicon-pencil"></i>
                                                    </button>

                                                </td>
                                            </tr>

                                        <?php } ?>                     
                                        </tbody>

                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <?php include('../dist/includes/footer.php'); ?>

            <div id="addcat" class="modal modal-primary fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Add New Department</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="dept_save.php" enctype='multipart/form-data'>
                                <!-- Title -->
                                <div class="form-group">
                                    <label class="control-label col-lg-3" for="departmentCode">Department Code</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="departmentCode" name="departmentCode">  
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label class="control-label col-lg-3" for="departmentTitle">Department Title</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="departmentTitle" name="departmentTitle">  
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
