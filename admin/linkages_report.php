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
    <title><?php include('../dist/includes/title.php');?> | Linkages Report</title>
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
                      <h3>LIST OF LINK INDUSTRIES</h3>

                      <table class="table table-bordered table-striped text-left">
                    <thead>
                      <tr>
                        <th rowspan="2">No.</th>
                        <th rowspan="2">INDUSTRY</th>
                        <th rowspan="2">ADDRESS</th>
                        <th rowspan="2">AUTHORIZED REPRESENTATIVE</th>
                        <th rowspan="2">CONTACT #</th>
                        <th rowspan="2">STATUS</th>
                        <th colspan="3" class="text-center">NO. OF DEPLOYED BSIT IV STUDENTS</th>
                        
                      </tr>
                      <tr>
                        <th class="text-center">M</th>
                        <th class="text-center">F</th>
                        <th class="text-center">TOTAL</th>
                        
                        
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../dist/includes/dbcon.php');
      
    $query=mysqli_query($con,"select * from agency natural join industry order by agency_name")or die(mysqli_error());
      $i=0;
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
        $i++;
       
                        $query1=mysqli_query($con,"select COUNT(DISTINCT agency_id,faculty_id) as male from faculty natural join faculty_emp where gender='male' and agency_id='$id'")or die(mysqli_error($con));
                            $row1=mysqli_fetch_array($query1);
  
                      $query2=mysqli_query($con,"select COUNT(DISTINCT agency_id,faculty_id) as female from faculty natural join faculty_emp where gender='female' and agency_id='$id'")or die(mysqli_error($con));
                            $row2=mysqli_fetch_array($query2);

                                        $query3=mysqli_query($con,"select COUNT(DISTINCT agency_id,faculty_id) as total from faculty natural join faculty_emp where agency_id='$id'")or die(mysqli_error($con));
                            $row3=mysqli_fetch_array($query3);
            
            
?>
 <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $address;?></td>
                        <td><?php echo $incharge;?></td>
                        <td><?php echo $contact;?></td>
                        <td><?php echo $status;?></td>
                        <td class="text-center"><?php echo $row1['male'];?></td>
                        <td class="text-center"><?php echo $row2['female'];?></td>
                        <td class="text-center"><?php echo $row3['total'];?></td>
            
            
                        
                      </tr>
                      
<?php }?>                     
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
