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
            Import faculty Students
           
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
                  <form method="post" enctype="multipart/form-data">
                      <p style="font-size:16px;line-height:34px;">Please follow this format to be able to upload successfully. Column Names should be <b>lastname, firstname, middlename, birthday,course,major id, sy</b> respectively. Birthday format shoud follow this format <b>yyyy/mm/dd</b>. File extension should be in <b>CSV</b> format</p>
                      <input type="file" name="image" required>
                      <input type="submit" name="import" value="Import" class="btn btn-primary">
                  </form>         
                </div><!-- /.box-body -->
<?php
if (isset($_POST['import'])) 
{
include('includes/dbcon.php');
  if (is_uploaded_file($_FILES['image']['tmp_name'])) {
    echo "<h1>" . "File ". $_FILES['image']['name'] ." uploaded successfully." . "</h1>";
    echo "<h2>Displaying contents:</h2>";
    readfile($_FILES['image']['tmp_name']);
  }

  //Import uploaded file to Database
  $handle = fopen($_FILES['image']['tmp_name'], "r");

  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    mysqli_query($con,"INSERT into faculty(faculty_last,faculty_first,faculty_middle,bday,course,major_id,sy) values('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')");
    
    }

  fclose($handle);

  //print "Import done";
  echo "<script type='text/javascript'>alert('Successfully imported a CSV file!');</script>";
  echo "<script>document.location='faculty.php'</script>";
  //view upload form
}

?>                
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>

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
