<?php
    // Connect to the database
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'ewaste';
    $conn = mysqli_connect($host, $user, $password, $database);
    // Check for connection errors
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['login'])){
        // Get the user data from the form
        $username =$_POST['username'];
        $password =$_POST['password'];

        // Get the user from the database
        $query = "SELECT * FROM admin WHERE username='$username'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if($password==$user['password']){
            header('Location:admin_dashboard.php');
        }
        else{
            echo "Invalid email or password. Please try again.";
        }
    }
    mysqli_close($conn);
?>
