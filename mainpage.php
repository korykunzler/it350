<!DOCTYPE HTML>
<?php
include_once 'connect.php';

$sql = 'SELECT * FROM Puzzles';

$query = mysqli_query($connection, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($connection));
}
?>
<html>
<head>
	<title>Piece by Piece Inventory</title>
<link rel="stylesheet" href="css/mycss.css">
</head>
<body>
	<h1>Puzzles for Sale</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>pname</th>
				<th>quantity</th>
				<th>numberofpieces</th>
				<th>size</th>
				<th>difficulty</th>
				<th>theme</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			//$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$row['pname'].'</td>
					<td>'.$row['quantity'].'</td>
					<td>'.$row['numberofpieces'].'</td>
					<td>'.$row['size']. '</td>
					<td>'.$row['difficulty']. '</td>
					<td>'.$row['theme']. '</td>
				</tr>';
			//$total += $row['amount'];
		}?>

		<!--
NOTES: https://phppot.com/php/simple-php-shopping-cart/
This link should give most of the code for the shopping cart.


Passthrough for python and php interaction

http://codingcyber.org/simple-login-script-php-and-mysql-64/
	 -->


	 <form action="python/insert.php" method="post">
		 <select name="puzzles">
		 <?php
		 $sql = mysqli_query($connection, "SELECT pname FROM Puzzles");
		 while ($row = $sql->fetch_assoc()){
		 echo "<option>" . $row['pname'] . "</option>";
		 }
		 ?>
		 </select>
	 <input type="submit" value="Submit"><br>


	 </form><br><br>




		<p> Our website is awesome! Check out our reviews here --> 	<a href="reviewpage.php"><button type="button">Review Page</button></a></p> <br>
		</tbody>
	</table>
</body>
</html>
