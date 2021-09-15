<?php
//connect with database
$link = mysqli_connect("localhost", "root","") or die(mysqli_connect_error());
//select target database
mysqli_select_db($link, "joms") or die(mysqli_error());
if(isset($_POST['submit'])){
$carName = $_POST['vehicle_name'];
$brand= $_POST['vehicle_brand'];
$type = $_POST['vehicle_trans_type'];
$colour= $_POST['vehicle_colour'];
$regNum= $_POST['vehicle_regnum'];
$driverId=$_POST['driver_id'];

$query = "insert into vehicle values ('','$carName','$brand', '$type', '$colour','$regNum','$driverId')" or die(mysqli_connect_error());
  


  //run sql query in database
  $result = mysqli_query($link, $query);
       
  //check sucessful or not
  if($result) 
          {
            
                    echo("");
                    


          
    }
    else 
          {
              
              die("Insertion is  failed");
          }
}




// Close connection
mysqli_close($link);

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form action= "VehicleInterface.php"method="post">
    <legend>Please click Submit!</legend>
    <input type="submit" name="submit" value="Submit">
    
  </form>

</body>
</html>