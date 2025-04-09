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
// Generate unique request ID
$request_id = uniqid();
// Get form data from POST request
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$product_name = $_POST['product_name'];
$pickup_date = $_POST['pickup_date'];
$pickup_time = $_POST['pickup_time'];

// Insert data into database
$sql = "INSERT INTO sell_request(name, email, address, city, state, zip, product_name, pickup_date, pickup_time, status,request_id) VALUES ('$name', '$email', '$address', '$city', '$state', '$zip', '$product_name', '$pickup_date', '$pickup_time', 'Pending','$request_id')";
mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Request ID - E-Waste Selling</title>
  <link rel="stylesheet" href="rr.css">
  <meta http-equiv="refresh" content="10;url=sellings.php">
</head>
<body>
  <div class="container">
    <h1>Your Request ID:</h1>
    <p><?php echo $request_id; ?></p>
  </div>
</body>
</html>
