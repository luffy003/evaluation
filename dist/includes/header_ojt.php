<header class="main-header">
        <!-- Logo -->

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <b>BSIT faculty Evaluation System</b>
                </a>
               
              </li>
              
          </ul>
          <!--menu-->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                  Announcements
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                  Events
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
             <?php
              include('../dist/includes/dbcon.php');
                  $id=$_SESSION['id'];
                  $query=mysqli_query($con,"select * from faculty natural join major where faculty_id='$id'")or die(mysqli_error());
                    $row=mysqli_fetch_array($query);
                        $pic=$row['faculty_pic'];
                        $last=$row['faculty_last'];
                        $first=$row['faculty_first'];
                        $date=$row['reg_date'];
                        $gender=$row['gender'];
                        $religion=$row['religion'];
                        $civil=$row['civil'];
                        $height=$row['height'];
                        $weight=$row['weight'];
                        $citizenship=$row['citizenship'];
                        $major=$row['major'];
              ?>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../dist/uploads/<?php echo $pic;?>" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $first." ".$last;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/uploads/<?php echo $pic;?>" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $first." ".$last;?>
                      <small>Member since <?php echo date("M Y",strtotime($date));?></small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
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