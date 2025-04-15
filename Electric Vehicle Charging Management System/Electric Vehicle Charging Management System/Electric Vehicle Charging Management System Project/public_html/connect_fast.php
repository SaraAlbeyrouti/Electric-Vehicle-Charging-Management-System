<?php
include 'connect.php';

$name = $_POST['name'];
$location = $_POST['location'];
$price = $_POST['price'];
$charging_speed = $_POST['charging_speed'];
$availability = $_POST['availability'];

$sql = "INSERT INTO fast (fastid, sname, location, price, availability, charging_speed)
        VALUES (LEFT(UUID(), 11),'$name', '$location', '$price', '$availability', '$charging_speed')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<br><a href="maintenance.html">Go to Maintenance</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>