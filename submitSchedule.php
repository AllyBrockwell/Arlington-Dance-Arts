<?php
session_start();
include_once('connect-mysql.php');

if($con == false){
  die('ERROR: Could not connect');
}


$sql = "INSERT INTO Schedule Values(?,?,?,?)";

if($stmt = mysqli_prepare($con, $sql)){
    mysqli_stmt_bind_param($stmt, "ssss", $class, $timeStart, $timeEnd, $day);

    $class = mysqli_real_escape_string($con, $_REQUEST['class']);
    $timeStart = mysqli_real_escape_string($con, $_REQUEST['timeStart']);
    date('h:i A', strtotime($_REQUEST['timeStart']));
    $timeEnd = mysqli_real_escape_string($con, $_REQUEST['timeEnd']);
    $day = mysqli_real_escape_string($con, $_REQUEST['day']);

    mysqli_stmt_execute($stmt);

    echo "Records inserted successfully.";

} else{
    echo "ERROR: Could not submit";
}

mysqli_stmt_close($stmt);

header('Location: schedule.php');
mysqli_close($con);

?>
