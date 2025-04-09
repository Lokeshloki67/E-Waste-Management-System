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

    if(isset($_POST['submit'])){
        // Get the user data from the form
        $email =$_POST['email'];
        $password =$_POST['password'];

        // Get the user from the database
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if($password==$user['password']){
			
			echo"sjch";
            // Start a session
            session_start();
            // Store the user data in the session
            $_SESSION['user'] = $user;
            // Redirect to the dashboard
            header('Location:sellings.php');
        }
        else{
            echo "Invalid email or password. Please try again.";
        }
    }
    mysqli_close($conn);
?>
