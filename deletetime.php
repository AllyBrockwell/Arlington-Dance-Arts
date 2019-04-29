<?php
<<<<<<< HEAD

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



=======
include_once('connect-mysql.php');

if($_GET['id'] != ""){

<<<<<<< HEAD
$ID = $_GET['id'];


$sql = "DELETE FROM Timesheet WHERE ID='".$ID."'";
=======
$Eid = $_GET['id'];


$sql = "DELETE FROM Timesheet WHERE Eid='".$Eid."'";
>>>>>>> 992ca97101e3e9fb47082203f8db57ccb166c452

$query  = mysqli_query($con,$sql);

header("Refresh:0; url=timesheets.php");
}
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011

?>
