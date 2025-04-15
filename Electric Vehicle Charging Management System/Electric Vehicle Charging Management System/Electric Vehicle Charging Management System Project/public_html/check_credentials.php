<?php

include 'connect.php';


$username = $_POST['username'];
$password = $_POST['password'];

// Check if the provided credentials are valid
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: maintenance.html'); // Redirect to maintenance page
    exit();
} else {
    echo "Invalid username or password. Please try again.";
}

$conn->close();
?>
