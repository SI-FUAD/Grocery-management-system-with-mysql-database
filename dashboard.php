<?php
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
  header("Location: admin_login.php");
  exit;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <style>
      body {
  background-color: #f2f2f2;
  font-family: Arial, sans-serif;
}

h1 {
  text-align: left;
  color: #26D701;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li {
  display: inline-block;
  margin: 10px;
}

a {
  display: block;
  padding: 10px 20px;
  background-color: #26D701;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}

a:hover {
  background-color: #555;
}

	</style>
</head>
<body>
  <h1>Welcome To Swopno</h1>
  <ul>
    <li><a href="employee_details.php">Employee Details</a></li>
    <li><a href="inventory.php">Inventory</a></li>
    <li><a href="shop.php">Shop</a></li>
	<li><a href="items.php">items</a></li>
	<li><a href="customer.php">customer</a></li>
  </ul>
</body>
</html>
