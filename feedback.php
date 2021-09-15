<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php
$link = mysqli_connect("localhost","root","","joms");

$select = "SELECT * FROM feedback ORDER BY rating ";
$run = mysqli_query($link, $select);
while($row = mysqli_fetch_array($run)){

$feedback_id = $row['feedback_id'];
$rating= $row['rating'];
$destination_fee = $row['destination_fee'];
$driver_id= $row['driver_id'];
$username= $row['username'];
$comment= $row['comment'];



?>
<tr>
<td><?php echo $feedback_id;?></td>
<td><?php echo $rating;?></td>
<td><?php echo $destination_fee;?></td>
<td><?php echo $driver_id;?></td>
<td><?php echo $username;?></td>
<td><?php echo $comment;?></td>

</tr>
<?php }?>
<html>
<title>Feedback</title>

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
body{
	background:   #FFF5EE;
}


#container {
   
    width: 550px;
    height: 680px;
    top: 50%;
    left: 50%;
    margin-top: -140px;
    margin-left: -70px;
	background:  #f9da7b;
    border-radius: 10px;
    border: 1px solid #fff;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
	
}
form {
    margin: 0 auto;
    margin-top: ;
}
label {
    color: black;
    display: inline-block;
    margin-left: 18px;
    padding-top: 10px;
    font-size: 20px;
}

p a {
    font-size: 14px;
    color: black;
    float: right;
    margin-top: -13px;
    margin-right: 20px;
   -webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    transition: all .4s ease;
}
p a:hover {
    color: grey;
}
input {
    font-family: "Helvetica Neue", Helvetica, sans-serif;
    font-size: 14px;
    outline: none;
}

input[type=email],
input[type=text],
input[type=password] {
    color: black;
    padding-left: 10px;
    margin: 10px;
    margin-top: 12px;
    margin-left: 18px;
    width: 290px;
    height: 35px;
	border: 1px solid #c7d0d2;
    border-radius: 1px;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 2px #f5f7f8;
-webkit-transition: all .4s ease;
    -moz-transition: all .4s ease;
    transition: all .4s ease;
	}
	input[type=email]:hover,
input[type=text]:hover,
input[type=password]:hover {
    border: 1px solid #b6bfc0;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
}
input[type=email] : focus,
input[type=text]:focus,
input[type=password]:focus {
    border: 1px solid #a8c9e4;
    box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
}


.check {
    margin-left: 3px;
	font-size: 11px;
    color: #444;
    text-shadow: 0 1px 0 grey;
}
input[type=submit] {
    float: left;
    margin-left: 20px;
    margin-top: 20px;
    width: 80px;
    height: 30px;
font-size: 14px;
    font-weight: bold;
    color: black;
    background-color:  #ffae42; /*IE fallback*/
   
    border-radius: 30px;
    border: 1px solid #66add6;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
    cursor: pointer;
}

