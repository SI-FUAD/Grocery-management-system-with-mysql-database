<!DOCTYPE html>
<html>
<head>
  <title>Payment Method</title>
  <style>
    /* Add some basic CSS styling */
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
  <h1>Payment Method</h1>

  <?php
  // Connect to MySQL database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "supershop";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get customer ID from URL parameter
  $customer_id = $_GET["customer_id"];

  // Fetch payment method data from database for the given customer ID
  $sql = "SELECT * FROM payment_method WHERE customer_id = $customer_id";
  $result = mysqli_query($conn, $sql);

  // Display payment method data in a table
  if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Cash</th><th>bKash</th><th>Debit Card</th><th>Credit Card</th><th>Mastercard</th><th>Card No.</th><th>Merchant No.</th><th>Amount</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row["customer_id"] . "</td><td>" . $row["cash"] . "</td><td>" . $row["bkash"] . "</td><td>" . $row["debit_card"] . "</td><td>" . $row["credit_card"] . "</td><td>" . $row["mastercard"] . "</td><td>" . $row["card_no"] . "</td><td>" . $row["merchant_no"] . "</td><td>" . $row["amount"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No payment method data found.";
  }

  // Close database connection
  mysqli_close($conn);
  ?>
</body>
</html>

