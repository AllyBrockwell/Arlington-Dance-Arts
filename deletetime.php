<?php
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

?>
