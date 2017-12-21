<?php
$contact=$_REQUEST['contact'];
$announcement=$_REQUEST['announcement'];
echo "<script>document.location='https://rest.nexmo.com/sms/json?api_key=d8cdf690&api_secret=c7d20c5fa1c0ee6e&to=$contact&from=DLMHS&text=$announcement'</script>";	
//echo "$contact";
?>
<script type="text/javascript">
setTimeout("window.close();",1000);
</script>