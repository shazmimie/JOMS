<?php
session_start();
$username= $_GET['id'];

?>
<!DOCTYPE html>
<html>
<title>Manage Booking</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {
  font-family: "Raleway", sans-serif
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("map.png");

  min-height: 500px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.container {
  position: absolute;
  right: 32%;
  bottom: 0;
  margin: 20px;
  max-width: 1500px;
  padding: 16px;
  background-color: #E6E6FA;
}
/* Full-width input fields */
select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: 2px solid #ccc;
  background: white;
}
input {
  width: 48%;
  height: 15px
  padding: 15px;
  margin: 5px 0 22px 0;
  border: 2px solid #ccc;
  background: white;
}
.inputbtn {
  width: 47.5%;
  height: 15px
  padding: 15px;
  margin: 5px 0 22px 0;
  color: white;
  border: none;
  background: #1E90FF;
}
input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}
textarea{
	width: 100%;
    height: 30px
}
/* Set a style for the submit button */
.btn {
  background-color: #1E90FF;
  color: white;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
tab { 
  padding-left: 1em; 
}
.tab2 {
	padding-left: 1em; 
}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">JomS</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="SmallLogo.jpeg" class="w3-circle w3-margin-right" style="width:110px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span><br><tab>Welcome, <strong>Mike</strong></tab></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div class="bg-img">

    <h1 align='center'>My Booking</h1>
<form action="Receipt.php?id=<?php echo $username; ?>" method="post" >
	
	<div  class="container">
	
	<?php

    $link = mysqli_connect("localhost","root","","joms");

    $driver_id = $_POST['driverid'];
	
	
	//insert driver_id into booking table by using update
    $query1 = "UPDATE booking set driver_id = '$driver_id' order by booking_id desc limit 1" or die(mysqli_connect_error());
	
	$result = mysqli_query($link, $query1);
	
	$query2 = "UPDATE service set driver_id = '$driver_id' order by service_id desc limit 1" or die(mysqli_connect_error());
	
	$result = mysqli_query($link, $query2);
	
	$query5 = "SELECT * FROM booking order by booking_id desc limit 1" or die(mysqli_connect_error());
	
	$result5 = mysqli_query($link, $query5);
	
	while($row = mysqli_fetch_array($result5)){
		echo "Service  "; echo "<br>";
		echo "<textarea readonly>"; echo $row['type_service']; echo "</textarea>"; echo "<br>";	
        echo "Drop Off  "; echo "<br>";
		echo "<textarea readonly>"; echo $row['drop_off']; echo "</textarea>"; echo "<br>";	
        echo "Price  "; echo "<br>";	
		echo "<textarea readonly>"; echo "RM"; echo $row['price']; echo "</textarea>";
		echo '<br>';
	}
	
	$query3 = "SELECT * FROM driver where driver_id = '$driver_id'" or die(mysqli_connect_error());
	
	$result = mysqli_query($link, $query3);
	
	while($row = mysqli_fetch_array($result)){
		echo "Car Owner / Driver "; echo "<br>";
		echo "<textarea readonly>"; echo $row['driver_name']; echo "</textarea>"; echo "<br>";
	}
	
	$query4 = "SELECT * FROM vehicle where driver_id = '$driver_id'" or die(mysqli_connect_error());
	
	$result2 = mysqli_query($link, $query4);
	
	while($row = mysqli_fetch_array($result2)){
		echo "Vehicle Information  ";
		echo "<textarea readonly>"; echo $row['vehicle_regnum'];  echo "&nbsp  :  &nbsp";  echo $row['vehicle_brand']; echo "&nbsp"; echo  $row['vehicle_name']; echo "</textarea>"; echo "<br>";
	}
	
	echo "<br>";
	echo "<br>";
	
	echo '<form action="Receipt.php?id=<?php echo $username; ?>" method="post">';
	echo '<input type="submit" value="Pay" name="pay" class="inputbtn">';
	echo "<tab>";
	echo '<input type="submit" value="Cancel" name="cancel" class="inputbtn" onclick="cancelbook()">';
	echo '</form>';		
	
?>
   </div>
   </form>
 
</div>

</div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer> 

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
function cancelbook() {
  alert("All the booking data will be cleared once you click Cancel! Are you sure you want to cancel the booking?");
}
</script>

</body>
</html>