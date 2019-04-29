<?php
include_once('connect-mysql.php');
<<<<<<< HEAD
session_start();
if(!isset($_SESSION["username"]))
{
	 header("location:employee.php");
}
if($_SESSION['user_type']!="admin"){
	header("location:employee.php");
}
=======
<<<<<<< HEAD
include('functions.php');
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
=======
>>>>>>> 992ca97101e3e9fb47082203f8db57ccb166c452
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
    <a href="home.php">Home</a>
    <a href = "viewtime.php">View Timesheets</a>
    <a href = "forms.php"> Forms </a>
    <a href="schedule.php">Schedule</a>
<<<<<<< HEAD
		<?php
  	echo '<label><a href="logout.php">Logout</a></label>';
  	?>
=======
    <a href="employee.php">Logout</a>
=======
    <a href="home.html">Home</a>
    <a href="timesheets.php">Timesheets</a>
    <a href = "viewtime.php">View Timesheets</a>
    <a href = "forms.php"> Forms </a>
    <a href = "pictures.html"> Pictures</a>
    <a href="schedule.php">Schedule</a>
    <a href="employee.html">Logout</a>
>>>>>>> 992ca97101e3e9fb47082203f8db57ccb166c452
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
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
<<<<<<< HEAD
									<td><a href="delete.php?id=<?php echo ($row["formID"]);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
=======
                  <?php echo "<td>" . "<a href='delete.php?id=".$row['formID']."'>Delete</a>" . "</td>"; ?>
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
                </tr>
                <?php
              }
          ?>
      </table>

    </form>
    </div>

</body>
</html>
