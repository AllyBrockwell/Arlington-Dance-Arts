<?php include('functions.php');
if (!isAdmin()) {
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
    <a href="home.php">Home</a>
    <a href = "viewtime.php">View Timesheets</a>
    <a href = "forms.php"> Forms </a>
    <a href="schedule.php">Schedule</a>
    <a href="employee.php?logout='1'">Logout</a>
		<!-- <form method='post' action="">
            <input type="submit" value="Logout" name="logout">
        </form>-->
    </div>
    <div class = "add">
    <b>Add an Employee</b><br>
  </div>
    <div class = "createuser">

      <form method="post" action="home.php">

  <?php echo display_error(); ?>
  <div class="input-group">
    <label>First Name</label>
    <input type="text" name="fname" value="">
  </div>
  <div class="input-group">
    <label>Last Name</label>
    <input type="text" name="lname" value="">
  </div>
  <div class="input-group">
    <label>Username</label>
    <input type="text" name="username" value="">
  </div>
  <div class="input-group">
    <label>Email</label>
    <input type="text" name="email" value="">
  </div>
  <div class="input-group">
    <label>User type</label>
    <select name="user_type" id="user_type" >
      <option value=""></option>
      <option value="admin">Admin</option>
      <option value="user">User</option>
    </select>
  </div>
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password_1">
  </div>
  <div class="input-group">
    <label>Confirm password</label>
    <input type="password" name="password_2">
  </div>
  <div class="input-group">
    <button type="submit" id="submit" class="btn" name="register_btn">Submit</button>
  </div>
</form>
    </div>
</body>
</html>
