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
            Send Email Invitation
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"> Home</a></li>
            <li class="active">Send Email</li>
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
                  	
					<form method="POST" name="form1" action="mail.php" onsubmit="loadVal();">

					<div class="content">
					<input type="hidden" id="inputEmail" placeholder="Sender" name="id"  value="<?php echo $id;?>" class="span5" readonly>
					<label class="control-label" for="inputEmail">Sender</label>
					<input type="text" id="inputEmail" placeholder="Sender" name="sender"  value="<?php echo 'emoblazz@gmail.com'; ?>" class="span5" readonly>
					<label class="control-label" for="inputPassword">Receiver</label>
					<input type="text" id="inputPassword" placeholder="Receiver" name="receiver"  class="span5" value="<?php echo $email; ?>">
					<label class="control-label" for="inputEmail">Reciever's Name</label>
					<input type="text" id="inputEmail" placeholder="Name of Reciever" name="name"  value="<?php echo $first.' '.$mi.' '.$last;?>" class="span5" readonly>
					<label class="control-label" for="inputPassword">Subject</label>
					<input type="text" id="inputPassword" placeholder="Subject" name="subject" value="Invitation for Employer's Feedback"  class="span5" readonly>
					<label class="control-label" for="inputPassword">Message</label>
					<div id="alerts"></div>
							

<?php
include('../dist/includes/dbcon.php');
//$query1=mysqli_query($con,"select * from r")or die(mysqli_error());
//							$row=mysqli_fetch_array($query1);
//					    $letter=$row['letter'];?>							
							<div id="editor">
							<pre>Good day!

I am from Carlos Hilado Memorial State College Talisay Campus. I send this email to invite you to provide a feedback regarding our graduate which is one of your employee. This will help us to know if our program meets the needs of the industry. This link will redirect you to our alumni page for you to register. Feel free to contact me for questions. Kindly send me call/message me at this no. 09124685138.

Yours truly,

Cristine V. Redoblo
BSIS Chairperson
							</pre></div>
				
					<textarea rows="2" name="desc" cols="20" style="display:none; "><?php echo $letter;?></textarea>
				


<br/>
<input type="submit" value="Submit" name="B1" class="btn btn-primary btn-large">
<a href="researches.php"  class="btn btn-large btn-default">Cancel</a></div>    
</form>
                </div><!-- /.box-body -->
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
   
  </body>
</html>
