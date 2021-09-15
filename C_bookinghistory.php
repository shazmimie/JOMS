<?php
session_start();
$username= $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Customer Booking History
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
<script>
	
	 function display()
   {
	     var point;
  var sum = 0;
  for(point = 0; point < arguments.length; point++) {
    sum += arguments[point];
  }
  return sum;
}
  

document.getElementById("point").innerHTML = display("Total :" +  sum);
   }
</script>






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
</head>
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


<!-- Sidebar/menu -->





  <!-- Header -->
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
  
  <form name="form"action="" method="POST"><br><br><br><br><br><br>
<center>
<center><h1><b><font size = "6"> Booking History</font></b></h1></center><b><br><br><br><br>



<table border='1'>
<th colspan="11">
	</title>

<form action="" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="search">
</form>



</th>

  <tr>
 
    <th><h3><center>Booking ID</center></h3></th>
    <th><h3><center>Date</center></h3></th>
	 <th><h3><center>Time</center></h3></th>
   <th><h3><center>Pick Up</center></h3></th>
	<th><h3><center>Drop Off</center></h3></th>
	<th><h3><center>Type Service</center></h3></th>
	<th><h3><center>Price</center></h3></th>
	<th><h3><center>Points</center></h3></th>
	<th><h3><center>Driver ID</center></h3></th>
	<th><h3><center>Driver Name</center></h3></th>

  </tr>
<?php
$username= $_GET['id'];
$search_value=$_POST["search"];
$link = mysqli_connect("localhost","root","","joms");


$select = "select booking.booking_id , booking.booking_date , booking.booking_time , booking.pick_up , booking.drop_off , booking.type_service,
booking.price , booking.point , booking.driver_id , driver.driver_name FROM booking INNER JOIN driver ON driver.driver_id = booking.driver_id 
where username ='$username'  "; 
 
$run = mysqli_query($link, $select);
while($row = mysqli_fetch_array($run)){

$booking_id = $row['booking_id'];
$booking_date = $row['booking_date'];
$booking_time= $row['booking_time'];
$pick_up = $row['pick_up'];
$drop_off = $row['drop_off'];
$type_service = $row['type_service'];
$price = $row['price'];
$point = $row['point'];
$driver_id = $row['driver_id'];
$driver_name = $row['driver_name'];


?>
<tr>
<td><h4><center><?php echo $booking_id;?></center></h4></td>
<td><h4><?php echo $booking_date;?></h4></td>
<td><h4><?php echo $booking_time;?></h4></td>
<td><h4><?php echo $pick_up;?></h4></td>
<td><h4><?php echo $drop_off;?></h4></td>
<td><h4><?php echo $type_service;?></h4></td>
<td><h4><?php echo $price;?></h4></td>
<td><h4><?php echo $point;?></h4></td>
<td><h4><?php echo $driver_id;?></h4></td>
<td><h4><?php echo $driver_name;?></h4></td>

   
</tr>
<center>
<?php }?>
   <?php
$link = mysqli_connect("localhost","root","","joms");

$select = "SELECT   SUM(point)  from booking where username='$username' ";
if($result = mysqli_query($link, $select)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
               echo "<th><h4><center>TOTAL POINT</center></h4></th>"; 
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<center><tr>";
               
                
                  echo "<center><td>" . $row['SUM(point)'] . "</td></center>";
            echo "</tr></center>";
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

?>


</center>

 

	
	

  


</table>
</center><br><br><br>

  	
<br><br><br><br>
  <div class="w3-container w3-dark-grey w3-padding-32"  style="margin-left:;">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Demographic</h5>
        <p>Language</p>
        <p>Country</p>
        <p>City</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">System</h5>
        <p>Browser</p>
        <p>OS</p>
        <p>More</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Target</h5>
        <p>Users</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div>
  

<br><br><br>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>JOMS</h4>
    <p> </p>
  </footer>

  <!-- End page content -->
</div>


	 


</body>
</html>