<!DOCTYPE html>

<html>
<head>
	<title>
		Customer View Profile
	</title>

<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="search">
</form>

<?php

$search_value=$_POST["search"];
$link = mysqli_connect("localhost","root","","joms");
if($link->connect_error){
    echo 'Connection Faild: '.$link->connect_error;
    }else{
        $sql="select * from announcement where a_msg like '%$search_value%'";

        $res=$link->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'Search Value :  '.$row["a_msg"];


            }       

        }
?>
</head>
<html>