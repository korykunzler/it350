<!DOCTYPE HTML>

<html>
	<head>
		<title>Piece by Piece</title>
	</head>
	<body>
	<h3>Piece by Piece</h3>
	<p> Welcome to the review site! Please leave us a review.</p>


<form>
	<br><select>
	  <option value="5">5</option>
	  <option value="4">4</option>
	  <option value="3">3</option>
	  <option value="2">2</option>
		<option value="1">1</option>
	</select>
<button type="submit" value="Submit">Submit Review</button><br>


</form><br><br>

<!--
Need to follow one of these to set up the HTML to call the Python to access the database.

https://stackoverflow.com/questions/1697484/a-button-to-start-php-script-how
https://www.codeproject.com/Questions/780440/calling-a-function-of-php-using-html-button
https://www.quora.com/How-do-I-create-a-PHP-button-to-run-a-script-on-a-click


-->

<?php $print1star = passthru("python 1star.py"); ?>
<?php $print2star = passthru("python 2star.py"); ?>
<?php $print3star = passthru("python 3star.py"); ?>
<?php $print4star = passthru("python 4star.py"); ?>
<?php $print5star = passthru("python 5star.py"); ?>
<?php $printall = passthru("python printall.py"); ?>



</body>
</html>
<!--
Here display the reviews along with the average of them all (trigger)
Possible display articles
https://stackoverflow.com/questions/31766750/display-all-document-on-php
http://php.net/manual/en/mongo.tutorial.cursor.php

-->
