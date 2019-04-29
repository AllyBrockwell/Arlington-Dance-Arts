<?php

include_once('connect-mysql.php');

if($con == false){
  die('ERROR: Could not connect');
}

if($_GET['id'] != ""){

  $formID = $_GET['id'];


  $sql = "DELETE FROM ContactForm WHERE formID=?";

  if($stmt = mysqli_prepare($con,$sql)){
    mysqli_stmt_bind_param($stmt, "s", $formID);
    mysqli_stmt_execute($stmt);
  }
}

  mysqli_stmt_close($stmt);

  header('Location: forms.php');
  mysqli_close($con);


?>
