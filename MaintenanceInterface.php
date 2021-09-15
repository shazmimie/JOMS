<!DOCTYPE html>


<?php
$link = mysqli_connect("localhost","root","","joms");

 if (!$link) {
        die('Could not connect: ' . mysqli_connect_error());
    }

$driverId=$_GET['driverId'];
if(isset($_GET['tag']) && !empty($_GET['tag'])){
  echo "<script type='text/javascript'>alert('Succesfully submitted');</script>";
}

$sql = "SELECT * from vehicle WHERE driver_id='$driverId'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);


  //To create a query to be executed in database
  $vehicleId = $row['vehicle_id'];


?>

<?php ?>
<html>
<head>
  <title>
    Maintenance Info
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

<style >


html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}  

form {
    margin: 0 auto;
    margin-top: ;
}
label {
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


.check {
    margin-left: 3px;
  font-size: 11px;
    color: #444;
    text-shadow: 0 1px 0 grey;
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

  .info{
    color: black;
    text-align: center;
    font-style: bold;
    font-size: px;
  }
 .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
  .table {
  border-collapse: collapse;
  padding: 20px;
  border: 4px solid black;
  background-color: lightblue ;
  font-size: 26px;
}

</style>

<body class="w3-light-grey">

  <nav class="navbar navbar-default navbar-fixed-top  navbar-right">
  <div class="container-fluid">
    <div class="navbar-header">
<!-- Top container -->

       <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
     
    <li><a href="d_home.php"><b><i>HOME</i></b></a></li>
        <li><a href="d_profile.php"><b>PROFILE</b></a></li>
        <li><a href="driverlist.php"><b>DRIVER LIST</b></a></li>
          <li><a href="d_announcement.php"><b>DRIVER</b></a></li>
            
        <li><a href="login.php"><b>LOGOUT</b></a></li>
    
    </ul>
  </div>
  </div>
</nav>

    <br> <br><br><br><br><br>
  <center>
  <img src="icon.png" alt="Icon" height="140" width="120"></center><br>
  <div class = "info">
  <div class = "row">
  <div class = "center">
  <div class = "table">

  <tr>
    <td><label>Vehicle ID :</label></th>
    <td><?php echo $vehicleId;?></td>
  </tr><br></br>

  <tr>
    <td><label>Driver ID :</label></th>
    <td><?php echo $driverId;?></td>
  </tr><br></br>
<form action="InsertMaintenance.php" method="post">
         <input type="hidden" value="<?php echo $driverId;?>" name="driverId">
        <input type="hidden" value="<?php echo $vehicleId;?>" name="vehicleId">

<tr>
    <th><label for="textarea">Maintenance Status :</label></th>
    <th><textarea name="maintenance_status"></textarea></th>
  </tr>

  <tr><br>
    <th><label for="textarea">Maintenance Date :</label></th>
    <th><input type="date" name="maintenance_date"></th>
  </tr><br></br>

   <tr>
    <th>Maintenance Receipt :</th>
    <th>
    Select image to upload
    <center><input type="file" name="maintenance_receipt" id="fileToUpload">
  

  </tr>
  <center><br><th>  <input type="button" onclick="window.location.href = 'd_home.php';" value="Back"/></th>
    <th><input type="submit" value="Submit"/></th>

  <p id="show"></p>

   
  </div>
</form>
  </body>

</html>