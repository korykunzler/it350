<!DOCTYPE HTML>

<html>
	<head>
		<title>My Admin Site</title>
	</head>
	<body>
    <?php
    session_start();
    echo "<br>Signing the user off...";
    $username = $_SESSION['login_user'];
    echo $username;
    echo "<br>Session logged in set.";
    $sqlupdate ="UPDATE $table SET LoggedIn=1 WHERE Username='$username'";
    echo "<br>Updating database logged in.";
    mysqli_query($connection,$sqlupdate) or die(mysqli_error()); //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/
    echo "<br>Session destroyed.";
    session_destroy();

    echo "<br>Finished signing off. Redirecting...";
    header("location:login.php"); // http://www.cyberciti.biz/faq/php-redirect/
    exit();

     ?>

	</body>
</html>
