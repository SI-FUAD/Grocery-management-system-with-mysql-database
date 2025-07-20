<!DOCTYPE html>
<html>
<head>
	<title>Customer Page</title>
	<style>
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
		tr:nth-child(even){background-color: #f2f2f2}
		tr:hover {background-color: #ddd;}
	</style>
</head>
<body>
	<h1>Customer Page</h1>
	<table>
		<tr>
			<th>Customer ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Payment Method</th>
		</tr>
		<?php
			// Connect to database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "supershop";

			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Fetch data from database
			$sql = "SELECT * FROM customer";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row["customer_id"] . "</td>";
					echo "<td>" . $row["name"] . "</td>";
					echo "<td>" . $row["address"] . "</td>";
					echo "<td>" . $row["email"] . "</td>";
					echo "<td>" . $row["phone"] . "</td>";
					echo "<td><a href='payment_method.php?customer_id=" . $row["customer_id"] . "'>Payment Method</a></td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='6'>No customer found.</td></tr>";
			}

			mysqli_close($conn);
		?>
	</table>
</body>
</html>
