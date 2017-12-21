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
    <title><?php include('../dist/includes/title.php');?> | Students Profile</title>
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
          <div class="row">
            <div class="col-md-12">
<?php
     include('../dist/includes/dbcon.php');
     $id=$_REQUEST['id']; 
    $query=mysqli_query($con,"select * from faculty natural join major where faculty_id='$id'")or die(mysqli_error());
        $row=mysqli_fetch_array($query);
?>
                  <table>
                    <tr>
                        <td style="width:20%">
                          <img src="../dist/img/chmsc.png" width="100px">
                        </td>
                        <td style="width:60%">
                          Republic of the Philippines<br>
                        <span style="font-weight:bold;">CARLOS HILADO MEMORIAL STATE COLLEGE<br></span>
                        Mabini St., Talisay City, 6115<br><br>
                        </td>
                        <td rowspan="2">
                          <img src="../dist/uploads/<?php echo $row['faculty_pic'];?>" width="200px" style="border:1px solid #000">
                        </td>
                    </tr>
                    <tr>      
                        <td>
                          <img src="../dist/img/citlogo.png" width="100px">
                        </td>
                        <td>
                          <span style="font-weight:bold;">COLLEGE OF INDUSTRIAL TECHNOLOGY</span><br>
                          <span style="font-weight:bold;">Office of the Supervisor, On-the-Job Training</span><br>
                          <span style="">Email: chmsctalisay_faculty@yahoo.com</span><br>
                          <span style="">Tel No: (034) 712-0670</span><br>
                          <span style="">Facebook Fan Page: faculty Office CHMSC-Talisay</span>
                       </td>
                    </tr>
                  </table>                
                  <hr style="border:2px solid #000">
                    <h2 style="text-align: center;">PERSONAL DATA SHEET (PDS)</h2>
                    <h5 style="text-align: center;">Academic Year: <?php echo $row['sy'];?></h5>
<table id="" class="table table-bordered table-striped">
                      <tr>
                        <th colspan="8" style="background-color: grey">PERSONAL INFORMATION</th>
                      </tr>
                    
<?php
      
        $last=$row['faculty_last'];
        $first=$row['faculty_first'];
        $mi=$row['faculty_middle'];
        $pic=$row['faculty_pic'];
        $bday=$row['bday'];
        $contact=$row['contact'];
        $email=$row['email'];
        $address=$row['address'];
        $course=$row['course'];
        $major=$row['major'];
        $major_id=$row['major_id'];
        $sy=$row['sy'];

?> 
                      <tr>
                        <td>Last Name:</td>
                        <td><?php echo $last;?></td>
                        <td>First Name:</td>
                        <td colspan="2"><?php echo $first;?></td>
                        <td>Middle Name:</td>
                        <td colspan="2"><?php echo $mi;?></td>
                      </tr>
                      <tr>
                        <td>Course</td>
                        <td colspan="2">Bachelor of Science in Industrial Technology</td>
                        <td>Major</td>
                        <td colspan="6"><?php echo $major;?></td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td><?php echo $row['gender'];?></td>
                        <td>Civil Status</td>
                        <td><?php echo $row['civil'];?></td>
                        <td>Height</td>
                        <td><?php echo $row['height'];?></td>
                        <td>Weight</td>
                        <td><?php echo $row['weight'];?></td>
                      </tr>
                      <tr>
                        <td>Home Address</td>
                        <td colspan="8"><?php echo $row['address'];?></td>
                      </tr>
                      <tr>
                        <td>Email Address</td>
                        <td><?php echo $row['email'];?></td>
                        <td>Contact No.</td>
                        <td colspan="5"><?php echo $row['contact'];?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo date("M d, Y",strtotime($row['bday']));?></td>
                        <td>Place of Birth</td>
                        <td colspan="6"><?php echo $row['pob'];?></td>
                      </tr>
                      <tr>
                        <td>Religion</td>
                        <td><?php echo $row['religion'];?></td>
                        <td>Citizenship</td>
                        <td colspan="6"><?php echo $row['citizenship'];?></td>
                      </tr>
                      <tr>
                        <td>Mother's Name</td>
                        <td><?php echo $row['mother'];?></td>
                        <td>Occupation</td>
                        <td colspan="6"><?php echo $row['moccup'];?></td>
                      </tr>
                      <tr>
                        <td>Father's Name</td>
                        <td><?php echo $row['father'];?></td>
                        <td>Occupation</td>
                        <td colspan="6"><?php echo $row['fccup'];?></td>
                      </tr>
                      <tr>
                        <th>Languages</th>
                        <td><?php echo $row['language'];?></td>
                        <th>Skills</th>
                        <td colspan="6"><?php echo $row['skills'];?></td>
                      </tr>
                      <tr style="background-color: grey">
                        <th colspan="3">WORK EXPERIENCE RECORD</th>
                        <th colspan="5">SEMINARS ATTENDED</th>
                      </tr>
                      <tr>
                        <td colspan="3">
