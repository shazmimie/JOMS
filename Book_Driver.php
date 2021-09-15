<?php

session_start();
$username= $_GET['id'];


    $link = mysqli_connect("localhost","root","","joms");
	
    //insert booking information into table booking and service
	
	$s_type = $_POST['ServiceType'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$pick_up = $_POST['PickUp'];
	$drop_off = $_POST['DropOff'];
	$c_name = $_POST['cname'];
	$u_name = $_POST['uname'];
	
	// Find price of destination
if ($s_type=="Taxi"){	
	if ($pick_up=="Kolej Kediaman 3"){
		if ($drop_off=="Kuantan City Mall"){
			$price = 34;
			$point = 2;
		}
		else if ($drop_off=="East Coast Mall"){
			$price = 37;
			$point = 2;
		}
		else if ($drop_off=="Taman Esplanade Kuantan"){
			$price = 32;
			$point = 2;
		}
		else if ($drop_off=="Teluk Cempedak"){
			$price = 45;
			$point = 2;
		}
		else{
			$price = 32;
			$point = 2;
		}
	}
	else if ($pick_up=="Kolej Kediaman 4"){
		if ($drop_off=="Kuantan City Mall"){
			$price = 38;
			$point = 2;
		}
		else if ($drop_off=="East Coast Mall"){
			$price = 40;
			$point = 2;
		}
		else if ($drop_off=="Taman Esplanade Kuantan"){
			$price = 35;
			$point = 2;
		}
		else if ($drop_off=="Teluk Cempedak"){
			$price = 48;
			$point = 2;
		}
		else{
			$price = 35;
			$point = 2;
		}
	}
	else{
		if ($drop_off=="Kuantan City Mall"){
			$price = 54;
			$point = 2;
		}
		else if ($drop_off=="East Coast Mall"){
			$price = 55;
			$point = 2;
		}
		else if ($drop_off=="Taman Esplanade Kuantan"){
			$price = 54;
			$point = 2;
		}
		else if ($drop_off=="Teluk Cempedak"){
			$price = 58;
			$point = 2;
		}
		else{
			$price = 62;
			$point = 2;
		}
	}
} 
else if ($s_type=="Rent for half day") {
	 
	$price = 65;
	$point = 4;
	
	}
else {
	
	$price = 110;
	$point = 8;
}
	  
	//insert booking information into table service
    $query1 = "INSERT INTO service VALUES ('','$s_type','','')" or die(mysqli_connect_error());

    $result = mysqli_query($link, $query1);
    
	//insert booking information into table booking
    $query2 = "INSERT INTO booking VALUES ('', '$c_name', '$date', '$time', '$pick_up', '$drop_off', '$s_type', '$price', '$point', '$u_name', '')" or die(mysqli_connect_error());

    $result = mysqli_query($link, $query2);
	
	//Check whether the insert was successful or not
	if($result) 
	        {
				echo "success";	
		}
		else 
	        {
				echo "fail";
	        }
	
	
?>
 
 
 <!DOCTYPE html>
<html>
<title>Manage Booking</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

  min-height: 550px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.container {
  position: absolute;
  top: 50;
  bottom: 0;
  margin: 5px;
  max-width: 100%;
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
  width: 30%;
  height: 20px
  padding: 15px;
  margin: 5px 0 22px 0;
  border: 2px solid #ccc;
  background: white;
}
.input1 {
  width: 10.7%;
  height: 20px
  padding: 15px;
  color: white;
  margin: 5px 0 22px 0;
  border: none;
  background: #1E90FF;;
}
input[type=text]:focus {
  background-color: #ddd;
  outline: none;
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
tab1 { 
  padding-left: 15em; 
}





.navbar {
    margin-bottom: 0;
    background-color:grey ;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: black !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #f9da7b !important;
  }
  .navbar-default .navbar-toggle {
    border-color: ;
    color:#f4511e!important;
  }
  
  .container-fluid {
    padding: 10px 10px;
	  margin-bottom: 50px;

	
  }
   a: active {
  background-color: #none;
}
 
	a:hover {
  background-color: #blue;
}

a {
  text-decoration: none;
  color: white;
 
}

	 a:link, a:visited {
  background-color: none;
  color: ;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

</style>
<body class="w3-light-grey">

<!-- Top container -->

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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
 

	
      
    


 
<nav class="navbar navbar-default navbar-fixed-top  navbar-right">
  <div class="container-fluid">
    <div class="navbar-header">
	
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<!-- Top container -->
<a class="navbar-brand" ><href="#editPackage">JOMS</a>
   </div>
       <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
     
		<li><a href="C_home.php?id=<?php echo $username; ?>"><b><i><h5>HOME</h5></i></b></a></li>
        <li><a href="C_viewprofile.php?id=<?php echo $username; ?>"><b><h5>PROFILE</h5></b></a></li>
		  <li><a href="Selectplace.php?id=<?php echo $username; ?>"><b><h5>BOOKING</h5></b></a></li>
		    <li><a href="C_bookinghistory.php?id=<?php echo $username; ?>"><b><h5>BOOKING HISTORY</h5></b></a></li>
				    <li class="dropdown">
		  <a href="" class="dropdown-toggle" data-toggle="dropdown"><b><h5>FEEDBACK
          <span class="caret"></span></h5></b></a>
          <ul class="dropdown-menu">
		    <li><a href="C_givefeed.php?id=<?php echo $username; ?>"><b><h5>GIVE FEEDBACK</h5></b></a></li>
		  <li><a href="feedback.php?id=<?php echo $username; ?>"><b><h5>VIEW FEEDBACK</h5></b></a></li>
		    <li><a href="feedback_vehicle.php?id=<?php echo $username; ?>"><b><h5>VIEW VEHICLE FEEDBACK</h5></b></a></li>
			  <li><a href="feedback_service.php?id=<?php echo $username; ?>"><b><h5>VIEW SERVICE FEEDBACK</h5></b></a></li>
	</ul>
	</li>
			
			  
				    
        <li><a href="C_logout.php"><b><h5>LOGOUT</h5></b></a></li>
		
		</ul>
	</div>
  </div>
</nav>



</div><br><br><br><br><br><br><br><br>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div class="bg-img">

    <h1 align='center'>Available Driver/Car</h1>
<form action="Book_Display.php?id=<?php echo $username; ?>" method="post">
    <div  class="container">	
  
    <?php
	
	echo "<table border='1' width='1010' height='100' align='center'>";
	
	$link = mysqli_connect("localhost","root","","joms");
  
    //select from table vehicle and driver	
	$strSQL = "SELECT vehicle.driver_id, driver.driver_name, driver.phonenumber, vehicle.vehicle_name, 
	           vehicle.vehicle_brand, vehicle.vehicle_regnum FROM driver INNER JOIN vehicle 
			   ON vehicle.driver_id = driver.driver_id" or die(mysqli_connect_error());
			   
	$rs = mysqli_query($link, $strSQL);
	
	while($row = mysqli_fetch_array($rs)){
	    echo "<tr>";
		echo "<td>" .  "<tab1>" . $row['driver_name'] .  "</tab1>" . "<br>" . "<tab1>" . $row['vehicle_regnum'] . "&nbsp" 
		. $row['vehicle_brand'] . "&nbsp" . $row['vehicle_name'] . "</tab1>"  . "<br>" .  "<tab1>" . $row['phonenumber'] 
		. "<br>" . "<tab1>"  . 'Driver/Car Owner ID :' . "&nbsp" . $row['driver_id'] . "</td>";
	    echo "</tr>";
    }
	mysqli_close($link);
	
	echo '</table>';
	echo '<br><br>';
	echo '<form action="Book_Display.php" method="post">';
	echo "Please enter Driver/Car Owner ID that you prefer to continue this booking process";
	echo '<tab>';
	echo '<input type="text"  placeholder="Driver/Car Owner ID" name="driverid">';
	echo '<tab>';
	echo '<input type="submit" value="Select" name="submit" class="input1">';
	echo '</form>';
	
    ?>
	</div>
	</form>
</div>
<br>
  
  <!-- Footer -->
  <div>
    <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </footer>
  </div>

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
</script>

</body>
</html>