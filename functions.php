<<<<<<< HEAD
 <?php
session_start();

// connect to database
include('connect-mysql.php');
=======
<?php
session_start();

// connect to database
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
$db = mysqli_connect('localhost', 'DanceArts', 'Olemiss2019', 'Arlington Dance Arts');

// variable declaration
$username = "";
$email    = "";
$errors   = array();

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}
if (isset($_POST['time_btn'])) {
	addTime();
}

<<<<<<< HEAD
// function register(){
// 	// call these variables with the global keyword to make them available in function
// 	global $db, $errors, $username, $email;
//
// 	// receive all input values from the form. Call the e() function
//     // defined below to escape form values
// 	$username    =  e($_POST['username']);
// 	$fname 			 =  e($_POST['fname']);
// 	$lname 			 =  e($_POST['lname']);
// 	$email       =  e($_POST['email']);
// 	$password_1  =  e($_POST['password_1']);
// 	$password_2  =  e($_POST['password_2']);
//
// 	// form validation: ensure that the form is correctly filled
// 	if (empty($username)) {
// 		array_push($errors, "Username is required");
// 	}
// 	if (empty($fname)) {
// 		array_push($errors, "First Name is required");
// 	}
// 	if (empty($lname)) {
// 		array_push($errors, "Last Name is required");
// 	}
// 	if (empty($email)) {
// 		array_push($errors, "Email is required");
// 	}
// 	if (empty($password_1)) {
// 		array_push($errors, "Password is required");
// 	}
// 	if ($password_1 != $password_2) {
// 		array_push($errors, "The two passwords do not match");
// 	}
//
// 	// register user if there are no errors in the form
// 	if (count($errors) == 0) {
//     $options = [
//       'cost' => 12,
//     ];
// 		$password = password_hash($password_1,PASSWORD_BCRYPT, $options);//encrypt the password before saving in the database
//
// 		if (isset($_POST['user_type'])) {
// 			$user_type = e($_POST['user_type']);
// 			$query = "INSERT INTO Users (username, fname, lname, email, user_type, password)
// 					  VALUES('$username', '$fname', '$lname', '$email', '$user_type', '$password')";
// 			mysqli_query($db, $query);
// 			$_SESSION['success']  = "New user successfully created!!";
// 			header('location: home.php');
// 		}else{
// 			$query = "INSERT INTO Users (username, email, user_type, password)
// 					  VALUES('$username', '$fname', '$lname', '$email', 'user', '$password')";
// 			mysqli_query($db, $query);
//
// 			// get id of the created user
// 			$logged_in_user_id = mysqli_insert_id($db);
//
// 			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
// 			$_SESSION['success']  = "You are now logged in";
// 			header('location: timesheets.php');
// 		}
// 	}
// }


