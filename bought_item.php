<!DOCTYPE html>
<html>
<head>
	<title>Bought Items</title>
	<style>
	   body {
	background-color: #f2f2f2;
}

.container {
	margin: 0 auto;
	max-width: 800px;
	padding: 20px;
}

h1 {
	font-size: 36px;
	text-align: center;
	margin-bottom: 30px;
}

table {
	border-collapse: collapse;
	width: 100%;
}

th, td {
	text-align: left;
	padding: 8px;
}

th {
	background-color: #4CAF50;
	color: white;
}

tr:nth-child(even) {
	background-color: #f2f2f2;
}

tr:hover {
	background-color: #ddd;
}
   </style>
</head>
<body>
	<div class="container">
		<h1>Bought Items</h1>
		<table>
			<tr>
				<th>Item ID</th>
				<th>Item Name</th>
				<th>Quantity</th>
			</tr>
			<?php
				// Establishing connection to MySQL database
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "supershop";
				$conn = mysqli_connect($servername, $username, $password, $dbname);

				// Checking connection status
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				// Query to fetch data from Bought_Item table
				$sql = "SELECT item_id, item_name, quantity FROM Bought_Item";

				// Executing query and storing result set
				$result = mysqli_query($conn, $sql);

				// Iterating through result set and displaying data in HTML table
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['item_id'] . "</td>";
						echo "<td>" . $row['item_name'] . "</td>";
						echo "<td>" . $row['quantity'] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='3'>No data found.</td></tr>";
				}

				// Closing database connection
				mysqli_close($conn);
			?>
		</table>
	</div>
</body>
</html>
