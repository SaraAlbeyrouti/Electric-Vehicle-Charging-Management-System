<?php
include 'connect.php';

$name = $_POST['name'];
$number = $_POST['number'];

$sql = "INSERT INTO guests (gid, name, number)
        VALUES (LEFT(UUID(), 11), '$name', '$number')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    echo '<br><a href="maintenance.html">Go to Maintenance</a>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
