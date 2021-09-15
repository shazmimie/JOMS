<!DOCTYPE html>
<?php
session_start();
$link = mysqli_connect("localhost","root","","joms")or die(mysqli_connect_error());


$select="SELECT * from driver group by driver_id";
$run = mysqli_query($link, $select);
while ($row = mysqli_fetch_array($run)){

$id = $row["driver_id"];
$name= $row["driver_name"];
$umur = $row["age"];
$ics= $row["ic"];
$jantina= $row["gender"];
$phone= $row["phonenumber"];
$emails= $row["email"];
$lesen= $row["license"];
$add= $row["address"];
$statuss= $row["status"];
$servis= $row["service"];
$duser= $row["dusername"];
$dpass= $row["dpassword"];
}



?>


<html>
<head>
  <title>
    Driver Profile
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

html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}  

body {
  background-color: #fff;
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
   
    width: 650px;
    height: 980px;
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
  </style>
</head>
<body>
     




    <body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">JOMS</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="SmallLogo.jpeg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome <strong></strong></span><br>
  <!--     <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a> -->
      <a href="d_HOME.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
  
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Profile</a>
    <a href="d_income.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Income</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
   

 
    <center>
    <br><br>
    <b><font size = "6">Driver Profile</font>
   <br><br><br><br><br><br><br><br><br><br><div id="container"><br>
<div class="row">
   <div class="small-12 medium-2 large-2 columns">
     
  </div>
</div><b><br><br><br>
  <form method="post">
     <table> 
        <tr>
          <td>Name  :</td>
          <td><input type="text" id="name" value="<?php echo $name;?>"></td>
        </tr>
        
        <tr>
          <td>Age  :</td>
          <td><input type="text" id="age" value="<?php echo $umur;?>"></td>
        </tr>
        <tr>
          <td>IC Number  :</td>
          <td><input type="text" id="ic" value="<?php echo $ics;?>"></td>
        </tr>
         <tr>
          <td>Gender  :</td>
          <td><input type="text" id="gender" value="<?php echo $jantina;?>"></td>
        </tr>
        <tr>
          <td>Phone Number  :</td>
          <td><input type="text" id="phonenumber" value="<?php echo $phone;?>"></td>
          </tr>
        <tr>
          <td>Email  :</td>
          <td><input type="email" id="email" value="<?php echo $emails;?>">
            </td>
        </tr>
        <tr>
          <td>License  :</td>
          <td><input type="text" id="license" value="<?php echo $lesen;?>"></td>
        </tr>
        <tr>
          <td>Address  :</td>
          <td><input type="text" id="address" value="<?php echo $add;?>"></td>
        </tr>
        <tr>
          <td>Status  :</td>
          <td>
            <input type="text" name="status" value="<?php echo $statuss;?>"></td>
        </tr>
        <tr>
          <td>Service  :</td>
          <td>
            <input type="text" id="service" value="<?php echo $servis;?>"></td>
        </tr>

        <tr>
          <td>Username  :</td>
          <td>
            <input type="text" id="dusername" value="<?php echo $duser;?>"></td>
        </tr>

        <tr>
          <td>Password  :</td>
          <td>
            <input type="text" id="dpassword" value="<?php echo $dpass;?>"></td>
        </tr>
      </table>
    
    
  <br><input  type="submit" class="btn btn-default" value="OK" name="update">
   <input type="submit" class="btn btn-default" formaction="d_viewprofile.php"  value="BACK" name="back"><br><br><br><br><br>
</form>
</center> 
      
  <br>

</div>


   

  
<br><br><br>
</body>
</html>
<?php
$link = mysqli_connect("localhost","root","","joms")or die(mysqli_connect_error());

if(isset($_POST['update'])){


/*
$id = $_GET["driver_id"];*/
$name1= $_POST["driver_name"];
$umur1 = $_POST["age"];
$ics1= $_POST["ic"];
$jantina1= $_POST["gender"];
$phone1= $_POST["phonenumber"];
$emails1= $_POST["email"];
$lesen1=$_POST["license"];
$add1=$_POST["address"];
$statuss1= $_POST["status"];
$servis1= $_POST["service"];
$duser1= $_POST["dusername"];
$dpass1= $_POST["dpassword"];



$update = "UPDATE driver SET driver_name='$name1',age ='$umur1' ,ics='$ics1', gender='$jantina1', phonenumber='$phone1', email='$emails1', license='$lesen1', address='$add1', status='$statuss1', service = '$servis1', dusername='$duser1', dusername='$duser'dpassword='$dpass1' GROUP BY driver_id";

$run_update = mysqli_query($link, $update);

if($run_update)
{
  echo "<script language=javascript> 
            alert(\"updATE.\");</script>"; 
      header("location:d_home.php?id=$username");
}
else
{
  echo "<script language=javascript> 
            alert(\"not updATE.\");</script>"; 
}
}