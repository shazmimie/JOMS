<?php
// logout.php
session_start();

$username= $_SESSION['id'];

	$_SESSION["id"] = "";
	session_destroy();
header('location:HOME.php');

?>