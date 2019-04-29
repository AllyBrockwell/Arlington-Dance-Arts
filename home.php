<<<<<<< HEAD
<?php
include('connect-mysql.php');
session_start();
//include('functions.php');

if(!isset($_SESSION["username"]))
{
     header("location:employee.php");
}
if($_SESSION['user_type']!="admin"){
    header("location:employee.php");
}

if(isset($_POST["register"]))
{
     if(empty($_POST["username"]) || empty($_POST["password_1"]))
     {
          echo '<script>alert("Both Fields are required")</script>';
     }
     else
     {
			 		$fname = mysqli_real_escape_string($con, $_POST["fname"]);
					$lname = mysqli_real_escape_string($con, $_POST["lname"]);
          $username = mysqli_real_escape_string($con, $_POST["username"]);
					$email = mysqli_real_escape_string($con, $_POST["email"]);
					$usertype = mysqli_real_escape_string($con, $_POST["user_type"]);
          $password = mysqli_real_escape_string($con, $_POST["password_1"]);
          $password = password_hash($password, PASSWORD_BCRYPT);
          $query = "INSERT INTO Users(fname,lname,username,email,user_type,password) VALUES(?,?,?,?,?,?)";
					if($stmt = mysqli_prepare($con, $query)){
					    mysqli_stmt_bind_param($stmt, "ssssss", $fname,$lname,$username,$email,$usertype,$password);

					    //mysqli_stmt_execute($stmt);
							if( mysqli_stmt_execute($stmt))
		          {
		               echo '<script>alert("Registration Done")</script>';
		          }

					}

     }
}

$orderBy = "fname";
$order = "asc";

if(!empty($_GET["orderby"])) {
	$orderBy = $_GET["orderby"];
}
if(!empty($_GET["order"])) {
	$order = $_GET["order"];
}
$query = "SELECT * from Users ORDER BY " . $orderBy . " " . $order;
$retval = mysqli_query($con,$query);
=======
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
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011

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

<<<<<<< HEAD
=======
    <!-- logo -->
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
    <div class = "logo">
      <h1 id="logo_block"><img id="logo" src="pictures/logo.gif">

      </h1>
    </div>
<<<<<<< HEAD
=======
    <!--links for the side nav bar-->
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
    <a href="home.php">Home</a>
    <a href = "viewtime.php">View Timesheets</a>
    <a href = "forms.php"> Forms </a>
    <a href="schedule.php">Schedule</a>
<<<<<<< HEAD
    <!-- <a href="employee.php?logout='1'">Logout</a> -->
		<?php
  	echo '<label><a href="logout.php">Logout</a></label>';
  	?>

=======
    <a href="employee.php?logout='1'">Logout</a>
		<!-- <form method='post' action="">
            <input type="submit" value="Logout" name="logout">
        </form>-->
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
    </div>
    <div class = "add">
    <b>Add an Employee</b><br>
  </div>
    <div class = "createuser">

      <form method="post" action="home.php">
<<<<<<< HEAD
=======

  <?php echo display_error(); ?>
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
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
<<<<<<< HEAD
    <button type="submit" id="submit" class="btn" name="register">Submit</button>
  </div>
</form>
    </div>

		<div class = "add">
		<b>Employees</b><br>
		</div>
		<div class = "createuser">
			<table border = "1" align = "center">
<?php
$lnameNextOrder = "asc";
$fnameNextOrder = "desc";

if($orderBy == "lname" and $order == "asc") {
	$lnameNextOrder = "desc";
}
if($orderBy == "fname" and $order == "desc") {
	$fnameNextOrder = "asc";
}
?>
<thead>
<tr>
<th><span><a href="?orderby=fname&order=<?php echo $fnameNextOrder; ?>" class="column-title" style="text-decoration:none; color : #000; ">First Name &#9663;</a></span></th>
<th><span><a href="?orderby=lname&order=<?php echo $lnameNextOrder; ?>" class="column-title" style="text-decoration:none; color : #000;">Last Name &#9663;</a></span></th>
<th><span>Username</span></th>
<th><span>User Type</span></th>
</tr>
</thead>
				<?php

				if(!$con){
					die('Could not connect: ' . mysqli_error($con));
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
								<td><?php echo $row['username']; ?></td>
								<td><?php echo $row['user_type']; ?></td>
								 <td><a href="deleteuser.php?id=<?php echo ($row["ID"]);?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>

							</tr>
							<?php
						}
				?>
			</table>
		</div>
=======
    <button type="submit" id="submit" class="btn" name="register_btn">Submit</button>
  </div>
</form>
    </div>
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
</body>
</html>
