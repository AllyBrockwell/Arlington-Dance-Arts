<?php
include_once('connect-mysql.php');

if($con == false){
  die('ERROR: Could not connect');
}

if($_GET['id'] != ""){

  $ID = $_GET['id'];

  $sql ="DELETE FROM Timesheet WHERE Eid = ?";
  $sql2 = "DELETE FROM Users WHERE ID=?";


  if($stmt = mysqli_prepare($con,$sql)){
    //mysqli_stmt_bind_param($stmt, "ss", $ID,$ID);
    mysqli_stmt_bind_param($stmt, "s",$ID);
    mysqli_stmt_execute($stmt);

  }
  if($stmt2 = mysqli_prepare($con,$sql2)){
    //mysqli_stmt_bind_param($stmt, "ss", $ID,$ID);
    mysqli_stmt_bind_param($stmt2, "s",$ID);
    mysqli_stmt_execute($stmt2);

  }
}
  header('Location: home.php');
  mysqli_stmt_close($stmt);
  mysqli_stmt_close($stmt2);
  mysqli_close($con);
?>
