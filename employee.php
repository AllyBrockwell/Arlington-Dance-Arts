<?php
include('connect-mysql.php');
session_start();

 if(isset($_POST["login"]))
 {
      if(empty($_POST["username"]) || empty($_POST["password"]))
      {
           echo '<script>alert("Both Fields are required")</script>';
      }
      else
      {
           $username = mysqli_real_escape_string($con, $_POST["username"]);
           $password = mysqli_real_escape_string($con, $_POST["password"]);
           $query = "SELECT * FROM Users WHERE username = '$username'";
           $result = mysqli_query($con, $query);
           if(mysqli_num_rows($result) > 0)
           {
                while($row = mysqli_fetch_array($result))
                {
                     if(password_verify($password, $row["password"]))
                     {
                          //return true;
                          // $_SESSION["username"] = $username;
                          // header("location:home.php");
                          $_SESSION["username"] = $username;
                          $_SESSION["user_type"] = $row["user_type"];
                          $_SESSION["ID"] = $row["ID"];
                          if($row['user_type']=="admin"){
                              header("location:home.php");
                          }elseif($row['user_type']=="user"){
                              header("location:timesheets.php");
                          }
                     }
                     else
                     {
                          //return false;
                          echo '<script>alert("Wrong User Details")</script>';
                     }
                }
           }
           else
           {
                echo '<script>alert("Wrong User Details")</script>';
           }
      }
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"/>
	<link rel="stylesheet" href="stylesheets/style.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  <body>
    <div class = "sidenav">

    <div class = "logo">
      <h1 id="logo_block"><img id="logo" src="pictures/logo.gif">

      </h1>
    </div>
    	<a href="index.html">Home</a>
    	<a href="info.html">Studio Info</a>
      <a href="music.html">Music Lessons</a>
    	<a href="dance.php">Dance Classes</a>
    	<a href="contact.php">Contact Us</a>
      <a href = "registration.html">Registration</a>
    <a href="https://goo.gl/maps/vcsAF4nZ4VA2" target="_blank">Directions</a>
    <a href = "employee.php">Employee Login</a>
    </div>

    <img id="photostrip" src="pictures/photostrip.jpg" alt="photostrip">
<br>
    <div class = "login">
      <form method="post" action="employee.php">

        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" >
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password">
        </div>
        <div class="input-group">
          <input type="submit" name="login" id = "loginbutton" value="Login" class="btn" />
        </div>

      </form>
    </div>


  </body>
  </html>
