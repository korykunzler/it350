<!DOCTYPE HTML>
<html>
<header>
  Inserting customer...
</header>
<body>

<?php
echo "Starting this statement.";

include_once 'connect.php';
$table = "Customers";

$name = $_POST['name'];
$username = $_POST['username'];
$password = sha1($_POST['password']);
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$loggedin = "0";
echo "<br>I made it here.<br>";

$sql = "INSERT INTO Customers (name, username, password, address, phone, email, loggedin) values('$name','$username','$password','$address','$phone','$email','$loggedin')";
echo "<br>After sql statement<br>";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

header("location:clogin.php");

?>

<p>"Finished! You should never see this."</p>
</body>
</html>
