 <!DOCTYPE html>

<?php
$link = mysqli_connect("localhost","root","","joms");

 if (!$link) {
        die('Could not connect: ' . mysqli_connect_error());
    }

$driverId=$_POST['driverId'];
$vehicleId=$_POST['vehicleId'];
  $mStatus = $_POST['maintenance_status'];
  $mDate = $_POST['maintenance_date'];
  $mReceipt = $_POST['maintenance_receipt'];
  /*$sql = "INSERT INTO maintainance (vehicle_id, driver_id, maintainance_status, maintainance_receipt, maintainance_date)
VALUES ('$vehicleId', '$driverId', $mStatus', '$mDate', '$mReceipt')";*/

$sql="INSERT into maintainance (`vehicle_id`,`driver_id`, `maintainance_status`,`maintainance_receipt`, `maintainance_date`) VALUES ('{$vehicleId}' , '{$driverId}', '{$mStatus}', '{$mReceipt}', '{$mDate}')";

if (mysqli_query($link, $sql)) {
  header("Location: MaintenanceInterface.php?driverId=$driverId&tag=1"); 
    exit;

  }else{
  echo "Error: " .mysqli_error($link);
  }


  ?>

