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
echo $pname;
$quantity = $_POST['quantity'];
echo $quantity;
$numberofpieces = $_POST['numberofpieces'];
echo $numberofpieces;
$size = $_POST['size'];
echo $size;
$difficulty = $_POST['difficulty'];
echo $difficulty;
$theme = $_POST['theme'];
echo $theme;

echo "Finished echos"
//$sql = "INSERT INTO Puzzles (pname, quantity, numberofpieces, size, difficulty, theme) values('$pname','$quantity','$numberofpieces','$size','$difficulty','$theme')";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

//header("location:showpuzzles.php");

?>

<p>"Finished! You should never see this."</p>
</body>
</html>
