
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../dist/img/favicon.png">
	<title>Home | BSIS Alumni Tracer</title>

    <link href="../dist/css/print.css" rel="stylesheet" media="print">
    <!-- Custom styles for this template -->
    <link href="../dist/css/sticky-footer-navbar.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../dist/css/datatables.min.css"/>
	<!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="../dist/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var options = {
	            chart: {
	                renderTo: 'graph',
	                type: 'column',
	                marginRight: 25,
	                marginBottom: 25
	            },
	            title: {
	                text: '',
	                x: 0 //center
	            },
	            subtitle: {
	                text: '',
	                x: -10
	            },
	            xAxis: {
	                categories: []
	            },
	            yAxis: {
									max:5,	
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
	                layout: 'vertical',
	                align: 'right',
	                verticalAlign: 'top',
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
	        	//options.series[6] = json[7];
	        
		        chart = new Highcharts.Chart(options);
	        });
	    });
		</script>
	    <script src="highcharts.js"></script>
        <script src="exporting.js"></script>
	</head>
	<body>
	<!-- Fixed navbar -->
    <?php include('includes/topbarlog.php');?>
	

    <!-- Begin page content -->
		<div class="container">
			<div class="row">
			  <div class="col-md-3" id="leftnav">
				 <?php include('includes/leftnav.php');?>
			  </div>
			  <div class="col-md-9" id="content">
					<div id="header" style="text-align:center">
										
										  Republic of the Philippines<br>
										  <span style="font-weight:bold;">CARLOS HILADO MEMORIAL STATE COLLEGE<br></span>
										  Mabini St., Talisay City, 6115<br><br>
										  <span style="font-weight:bold;">Information Systems Department</span>
										  <h4>Employer's Feedback Rate as of <?php echo date("M d, Y");?></h4>
										  </div>
										 
											<div id="graph"></div><br><br>
					
			  </div>
	</div>
	</div>	


	</body>
</html>