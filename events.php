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

    <!-- BEGIN SLIDER -->
    <?php //include 'slider.php';?>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SERVICE BOX -->   
        <?php include 'events_content.php';?>
        <!-- END SERVICE BOX -->

      </div>
    </div>
    <!-- BEGIN FOOTER -->
    <?php include 'footer.php';?>
    <!-- END FOOTER -->

  <?php include 'scripts.php';?>

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <!-- BEGIN RevolutionSlider -->  
    <script src="assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script> 
    <script src="assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
    <script src="assets/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
    <!-- END RevolutionSlider -->

    <script src="assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            //Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            //Layout.initNavScrolling(); 
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>