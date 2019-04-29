<?php
require_once('connect-mysql.php');

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
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Dance Arts, Inc.</title>
	<link rel="stylesheet" href="stylesheets/style.css" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <!-- side navigation-->
    <div class = "sidenav">

		<div class = "logo">
			<h1 id="logo_block"><img id="logo" src="pictures/logo.gif">

			</h1>
		</div>
    	<a href="index.html">Home</a>
    	<a href="info.html">Studio Info</a>
			<a href="music.html">Music Lessons</a>
    	<a href="dance.php">Dance Classes</a>
        <a href="contact.php">Contact Us</a>
				<a href = "registration.html">Registration</a>
			<a href="https://goo.gl/maps/vcsAF4nZ4VA2" target="_blank">Directions</a>
			<a href = "employee.php">Employee Login</a>
    </div>

    <div class = "dance">
        <!-- information section-->
        <div id = "d">
            <u><b>Outline of Dance Programs</b></u><br>
        </div>
        <div id = "da">
            <a href = "#myUL"><i>(Class Schedule Below)</i></a>
        </div>

        <img id="babies" src="pictures/babies.jpg" alt="babies">

        <div class = "name2"><p><a name ="creative"><b>Creative Movement</b> (2 1⁄2 to 3 1⁄2 year olds):</div>
        This program is centered on developing movement skills, creative thinking, self-expression,
         and self-confidence<br> for the 2 1⁄2 to 3 1⁄2 year old child. They will learn the basics of Ballet
        and rhythm. These movements will be reinforced through practice, creative play, coloring, and
        nurturing their imagination. 30 minute class $45.00 per month</a></p><br>

        <div class = "name2"><p><a name ="kinder"><b>Kindermovement I and II</b> (Ages 4-6 year olds):</div>
        Children learn rhythm, movement, and shapes their body can make in this fun class. Children
        enrolled in this class will cover the basics of Ballet, <br>the listening and learning of Tap, and get an
         introduction to Tumbling. 1 hour class $55.00 per month</a></p><br>

            <img id="recital" src="pictures/recital.jpg" alt = "recital">

      <div class = "name2">  <p><a name ="kids"><b>Kids Dance I, II, and III</b> (Ages 6-10 year olds):</div>
        Children in this age group develop their abilities in Tap and Ballet, and are introduced to Jazz
        dance. The fun music and different movements there make exploring Jazz exciting and challenging.
        Within this combination class tumbling/acrobat skills are developed and perfected.
        I, II: 1.25 hour class $65.00 per month (Kids Dance III 1.5hr class $73.00)</a></p><br>



      <div class = "name2">  <p><a name ="junior"><b>Junior and Senior Dancers</b> (11 years to young adults):</div>
        This group of dancers is comprised of many different levels. We will encourage skills and natural
         abilities in dance while continuing to develop the <br>dancers technique and capabilities in Ballet,
         Tap, and Jazz. Specific attention will be paid to lengthening and strengthening muscles to meet the
         demands of dance. <br>2 hour class $80.00 per month</a></p><br>

            <img id="me" src="pictures/me.jpg" alt ="me">

        <div class = "name2"> <p><a name ="ballet"><b>Ballet Extended</b> (Ages 7 and up):</div>
        Ballet Extended is a class focused on the development of the discipline of Ballet. Benefits will be
        realized in all areas of dance with this additional training, as well as setting a firm foundation for
        poise, grace, and body posture. Muscle strength and flexibility will increase with this area of dance
        study.1.5 hour class $73.00 per month</a></p><br>

        <div class = "name2"><p><a name ="hip"><b>Hip Hop</b> (Ages 6 and up):</div>
        Fun, fast and edgy. This class incorporates great warm ups with the quick and stylish moves of hip
        hop dance. Classes is broken into age categories.  <br>45 minute class $50.00 per month -  1 hour class
        $55.00 per month</a> </p><br>

      <div class = "name2">  <p><a name ="ballroom"><b>Ballroom: </b></div>
        Classic ballroom dance featuring the waltz, cha cha, foxtrot, lindy, and other standards.
        Classes held in 8 week rotation. Beginners to experienced dancers. <br>Couples welcomed, but not
        necessary. Dancers take the floor!  1 hour class $55.00 per month</a></p><br>

    </div>

		<hr>
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
		    <li><?php echo $row['className']." ".$row['timeStart']."  -  ".$row['timeEnd']; ?></li>
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
		  <li><?php echo $row['className']." ".$row['timeStart']."  -  ".$row['timeEnd']; ?></li>
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
		  <li><?php echo $row['className']." ".$row['timeStart']."  -  ".$row['timeEnd']; ?></li>
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
		  <li><?php echo $row['className']." ".$row['timeStart']."  -  ".$row['timeEnd']; ?></li>
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
		  <li><?php echo $row['className']." ".$row['timeStart']."  -  ".$row['timeEnd']; ?></li>
		  <?php
		}
		?>
		  </ul>

		</ul>

</body>

</html>
