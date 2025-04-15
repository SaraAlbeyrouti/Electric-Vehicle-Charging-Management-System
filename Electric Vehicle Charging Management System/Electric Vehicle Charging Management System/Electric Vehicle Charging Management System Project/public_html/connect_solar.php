<?php
include 'connect.php';

$name = $_POST['name'];
$location = $_POST['location'];
$price = $_POST['price'];
$panel_capacity = $_POST['panel_capacity'];
$availability = $_POST['availability'];

$sql = "INSERT INTO solar (solarid, sname, location, price, availability, panel_capacity)
        VALUES (LEFT(UUID(), 11),'$name', '$location', '$price', '$availability', '$panel_capacity')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<br><a href="maintenance.html">Go to Maintenance</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>