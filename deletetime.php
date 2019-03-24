<?php
include_once('connect-mysql.php');

if($_GET['id'] != ""){

$Eid = $_GET['id'];


$sql = "DELETE FROM Timesheet WHERE Eid='".$Eid."'";

$query  = mysqli_query($con,$sql);

header("Refresh:0; url=timesheets.php");
}

?>
