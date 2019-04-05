<?php
include_once('connect-mysql.php');

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

$orderBy = "fname";
$order = "asc";

if(!empty($_GET["orderby"])) {
	$orderBy = $_GET["orderby"];
}
if(!empty($_GET["order"])) {
	$order = $_GET["order"];
}
$query = "SELECT * from Timesheet ORDER BY " . $orderBy . " " . $order;
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
    	<a href="home.php">Home</a>
      <a href = "viewtime.php">View Timesheets</a>
      <a href = "forms.php"> Forms </a>
    	<a href="schedule.php">Schedule</a>
    	<a href="employee.php">Logout</a>
    </div>

    <div class = "ownertimeTitle">
        <br><b>Submitted Timesheets</b><br>
    </div>

    <div class = "ownerSheets">

      <div class = "timesheetbox">
        <table border = "1" align = "center">
<?php
	$lnameNextOrder = "asc";
	$dateNextOrder = "asc";
	$fnameNextOrder = "desc";

	if($orderBy == "lname" and $order == "asc") {
		$lnameNextOrder = "desc";
	}
	if($orderBy == "the_date" and $order == "asc") {
		$dateNextOrder = "desc";
	}
	if($orderBy == "fname" and $order == "desc") {
		$fnameNextOrder = "asc";
	}
?>
<thead>
	<tr>
	<th><span><a href="?orderby=fname&order=<?php echo $fnameNextOrder; ?>" class="column-title" style="text-decoration:none; color : #000; ">First Name &#9663;</a></span></th>
	<th><span><a href="?orderby=lname&order=<?php echo $lnameNextOrder; ?>" class="column-title" style="text-decoration:none; color : #000;">Last Name &#9663;</a></span></th>
	<th><span><a href="?orderby=the_date&order=<?php echo $dateNextOrder; ?>" class="column-title" style="text-decoration:none; color : #000;">Date &#9663;</a></span></th>
  <th><span>Time In</span></th>
  <th><span>Time Out</span></th>
	</tr>
</thead>
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
                  <td><?php echo $row['the_date']; ?></td>
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
