<header class="main-header">
        <!-- Logo -->
        <a href="home.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>faculty MIS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">faculty MIS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="">
            
            <i class="glyphicon glyphicon-align-justify"></i>  
          </a>
         
         <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
              <li class="dropdown messages-menu">
                    

                  <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="settings.php">
                      <i class="glyphicon glyphicon-cog"></i>
                      
                        <?php
                          include('../dist/includes/dbcon.php');
                          $query=mysqli_query($con,"select * from settings")or die(mysqli_error($con));
                            $row=mysqli_fetch_array($query);
                            echo $row['school_year'];
                    ?>  
                    </a>
                    
                  </li><!-- /.messages-menu -->

              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <?php
                
                $id=$_SESSION['id'];
          ?>
                <?php
                
                  $query=mysqli_query($con,"select * from admin where admin_id='$id'")or die(mysqli_error());
                    $row=mysqli_fetch_array($query);
                ?>
                  <img src="../dist/uploads/<?php echo $row['admin_pic'];?>" class="user-image" alt="User Image">
                  <span class="hidden-xs">
                  <?php
                    echo $row['admin_first']." ";
                    echo $row['admin_last'];
                  ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/uploads/<?php echo $row['admin_pic'];?>" class="img-circle">
                    <p>
                    <?php
                        echo $row['admin_first']." ";
                        echo $row['admin_last'];
                    ?>
                     
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
     </div>
  </nav>
</header>
