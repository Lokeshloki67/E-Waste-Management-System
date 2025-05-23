<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register - E-Waste Selling</title>
  <link rel="stylesheet" href="registeration.css">
</head>
<body>
  <div class="container">
    <h1>Register</h1>
    <form method="post" action="register.php">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <label for="confirm_password">Confirm Password</label>
      <input type="password" id="confirm_password" name="confirm_password" required>

      <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
  </div>
</body>
</html>
