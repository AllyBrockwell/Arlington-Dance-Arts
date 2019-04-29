<?php
session_start();
include_once('connect-mysql.php');
<<<<<<< HEAD
include('functions.php');
=======
>>>>>>> 992ca97101e3e9fb47082203f8db57ccb166c452

if(!$con){
  die('Could not connect: ' . mysqli_error($con));
}
<<<<<<< HEAD
$ID = uniqid();
$Eid = ucfirst($_SESSION['user']['ID']);
$fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
$date = mysqli_real_escape_string($con, $_REQUEST['the_date']);
$timeIn = mysqli_real_escape_string($con, $_REQUEST['timein']);
$timeOut = mysqli_real_escape_string($con, $_REQUEST['timeout']);

$sql = "INSERT INTO Timesheet Values('$ID','$Eid','$fname', '$lname','$date', '$timeIn', '$timeOut')";
=======
$Eid = uniqid();
$email= uniqid();
$fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
$date = mysqli_real_escape_string($con, $_REQUEST['date']);
$timeIn = mysqli_real_escape_string($con, $_REQUEST['timein']);
$timeOut = mysqli_real_escape_string($con, $_REQUEST['timeout']);

$sql = "INSERT INTO Timesheet Values('$Eid','$email','$date','$fname', '$lname', '$timeIn', '$timeOut')";
>>>>>>> 992ca97101e3e9fb47082203f8db57ccb166c452

if(mysqli_query($con,$sql)){
  header('Location: timesheets.php');
  echo 'Form submitted successfully';
<<<<<<< HEAD
}

=======
}else{
  echo 'Error submitting from, please try again';
}
>>>>>>> 992ca97101e3e9fb47082203f8db57ccb166c452
mysqli_close($con);

?>
