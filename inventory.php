<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title>
	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 10px;
		  text-align: left;
		}
		th {
		  background-color: #ccc;
		}
	</style>
</head>
<body>

<h1>Inventory</h1>

<table>
	<thead>
		<tr>
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Store ID</th>
			<th>Address</th>
		</tr>
	</thead>
	<tbody>
		<?php
			// Connect to the database
			$host = 'localhost';
			$username = 'root';
			$password = '';
			$dbname = 'supershop';
			$conn = mysqli_connect($host, $username, $password, $dbname);

			// Check connection
			if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}

			// Fetch data from the database
			$sql = "SELECT product_name, quantity, price, store_id, address FROM inventory";
			$result = mysqli_query($conn, $sql);

			// Output the data in a table format
			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    echo "<tr>";
			    echo "<td>" . $row["product_name"] . "</td>";
			    echo "<td>" . $row["quantity"] . "</td>";
			    echo "<td>" . $row["price"] . "</td>";
			    echo "<td>" . $row["store_id"] . "</td>";
			    echo "<td>" . $row["address"] . "</td>";
			    echo "</tr>";
			  }
			} else {
			  echo "<tr><td colspan='5'>No data found</td></tr>";
			}

			// Close the database connection
			mysqli_close($conn);
		?>
	</tbody>
</table>

</body>
</html>
