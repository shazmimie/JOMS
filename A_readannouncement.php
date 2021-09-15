<?php

session_start();


$link = mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"joms")or die(mysqli_connect_error());


$a_title = $_REQUEST["a_title"];
$a_msg = $_REQUEST["a_msg"];
$a_time = $_REQUEST["a_time"];
$a_date = $_REQUEST["a_date"];
$admin_username=$_REQUEST["admin_username"];



$sql = "INSERT INTO announcement VALUES ('','$a_title','$a_msg','$a_time','$a_date','$admin_username')";

$result = mysqli_query($link, $sql);

if($result){
	echo '<table border=1>
	<tr>
	<td>Title</td>
	<td>'.$a_title.'</td>
	</tr>
	
	<tr>
	<td>Messages</td>
	<td>'.$a_msg.'</td>
	</tr>

		<tr>
	<td>Time</td>
	<td>'.$a_time.'</td>
	</tr>
	
		<tr>
	<td>Date</td>
	<td>'.$a_date.'</td>
	</tr>
	
	

	';
	

	echo "<script>alert('Add announcement is successfully')</script>";
	echo "<script>window.open('A_viewannouncement.php','_self')</script>";
}


	

else
{
	die(mysqli_connect_error());
}

?>