<?php
  $queryw=mysqli_query($con,"select * from work_exp where faculty_id='$id'")or die(mysqli_error($con));
    while($roww=mysqli_fetch_array($queryw)){
                      echo $roww['work_exp'];
                      echo "<br>";
    }

?>                     </td>    
                  
                   <td colspan="5">
<?php
  $queryw=mysqli_query($con,"select * from seminar where faculty_id='$id'")or die(mysqli_error($con));
    while($roww=mysqli_fetch_array($queryw)){
                      echo $roww['seminar'];
                      echo "<br>";
    }

?>                     </td>                     
                    </tr>
                      <tr style="background-color: grey">
                        <th colspan="8">EDUCATIONAL BACKGROUND</th>
                      </tr>
<?php
  $querye=mysqli_query($con,"select * from educ_back where faculty_id='$id'")or die(mysqli_error($con));
    $rowe=mysqli_fetch_array($querye);

?>                    
                      <tr>
                        <td>Past College</td>
                        <td colspan="8"><?php echo $rowe['past_college'];?></td>
                      </tr>
                      <tr>
                        <td>High School</td>
                        <td colspan="8"><?php echo $rowe['highschool'];?></td>
                      </tr>                                          
                      <tr>
                        <td>Elementary</td>
                        <td colspan="8"><?php echo $rowe['elementary'];?></td>
                      </tr>                                                            
                      <tr style="background-color: grey">
                        <th colspan="8">PERSON TO BE CONTACTED IN CASE OF EMERGENCY</th>
                      </tr>
                      
<?php
  $querya=mysqli_query($con,"select * from contact where faculty_id='$id'")or die(mysqli_error($con));
    $rowa=mysqli_fetch_array($querya);

?>                    
                      <tr>
                        <td>Name</td>
                        <td><?php echo $rowa['contact_name'];?></td>
                        <td>Relation</td>
                        <td colspan="6"><?php echo $rowa['contact_relation'];?></td>
                      </tr>                                          
                      <tr>
                        <td>Home Address</td>
                        <td><?php echo $rowa['contact_haddress'];?></td>
                        <td>Contact No.</td>
                        <td colspan="6"><?php echo $rowa['contact_hno'];?></td>
                      </tr>            
                      <tr>
                        <td>Office Address</td>
                        <td><?php echo $rowa['contact_oaddress'];?></td>
                        <td>Contact No.</td>
                        <td colspan="6"><?php echo $rowa['contact_ono'];?></td>
                      </tr>                                                                        
                      <tr style="background-color: grey">
                        <th colspan="8">TRAINING INDUSTRY/AGENCY</th>
                      </tr>
<?php
  $queryi=mysqli_query($con,"select * from faculty_emp natural join agency where faculty_id='$id'")or die(mysqli_error($con));
    $rowi=mysqli_fetch_array($queryi);

?>                        
                      <tr>
                        <td>Name</td>
                        <td colspan="7"><?php echo $rowi['agency_name'];?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td colspan="7"><?php echo $rowi['agency_address'];?></td>
                      </tr>
                      <tr>
                        <td>Contact No.</td>
                        <td><?php echo $rowi['agency_contact'];?></td>
                        <td>Email</td>
                        <td colspan="6"><?php echo $rowi['agency_email'];?></td>
                      </tr>
                      <tr>
                        <td>Person in-charge of Training</td>
                        <td colspan="7"><?php echo $rowi['person_in_charge'];?></td>
                      </tr>
                      <tr>
                        <td>Position</td>
                        <td><?php echo $rowi['position'];?></td>
                        <td>Department</td>
                        <td colspan="6"><?php echo $rowi['dept'];?></td>
                      </tr>
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
