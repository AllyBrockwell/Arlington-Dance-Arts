<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"/>
	<link rel="stylesheet" href="stylesheets/style.css" >
</head>
  <body>
    <div class = "sidenav">

    <div class = "logo">
      <h1 id="logo_block"><img id="logo" src="pictures/logo.gif">

      </h1>
    </div>
    	<a href="index.html">Home</a>
    	<a href="info.html">Studio Info</a>
      <a href="music.html">Music Lessons</a>
    	<a href="dance.php">Dance Classes</a>
    	<a href="contact.html">Contact Us</a>
      <a href = "registration.html">Registration</a>
      <a href = "calendar.html">Calendar</a>
    <a href="https://goo.gl/maps/vcsAF4nZ4VA2" target="_blank">Directions</a>
    <a href = "employee.php">Employee Login</a>
    </div>

    <img id="photostrip" src="pictures/photostrip.jpg" alt="photostrip">

    <div class = "login">
      <form method="post" action="employee.php">

        <?php echo display_error(); ?>

        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" >
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password">
        </div>
        <div class="input-group">
          <button type="submit" class="btn" name="login_btn" id="loginbutton">Login</button>
        </div>
      </form>
       <!-- <label for="uname"><b> Username: </b></label>
          <input type="text" name="email">
         <label for="psw"><b></br> Password: </b></label>
          <input type="password"  name="psw">
          <br>
          <a href = "home.html"><button type="submit" id = "loginbutton">Login</button></a> -->
    </div>


  </body>
  </html>
