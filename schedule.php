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
$query1 = "SELECT * FROM Schedule WHERE day = 'monday' ORDER BY timeStart Asc";
$query2 = "SELECT * FROM Schedule WHERE day = 'tuesday' ORDER BY timeStart Asc";
$query3 = "SELECT * FROM Schedule WHERE day = 'wednesday' ORDER BY timeStart Asc";
$query4 = "SELECT * FROM Schedule WHERE day = 'thursday' ORDER BY timeStart Asc";
$query5 = "SELECT * FROM Schedule WHERE day = 'friday' ORDER BY timeStart Asc";
$retval1 = mysqli_query($con,$query1);
$retval2 = mysqli_query($con,$query2);
$retval3 = mysqli_query($con,$query3);
$retval4 = mysqli_query($con,$query4);
$retval5 = mysqli_query($con,$query5);
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

<!-- the dynamic schedule -->
  <div id="myDIV" class="header">
  <h2 style="margin:5px">Weekly Schedule</h2>
<form name = "schedule" action="submitSchedule.php" method="post">
  <input type="text" id="myInput" placeholder="Class Name" name = "class">

  <select id = "days" name = "day">
    <option value = "">Select a Day</option>
    <option value = "monday">Monday</option>
    <option value ="tuesday">Tuesday</option>
    <option value = "wednesday">Wednesday</option>
    <option value ="thursday">Thursday</option>
    <option value = "friday">Friday</option>
  </select>
  <br>
  <div class = "start">
    <b>Start Time:</b>
  </div>
  <div class = "end">
    <b>End Time:</b>
  </div>
  <input type ="time" id = "startTime" placeholder = "Start Time" name = "timeStart">
  <input type ="time" id = "endTime" placeholder = "End Time" name = "timeEnd">
  <input type="submit" class="addBtn" value="Add"/>
</form>
</div>
<?php

if(!$con){
  die('Could not connect: ' . mysqli_error($con));
}

    ?>

<ul id="myUL">
  <ul id = "mon">
    <div class = "day"><b>Monday</b></div>
    <?php if( ! $retval1 ){
      die('Could not get the data' . mysqli_error($con));
    }

      while ($row = mysqli_fetch_array($retval1)) {
         ?>
<<<<<<< HEAD
    <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']?><a href="deleteitem.php?id=<?php echo ($row["className"]);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></li>

		<!-- <a href='deleteitem.php?id=".$row['className']."'>Delete</a>"; ?></li> -->
=======
    <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']." "."<a href='deleteitem.php?id=".$row['className']."'>Delete</a>"; ?></li>
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
    <?php
  }
  ?>
  </ul>
  <ul id = "tue">
  <div class = "day"><b>Tuesday</b></div>
  <?php if( ! $retval2 ){
    die('Could not get the data' . mysqli_error($con));
  }

    while ($row = mysqli_fetch_array($retval2)) {
       ?>
<<<<<<< HEAD
			 <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']?><a href="deleteitem.php?id=<?php echo ($row["className"]);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></li>
=======
  <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']." "."<a href='deleteitem.php?id=".$row['className']."'>Delete</a>"; ?></li>
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
  <?php
}
?>
  </ul>
  <ul id = "wed">
  <div class = "day"><b>Wednesday</b></div>
  <?php if( ! $retval3 ){
    die('Could not get the data' . mysqli_error($con));
  }

    while ($row = mysqli_fetch_array($retval3)) {
       ?>
<<<<<<< HEAD
			 <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']?><a href="deleteitem.php?id=<?php echo ($row["className"]);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></li>
=======
  <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']." "."<a href='deleteitem.php?id=".$row['className']."'>Delete</a>"; ?></li>
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
  <?php
}
?>
  </ul>
  <ul id = "thurs">
  <div class = "day"><b>Thursday</b></div>
  <?php if( ! $retval4 ){
    die('Could not get the data' . mysqli_error($con));
  }

    while ($row = mysqli_fetch_array($retval4)) {
       ?>
<<<<<<< HEAD
			 <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']?><a href="deleteitem.php?id=<?php echo ($row["className"]);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></li>
=======
  <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']." "."<a href='deleteitem.php?id=".$row['className']."'>Delete</a>"; ?></li>
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
  <?php
}
?>
  </ul>
  <ul id = "fri">
  <div class = "day"><b>Friday</b></div>
  <?php if( ! $retval5 ){
    die('Could not get the data' . mysqli_error($con));
  }

    while ($row = mysqli_fetch_array($retval5)) {
       ?>
<<<<<<< HEAD
			 <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']?><a href="deleteitem.php?id=<?php echo ($row["className"]);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></li>
=======
  <li><?php echo $row['className']." ".$row['timeStart']." - ".$row['timeEnd']." "."<a href='deleteitem.php?id=".$row['className']."'>Delete</a>"; ?></li>
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
  <?php
}
?>
  </ul>

</ul>

</body>


</html>
