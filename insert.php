<!DOCTYPE HTML>
<html>
<header>
  Inserting puzzles...
</header>
<body>

<?php
echo "Starting this statement.";

include_once 'connect.php';

$pname = $_POST['pname'];
$quantity = $_POST['quantity'];
$numberofpieces = $_POST['numberofpieces'];
$size = $_POST['size'];
$difficulty = $_POST['difficulty'];
$theme = $_POST['theme'];

$sql = "INSERT INTO Puzzles (pname, quantity, numberofpieces, size, difficulty, theme) values('$pname','$quantity','$numberofpieces','$size','$difficulty','$theme')";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

header("location:showpuzzles.php");

?>

<p>"Finished! You should never see this."</p>
</body>
</html>
