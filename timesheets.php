<?php
	// include('functions.php');
  include_once('connect-mysql.php');
	session_start();
	if(!isset($_SESSION["username"]))
{
     header("location:employee.php");
}
if($_SESSION['user_type']!="user"){
    header("location:employee.php");
}

if(isset($_POST["submit"]))
{
  if(empty($_POST["the_date"]) || empty($_POST["timein"])|| empty($_POST["timeout"]))
  {
       echo '<script>alert("Both Fields are required")</script>';
  }
  else
  {
       $ID = uniqid();
       $Eid = $_SESSION['ID'];
       $date = mysqli_real_escape_string($con, $_POST["the_date"]);
       $timeIn = mysqli_real_escape_string($con, $_POST["timein"]);
       $timeOut = mysqli_real_escape_string($con, $_POST["timeout"]);

       $query = "INSERT INTO Timesheet(ID,Eid,the_date,timeIn,timeOut)
       VALUES(?,?,?,?,?)";
       if($stmt = mysqli_prepare($con, $query)){
           mysqli_stmt_bind_param($stmt, "sssss", $ID,$Eid,$date,$timeIn,$timeOut);

           if( mysqli_stmt_execute($stmt))
           {
                echo '<script>alert("Timesheet Submitted")</script>';
           }

       }

  }
}

$query = "SELECT * FROM Timesheet WHERE Eid = '".$_SESSION['ID']."' ORDER BY the_date DESC";
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

    <div class = "logo">
      <h1 id="logo_block"><img id="logo" src="pictures/logo.gif">

      </h1>
    </div>
    	<a href="timesheets.php">Timesheets</a>
			<?php
	  	echo '<label><a href="logout.php">Logout</a></label>';
	  	?>
    </div>
    <br>
    <div class = "addTime">

      <button type="button" id="timeButton" onclick = "timesheet()">Add Work Day</button><br>
      </div>

    <div class = "employeeSheets">

      <form id="timesheetform" action = "timesheets.php" method="post">
        <div class = "addtime">
          <input type = "hidden" name = "Eid" value = "<?php echo ucfirst($_SESSION['ID']);?>">
        <!-- <b>First Name:</b><br> <input type="text" name="fname" value = "<//?php echo $_SESSION['username'];?>">
        <b>Last Name: </b><br><input type="text" name="lname" value = "<//?php echo $_SESSION['username'];?>"> -->
          <b>Date: (YYYY-MM-DD) </b><br> <input type = "text" name = "the_date">
          <b>Time In:</b><br><input type = "text" name="timein">
          <b>Time Out:</b><br><input type = "text" name="timeout">

        <input type="submit" id="submit" value = "Submit" name = "submit"/>
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
									<td><a href="deletetime.php?id=<?php echo ($row["ID"]);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>
                  <!-- <//?php echo "<td>" . "<a href='deletetime.php?id=".$row['ID']."'>Delete</a>" . "</td>"; ?> -->
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
