<html>
<body>

<p> Checking connection... </p>
<?php

require('connect.php');
echo "Hello!";

/*
$username = $_POST['username'];
$hashedpwd = sha1($_POST['pwd']);
echo $username;
echo $hashedpwd;

$username = $_POST['username'];
$hashedpwd = sha1($_POST['pwd']);

if ($connection){
    if (isset($_POST['username']) && !empty($_POST['pwd']))
	{

        $sql = "SELECT * FROM $table WHERE Username = '$username' AND Password = '$hashedpwd'";
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result); // returns number of rows
        if($count==1)
        {

	    session_start();
            $_SESSION['login_user']= $username;
	    $_SESSION['loggedin'] = true;
            $sqlupdate ="UPDATE $table SET LoggedIn=1 WHERE Username='$username'";
            mysqli_query($db,$sqlupdate) or die(mysqli_error()); //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/
		header("location:loggedin.php"); // http://www.cyberciti.biz/faq/php-redirect/
        }else{
        	echo "Login failed. Sad day.";//php page says login failed
        	}

}
else {
   print "Database NOT found, can't attempt to log in"; //This is to let them know that they can't access the DB
}

mysqli_close($db);
	}*/
?>

<p> I am here! </p>
</body>
</html>
