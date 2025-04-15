<?php
include 'connect.php';

$model = $_POST['model'];
$year = $_POST['year'];
$brand = $_POST['brand'];

$sql = "INSERT INTO bikes (bid, model, year, brand)
        VALUES (LEFT(UUID(), 11), '$model', '$year', '$brand')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<br><a href="maintenance.html">Go to Maintenance</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>