// REGISTER USER
// function register(){
// 	// call these variables with the global keyword to make them available in function
// 	global $db, $errors, $username, $email;
//
// 	// receive all input values from the form. Call the e() function
//     // defined below to escape form values
// 	$username    =  e($_POST['username']);
// 	$fname 			 =  e($_POST['fname']);
// 	$lname 			 =  e($_POST['lname']);
// 	$email       =  e($_POST['email']);
// 	$password_1  =  e($_POST['password_1']);
// 	$password_2  =  e($_POST['password_2']);
//
// 	// form validation: ensure that the form is correctly filled
// 	if (empty($username)) {
// 		array_push($errors, "Username is required");
// 	}
// 	if (empty($fname)) {
// 		array_push($errors, "First Name is required");
// 	}
// 	if (empty($lname)) {
// 		array_push($errors, "Last Name is required");
// 	}
// 	if (empty($email)) {
// 		array_push($errors, "Email is required");
// 	}
// 	if (empty($password_1)) {
// 		array_push($errors, "Password is required");
// 	}
// 	if ($password_1 != $password_2) {
// 		array_push($errors, "The two passwords do not match");
// 	}
//
// 	// register user if there are no errors in the form
// 	if (count($errors) == 0) {
// 		$salt = 'safsfgn2aSasdA1SJFBAcodeA4EASDlsdkfEAWD6LSAKald7kfj';
// 	//	$password = password_hash($password_1, PASSWORD_DEFAULT);//encrypt the password before saving in the database
// 		$password = $salt.$password_1;
// 		$hasher = new PasswordHash(8,false);
//     $password = $hasher->password_hash($password);
//
//
//
//
// 		if (isset($_POST['user_type'])) {
// 			$user_type = e($_POST['user_type']);
// 			$query = "INSERT INTO Users (username, fname, lname, email, user_type, password)
// 					  VALUES('$username', '$fname', '$lname', '$email', '$user_type', '$password')";
// 			mysqli_query($db, $query);
// 			$_SESSION['success']  = "New user successfully created!!";
// 			header('location: home.php');
// 		}else{
// 			$query = "INSERT INTO Users (username, email, user_type, password)
// 					  VALUES('$username', '$fname', '$lname', '$email', 'user', '$password')";
// 			mysqli_query($db, $query);
//
// 			// get id of the created user
// 			$logged_in_user_id = mysqli_insert_id($db);
//
// 			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
// 			$_SESSION['success']  = "You are now logged in";
// 			header('location: timesheets.php');
// 		}
// 	}
// }
=======
// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$fname 			 =  e($_POST['fname']);
	$lname 			 =  e($_POST['lname']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($fname)) {
		array_push($errors, "First Name is required");
	}
	if (empty($lname)) {
		array_push($errors, "Last Name is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password_1)) {
		array_push($errors, "Password is required");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO Users (username, fname, lname, email, user_type, password)
					  VALUES('$username', '$fname', '$lname', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO Users (username, email, user_type, password)
					  VALUES('$username', '$fname', '$lname', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: timesheets.php');
		}
	}
}
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM Users WHERE ID=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: employee.php");
<<<<<<< HEAD
	session_quit();
=======
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

<<<<<<< HEAD
      $user = mysqli_real_escape_string($db,$_POST['username']); //user input field from html
      $pass = mysqli_real_escape_string($db,$_POST['password']); //pass input field from html
      //$user = $_POST['user'];
      //$pass = $_POST['pass'];
      if(isset($_POST['user'])){ //checking the 'user' name which is from Sign-in.html, is it empty or have some text
          $query = mysqli_query($db,"SELECT * FROM User where username = '$_POST[username]'") or die(mysqli_connect_error());
          $row = mysqli_fetch_array($query); //or die(mysqli_error($con));
          $username = $row['userName'];
          $pw = $row['password'];//hashed password in database
          //check username and password hash
          echo $pw; //THIS PRINTS OUT NOTHING!!!
          if($user==$username && password_verify($pass, $pw)) {
              // $user and $pass are from POST
              // $username and $pw are from the rows

              //$_SESSION['userName'] = $row['pass'];
              echo "Successfully logged in.";
          }

          else {
              echo "Invalid.";
          }
      }
      else{
          echo "INVALID LOGIN";
      }
  }

  if(isset($_POST['submit'])){
      SignIn($con);
  }


=======
	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM Users WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: home.php');
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: timesheets.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

function isUser()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'user' ) {
		return true;
	}else{
		return false;
	}
}
<<<<<<< HEAD
=======
// function addTime(){
// 	global $db, $errors, $username, $email;
//
// 	$fname 			 =  e($_POST['fname']);
// 	$lname 			 =  e($_POST['lname']);
// 	$date 			 =  e($_POST['date']);
// 	$timein			 =  e($_POST['timein']);
// 	$timeout		 =  e($_POST['timeout']);
//
// 	if (empty($fname)) {
// 		array_push($errors, "First Name is required");
// 	}
// 	if (empty($lname)) {
// 		array_push($errors, "Last Name is required");
// 	}
// 	if (empty($date)) {
// 		array_push($errors, "Date is required");
// 	}
// 	if (empty($timein)) {
// 		array_push($errors, "Time in is required");
// 	}
// 	if (empty($timeout)) {
// 		array_push($errors, "Time out is required");
// 	}
//
//
// 	if (count($errors) == 0) {
//
// 			$query = "INSERT INTO Timesheet(fname,lname,date,timeIn,timeOut) Values('$fname', '$lname','$date', '$timeIn', '$timeOut')";
// 			mysqli_query($db, $query);
//
// 			// get id of the created user
// 			$logged_in_user_id = mysqli_insert_id($db);
//
// 			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
// 			$_SESSION['success']  = "Timesheet Submitted";
// 		}
// 	}
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011
