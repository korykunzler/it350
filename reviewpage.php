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

<button onclick="print1star()">Show one star ratings</button><br><br>
<button onclick="print2star()">Show two star ratings</button><br><br>
<button onclick="print3star()">Show three star ratings</button><br><br>
<button onclick="print4star()">Show four star ratings</button><br><br>
<button onclick="print5star()">Show five star ratings</button><br><br>
<button onclick="printall()">Show all ratings</button><br><br>


<input type = “button” id="b1" value="One star ratings">

<script>

$(document).ready(function(){
	$("#b1").click(function(){
		$.ajax({
		method: "GET",
		url: "python/print1star();",
		data: {"place" : value},
		dataType: "button",
			success: function(result){
			var data=JSON.parse(result);
			console.log(result);

			}

		});

	});
}
</script>



<?php function print1star() {
	echo "print1star";
	 passthru("python 1star.py");
}

function print2star() {
	echo "print2star";
	 passthru("python 2star.py");
}

function print3star() {
	echo "print3star";
	 passthru("python 3star.py");
}

function print4star() {
	echo "print4star";
	 passthru("python 4star.py");
}

function print5star() {
	echo "print5star";
	 passthru("python 5star.py");
}

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
