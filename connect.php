<?php
$connection = mysqli_connect('192.168.50.34/phpmyadmin', 'admin', 'myverysecurepassword', $database) //test:Unsecure,Iknow
or die("Error connecting to the MySQL server. TEST " + mysqli_connect_error($connection));
#echo $database;
#echo $connection;

$database = "it350";
$table = "Administrators";


if(!$connection) {
  die ("Connection to server lost." . mysqli_error($connection));
}

$db = mysqli_select_db($connection, $database);

if(!$db){
  die("Database could not be found." . mysqli_error($connection));
}

?>
