<html>
<body>

<p> Checking connection... </p>
<?php

include_once() 'connect.php';

if ($connection){ //if there is a connection, and if the username is set and the password is not empty
    if (isset($_POST['username']) & !empty($_POST['pwd']))
	{

    $username = $_POST['username']; //Receives the username/pwd from the post and saves them to variables
    $hashedpwd = sha1($_POST['pwd']);
        //
        $sql = "SELECT * FROM $table WHERE Username = '$username' AND Password = '$hashedpwd'"; //This is working and pulls the correct information in PHPMyAdmin
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection)); //START HERE. $db or $connection? NEITHER RESULT NOR COUNT APPEAR TO BE GETTING ANYTHING BACK.  //JASON'S REFERENCE CODE APPEARS TO BE DOING ALMOST THE EXACT SAME THING. NOT SURE WHAT IS UP.
        $count = mysqli_num_rows($result); // returns number of rows

        echo "Username: "; //Echos are for debugging purposes only.
        echo $username;
        echo "<br>Pwd: ";
        echo $hashedpwd;
        //echo "<br>Result: ";
        //echo $result;
        echo "DB: ";
        echo $db;
        echo "<br>SQL: ";
        echo $sql;
        echo "<br>Count: ";
        echo $count;

        if($count==1){
          echo "<br>Signing the user in...";
	         session_start();
           echo "<br>Session started.";
           $_SESSION['login_user']= $username;
           echo "<br>Session username set.";
           $_SESSION['loggedin'] = true;
           echo "<br>Session logged in set.";
           $sqlupdate ="UPDATE $table SET LoggedIn=1 WHERE Username='$username'";
           echo "<br>Updating database logged in.";
           mysqli_query($connection,$sqlupdate) or die(mysqli_error()); //https://coolestguidesontheplanet.com/how-to-connect-to-a-mysql-database-with-php/
           echo "<br>Finished signing in. Redirecting...";
           header("location:loggedin.php"); // http://www.cyberciti.biz/faq/php-redirect/
           exit();
        }

        else{
        	echo "<br><br>Login failed. Sad day. <br>";//php page says login failed
          echo "<br>Session: ";//Echos are for debugging purposes only.
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
