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
		<title>My Admin Site</title>
	</head>
	<body>
  	<h3>Admin Site</h3>
    <a href="addpuzzles.php"><button type="Puzzlesbutton">Add puzzles to the database</button><br><br></a>
    <a href="showpuzzles.php"><button type="PuzzlesDisplaybutton">Show all puzzles</button><br><br></a>
  	<a href="showorders.php"><button type="Ordersbutton">Show unshipped orders</button><br><br></a>
		<a href="status.php"><button type="DBStatus">Database Status</button><br><br></a>
		<a href="backup.php"><button type="Backup">Database Backup</button><br><br></a>
<p>Please log out when you are done on the admin page. Thanks! </p> <br><br>
		<a href="logout.php"><button type="LogOut">LogOut</button><br><br></a>



	</body>
</html>
