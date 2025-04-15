<?php
include 'connect.php';

$name = $_POST['name'];
$location = $_POST['location'];
$price = $_POST['price'];
$availability = $_POST['availability'];

$sql = "INSERT INTO basic (basicid, sname, location, price, availability)
        VALUES (LEFT(UUID(), 11),'$name', '$location', $price, $availability)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<br><a href="maintenance.html">Go to Maintenance</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
