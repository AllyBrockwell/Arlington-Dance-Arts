<?php
session_start();
include_once('connect-mysql.php');

if(!$con){
  die('Could not connectr: ' . mysqli_error($con));
}
$salt = 'zamntbrckoxgpiqvydhsjewulf'

$username = mysqli_real_escape_string($con, $_REQUEST['username']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$type = mysqli_real_escape_string($con, $_REQUEST['user_type']);
$password = mysqli_real_escape_string($con, $_REQUEST['password']),PASSWORD_DEFAULT;
$hashed = password_hash($password.$salt);

$sql = "INSERT INTO Users(username,email,user_type,password) VALUES('$username','$email', '$type','$hashed')";

if(mysqli_query($con,$sql)){
  header('Location: home.html');
  echo 'User created successfully';
}else{
  echo 'Error creating user, please try again';
}
mysqli_close($con);

?>
