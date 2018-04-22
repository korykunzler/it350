<?php
$database = "it350";
$con=mysqli_connect('localhost', 'admin', 'myverysecurepassword', $database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

echo "System status: ". mysqli_stat($con);

mysqli_close($con);
?>
<br><br>
<a href="loggedin.php"><button type="loggedin">Back to Admin Site</button><br><br></a>
