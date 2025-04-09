<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="admin_login.css">
</head>
<body>
	<div class="login-box">
		<h2>Admin Login</h2>
		<form action="admins.php" method="post">
			<div class="user-box">
				<input type="text" name="username" value="username"required="">
				<label>Username</label>
			</div>
			<div class="user-box">
				<input type="password" name="password" value="password" required="">
				<label>Password</label>
			</div>
			<input type="submit" name="login" value="Login">
		</form>
	</div>
</body>
</html>
