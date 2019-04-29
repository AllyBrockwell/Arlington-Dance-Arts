<?php
include_once('connect-mysql.php');
session_start();
if(isset($_POST["submit"]))
{
	$sql = "INSERT INTO ContactForm Values(?,?, ?, ?, ?, ?, ?, ?)";

	if($stmt = mysqli_prepare($con, $sql)){
	    mysqli_stmt_bind_param($stmt, "ssssssss", $formID, $fname, $lname, $email, $phone, $qtype, $rtype,$question);

	    $formID = uniqid();
	    $fname = mysqli_real_escape_string($con, $_REQUEST['fname']);
	    $lname = mysqli_real_escape_string($con, $_REQUEST['lname']);
	    $email = mysqli_real_escape_string($con, $_REQUEST['email']);
	    $phone = mysqli_real_escape_string($con, $_REQUEST['phone']);
	    $qtype = mysqli_real_escape_string($con, $_REQUEST['qtype']);
	    $rtype = mysqli_real_escape_string($con, $_REQUEST['rtype']);
	    $question = mysqli_real_escape_string($con, $_REQUEST['question']);

			if( mysqli_stmt_execute($stmt))
			{
					 echo '<script>alert("Form Submitted")</script>';
			}

}
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Dance Arts, Inc.</title>
	<link rel="stylesheet" href="stylesheets/style.css" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- side bar navigation -->
	<div class = "sidenav">

		<div class = "logo">
			<h1 id="logo_block"><img id="logo" src="pictures/logo.gif">

			</h1>
		</div>
    	<a href="index.html">Home</a>
    	<a href="info.html">Studio Info</a>
			<a href="music.html">Music Lessons</a>
    	<a href="dance.php">Dance Classes</a>
<<<<<<< HEAD:contact.php
		<a href="contact.php">Contact Us </a>
=======
<<<<<<< HEAD
=======
			  <a href = "view.html"> Pictures</a>
>>>>>>> 992ca97101e3e9fb47082203f8db57ccb166c452
		<a href="contact.html">Contact Us </a>
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011:contact.html
		<a href = "registration.html">Registration</a>
	<a href="https://goo.gl/maps/vcsAF4nZ4VA2" target="_blank">Directions</a>
	<a href = "employee.php">Employee Login</a>
	</div>

	<!-- information section along with contact info-->
	<div class = "contact">
		<div id = "heading">
			<div id = "c">
			<b>Contact Us</b>
			</div>
			<div class = "contactinfo">
			<p>We welcome your questions, comments, and suggestions.
				Please click the email link and contact us electronically, fill out the quesion form at the bottom of the page, check us out on Facebook (Arlington Dance Arts Inc.),
				 and Instagram (arlington_dance_arts), or call our studio anytime.</p>
			<p>We look forward to hearing from you!</p>
		</div>
			</div>
		<b>Email us at:</b> dancearts.brandy@gmail.com<br>
		<b>Call us at:</b> (901) 867-8844
		<div id = "address">
			<p><b>Dance Arts, Inc<br>
			11695 Highway 70 Suite 105<br>
			Arlington, Tennessee 38002</b><br>
			<i>Located behind AutoZone!</i> </p>
			</div>
	</div>

	<img id="hannah" src="pictures/hannah.JPG" alt = "hannah">

	<!-- box model to hold the contact form-->
	<form name = "contactForm" action="contact.php" method="POST">
	<div class = "box2">
		<!-- Grid layout for the question form-->
		<table>
			<tr>
				<td class = "one"><b>Your First Name:</b> <input type="text" name="fname"><br><br> <!-- text box --></td>
				<td class = "two"><b>Your Last Name:</b> <input type="text" name="lname"><br><br> <!-- text box --><br></td>
			</tr>
			<tr>
				<td><b>Your Email:</b> <input type="text" name="email"><br> <!-- text box --></td>
				<td><b>Your Phone Number: 123-456-7890</b> <input type="tel" id="phone" name="phone"
       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"></td>
			</tr>
			<tr>
				<td><b>Reply Type:</b> <!-- drop down box -->
				<div class = "dropdown">
				<div class = "select">
				<select name="rtype">
					<option value = "">Please choose an option</option>
					<option value = "phone">Phone Call</option>
					<option value = "email">Email</option>
				</select>
			</div>
			</div></td>
				<td><b>Question about:</b> <!-- drop down box -->
			<div class = "dropdown">
				<div class = "select" name="qtype">
					<select name = "qtype">
						<option value = "">Please choose an option</option>
						<option value = "dance">Dance Classes</option>
						<option value = "music">Music Classes</option>
						<option value = "pricing"> Class Prices</option>
						<option value = "other">Other</option>
					</select>
				</div>
				</div></td>
			</tr>
		</table>
		 <div class = "wrapper">
		</div>
		<br>
<<<<<<< HEAD:contact.php
		<b>Your Question(s):</b><br> <textarea rows="auto" cols="75" name="question"></textarea><br><br> <!-- paragraph box -->

		<input type="submit" value="Submit"/ id = "contactbutton" name="submit">
=======
		<b>Your Question(s):</b><br> <textarea rows="7" cols="85" name="question"></textarea><br><br> <!-- paragraph box -->

		<input type="submit" value="Submit"/ id = "contactbutton">
>>>>>>> b4d27aea74b4684ff266e79214267e6778893011:contact.html
	</div>
	</form>




</body>

</html>
