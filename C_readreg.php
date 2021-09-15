<?php

$link = mysqli_connect("localhost","root","")or die(mysqli_connect_error());
mysqli_select_db($link,"joms")or die(mysqli_connect_error());

$name = $_REQUEST["name"];
$phonenum = $_REQUEST["phonenum"];
$email = $_REQUEST["email"];
$username= $_REQUEST["username"];
$password= $_REQUEST["password"];



$sql = "INSERT INTO customer(name, phonenum, email , username , password) VALUES ('$name','$phonenum','$email' ,'$username' ,'$password')";

$result = mysqli_query($link, $sql);

if($result){
	echo '<table border=1>
	<tr>
	<td>Customer Name</td>
	<td>'.$name.'</td>
	</tr>
	
	<tr>
	<td>Phone Number</td>
	<td>'.$phonenum.'</td>
	</tr>
	<tr>
	
	<td>Email</td>
	<td>'.$email.'</td>
	</tr>
	
	<tr>
	
	<td>Username</td>
	<td>'.$username.'</td>
	</tr>
	<tr>
	
	<tr>
	
	<td>Password</td>
	<td>'.$password.'</td>
	</tr>
	<tr>

	';
	

	echo "<script>alert('Insertion is successfully')</script>";
	echo "<script>window.open('C_login.php','_self')</script>";
}


	

else
{
	die(mysqli_connect_error());
}

?>