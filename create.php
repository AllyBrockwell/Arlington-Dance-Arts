<?php
$email = filter_input(INPUT_POST, 'email')
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$password = filter_input(INPUT_POST, 'password');

if(!empty($email)){
  if(!empty($fname)){
    if(!empty($lname)){
      if(!empty($password)){
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
          $sql = "INSERT INTO Employee(email, fname, lname, password)
          values($email, $fname, $lname, $password)";
          if($conn -> query ($sql)){
            echo "Employee was created successfully";
          }
          else{
            echo "Error: ".$sql."<br>".$conn->error;
          }
          $conn->close();
        }

      }else{
        echo "Password should not be empty";
        die();
    }else{
        echo "Last Name should not be empty";
        die();
  }else{
      echo "First Name should not be empty";
      die();
}else{
    echo "Email should not be empty";
    die();
}


?>
