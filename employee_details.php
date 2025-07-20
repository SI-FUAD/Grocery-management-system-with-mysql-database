<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
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

<h1>Employee Details</h1>

<table>
	<thead>
		<tr>
			<th>Employee ID</th>
			<th>Name</th>
			<th>SSN</th>
			<th>Phone</th>
			<th>Email</th>
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
			$sql = "SELECT employee_id, name, ssn, phone, email FROM employee";
			$result = mysqli_query($conn, $sql);

			// Output the data in a table format
			if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    echo "<tr>";
			    echo "<td>" . $row["employee_id"] . "</td>";
			    echo "<td>" . $row["name"] . "</td>";
			    echo "<td>" . $row["ssn"] . "</td>";
			    echo "<td>" . $row["phone"] . "</td>";
			    echo "<td>" . $row["email"] . "</td>";
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
