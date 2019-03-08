<?php

$formID = filter_input(INPUT_POST, 'formID')
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$phonenumber = filter_input(INPUT_POST, 'phonenumber');
$qtype = filter_input(INPUT_POST, 'qtype');
$rtype = filter_input(INPUT_POST, 'rtype');
$question = filter_input(INPUT_POST, 'question');

$host = "localhost:8085";
$dbusername = "akbrockw"
$dbpassword = "allykat1"
$dbname = "Arlington Dance Arts";

//Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
  die('Connection Error('.mysqli_connect_errno().')'
  .mysqli_connect_error());
}
else{
  $sql = "INSERT INTO ContactForm(formID, fname, lname, email, phonenumber, qtype, rtype, question)
  values('$formID','$fname', '$lname', '$email', '$phonenumber', '$qtype', '$rtype', '$question')";
  if($conn -> query ($sql)){
    echo "Form was submitted successfully";
  }
  else{
    echo "Error: ".$sql."<br>".$conn->error;
  }
  $conn->close();
}

 ?>
