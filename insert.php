<html>
<body>


<?php

include_once() "connect.php";

$pname = $_POST['pname'];
$quantity = $_POST['quantity'];
$numberofpieces = $_POST['numberofpieces'];
$size = $_POST['size'];
$difficulty = $_POST['difficulty'];
$theme = $_POST['theme'];


$sql = "SELECT * FROM $table WHERE Username = '$username' AND Password = '$hashedpwd'"; //This is working and pulls the correct information in PHPMyAdmin
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection)); //START HERE. $db or $connection? NEITHER RESULT NOR COUNT APPEAR TO BE GETTING ANYTHING BACK.  //JASON'S REFERENCE CODE APPEARS TO BE DOING ALMOST THE EXACT SAME THING. NOT SURE WHAT IS UP.


?>
</body>
</html>
