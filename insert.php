<html>
<body>


<?php

include_once 'connect.php';

$pname = $_POST['pname'];
$quantity = $_POST['quantity'];
$numberofpieces = $_POST['numberofpieces'];
$size = $_POST['size'];
$difficulty = $_POST['difficulty'];
$theme = $_POST['theme'];


$sql = insert into Puzzles values($pname,$quantity,$numberofpieces,$size,$difficulty,$theme);
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


<?php
echo "Start while loop:";
 while($row = mysql_fetch_array($result)) { ?>
  <tr>
    <td style='width: 200px;'>
    <?php echo $row['pname']; ?>
    </td><td style='width: 600px;'>
    <?php echo $row['quantity']; ?></td><td>
    <?php echo $row['numberofpieces']; ?></td><td>
    <?php echo $row['size']; ?></td><td>
    <?php echo $row['difficulty']; ?></td><td>
    <?php echo $row['theme']; ?></td>
  </tr>

<?php } ?>

<?php
echo "Start if loop: ";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //echo "fetch_assoc";
    $row = mysqli_fetch_assoc($result);
    var_dump($row);
} else {
    echo "0 results";
}

?>


</body>
</html>
