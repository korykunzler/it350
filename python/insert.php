<html>
  <body>
    <p> Made it to insert.php </p>
    <?php // http://stackoverflow.com/questions/1545357/how-to-check-if-a-user-is-logged-in-in-php // need to double check this to be sure it won't let them here without logging in.
      session_start();
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          #echo "Thanks for logging in, " . $_SESSION['login_user'] . "!";
      } else {
          header("Location: clogin.php");
        }
    ?>
    <p> Past login check </p>
    <?php
      $username = $_SESSION['login_user']; //Receives the username/pwd from the post and saves them to variables
      $selection = $_POST['ratingselection'];
      echo($selection);
      $selection ="5";
    	 passthru("python insert.py $username $selection");
       echo($username);
       echo("<--<br>-->");
       echo($selection);
       echo("<--");
    ?>
    <p> Back to php after python </p>
  </body>
</html>
