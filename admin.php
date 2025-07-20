<?php
session_start();
$admin_key = "5242"; // replace with your own admin key
$valid_user = "rahman213"; // replace with a valid username

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $admin_key_input = $_POST["admin_key"];
  $user_name_input = $_POST["user_name"];
  
  if ($admin_key_input == $admin_key && $user_name_input == $valid_user) {
    $_SESSION["admin"] = true;
    header("Location: dashboard.php");
    exit;
  } else {
    $error_message = "Invalid credentials";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <style>
    body {
	background-color: #F5F5F5;
}

.login-box {
	width: 300px;
	background-color: #FFFFFF;
	margin: 100px auto;
	padding: 20px;
	border-radius: 5px;
	border: 1px solid #CCCCCC;
}

h1 {
	text-align: center;
}

label {
	display: block;
	margin-bottom: 5px;
}

input[type="password"], input[type="text"] {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #CCCCCC;
	border-radius: 5px;
	box-sizing: border-box;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #FFFFFF;
	padding: 10px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

  </style>
</head>
<body>
  <form method="post">
    <label>Admin Key</label>
    <input type="text" name="admin_key">
    <label>Username</label>
    <input type="text" name="user_name">
    <?php if (isset($error_message)) {
      echo "<p class='error'>$error_message</p>";
    } ?>
    <input type="submit" value="Login">
  </form>
</body>
</html>
