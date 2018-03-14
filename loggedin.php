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
    <button type="Puzzlesbutton">Add puzzles to the database</button><br><br>
    <button type="PuzzlesDisplaybutton">Show all puzzles</button><br><br>
  	<button type="Ordersbutton">Show unshipped orders</button><br><br>

    <div id="unshippedorders"> </div>
    <div id="allpuzzles"> </div>
	</body>
</html>
