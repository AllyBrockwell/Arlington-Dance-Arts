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

$query = "SELECT * FROM Users WHERE Id = '".ucfirst($_SESSION['user']['ID'])."'";
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
      <a href = "settings.php">Settings</a>
    	<a href="employee.php?logout='1'">Logout</a>

    </div>
  <div class = "Settings">
    <div class = "settingsTitle">
        <br><b>Account Information</b><br>
      </div>

    <div class = "accountinfo" >
      <form method = "post" action = "update.php">
        <input type = "hidden" name = "Eid" value = "<?php echo ucfirst($_SESSION['user']['ID']);?>">
        <b>First Name:</b><br> <input type="text" name="fname" value = "<?php echo ucfirst($_SESSION['user']['fname']);?>">
        <br>
        <b>Last Name:</b><br> <input type="text" name="lname" value = "<?php echo ucfirst($_SESSION['user']['lname']);?>">
        <br>
        <b>Username:</b><br> <input type="text" name="username" value = "<?php echo ucfirst($_SESSION['user']['username']);?>">
        <br>
        <b>Enter new Password:</b><br> <input type="text" name="password" value = "">
        <br>
        <b>Email:</b><br> <input type="text" name="email" value = "<?php echo ucfirst($_SESSION['user']['email']);?>">
        <br>
        <input type="submit" id="submit" value = "Update"/>
      </form>
    </div>
  </div>


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
