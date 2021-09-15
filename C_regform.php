 <?php
 session_start();
 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>New Customer Registration</title>
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
function Redirect()
{
 location.href='C_login.php' 
 } 
 
function setFocus()
{
	//document.login.name.value="";
	//document.login.phonenum.value="";
	//document.login.email.value="";
	//document.login.username.value="";
	//document.login.password.value="";
	document.login.username.focus();
}
</script>
	<style>
	
	body{
	background:   #FFF5EE;
} 
	#container {
   
    width: 500px;
    height: 400px;
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
    background-color:  #ffae42; /IE fallback/
   
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
    background-color:  #ffae42; /IE fallback/
    
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

<br><br><header class="w3-container" style="padding-top:22px">
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
<form action="C_readreg.php" method="post">


		
	<br><br><br><br><br>
	<center><h1><b><font size = "6"> New Customer Registration</font></b></h1></center>
		<br>
		<br><br><br>
		<center>
		
		
	  <br><br><br><br><br><div id="container">
			<table>
				
				<tr>
					<td>Name  :</td>
					<td><input type="text" id="name" name="name"></td>
				</tr>
					<tr>
					<td>Phone Number  :</td>
					<td><input type="text" id="phonenum" name="phonenum"></td>
					</tr>
					
					<tr>
					<td>Email  :</td>
					<td><input type="email" id="email" name="email"></td>
					</tr>
				
			    <tr>
					<td>Username  :</td>
					<td><input type="text" id="username" name="username"></td>
				</tr>
				<tr>
					<td>Password  :</td>
					<td><input type="password" id="password" name="password"></td>
				</tr>
				</table><br>
				 <a href="C_login.php">Login</a>

			
<br><input type="submit" name="submit" class="btn btn-default" value="OK" >
	 <input type="reset" class="btn btn-default" value="CANCEL" name="cancel"><br><br><br><br><br>
			
			</div>
		</center>
	</form><br><br><br><br><br>
	</body>
</html>