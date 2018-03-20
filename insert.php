<html>
<body>

<p>Inserting puzzles...</p>
<?php

include_once 'connect.php';

$pname = $_POST['pname'];
$quantity = $_POST['quantity'];
$numberofpieces = $_POST['numberofpieces'];
$size = $_POST['size'];
$difficulty = $_POST['difficulty'];
$theme = $_POST['theme'];


$sql = insert into Puzzles values($pname,$quantity,$numberofpieces,$size,$difficulty,$theme);
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

header("location:addpuzzles.php");
?>

<p>Finished!</p>
</body>
</html>
