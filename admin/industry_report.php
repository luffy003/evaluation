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
      th, td{
        text-align: left!important;
      }
      #graph{
        max-width: 100%;
      }
    </style>

      <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'graph',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    spacingBottom: 50,
                },
                title: {
                    text: '',
                    style: { fontFamily: '\'Lato\', sans-serif', lineHeight: '18px', fontSize: '26px' }
                },
                tooltip: {
                    formatter: function() {
                        return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            color: '#000000',
                            connectorColor: '#000000',
                            style: { fontFamily: '\'Lato\', sans-serif', lineHeight: '18px', fontSize: '14px' },
                            formatter: function() {
                                return '<b>'+ this.point.name +'</b>: '+ Highcharts.numberFormat(this.percentage, 2) +' %';
                            }
                        }
                    }
                },
                series: [{
                    type: 'pie',
                    name: 'Industry Classification',
                    data: []
                }]
            }
            
            $.getJSON("dataindustry.php", function(json) {
                options.series[0].data = json;
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
          <div class="row text-center">
            
                      
                      Republic of the Philippines<br>
                      <span style="font-weight:bold;">CARLOS HILADO MEMORIAL STATE COLLEGE<br></span>
                      Mabini St., Talisay City, 6115<br><br>
                      <span style="font-weight:bold;">College of Industrial Technology Department</span>
                      <h4>Industry Classification</h4>
               
                      <div id="graph"></div><br><br>
                       <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Industry</th>
                        <th>2016-2017</th>
                        <th>2017-2018</th>
                        <th>2018-2019</th>
                        <th>2019-2020</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
include('../dist/includes/dbcon.php');
      
    $query=mysqli_query($con,"select industry,industry_id from faculty_emp natural join industry group by industry_id")or die(mysqli_error($con));

      while ($row=mysqli_fetch_array($query)){
        $industry=$row['industry'];
        $iid=$row['industry_id'];
        
        
?>
                    
                      <tr>

                        <td><?php echo $industry;?></td>
<?php 

        $query1=mysqli_query($con,"select COUNT(DISTINCT faculty_id) as count from faculty_emp natural join agency where industry_id='$iid' and school_year='2016-2017' group by industry_id,faculty_id")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                        
                        <td><?php echo $row1['count'];?></td>
<?php 

        $query1=mysqli_query($con,"select COUNT(DISTINCT faculty_id) as count from faculty_emp natural join agency where industry_id='$iid' and school_year='2017-2018' group by industry_id,faculty_id")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                        
                        <td><?php echo $row1['count'];?></td>
<?php 

        $query1=mysqli_query($con,"select COUNT(DISTINCT faculty_id) as count from faculty_emp natural join agency where industry_id='$iid' and school_year='2018-2019' group by industry_id,faculty_id")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                        
                        <td><?php echo $row1['count'];?></td>
<?php 

        $query1=mysqli_query($con,"select COUNT(DISTINCT faculty_id) as count from faculty_emp natural join agency where industry_id='$iid' and school_year='2019-2020' group by industry_id,faculty_id")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                        
                        <td><?php echo $row1['count'];?></td>

                      </tr>
                      
<?php }?>   
<?php 

        $query1=mysqli_query($con,"select COUNT(DISTINCT faculty_id) as count from faculty_emp where school_year='2016-2017'")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>  
                  <tr>
                   <th>TOTAL</th>
                    <th><?php echo $row1['count'];?></th>
<?php 

        $query1=mysqli_query($con,"select COUNT(DISTINCT faculty_id) as count from faculty_emp where school_year='2017-2018'")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                      
                    <th><?php echo $row1['count'];?></th>
<?php 

        $query1=mysqli_query($con,"select COUNT(DISTINCT faculty_id) as count from faculty_emp where school_year='2018-2019'")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                      
                    <th><?php echo $row1['count'];?></th>

<?php 

        $query1=mysqli_query($con,"select COUNT(DISTINCT faculty_id) as count from faculty_emp where school_year='2019-2020'")or die(mysqli_error());
            $row1=mysqli_fetch_array($query1);
?>                      
                    <th><?php echo $row1['count'];?></th>

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
