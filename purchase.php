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
    try{
      include_once 'connect.php';
        $username = $_SESSION['login_user']; //Receives the username/pwd from the post and saves them to variables
        $puzzlename = $_POST['purchasepuzzles'];
        echo("Grabbed variables from post<br>");
    }catch(Exception $e){
      echo("Shakes head.");
    }


      try{
        //$sql = "SELECT id FROM Customers WHERE username = '$username'"; //Something in this line is sending a 500 error
        echo("After sql0<br>");
        $CID = mysqli_query($connection, $sql0) or die(mysqli_error($connection));
      }catch(Exception $e){
        echo("Someone messed up. We will look into this.");
      }

      echo("<br>-->");
      echo($CID);
      echo("<--Grabbed customer ID<br>");
      try{
          $sql = "INSERT INTO Orders (CustomerID, PuzzleName, Shipped) values('$CID','$puzzlename','0')";
          echo("After sql statement<br>");
          $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
          echo("Updated Orders Table<br>");
           //Need to query the customer ID and then insert into the Orders table w/ customerID, puzzlename, and shipped = 0
     }catch(Exception $e){
       echo("Someone else messed up. This is getting serious.");
     }

     try{
       $sql2 = "UPDATE Puzzles SET quantity = (quantity -1) WHERE pname = '$puzzlename'";
       echo("Second sql<br>");
       $result2 = mysqli_query($connection, $sql) or die(mysqli_error($connection));
       echo("Updated Orders Table<br>");
     }catch(Exception $e){
       echo("Will someone get me a baseball bat...?");
     }

       //Then need to update puzzles table to decrease quantity by 1
    ?>

    <p> Thank you for your purchase. We have added this to our list to ship. If you ordered a puzzle that was out of stock, please expect significant delays in your product being shipped.</p>
  </body>
</html>
