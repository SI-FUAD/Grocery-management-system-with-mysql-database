<!DOCTYPE html>
<html>
<head>
	<title>Item</title>
	<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}
		th, td {
		  text-align: left;
		  padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}
		th {
		  background-color: #4CAF50;
		  color: white;
		}
		.expiry-button {
			background-color: #008CBA;
			border: none;
			color: white;
			padding: 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 14px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 8px;
		}
	</style>
</head>
<body>

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
	$sql = "SELECT brand, UPC, price, item_id, vat FROM items";
	$result = mysqli_query($conn, $sql);

	// Output the data in a table format with an expiry button
	if (mysqli_num_rows($result) > 0) {
	  echo "<table>";
	  echo "<tr><th>Brand</th><th>UPC</th><th>Price</th><th>Item ID</th><th>VAT</th><th>Action</th></tr>";
	  while ($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
	    echo "<td>" . $row["brand"] . "</td>";
	    echo "<td>" . $row["UPC"] . "</td>";
	    echo "<td>" . $row["price"] . "</td>";
	    echo "<td>" . $row["item_id"] . "</td>";
	    echo "<td>" . $row["vat"] . "</td>";
	    echo "<td><a href='expiry.php?item_id=" . $row["item_id"] . "' class='expiry-button'>Expiry</a></td>";
	    echo "</tr>";
	  }
	  echo "</table>";
	} else {
	  echo "<p>No data found</p>";
	}

	// Close the database connection
	mysqli_close($conn);
?>

</body>
</html>

