<?php
$dbhost = "mysql.cs.iastate.edu";
$dbuser = "dbu319b1";
$dbpass = "VfcXqcr#";
$dbname = "db319b1";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()){
    die("database connection failed:"
        . mysqli_connect_error().
     " (" . mysqli_connect_errno() . ")");
} 
$id = $_POST['id'];
echo "id: " . $id;
$query = "SELECT * FROM db319b1.deliveries WHERE `deliverer_id` = '$id'";
$result = mysqli_query($connection, $query);
if (!$result){
	die("no results");
}

/*echo "<table border='1'>
<tr>
<th>Location</th>
<th>Delivery_Time</th>
<th>Order_Limit</th>
<th>Deliverer</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['location'] . "</td>";
echo "<td>" . $row['delivtime'] . "</td>";
echo "<td>" . $row['olimit'] . "</td>";
echo "<td>" . $row['deliverer'] . "</td>";
echo "</tr>";
}
echo "</table>";*/

//mysqli_close($con);
?>

<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css" text="text/css">
        <title>Joe and Dough | View Deliveries</title>
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
			color: white; 
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
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
    </head>
<body>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <div class="container">
            <div class="text-center">
			<h1>Active Deliveries</h1>
	<table class="data-table">
		<thead>
			<tr>
				<th>Location</th>
				<th>Delivery Time</th>
				<th>Order Limit</th>
				<th>Deliverer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = mysqli_fetch_array($result))
		{
			echo '<tr>
					<td>'.$row['location'].'</td>
					<td>'.date("g:i a", strtotime($row['delivtime'])).'</td>
					<td>'.$row['olimit'].'</td>
					<td>'. $row['deliverer'] . '</td>
				</tr>';
		}?>
		</tbody>
	</table>
	</div>
        </div>
</body>
</html>