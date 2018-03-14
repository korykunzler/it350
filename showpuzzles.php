<!DOCTYPE HTML>

<html>
	<head>

    <?php // http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php // need to double check this to be sure it won't let them here without logging in.
      session_start();
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo "Thanks for logging in, " . $_SESSION['login_user'] . "!";
      } else {
          header("Location: login.php");
      }
    ?>

		<title>Show Puzzles</title>
	</head>
	<body>
	<h3>Show puzzles</h3>
	<p> This is going to be my show puzzles site. I want it to be able to show orders for employees to see what they have.</P>

    <div id="allpuzzles"> </div>

	</body>
</html>
