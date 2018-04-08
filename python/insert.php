<html>
  <body>
    <?php // http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php // need to double check this to be sure it won't let them here without logging in.
      session_start();
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          #echo "Thanks for logging in, " . $_SESSION['login_user'] . "!";
      } else {
          header("Location: clogin.php");
        }
    ?>
    <?php
      $username = $_SESSION['login_user']; //Receives the username/pwd from the post and saves them to variables
      $selection = $_POST['ratingselection'];
    	 passthru("python insert.py $username $selection");
    ?>
  </body>
</html>
