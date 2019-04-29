<?php
session_start();
include_once('connect-mysql.php');

<<<<<<< HEAD
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

=======
if(!$con){
  die('Could not connect: ' . mysqli_error($con));
}
$class = mysqli_real_escape_string($con, $_REQUEST['class']);
$timeStart = mysqli_real_escape_string($con, $_REQUEST['timeStart']);
<<<<<<< HEAD
date('h:i A', strtotime($_REQUEST['timeStart']));
=======
>>>>>>> 992ca97101e3e9fb47082203f8db57ccb166c452
$timeEnd = mysqli_real_escape_string($con, $_REQUEST['timeEnd']);
$day = mysqli_real_escape_string($con, $_REQUEST['day']);


$sql = "INSERT INTO Schedule Values('$class','$timeStart', '$timeEnd', '$day')";

if(mysqli_query($con,$sql)){
  header('Location: schedule.php');
  echo 'Form submitted successfully';
}else{
  // echo 'Error submitting form, please try again';
  echo "Make sure the Class Name is the not the same as a current class";
}
mysqli_close($con);
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
?>
