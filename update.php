<?php
session_start();
include_once('connect-mysql.php');

if(!$con){
  die('Could not connectr: ' . mysqli_error($con));
}

$Eid = ucfirst($_SESSION['user']['ID']);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = ("UPDATE USERS SET fname = $fname, lname = $lname, username = $username, password = md5($password), email = $email WHERE ID = $Eid");
// $stmt = $mysqli -> prepare($sql);
// $stmt -> execute([$fname, $lname, $username, md5($password), $email, $Eid]);



if(mysqli_query($con,$sql)){
  header('Location: settings.php');
  echo 'Account Update submitted successfully';
}

mysqli_close($con);

?>
