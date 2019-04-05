<?php
include_once('connect-mysql.php');

if($_GET['id'] != ""){

$formID = $_GET['id'];


$sql = "DELETE FROM ContactForm WHERE formID='".$formID."'";

$query  = mysqli_query($con,$sql);

header("Refresh:0; url=forms.php");
}

?>
