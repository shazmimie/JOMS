<?php
session_start();
$link = mysqli_connect("localhost","root","","joms");
$username= $_GET['id'];
 

$select = "select * from customer where username ='$username' ";
$run = mysqli_query($link, $select);
while($row = mysqli_fetch_array($run)){


$customer_id = $row['customer_id'];
$name= $row['name'];
$phonenum = $row['phonenum'];
$email= $row['email'];
$username= $row['username'];
$password=$row['password'];
}

?>


<!DOCTYPE html>

<html>
<head>
	<title>
		Customer View Profile
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
	
	$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});

</script>






<style>

body{
	background:   #FFF5EE;
}


.profile-pic {
    max-width: 200px;
    max-height: 200px;
    display: block;
}

.file-upload {
    display: none;
}
.circle {
    border-radius: 1000px !important;
    overflow: hidden;
    width: 128px;
    height: 128px;
    border: 8px solid rgba(255, 255, 255, 0.7);
    position: center;
    top: 72px;
}
img {
    max-width: 100%;
    height: auto;
}
.p-image {
  position: center;
  top: 167px;
  right: 30px;
  color: #666666;
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.p-image:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
}
.upload-button {
  font-size: 1.2em;
}

.upload-button:hover {
  transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
  color: #999;
}

#container {
   
    width: 550px;
    height: 660px;
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
    font-size: 18px;
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
    width: 85px;
    height: 35px;
font-size: 18px;
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
    width: 95px;
    height: 35px;
font-size: 18px;
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
<center>
		<br><br>
		<b><font size = "6"> Customer Profile</font>
   <br><br><br><br><br><br><br><br><br><br><div id="container"><br>
<div class="row">
   <div class="small-12 medium-2 large-2 columns">
     <div class="circle">
       <!-- User Profile Image -->
       <img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">

       <!-- Default Image -->
       <!-- <i class="fa fa-user fa-5x"></i> -->
     </div>
     <div class="p-image">
       <i class="fa fa-camera upload-button"></i>
        <input class="file-upload" type="file" id="pic"  name='pic' accept="image/*"/>
     </div>
  </div>
</div><b><br><br><br>
			<table>	
				<tr>
					<td><h3>Name  :</h3></td>
					<td><input type="text" name="name" id="name" readonly value="<?php echo $name;?>"></td>
				</tr>
				<tr>
					<td><h3>Phone Number  :</h3></td>
					<td><input type="text" name="phonenum" id="phonenum" readonly value="<?php echo $phonenum;?>"></td>
					</tr>
				<tr>
					<td><h3>Email  :</h3></td>
					<td><input type="email" name="email" id="email" readonly value="<?php echo $email;?>"></td>
				</tr>
				<tr>
					<td><h3>Username  :</h3></td>
					<td><input type="text" name="username" id="username" readonly value="<?php echo $username;?>"></td>
				</tr>
				<tr>
					<td><h3>Password  :</h3></td>
					<td><input type="password" name="password" id="password" readonly value="<?php echo $password;?>"></td>
				</tr>
         

			</table> 
			
		
			
			<a href="C_updateprofile.php?id=<?php echo $username;?>"><input type="submit"  class="btn btn-default" value="EDIT" name="update" formaction="C_updateprofile.php?id=<?php echo $username;?>"></a>
			
	<br><br><br><br><br>
		</div>	
 </div>
 



</center>
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


  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>
</body>
</html>

	 



