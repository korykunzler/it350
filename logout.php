<!DOCTYPE HTML>

<html>
	<head>
	</head>
	<body>
    <p> Logging off... </p>
    <?php

		include_once 'connect.php';
    session_start();
    $username = $_SESSION['login_user'];
    $sqlupdate ="UPDATE $table SET LoggedIn=0 WHERE Username='$username'";
    echo $sqlupdate;
    mysqli_query($connection,$sqlupdate) or die(mysqli_error($connection)); //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/
    session_destroy();
    header("location:login.php"); // http://www.cyberciti.biz/faq/php-redirect/
    exit();
     ?>

	</body>
</html>
