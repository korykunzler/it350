<!DOCTYPE HTML>

<html>
	<head>
		<title>My Admin Site</title>
	</head>
	<body>
	<h3>Add Puzzles</h3>

  <form  id="addpuzzleform" action="insert.php" method="post"><br> <!-- Need some attention here on where to insert. At top we have action, at bottom onsubmit -->

  <p>Hello. Please enter the puzzle information below.</p><br>

  	Puzzle Name:<br>
  	<input type="text" name="pname" id="pname" required><br>
  	Quantity:<br>
  	<input type="number" name="quantity" id="quantity" required><br>
  	Number of Pieces:<br>
  	<input type="number" name="numberofpieces" id="numberofpieces" required><br>
  	Size:<br>
  	<input type="text" name="size" id="size" required><br>
  	Difficulty<br>
  	<input type="text" name="difficulty" id="difficulty" required><br><br>
    Theme<br>
  	<input type="text" name="theme" id="theme" required><br><br>


    <input type="submit" id="submit" value="Submit" onsubmit="checkForm"><br><br>

  </form>

	</body>
</html>
