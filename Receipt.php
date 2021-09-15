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

  min-height: 600px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.container {
  position: absolute;
  top: 50;
  right: 25%;
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
input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}
.text{
	font-weight: bold;
	margin-bottom: 1px;
	margin-top: 3px;
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
.tab3 { 
  padding-left: 8em; 
}
.tab4 { 
  padding-left: 9.5em; 
}
.tab5 { 
  padding-left: 7em; 
}
.tab6 { 
  padding-left: 4em; 
}
.tab7 { 
  padding-left: 23.5em; 
}
.hr1 {
  border:none;
  border-top:2px dotted;
  color:black;
  height:1px;
  width:100%;
}
.input1 {
  width: 30%;
  height: 40px;
  padding: 15px;
  color: white;
  margin: 5px 0 22px 0;
  border: none;
  background: #1E90FF;;
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

    <h1 align='center'>My Receipt</h1>
	
<form action="Book_Service.php?id=<?php echo $username; ?>" method="post" >
    <div  class="container">	
  
    <?php
	
	$link = mysqli_connect("localhost","root","","joms");
	
	if(isset($_POST['pay'])){
	
    $query = "SELECT * FROM booking order by booking_id desc limit 1" or die(mysqli_connect_error());
	
	$result = mysqli_query($link, $query);
	
	while ($row=mysqli_fetch_array($result)){
		                 
						echo '<form action="Book_Service.php?id=<?php echo $username; ?>"';
					    echo '<p class="text">Hope you had an enjoyable ride! Your driver will arrive in about 5 minutes</p>';
						echo "Congratulations! You earned "; echo $row['point']; echo "&nbsp"; echo"points!"; echo "<br>"; echo "<br>";
						echo '<p class="text">Name : </p>';
						echo $row['customer_name'];echo "<br>";
						echo '<p class="text">Service : </p>';
						echo $row['type_service'];echo "<br>";
						echo '<p class="text">Pick Up Place : </p>';
						echo $row['pick_up'];echo "<br>";
						echo '<p class="text">Destination : </p>';
						echo $row['drop_off'];echo "<br>";
						echo '<p class="text">Booking ID : </p>';
					    echo $row['booking_id'];echo "<br>";
						echo "<table border='1' width='300' height='100' align='center'>";
						echo '<tr>';
						echo '<td>'; 
						echo '<p class="text">Description : <tab class="tab3"> Amount : </p>';
						echo "Ride Fare "; echo '<tab class="tab4">'; echo "RM"; echo $row['price'];
                        echo '<hr class="hr1">';
                        echo '<tab class="tab5">'; echo "TOTAL" . '<tab class="tab6">' .  "RM" . $row['price'];					
						echo '</td>';
						echo '</tr>';
						echo '</table>';
						echo '<tab class="tab7">';
						echo '<input type="submit" value="Continue Booking" name="submit" class="input1" align="right">';	
						echo '</form>';


        }
	}
	
	if(isset($_POST['cancel'])){
	
    $query = "DELETE FROM booking order by booking_id desc limit 1" or die(mysqli_connect_error());
	
	$result = mysqli_query($link, $query);
	
	if($result) 
	        {
				echo '<script>window.open("Cancel_Book.php", "_self")</script>';
		}
		else 
	        {
				echo "fail";
	        }
			
	}
	
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