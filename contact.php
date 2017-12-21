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
            <li class="active">Contacts</li>
        </ul>
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12">            
            <div class="content-page">
              <div class="row">
                <div class="col-md-7">
                  <div class="" style="height:400px;"><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d269.97750278247986!2d122.96923834251177!3d10.743080412291906!2m2!1f96.49572458978818!2f0!3m2!1i1024!2i768!4f20!3m3!1m2!1s0x0%3A0xb97535bd733c611f!2sCarlos+Hilado+Memorial+State+College+Techno+Bazaar!5e1!3m2!1sen!2sph!4v1485142070646" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </div>				
                

                <div class="col-md-5 col-sm-5 sidebar2">
                  <h2>Contact Us</h2>
                  <address>
                    <strong>Domingo Lacson National High School</strong><br>
                    Sta. Clara Subdivision, Brgy. Banago<br>
                    Bacolod City<br>
                    <abbr title="Phone">Tel</abbr> (034) 712-0050
                  </address>
                  <address>
                    <strong>Email</strong><br>
                    <a href="">dlnhs@gmail.com</a>
                  </address>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
      </div>
    </div>



    <!-- BEGIN FOOTER -->
    <?php include 'footer.php';?>  
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