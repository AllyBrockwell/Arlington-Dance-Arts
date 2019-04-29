<?php
session_start();
include_once('connect-mysql.php');

if(!$con){
  die('Could not connectr: ' . mysqli_error($con));
}
<<<<<<< HEAD
$salt = 'zamntbrckoxgpiqvydhsjewulf'

$username = mysqli_real_escape_string($con, $_REQUEST['username']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$type = mysqli_real_escape_string($con, $_REQUEST['user_type']);
$password = mysqli_real_escape_string($con, $_REQUEST['password']),PASSWORD_DEFAULT;
$hashed = password_hash($password.$salt);

$sql = "INSERT INTO Users(username,email,user_type,password) VALUES('$username','$email', '$type','$hashed')";
=======
<<<<<<< HEAD
//
// $email = mysqli_real_escape_string($con, $_REQUEST['email']);
// $fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
// $lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
// $password = md5(mysqli_real_escape_string($con, $_REQUEST['password']),PASSWORD_DEFAULT);
// $Eid = $fname{0}.$fname{1}.$lname{0}.$lname{1};

$username = mysqli_real_escape_string($con, $_REQUEST['username']);
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$type = mysqli_real_escape_string($con, $_REQUEST['user_type']);
$password = md5(mysqli_real_escape_string($con, $_REQUEST['password']),PASSWORD_DEFAULT);

$sql = "INSERT INTO Users(username,email,user_type,password) VALUES('$username','$email', '$type','$password')";
=======
$Eid = uniqid();
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
$fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
$password = password_hash(mysqli_real_escape_string($con, $_REQUEST['password']),PASSWORD_DEFAULT);

$sql = "INSERT INTO Employee(Eid,email,fname,lname,password) VALUES('$Eid','$email','$fname','$lname','$password')";
>>>>>>> 992ca97101e3e9fb47082203f8db57ccb166c452
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011

if(mysqli_query($con,$sql)){
  header('Location: home.html');
  echo 'User created successfully';
}else{
  echo 'Error creating user, please try again';
}
mysqli_close($con);

?>
