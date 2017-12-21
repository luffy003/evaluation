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
    <title><?php include('../dist/includes/title.php');?> | Students List</title>
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
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <script type="text/javascript" src="../dist/js/jquery.min.js"></script>
    <style type="text/css">
      tr{
        text-align: left!important;
      }

    </style>

  </head>
  <body class="">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
      
        <!-- Header Navbar: style can be found in header.less -->
        
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content">
          <div class="row text-center">
            <div class="col-md-12">
                      
                      Republic of the Philippines<br>
                      <span style="font-weight:bold;">CARLOS HILADO MEMORIAL STATE COLLEGE<br></span>
                      Mabini St., Talisay City, 6115<br><br>
                      <span style="font-weight:bold;">College of Industrial Technology Department</span>
                      <h3>LIST OF STUDENTS FOR 
                      <?php 
                      include('../dist/includes/dbcon.php');
                      $query=mysqli_query($con,"select * from settings")or die(mysqli_error($con));
                            $row=mysqli_fetch_array($query);
                            $sy=$row['school_year'];
                            echo "S.Y. ".$sy;
                      ?>        
                      </h3>

<table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact #</th>
                        <th>Course/Major</th>
                        <th>Company Deployed</th>
                        <th>School Year</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
      
    $query=mysqli_query($con,"select * from faculty natural join major where sy='$sy' order by sy,faculty_last,faculty_first")or die(mysqli_error());
    $i=1;
    while ($row=mysqli_fetch_array($query)){
        
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
        $sy=$row['sy'];
        $id=$row['faculty_id'];

?> 
                      <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $first;?></td>
                        <td><?php echo $last;?></td>
                        <td><?php echo $contact;?></td>
                        <td>BSIT Major in <?php echo $major;?></td>
                        
<?php
  $query1=mysqli_query($con,"select * from faculty_emp natural join agency where faculty_id='$id'")or die(mysqli_error($con));
    $row1=mysqli_fetch_array($query1);
      $agency=$row1['agency_name'];
        
?>                        
                        <td><?php echo $agency;?></td>
                        <td><?php echo $sy;?></td>
                      </tr>                      
<?php $i++; }?>                     
                    </tbody>
                  
                  </table>
                  
                </div>

              
           </div>
        </div>   
      </section>
               <!--end of modal-->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      
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
