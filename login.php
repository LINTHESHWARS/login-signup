<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h2>Login</h2>
		<form method="post">
    <input type="hidden" id="action" value="login">
			<div class="input-group">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" placeholder="Enter username">
			</div>
			<div class="input-group">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" placeholder="Enter password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" onclick="submitData();">Login</button>
			</div>
		</form>
	</div>
  
  <a href="register.php" class="button" style="text-decoration:none;" id="registerButton">Go To Register</a>
    <?php require 'script.php'; ?>
</body>
</html>

