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
    <title><?php include('../dist/includes/title.php');?> | Evaluation Report</title>
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
      @media print {
        table{
          width:100%;
          }
          #graph{
            width:500px!important;
          }
        }
    </style>
      <script type="text/javascript">

    $(document).ready(function() {
      var options = {
              chart: {
                  renderTo: 'graph',
                  type: 'column',
                  marginRight: 0,
                  marginBottom: 65
              },
              title: {
                  text: '',
                  x: 0 //center
              },
              subtitle: {
                  text: '',
                  x: 0
              },
              xAxis: {
                  categories: []
              },
              yAxis: {
                  max:100,  
                  title: {
                      text: 'Mean'
                  },
                  plotLines: [{
                      value: 0,
                      width: 1,
                      color: '#808080'
                  }]
              },
              tooltip: {
                  formatter: function() {
                          return '<b>'+ this.series.name +'</b><br/>'+  Highcharts.numberFormat(this.y, 2)
                          this.x +': '+ this.y
                          
                  ;
                  }
              },
              legend: {
                  layout: 'horizontal',
                  align: 'center',
                  verticalAlign: 'bottom',
                  x: 10,
                  y: 10,
                  borderWidth: 0
              },
              series: []
          }
          
          $.getJSON("data.php", function(json) {
        options.xAxis.categories = json[0]['data'];
            options.series[0] = json[1];
            options.series[1] = json[2];
            options.series[2] = json[3];
            options.series[3] = json[4];
            options.series[4] = json[5];
            //options.series[5] = json[6];
            
          
            chart = new Highcharts.Chart(options);
          });
      });
    </script>
      <script src="../dist/js/highcharts.js"></script>
        <script src="../dist/js/exporting.js"></script>


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
          <div class="row text-center" style="max-width: 900px">
            
                      Republic of the Philippines<br>
                      <span style="font-weight:bold;">CARLOS HILADO MEMORIAL STATE COLLEGE<br></span>
                      Mabini St., Talisay City, 6115<br><br>
                      <span style="font-weight:bold;">College of Industrial Technology Department</span>
                      <h4>Summary of Evaluation</h4>
            
                      <div id="graph"></div><br><br>
                      <table id="" class="table table-bordered table-striped" style="margin-left:10px">
                    <thead>
                      <tr>
                        <th>School Year</th>
                        <th>Skill & Quality of Work</th>
                        <th>General Knowledge & Information</th>
                        <th>Personality & General Attitude</th>
                        <th>Attendance</th>
                        <th>Gen. Average</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../dist/includes/dbcon.php');
      
    $query=mysqli_query($con,"select school_year from evaluation group by school_year order by school_year desc")or die(mysqli_error($con));

      while ($row=mysqli_fetch_array($query)){
        $sy=$row['school_year'];
        
        
?>
                    
                      <tr>
<?php 

        $query1=mysqli_query($con,"select AVG(skill) as skill from evaluation where school_year='$sy'")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>
                        <td><?php echo $sy;?></td>
                        <td><?php echo number_format($row1['skill'],2);?></td>
<?php 

        $query1=mysqli_query($con,"select AVG(knowledge) as knowledge from evaluation where school_year='$sy'")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>  
                        <td><?php echo number_format($row1['knowledge'],2);?></td>
<?php 

        $query1=mysqli_query($con,"select AVG(attitude) as attitude from evaluation where school_year='$sy'")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                          
                        <td><?php echo number_format($row1['attitude'],2);?></td>
<?php 

        $query1=mysqli_query($con,"select AVG(attendance) as attendance from evaluation where school_year='$sy'")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                      
                        <td><?php echo number_format($row1['attendance'],2);?></td>
<?php 

        $query1=mysqli_query($con,"select AVG(average) as average from evaluation where school_year='$sy'")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                        
                        <td><?php echo number_format($row1['average'],2);?></td>
                      </tr>
                      
<?php }?>             
<!--totalllllllllll-->        
<tr>
<?php 

        $query1=mysqli_query($con,"select AVG(skill) as skill from evaluation")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>
                        <th>TOTAL</th>
                        <th><?php echo number_format($row1['skill'],2);?></th>
<?php 

        $query1=mysqli_query($con,"select AVG(knowledge) as knowledge from evaluation")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>  
                        <th><?php echo number_format($row1['knowledge'],2);?></th>
<?php 

        $query1=mysqli_query($con,"select AVG(attitude) as attitude from evaluation")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                          
                        <th><?php echo number_format($row1['attitude'],2);?></th>
<?php 

        $query1=mysqli_query($con,"select AVG(attendance) as attendance from evaluation")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                      
                        <th><?php echo number_format($row1['attendance'],2);?></th>
<?php 

        $query1=mysqli_query($con,"select AVG(average) as average from evaluation")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                        
                        <th><?php echo number_format($row1['average'],2);?></th>
                      </tr>
                      

                    </tbody>
                    
                  </table>                  


              
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
