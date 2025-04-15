<?php
include 'connect.php';

$name = $_POST['name'];
$username = $_POST['username'];
$number = $_POST['number'];
$password = $_POST['password'];

$sql = "INSERT INTO registered (registeredid, name, username, number, password)
        VALUES (LEFT(UUID(), 11), '$name', '$username', '$number', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo '<br><a href="maintenance.html">Go to Maintenance</a>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
