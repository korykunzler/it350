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
    include_once 'connect.php';
      $username = $_SESSION['login_user']; //Receives the username/pwd from the post and saves them to variables
      $puzzlename = $_POST['purchasepuzzles'];
      echo("Grabbed variables from post<br>");

      $table = "Customers";
      $sql = "SELECT id FROM Customers WHERE username = '$username'";
      echo("After sql0<br>")
      $CID = mysqli_query($connection, $sql0) or die(mysqli_error($connection));
      echo("<br>-->");
      echo($CID);
      echo("<--Grabbed customer ID<br>");
      $sql = "INSERT INTO Orders (CustomerID, PuzzleName, Shipped) values('$CID','$puzzlename','0')";
      echo("After sql statement<br>");
      $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
      echo("Updated Orders Table<br>");
       //Need to query the customer ID and then insert into the Orders table w/ customerID, puzzlename, and shipped = 0

       $sql2 = "UPDATE Puzzles SET quantity = (quantity -1) WHERE pname = '$puzzlename'";
       echo("Second sql<br>");
       //Then need to update puzzles table to decrease quantity by 1
    ?>

    <p> Thank you for your purchase. We have added this to our list to ship. If you ordered a puzzle that was out of stock, please expect significant delays in your product being shipped.</p>
  </body>
</html>
