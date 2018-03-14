<html>
<body>

<p> Checking connection... </p>
<?php

echo "<p>Hello!</p>";
$username = $_POST['username'];
$hashedpwd = sha1($_POST['pwd']);
echo $username;
echo $hashedpwd;
echo "<p>Hi!</p>";


$connection = mysqli_connect('localhost', 'admin', 'myverysecurepassword', $database) //test:Unsecure,Iknow
or die("Error connecting to the MySQL server: " . mysqli_connect_error($connection));


$database = "it350";
$table = "Administrators";

echo "<p>Test</p>";


if(!$connection) {
  die ("Connection to server lost." . mysqli_error($connection));
}

$db = mysqli_select_db($connection, $database);

if(!$db){
  die("Database could not be found." . mysqli_error($connection));
}
//require('connect.php');



if ($connection){
    if (isset($_POST['username']) && !empty($_POST['pwd']))
	{

        $sql = "SELECT * FROM $table WHERE Username = '$username' AND Password = '$hashedpwd'";
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result); // returns number of rows
        echo "<p>Count: </p>";
        echo $count;
        if($count==1)
        {

	    session_start();
            $_SESSION['login_user']= $username;
	    $_SESSION['loggedin'] = true;
            $sqlupdate ="UPDATE $table SET LoggedIn=1 WHERE Username='$username'";
            mysqli_query($db,$sqlupdate) or die(mysqli_error()); //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/
		header("location:loggedin.php"); // http://www.cyberciti.biz/faq/php-redirect/
        }else{
        	echo "Login failed. Sad day. <br>";//php page says login failed
          echo "<p>Username: </p>";
          echo $username;
          echo "<p>Result: </p>";
          echo $result;
          echo "<p>Session: </p>";
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
