<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ewaste";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data from POST request
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if username already exists
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "Username already exists";
  exit();
}

// Check if email already exists
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "Email already exists";
  exit();
}
// Insert data into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
  echo "Registration successful";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
