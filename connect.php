<?php
$connection = mysqli_connect('localhost', 'admin', 'myverysecurepassword', $database) //test:Unsecure,Iknow
or die("Error connecting to the MySQL server.");
$database = "it350";
$table = "Customers";


if(!$connection) {
  die ("Connection to server lost." . mysqli_error($connection));
}

$db = mysqli_select_db($connection, $database);

if(!$db){
  die("Database could not be found." . mysqli_error($connection));
}

?>
