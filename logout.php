<!DOCTYPE HTML>

<html>
	<head>
	</head>
	<body>
    <p> Logging off... </p>
    <?php
    session_start();
    $database = "it350";
    $username = $_SESSION['login_user'];
    $connection = mysqli_connect('localhost', 'admin', 'myverysecurepassword', $database) //test:Unsecure,Iknow //connects to the database or returns the error message.
    or die("Error connecting to the MySQL server: " . mysqli_connect_error($connection));
    $table = "Administrators";
    $sqlupdate ="UPDATE $table SET LoggedIn=0 WHERE Username='$username'";
    echo $sqlupdate;
    mysqli_query($connection,$sqlupdate) or die(mysqli_error($connection)); //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/
    session_destroy();
    header("location:login.php"); // http://www.cyberciti.biz/faq/php-redirect/
    exit();
     ?>

	</body>
</html>
