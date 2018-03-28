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
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}

		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th,
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Puzzles</h1>
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
	 <style>
	 .dropbtn {
	     background-color: #3498DB;
	     color: white;
	     padding: 16px;
	     font-size: 16px;
	     border: none;
	     cursor: pointer;
	 }

	 .dropbtn:hover, .dropbtn:focus {
	     background-color: #2980B9;
	 }

	 .dropdown {
	     position: relative;
	     display: inline-block;
	 }

	 .dropdown-content {
	     display: none;
	     position: absolute;
	     background-color: #f1f1f1;
	     min-width: 160px;
	     overflow: auto;
	     box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	     z-index: 1;
	 }

	 .dropdown-content a {
	     color: black;
	     padding: 12px 16px;
	     text-decoration: none;
	     display: block;
	 }

	 .dropdown a:hover {background-color: #ddd}

	 .show {display:block;}
	 </style>

<p>
	 <div class="dropdown">
	 <button onclick="myFunction()" class="dropbtn">Choose a puzzle to order</button>
	   <div id="myDropdown" class="dropdown-content">
			 <form>

			 <select multiple required>
			 <?php
			 $sql = mysqli_query($connection, "SELECT pname FROM Puzzles");
			 while ($row = $sql->fetch_assoc()){
			 echo "<option value=\"pname\">" . $row['pname'] . "</option>";
			 }
			 ?>
			 </select>


			 </form>
	   </div>
		 <button type="submit" id="submit" value="Submit">Add to cart<br><br>
	 </div>

	 <script>
	 /* When the user clicks on the button,
	 toggle between hiding and showing the dropdown content */
	 function myFunction() {
	     document.getElementById("myDropdown").classList.toggle("show");
	 }

	 // Close the dropdown if the user clicks outside of it
	 window.onclick = function(event) {
	   if (!event.target.matches('.dropbtn')) {

	     var dropdowns = document.getElementsByClassName("dropdown-content");
	     var i;
	     for (i = 0; i < dropdowns.length; i++) {
	       var openDropdown = dropdowns[i];
	       if (openDropdown.classList.contains('show')) {
	         openDropdown.classList.remove('show');
	       }
	     }
	   }
	 }
	 </script>
</p> <br>








		<p> Our website is awesome! Check out our reviews here --> 	<a href="reviewpage.php"><button type="button">Review Page</button></a></p> <br>
		</tbody>
	</table>
</body>
</html>
