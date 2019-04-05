<?php
session_start();
include_once('connect-mysql.php');
include('functions.php');

if(!$con){
  die('Could not connect: ' . mysqli_error($con));
}
$ID = uniqid();
$Eid = ucfirst($_SESSION['user']['ID']);
$fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
$date = mysqli_real_escape_string($con, $_REQUEST['the_date']);
$timeIn = mysqli_real_escape_string($con, $_REQUEST['timein']);
$timeOut = mysqli_real_escape_string($con, $_REQUEST['timeout']);

$sql = "INSERT INTO Timesheet Values('$ID','$Eid','$fname', '$lname','$date', '$timeIn', '$timeOut')";

if(mysqli_query($con,$sql)){
  header('Location: timesheets.php');
  echo 'Form submitted successfully';
}

mysqli_close($con);

?>
