<?php
<<<<<<< HEAD

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

=======
include_once('connect-mysql.php');

if($_GET['id'] != ""){

$formID = $_GET['id'];


$sql = "DELETE FROM ContactForm WHERE formID='".$formID."'";

$query  = mysqli_query($con,$sql);

header("Refresh:0; url=forms.php");
}
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011

?>
