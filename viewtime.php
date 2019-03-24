<?php
include_once('connect-mysql.php');
$query = "SELECT * FROM Timesheet ORDER BY date ASC";
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

    <div class = "ownerSheets">
      <br><b>Submitted Timesheets</b><br>
      <div class = "timesheetbox">
        <table border = "1" align = "center">
          <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Date</td>
            <td>Time In</td>
            <td>Time Out</td>
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
                  <td><?php echo $row['date']; ?></td>
                  <td><?php echo $row['timeIn']; ?></td>
                  <td><?php echo $row['timeOut']; ?></td>
                  <!-- <//?php echo "<td>" . "<a href='deletetime.php?id=".$row['Eid']."'>Delete</a>" . "</td>"; ?> -->
                </tr>
                <?php
              }
          ?>
        </table>
      </div>
    </div>


  </body>
  </html>
