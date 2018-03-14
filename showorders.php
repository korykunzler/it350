<!DOCTYPE HTML>

<html>
	<head>
    <?php // http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php // need to double check this to be sure it won't let them here without logging in.
      session_start();
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      } else {
          header("Location: login.php");
      }
      ?>
		<title>Show Orders</title>
	</head>
	<body>
	<h3>Show Orders</h3>
	<p> This is going to be my show orders site. I want it to be able to show orders for employees to ship them.</P>

        <div id="unshippedorders"> </div>

	</body>
</html>
