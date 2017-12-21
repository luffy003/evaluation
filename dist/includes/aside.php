
<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- search form -->
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="home.php">
                <li><i class="glyphicon glyphicon-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <?php
            include('../dist/includes/dbcon.php');
            
		$id=$_SESSION['id'];
		$query1=mysqli_query($con,"SELECT * FROM settings")or die(mysqli_error());
		$row1=mysqli_fetch_array($query1);
		$sem=$row1['sem'];
		$sy=$row1['sy'];
		$subject=$_SESSION['subject'];
		$cys=$_SESSION['cys'];
		$query=mysqli_query($con,"SELECT * FROM `loading` WHERE t_id='$id' and subject_code='$subject' and cys='$cys' order by subject_code,cys")or die(mysqli_error());
		while ($row=mysqli_fetch_array($query)){
		$subject=$row['subject_code'];
		$cys=$row['cys'];
        ?>
        
             <li>
              <a href="student_list.php?sub=<?php echo $subject;?>&cys=<?php echo $cys;?>">
                <i class="glyphicon glyphicon-folder-open"></i> <span><?php echo $subject;?></span> <small class="label pull-right bg-green"><?php echo $cys;?></small>
              </a>
            </li>
            <?php }?>
            <li>
              <a href="load.php">
                <i class="glyphicon glyphicon-save"></i> <span>My Load</span>
              </a>
            </li>
            <li>
              <a href="schedule.php">
                <i class="glyphicon glyphicon-calendar"></i> <span>My Schedule</span>
              </a>
            </li>
            
			<li>
              <a href="dailyat.php">
                <i class="glyphicon glyphicon-th-list"></i> <span>Daily Attendances</span>
              </a>
            </li>
	    <li>
              <a href="attendance.php">
                <i class="glyphicon glyphicon-list-alt"></i> <span>Summary of Attendances</span>
              </a>
            </li>
            <li>
              <a href="export.php">
                <i class="glyphicon glyphicon-list-alt"></i> <span>Export Attendance</span>
              </a>
            </li>
			  
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
