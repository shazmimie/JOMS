<!DOCTYPE html>


<html>
<title>Vehicle Info</title>
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
            
        <li><a href="d_login.php"><b>LOGOUT</b></a></li>
    
    </ul>
  </div>
  </div>
</nav>

<br><br><br>
 


 <center>
 <form name="vehicle" method="post">
  <img src="icon.png" alt="Icon" height="140" width="120"></center><br></br>
   
  <div class = "row">
  <div class = "center"><br>
  <div class = "table">

  <tr>
    <br>
    <td>Car Name :</th>
    <td><input type = "text" name="vehicle_name"></td>
  </tr><br></br>

  <tr>
    <td>Brand :&ensp;&ensp;&ensp;</td>
    <td><input type = "text" name="vehicle_brand"></td>
  </tr><br></br>

  <tr>
    <td>&ensp;Type :&ensp;&ensp;&ensp;</td>
    <td><input type = "text" name="vehicle_trans_type"></td>
  </tr><br></br>

  <tr>
    <td>&ensp;Colour :&emsp;</td>
    <td><input type = "text" name="vehicle_colour"></td>
  </tr><br></br>

  <tr>
    <td>&ensp;Reg No :&ensp;</td>
    <td><input type = "text" name="vehicle_regnum"></td>
  </tr><br></br>

   <tr>
    <td>&ensp;Driver Id :&ensp;</td>
    <td><input type = "text" name="driver_id"></td>
  </tr><br></br>


    <th></th>
    <center><br><th><input type="button" onclick="window.location.href = 'd_home.php';" value="Back"/>
    </th>

  </tr>
  <p id="show"></p>


</table>
   <center><br><th><input type="submit" name="submit" value ="submit" formaction = "InsertVehicle.php">
</form>

  <!-- End page content -->
</div>
</body>
<style >
  .info{
    color: black;
    text-align: center;
    font-style: bold;
    font-size: 36px;
  }
 .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;

}
  .table {
  border-collapse: collapse;
  padding: 20px;
  border: 4px solid black;
  background-color: lightblue ;
  font-size: 26px;
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



</style>

</html>