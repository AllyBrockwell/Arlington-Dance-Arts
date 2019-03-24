<?php
session_start();
include_once('connect-mysql.php');

if(!$con){
  die('Could not connect: ' . mysqli_error($con));
}
$class = mysqli_real_escape_string($con, $_REQUEST['class']);
$timeStart = mysqli_real_escape_string($con, $_REQUEST['timeStart']);
$timeEnd = mysqli_real_escape_string($con, $_REQUEST['timeEnd']);
$day = mysqli_real_escape_string($con, $_REQUEST['day']);


$sql = "INSERT INTO Schedule Values('$class','$timeStart', '$timeEnd', '$day')";

if(mysqli_query($con,$sql)){
  header('Location: schedule.php');
  echo 'Form submitted successfully';
}else{
  // echo 'Error submitting form, please try again';
  echo "Make sure the Class Name is the not the same as a current class";
}
mysqli_close($con);
?>
