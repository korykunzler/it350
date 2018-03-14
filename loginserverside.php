<html>
<body>

<p> Checking connection... </p>
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

if ($connection){ //if there is a connection, and if the username is set and the password is not empty
    if (isset($_POST['username']) & !empty($_POST['pwd']))
	{

    $username = $_POST['username']; //Receives the username/pwd from the post and saves them to variables
    $hashedpwd = sha1($_POST['pwd']);
        //
        $sql = "SELECT * FROM $table WHERE Username = '$username' AND Password = '$hashedpwd'"; //This is working and pulls the correct information in PHPMyAdmin
        $result = mysqli_query($connection, $sql); //START HERE. NEITHER RESULT NOR COUNT APPEAR TO BE GETTING ANYTHING BACK.  //JASON'S REFERENCE CODE APPEARS TO BE DOING ALMOST THE EXACT SAME THING. NOT SURE WHAT IS UP.
        $count = mysqli_num_rows($result); // returns number of rows

        echo "DB: "; //Echos are for debugging purposes only.
        echo $db;
        echo "<br>SQL: ";
        echo $sql;
        echo "<br>Count: ";
        echo $count;

        if($count==1){
	         session_start();
           $_SESSION['login_user']= $username;
           $_SESSION['loggedin'] = true;
           $sqlupdate ="UPDATE $table SET LoggedIn=1 WHERE Username='$username'";
           mysqli_query($db,$sqlupdate) or die(mysqli_error()); //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/
           header("location:loggedin.php"); // http://www.cyberciti.biz/faq/php-redirect/
        }

        else{
        	echo "<br><br>Login failed. Sad day. <br>";//php page says login failed
          echo "Username: "; //Echos are for debugging purposes only.
          echo $username;
          echo "<br>Pwd: ";
          echo $hashedpwd;
          echo "<br>Result: ";
          echo $result;
          echo "<br>Session: ";
          echo $_SESSION;
        	}

}
else {
   print "Database NOT found, can't attempt to log in"; //This is to let them know that they can't access the DB
}

mysqli_close($db);
	}
?>

<p> I am here! </p>
</body>
</html>
