<?php
$link = mysqli_connect("localhost","root","","joms");

$del = $_GET['a_id'];
$delete = "delete from announcement where a_id='$del'";
$run = mysqli_query($link, $delete);
	
if($run){
	echo "<script>alert('Announcement Record has been deleted')</script>";
	echo "<script>window.open('A_viewannouncement.php','_self')</script>";
	
}
else
{
	echo "<script>alert('Error')</script>";
}



?>