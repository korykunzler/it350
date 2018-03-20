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
	<title>Show Puzzles</title>
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
		<caption class="title">Puzzles DB</caption>
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
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$row['pname'].'</td>
					<td>'.$row['quantity'].'</td>
					<td>'.$row['numberofpieces'].'</td>
					<td>'.$row['size']. '</td
					<td>'.$row['difficulty']. '</td>
					<td>'.$row['theme'].'</td>
				</tr>';
			$total += $row['amount'];
			$no++;
		}?>
		</tbody>




		<tfoot>
			<tr>
				<!--<th colspan="4">TOTAL</th>
				<th><?=number_format($total)?></th>-->
			</tr>
		</tfoot>
	</table>
</body>
</html>
