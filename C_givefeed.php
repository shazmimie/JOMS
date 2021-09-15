<?php
session_start();
$username= $_GET['id'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Give Feedback
	</title>
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

     
    width: 450px;
    height: 780px;
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
    color: #fff;
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
    text-shadow: 0 1px 0 #fff;
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
body {
  padding: 50px 100px;
  font-size: 13px;
  font-style: Verdana, Tahoma, sans-serif;
  
}
 
h2 {
  margin-bottom: 20px;
  color: black;
}
 
 
 
input, textarea {
  padding: 10px;
  border: 1px solid #E5E5E5;
  width: 200px;
  color: red;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
  -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px;   
}
 
textarea {
  width: 400px;
  height: 150px;
  max-width: 400px;
  line-height: 18px;
}
 
input:hover, textarea:hover,
input:focus, textarea:focus {
  border-color: 1px solid #C9C9C9;
  box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
  -moz-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px; 
}
 
/*.form label {
  margin-left: 10px;
  font-family:cursive;
}*/
 
 
 
.button_submit input {
  width: 100px; 
  font-size:18px;
  font-family:cursive;
  background-color: red; 
  color: blue;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border: 1px solid blue
}

//slider
.slidecontainer {
  width: 20%;
}

.slider {
  -webkit-appearance: none;
  width: 20%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 15px;
  height: 25px;
  background: #4CAF50;
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
	</style>
</head>
<body>
     




		<body class="w3-light-grey">

<!-- Top container -->


<!-- Sidebar/menu -->
<body>
     
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
		  <li><a href="Book_Service.php?id=<?php echo $username; ?>"><b><h5>BOOKING</h5></b></a></li>
		    <li><a href="C_bookinghistory.php?id=<?php echo $username; ?>"><b><h5>BOOKING HISTORY</h5></b></a></li>
				    <li class="dropdown">
		  <a href="" class="dropdown-toggle" data-toggle="dropdown"><b><h5>FEEDBACK
          <span class="caret"></span></h5></b></a>
          <ul class="dropdown-menu">
		    <li><a href="C_givefeed.php?id=<?php echo $username; ?>"><b><h5>GIVE FEEDBACK</h5></b></a></li>
		  <li><a href="C_feedback.php?id=<?php echo $username; ?>"><b><h5>VIEW FEEDBACK</h5></b></a></li>
		    <li><a href="Cfeedback_vehicle.php?id=<?php echo $username; ?>"><b><h5>VIEW VEHICLE FEEDBACK</h5></b></a></li>
			  <li><a href="Cfeedback_service.php?id=<?php echo $username; ?>"><b><h5>VIEW SERVICE FEEDBACK</h5></b></a></li>
	</ul>
	</li>
			
			  
				    
        <li><a href="HOME.php"><b><h5>LOGOUT</h5></b></a></li>
		
		</ul>
	</div>
  </div>
</nav>



</div><br><br>
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

<!-- Overlay effect when opening sidebar on small screens -->

<!-- !PAGE CONTENT! -->


  <!-- Header -->


 

  
  
  	<center>
		<br><br>
		<b><font size = "6">Feedback</font>

      
   <br><br><br><br><br><br><br><br><br><br><div id="container"><br>
<div class="row">
   <div class="small-12 medium-2  columns">
  
  </div>
</div>
  <form action="c_sendfeed.php" method="post">
 
     <div class="slidecontainer">
  <input type="range" min="1" max="5" value="3" class="slider" name="myRange" id="myRange">
  <p>Rate: <span name="demo" id="demo"></span></p>
</div>

<label>Driver ID</label><br>
    <input type="text" name="driverid" id="driverid" placeholder="Enter Driver ID. . . ." autofocus="autofocus" required/>
    

  <br><label>Name</label><br>
    <input type="text" name="full_name" id="full_name" placeholder="Enter your full name . . . ." autofocus="autofocus" required/>
    
  </p>
  <label> Username</label><br>
    <input type="text" name="username" id="username" placeholder="Enter your username . . . ." autofocus="autofocus" required/>
    
  </p>
    

  <label>Email </label><br>
    <input type="email" name="email" id="email" placeholder="Enter your email . . . ."  autofocus="autofocus" required/>
    
  </p>  
  
  <p class="message">
  <label >Comment</label><br>
    <textarea name="message" placeholder="Enter your feedback . . . ." required></textarea>
    
  </p>
  <input  type="submit" class="btn btn-default" value="OK"  name="submit">
    </div>  
 </div>
 
</form></div></b></center></div>
</center> 
			
  <br>
  

  <!-- Footer -->
 

  <!-- End page content -->
</div>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

	 

	
<br><br><br>
</body>
</html>
