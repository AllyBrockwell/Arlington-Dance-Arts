<?php
session_start();
include_once('connect-mysql.php');

if(!$con){
  die('Could not connect: ' . mysqli_error($con));
}
$Eid = uniqid();
$email= uniqid();
$fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
$date = mysqli_real_escape_string($con, $_REQUEST['date']);
$timeIn = mysqli_real_escape_string($con, $_REQUEST['timein']);
$timeOut = mysqli_real_escape_string($con, $_REQUEST['timeout']);

$sql = "INSERT INTO Timesheet Values('$Eid','$email','$date','$fname', '$lname', '$timeIn', '$timeOut')";

if(mysqli_query($con,$sql)){
  header('Location: timesheets.php');
  echo 'Form submitted successfully';
}else{
  echo 'Error submitting from, please try again';
}
mysqli_close($con);

?>
