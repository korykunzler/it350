<!DOCTYPE HTML>

<html>
	<head>
		<title>My Admin Site</title>
	</head>
	<body>
	<h3>Add Puzzles</h3>

  <form  id="addpuzzleform" action="insert.php" method="post"><br> <!-- Need some attention here on where to insert. At top we have action, at bottom onsubmit -->

  <p>Hello. Please enter the puzzle information below.</p><br>

  	<p>Puzzle Name:<br>
  	<input type="text" name="pname" id="pname" required><br></p>
  	<p>Quantity:<br>
  	<input type="number" name="quantity" id="quantity" required><br></p>
  	<p>Number of Pieces:<br>
  	<input type="number" name="numberofpieces" id="numberofpieces" required><br></p>
  	<p>Size:<br>
  	<input type="text" name="size" id="size" required><br></p>
  	<p>Difficulty:<br>
  	<input type="text" name="difficulty" id="difficulty" required><br></p>
    <p>Theme:<br>
  	<input type="text" name="theme" id="theme" required><br><br></p>


    <input type="submit" id="submit" value="Submit" onsubmit="checkForm"><br><br>

  </form>

	</body>
</html>
