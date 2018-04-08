<!DOCTYPE HTML>

<html>
	<head>
		<title>Piece by Piece</title>
		<?php // http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php // need to double check this to be sure it won't let them here without logging in.
			session_start();
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
					echo "Thanks for logging in, " . $_SESSION['login_user'] . "!";
			} else {
					header("Location: clogin.php");
				}
		?>
	</head>
	<body>
	<h3>Piece by Piece</h3>
	<p> Welcome to the review site! Please leave us a review.</p>


<form action="python/insert.php" method="post">
	<br><select name="ratingselection">
	  <option value="5">5</option>
	  <option value="4">4</option>
	  <option value="3">3</option>
	  <option value="2">2</option>
		<option value="1">1</option>
	</select>
<input type="submit" value="Submit">Submit Review<br>


</form><br><br>

<a href ="python/all.php">Show all ratings</a><br><br>




<?php
function printall() {
	echo "printall";
	 passthru("python printall.py");
} ?>



</body>
</html>
<!--
Here display the reviews along with the average of them all (trigger)
Possible display articles
https://stackoverflow.com/questions/31766750/display-all-document-on-php
http://php.net/manual/en/mongo.tutorial.cursor.php

-->
<!--
Need to follow one of these to set up the HTML to call the Python to access the database.

https://stackoverflow.com/questions/1697484/a-button-to-start-php-script-how
https://www.codeproject.com/Questions/780440/calling-a-function-of-php-using-html-button
https://www.quora.com/How-do-I-create-a-PHP-button-to-run-a-script-on-a-click


-->
