<?php

include_once('connect-mysql.php');

if($con == false){
  die('ERROR: Could not connect');
}

if($_GET['id'] != ""){

  $ID = $_GET['id'];


  $sql = "DELETE FROM Timesheet WHERE ID=?";

  if($stmt = mysqli_prepare($con,$sql)){
    mysqli_stmt_bind_param($stmt, "s", $ID);
    mysqli_stmt_execute($stmt);
  }
}

  mysqli_stmt_close($stmt);

  header('Location: timesheets.php');
  mysqli_close($con);




?>
