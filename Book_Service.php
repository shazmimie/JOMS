<?php
session_start();
$username= $_GET['id'];

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

  min-height: 650px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.container {
  position: absolute;
  right: 25%;
  bottom: 0;
  margin: 20px;
  max-width: 600px;
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
input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}
::placeholder {
  color: black;
  opacity: 1;
  left: 2px;
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
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
 
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


<!-- Sidebar/menu -->





  <!-- Header -->
 

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

<div class="bg-img">

    <h1 align='center'>Booking Form</h1>
	
  <form action="Book_Driver.php?id=<?php echo $username; ?>" method="post" class="container">
     
	<input type="text" placeholder="     Enter your full name" name ="cname" style="width:100%; height: 55px;">
	
	<input type="text" placeholder="     Enter username" name ="uname" style="width:100%; height: 55px;">
	
    <select name="ServiceType" style="width:100%; height: 55px;">
    <option value="0">Please choose type of service you want to use</option>
    <option value="Taxi">Taxi</option>
    <option value="Rent for half day">Rent for half day</option>
	<option value="Rent for whole day">Rent for whole day</option>
	</select>
	<br>
	
	Enter booking information for booking evidence
	<input type="date" name="date">
	<tab class="tab2">
	<input type="time" name ="time">
	
	Please select null if you prefer rent service
	<select name="PickUp" style="width:100%; height: 55px;">
    <option value="0">Enter Pick Up Place</option>
	<option value="Null">Null</option>
    <option value="Kolej Kediaman 3">Kolej Kediaman 3</option>
    <option value="Kolej Kediaman 4">Kolej Kediaman 4</option>
	<option value="Kolej Kediaman 5">Kolej Kediaman 5</option>
	</select>
	<br>
	
	<select name="DropOff" style="width:100%; height: 55px;">
    <option value="0">Enter Drop Off Place</option>
	<option value="Null">Null</option>
    <option value="Kuantan City Mall">Kuantan City Mall</option>
    <option value="East Coast Mall">East Coast Mall</option>
	<option value="Taman Esplanade Kuantan">Taman Esplanade Kuantan</option>
	<option value="Teluk Cempedak">Teluk Cempedak</option>
	<option value="Terminal Sentral Kuantan">Terminal Sentral Kuantan</option>
	</select>

    <button type="submit" class="btn"/>Book</button>
  </form>
</div>
  <br>

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
</script>

</body>
</html>