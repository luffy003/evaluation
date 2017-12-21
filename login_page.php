<?php include 'header.php';?>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    <?php include 'contact_top.php';?>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <?php include 'header_nav.php';?>
    <!-- Header END -->

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>          
            <li class="active">Login/Register</li>
        </ul>
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12">            
            <div class="content-page">
              <div class="row">
                <div class="col-md-6" style="margin-right:80px;">
                  <!-- BEGIN REGISTRATION FORM -->
                  <form class="register-form" action="register_save.php" method="post">
                    <h3>Sign Up</h3>
                    <p>
                       Enter your personal details below:
                    </p>
                    <div class="form-group">
                      <label class="control-label visible-ie8 visible-ie9">Last Name</label>
                      <div class="input-icon">
                        <i class="fa fa-font"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="last" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label visible-ie8 visible-ie9">First Name</label>
                      <div class="input-icon">
                        <i class="fa fa-font"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="first" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                      <label class="control-label visible-ie8 visible-ie9">Birthday</label>
                      <div class="input-icon">
                        <i class="fa fa-calendar"></i>
                        <input class="form-control" value="" type="date" name="bday" required>
                      </div>
                    </div>
                    
                    
                  
                    <p>
                       Enter your account details below:

                    </p>
                    <div class="form-group">
                      <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                      <label class="control-label visible-ie8 visible-ie9">Department</label>
                      <div class="input-icon">
                        <i class="fa fa-calendar"></i>
                         <select class="form-control select2" style="width: 100%;" name="dept" required>
                <?php

                    include('includes/dbcon.php');
                  $query2=mysqli_query($con,"select * from dept")or die(mysqli_error($con));
                      while($row2=mysqli_fetch_array($query2)){
                ?>
                      <option value="<?php echo $row2['dept_id'];?>"><?php echo $row2['dept'];?></option>
                <?php }?>
                </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                      <label class="control-label visible-ie8 visible-ie9">Email</label>
                      <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email" required/>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label visible-ie8 visible-ie9">Password</label>
                      <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="pass" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                      <div class="controls">
                        <div class="input-icon">
                          <i class="fa fa-check"></i>
                          <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" required/>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>
                      <input type="checkbox" name="tnc" required /> I agree to the <a href="javascript:;">
                      Terms of Service </a>
                      and <a href="javascript:;">
                      Privacy Policy </a>
                      </label>
                      <div id="register_tnc_error">
                      </div>
                    </div>
                    <div class="form-actions">
                 
                      <button type="submit" id="register-submit-btn" class="btn blue pull-right">
                      Sign Up <i class="m-icon-swapright m-icon-white"></i>
                      </button>

                    </div>
                  </form>
                  <!-- END REGISTRATION FORM -->
                </div>				
                

                <div class="col-md-5 col-sm-5 sidebar2 well">
                  <!-- BEGIN LOGIN FORM -->
                    <form class="login-form" action="login.php" method="post">
                      <h3 class="form-title">Login to your account</h3>
                      <p>
                       Enter login details below:
                    </p>
                      <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                        <span>
                        Enter any username and password. </span>
                      </div>
                      <div class="form-group">
                        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                        <label class="control-label visible-ie8 visible-ie9">Email</label>
                        <div class="input-icon">
                          <i class="fa fa-user"></i>
                          <input class="form-control placeholder-no-fix" type="email" name="email" autocomplete="off" placeholder="Email Address" name="email" required/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Password</label>
                        <div class="input-icon">
                          <i class="fa fa-lock"></i>
                          <input class="form-control placeholder-no-fix" type="password" password="password" autocomplete="off" placeholder="Password" name="password" required/>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button type="submit" class="btn blue pull-right">
                        Login <i class="m-icon-swapright m-icon-white"></i>
                        </button>
                      </div>
                      <br><br>
                      
                    </form>
                    <!-- END LOGIN FORM -->
                   <!-- BEGIN FORGOT PASSWORD FORM -->
                  <form class="forget-form" action="reset.php" method="post">
                    <h3>Forget Password ?</h3>
                    <p>
                       Enter your e-mail address below to reset your password.
                    </p>
                    <div class="form-group">
                      <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
                    </div>
                    <div class="form-actions">
                      <a href="index.php" id="back-btn" class="btn btn-default">Back</a>
                      <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                    </div>
                  </form>
                  <!-- END FORGOT PASSWORD FORM -->
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
      </div>
    </div>

   

    <?php include('footer.php');?>
    </div>
	<?php include 'scripts.php';?>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="assets/frontend/pages/scripts/contact-us.js" type="text/javascript"></script>
    <script src="assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
            ContactUs.init();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>