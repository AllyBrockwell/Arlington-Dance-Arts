<?php
include_once('connect-mysql.php');
$query = "SELECT * FROM ContactForm";
$retval = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"/>
	<title>Dance Arts, Inc.</title>
	<link rel="stylesheet" href="stylesheets/style.css" >
</head>
  <body>
    <div class = "sidenav">

    <!-- logo -->
    <div class = "logo">
      <h1 id="logo_block"><img id="logo" src="pictures/logo.gif">

      </h1>
    </div>
    <!--links for the side nav bar-->
    <a href="home.html">Home</a>
    <a href="timesheets.php">Timesheets</a>
    <a href = "viewtime.php">View Timesheets</a>
    <a href = "forms.php"> Forms </a>
    <a href = "pictures.html"> Pictures</a>
    <a href="schedule.php">Schedule</a>
    <a href="employee.html">Logout</a>
    </div>

    <div class = "formheader">
    <b>View Submitted Forms</b><br>
  </div>
    <div class = "formbox">
      <form action="" method="post">
      <table border="1" align="center">
          <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone Number</td>
            <td>Question Type</td>
            <td>Reply Type</td>
            <td>Question</td>
            <td></td>
          </tr>
          <?php

          if(!$con){
            die('Could not connectr: ' . mysqli_error($con));
          }

            if( ! $retval ){
              die('Could not get the data' . mysqli_error($con));
            }

              while ($row = mysqli_fetch_array($retval)) {
              ?>
                <!-- echo -->
                <tr>
                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['lname']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['phonenumber']; ?></td>
                  <td><?php echo $row['qtype']; ?></td>
                  <td><?php echo $row['rtype']; ?></td>
                  <td><?php echo $row['question']; ?></td>
                  <?php echo "<td>" . "<a href='delete.php?id=".$row['formID']."'>Delete</a>" . "</td>"; ?>
                </tr>
                <?php
              }
          ?>
      </table>

    </form>
    </div>

</body>
</html>
