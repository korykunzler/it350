<!DOCTYPE HTML>

<html>
	<head>

		<?php // http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php // need to double check this to be sure it won't let them here without logging in.
			session_start();
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			    echo "Thanks for logging in, " . $_SESSION['login_user'] . "!";
			} else {
			    header("Location: login.php");
			}
		?>

		<title>Add Puzzles</title>
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

		<?php
		echo "Start while loop:";
		 while($row = mysql_fetch_array($result)) { ?>

		  <tr>
		    <td style='width: 200px;'>
		    <?php echo $row['pname']; ?>
		    </td><td style='width: 600px;'>
		    <?php echo $row['quantity']; ?></td><td>
		    <?php echo $row['numberofpieces']; ?></td><td>
		    <?php echo $row['size']; ?></td><td>
		    <?php echo $row['difficulty']; ?></td><td>
		    <?php echo $row['theme']; ?></td>
		  </tr>

		<?php } ?>

		<?php
		echo "Start if loop: ";
		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    //echo "fetch_assoc";
		    $row = mysqli_fetch_assoc($result);
		    var_dump($row);
		} else {
		    echo "0 results";
		}

		?>

  </form>

	</body>
</html>
