<div class="row service-box margin-bottom-50" style="min-height: 300px">
	<div class = "">
		<h3 clas = "brand">Announcements </h3>
	</div>
<?php
include('dist/includes/dbcon.php');

    $query=mysqli_query($con,"select * from announcement order by date_posted desc")or die(mysqli_error());
      while ($row=mysqli_fetch_array($query)){
        //$id=$row['event_id'];
        $event=$row['announcement'];
        //$desc=$row['event_desc'];
        $date=$row['date_posted'];
?>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue"></i></em>
              <span><?php echo date("M d, Y",strtotime($date));?></span> 
              <span style="font-size: 10px"><?php echo date("h:i a",strtotime($date));?></span>
            </div>
            <p><?php echo $event;?></p>
          </div>
          
<?php }?>          
        </div>