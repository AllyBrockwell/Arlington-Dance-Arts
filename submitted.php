<?php
session_start();
include_once('connect-mysql.php');

if(!$con){
  die('Could not connect: ' . mysqli_error($con));
}
$formID = uniqid();
//$formID = mysqli_real_escape_string($con, $_REQUEST['formID']);
$fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$phone = mysqli_real_escape_string($con, $_REQUEST['phone']);
$qtype = mysqli_real_escape_string($con, $_REQUEST['qtype']);
$rtype = mysqli_real_escape_string($con, $_REQUEST['rtype']);
$question = mysqli_real_escape_string($con, $_REQUEST['question']);

$sql = "INSERT INTO ContactForm Values('$formID','$fname', '$lname', '$email', '$phone', '$qtype', '$rtype', '$question')";

if(mysqli_query($con,$sql)){
  header('Location: contact.html');
  echo 'Form submitted successfully';
}else{
  echo 'Error submitting from, please try again';
}
mysqli_close($con);

?>
