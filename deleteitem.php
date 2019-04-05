<?php
include_once('connect-mysql.php');

if($_GET['id'] != ""){

$class = $_GET['id'];


$sql = "DELETE FROM Schedule WHERE className='".$class."'";

$query  = mysqli_query($con,$sql);

header("Refresh:0; url=schedule.php");
}

?>
