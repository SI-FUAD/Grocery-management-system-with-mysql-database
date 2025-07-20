<?php
// Connect to MySQL database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'supershop';
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die('Could not connect to MySQL: ' . mysqli_error($conn));
}

// Fetch expiry data from database
$item_id = $_GET['item_id'];
$sql = "SELECT * FROM expiry WHERE item_id = $item_id";
$result = mysqli_query($conn, $sql);
if (!$result) {
  die('Could not fetch expiry data from database: ' . mysqli_error($conn));
}

// Display expiry data in table format
echo '<table>';
echo '<thead><tr><th>Expiry ID</th><th>Manufacture Date</th><th>Inventory Time</th><th>End Date</th></tr></thead>';
echo '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr>';
  echo '<td>' . $row['expiry_id'] . '</td>';
  echo '<td>' . $row['manufacture_date'] . '</td>';
  echo '<td>' . $row['inventory_time'] . '</td>';
  echo '<td>' . $row['end_date'] . '</td>';
  echo '</tr>';
}
echo '</tbody>';
echo '</table>';

// Close MySQL connection
mysqli_close($conn);
?>
