<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
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
	$sql = "SELECT name, address, trade_license FROM shop";
	$result = mysqli_query($conn, $sql);

	// Output the data in a table format
	if (mysqli_num_rows($result) > 0) {
	  echo "<table>";
	  echo "<tr><th>Name</th><th>Address</th><th>Trade License</th></tr>";
	  while ($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
	    echo "<td>" . $row["name"] . "</td>";
	    echo "<td>" . $row["address"] . "</td>";
	    echo "<td>" . $row["trade_license"] . "</td>";
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