input[type=reset] {
    float: left;
    margin-left: 25px;
    margin-top: 20px;
    width: 80px;
    height: 30px;
font-size: 14px;
    font-weight: bold;
    color: black;
    background-color:  #ffae42; /*IE fallback*/
    
    border-radius: 30px;
    border: 1px solid #66add6;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
    cursor: pointer;
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
  

  
  
  

.button3 {
  background-color: #ef8b56; 
  color: black; 
  border: 2px solid white;
}

.button3:hover {
  background-color: white;
  color: white;
}
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

  
  table {
  border-collapse: collapse;
  width: 80%;
}

th, td {
  text-align: left;
  padding: 20px;
 
}

tr:nth-child(even){
	background-color: #B4CFEC}

th {
  background-color: #357EC7;
}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">JomSewa</span>
</div>

<!-- Sidebar/menu -->




  <!-- Header -->
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
			
			  
				    
        <li><a href="HOME.php"><b><h5>LOGOUT</h5></b></a></li>
		
		</ul>
	</div>
  </div>
</nav>
<br><br><br><header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">

        <div class="w3-right">
       
        </div>
        <div class="w3-clear"></div>
        <h4>Axia</h4><img src ="https://png2.kisspng.com/sh/cfda99242c8a93e3b72925ac8f7edb17/L0KzQYm3VsEyN6pwjZH0aYP2gLBuTgBmepDpjdM2YYjscX7qggIucJDzfNM2cHX1f7X8gb1ugaduRd9ybnmwRbO4hsI4PGUATKg6M0GxQoe7U8UzPmQ2TaQDN0a7Q4O7VsA4QF91htk=/kisspng-perodua-axia-car-honda-perodua-myvi-mini-5b1f2744946131.2643526315287683246078.png" width="200" height="100">
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
    
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <h4>Myvi</h4><img src ="  https://png2.kisspng.com/sh/6ea56070dfe0177cae872fbf635b6ba6/L0KzQYm3VcAzN5JwfZH0aYP2gLBuTgBmepDpjdM2bYn5eX7qggIufJDAhAZqLX3kfLLCkBliNaFqitHtdXGwcb3Dgb02aZYAfqo7Y0m2drW9Vr40OGQ4TqUEMkG4Qoa5WMI5PmE7SKg7LoDxd1==/kisspng-perodua-myvi-car-toyota-malaysia-perodua-alza-5ae9f82c93fd66.3033639215252828606062.png" width="200" height="100">
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
       
        <div class="w3-right">
        
        </div>
        <div class="w3-clear"></div>
        <h4>Bezza</h4><img src ="https://png2.kisspng.com/sh/a32c2f9b36b250b5e141bfd66502b6fd/L0KzQYm3V8A6N5NnkZH0aYP2gLBuTgBmepDpjdM2YnX9irK0kPVzd5V6eZ92eYbsPbTokr1uaZ1mkeVyYT3zdcP2hQViNZJxRdNAdHBwf8Xwhr02amU4ftM7N0PncYS6U74yQWg5TqkDMUG4Q4K4WME3OGg3TaQALoDxd1==/kisspng-perodua-bezza-perodua-myvi-car-malaysia-perodua-al-automotif-5b43fa273da333.1974678115311816072525.png" width="200" height="100">
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
      
	  
        <div class="w3-right">
         
        </div>
        <div class="w3-clear"></div>
        <h4>Alza</h4><img src ="https://pngimage.net/wp-content/uploads/2018/06/perodua-alza-png-2.png" width="200" height="100">
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <h5>Regions</h5>
        <img src="region.jpg" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>New record, over 90 views.</td>
            <td><i>10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>New record, over 40 users.</td>
            <td><i>17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>New comments.</td>
            <td><i>25 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>New shares.</td>
            <td><i>39 mins</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>New Users</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

  </div>
  <hr>

  <hr>
  <div>
    <h4 >
    DRIVER'S RATING
  </h4>
  <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "","joms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM feedback ORDER BY rating DESC";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class=w3-table-all w3-large w3-striped border=1 >";
            echo "<tr>";
                echo "<th>Driver ID :</th>";
                echo "<th>Rating :</th>";
             
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['driver_id'] . "</td>";
                echo "<td>" . $row['rating'] . "</td>";
"</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
// Close connection
mysqli_close($link);
?>
</div>
  <hr>

  <div class="w3-container">
    <h5>Recent Comments</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
      </div>
      <div class="w3-col m10 w3-container">
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "","joms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM feedback WHERE rating >3.5";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class=w3-table-all w3-large w3-striped border=1 >";
            echo "<tr>";
                echo "<th>Customer  :</th>";
                echo "<th>Driver ID :</th>";
                echo "<th>Comment :</th>";
             
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['driver_id'] . "</td>";
                echo "<td>" . $row['comment'] . "</td>";
"</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
// Close connection
mysqli_close($link);
?>
    </div>
  </div>
  <br>
  <div class="w3-container w3-light-blue w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Follow Us On Our Media</h5>
          
          <p><a href="http://www.facebook.com/pages/Codrops/159107397912"><i class="fa fa-facebook"></i>Facebook</a></p>
           <p><a href="http://www.twitter.com/codrops"><i class="fa fa-twitter"></i>Twitter</a></p> 
            <p><a href="https://plus.google.com/101095823814290637419"><i class="fa fa-google-plus"></i>Google +</a></p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">Contact</h5>
        <p>Universiti Malaysia Pahang
            26600 Pekan,
            Pahang Darul Makmur</p>
        <p>Tel: +609 424 5000
          Fax: +609 424 5055</p>
        <p>Email <a href="pro@ump.edu.my">pro@ump.edu.my</a></p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Location</h5>
        <p><img width="300 "alt="ump-location" src="ump-location.png"><a href="https://maps.google.com.my/maps?ie=UTF-8&q=ump&fb=1&gl=my&hq=ump"></a></p>
        <p><a href="http://www.ump.edu.my/sites/default/files/ump-gambang-map.pdf">Gambang Campus Map</a></p>
        <p><a href="http://www.ump.edu.my/sites/default/files/ump-pekan-map.pdf">Pekan Campus Map</a></p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-10 w3-light-grey">
    <h4></h4>
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
