<?php

$database = "it350"; //database I am connecting to
$table = "Administrators"; //table I am connecting to

$connection = mysqli_connect('localhost', 'admin', 'myverysecurepassword', $database) //test:Unsecure,Iknow //connects to the database or returns the error message.
or die("Error connecting to the MySQL server: " . mysqli_connect_error($connection));

if(!$connection) { //if for some reason i lose connection to the service, will return error message
  die ("Connection to server lost." . mysqli_error($connection));
}

$db = mysqli_select_db($connection, $database); //This chooses the database to work with

if(!$db){ //if it can't find the database, it will return an error
  die("Database could not be found." . mysqli_error($connection));
}

?>
