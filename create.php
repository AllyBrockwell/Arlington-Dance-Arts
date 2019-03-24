<?php
session_start();
include_once('connect-mysql.php');

if(!$con){
  die('Could not connectr: ' . mysqli_error($con));
}
$Eid = uniqid();
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
$password = password_hash(mysqli_real_escape_string($con, $_REQUEST['password']),PASSWORD_DEFAULT);

$sql = "INSERT INTO Employee(Eid,email,fname,lname,password) VALUES('$Eid','$email','$fname','$lname','$password')";

if(mysqli_query($con,$sql)){
  header('Location: home.html');
  echo 'User created successfully';
}else{
  echo 'Error creating user, please try again';
}
mysqli_close($con);

?>
