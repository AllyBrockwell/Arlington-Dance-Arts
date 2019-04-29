<?php

include_once('connect-mysql.php');

if($con == false){
  die('ERROR: Could not connect');
}

if($_GET['id'] != ""){

  $class = $_GET['id'];


  $sql = "DELETE FROM Schedule WHERE className=?";

  if($stmt = mysqli_prepare($con,$sql)){
    mysqli_stmt_bind_param($stmt, "s", $class);
    mysqli_stmt_execute($stmt);
  }
}

  mysqli_stmt_close($stmt);

  header('Location: schedule.php');
  mysqli_close($con);


?>
