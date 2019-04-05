<?php
	include('functions.php');
  include_once('connect-mysql.php');
  if (!isUser()) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: employee.php');
  }
  if (!isLoggedIn()) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: employee.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['user']);
  	header("location: employee.php");
  }

$query = "SELECT * FROM Timesheet WHERE Eid = '".ucfirst($_SESSION['user']['ID'])."' ORDER BY the_date DESC";
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
    	<a href="timesheets.php">Timesheets</a>
    	<a href="employee.php">Logout</a>
    </div>
    <br>
    <div class = "addTime">
      	<!-- <//?php  if (isset($_SESSION['user'])) : ?>
          <strong><//?php echo $_SESSION['user']['username']; ?></strong>
          <small>
						<i  style="color: #888;">(<//?php echo ucfirst($_SESSION['user']['ID']); ?>)</i>
						<br>
					</small>
          <//?php endif ?> -->
      <button type="button" id="timeButton" onclick = "timesheet()">Add Work Day</button><br>
      </div>

    <div class = "employeeSheets">

      <form id="timesheetform" action = "submitTime.php" method="post">
        <div class = "addtime">
          <input type = "hidden" name = "Eid" value = "<?php echo ucfirst($_SESSION['user']['ID']);?>">
        <b>First Name:</b><br> <input type="text" name="fname" value = "<?php echo ucfirst($_SESSION['user']['fname']);?>">
        <b>Last Name: </b><br><input type="text" name="lname" value = "<?php echo ucfirst($_SESSION['user']['lname']);?>">
          <b>Date: (YYYY-MM-DD) </b><br> <input type = "text" name = "the_date">
          <b>Time In:</b><br><input type = "text" name="timein">
          <b>Time Out:</b><br><input type = "text" name="timeout">

        <input type="submit" id="submit" value = "Submit"/>
        </div>
      </form>

      <div class = "timeTitle">
          <br><b>Submitted Timesheets</b><br>
        </div>

      <div class = "timesheetbox">
        <table border = "1" align = "center">
          <tr>
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
                  <td><?php echo $row['the_date']; ?></td>
                  <td><?php echo $row['timeIn']; ?></td>
                  <td><?php echo $row['timeOut']; ?></td>
                  <?php echo "<td>" . "<a href='deletetime.php?id=".$row['ID']."'>Delete</a>" . "</td>"; ?>
                </tr>
                <?php
              }
          ?>
        </table>

      </div>

    </div>
<br>

</body>
<script>
function timesheet() {
  var x = document.getElementById("timesheetform");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>
</html>
