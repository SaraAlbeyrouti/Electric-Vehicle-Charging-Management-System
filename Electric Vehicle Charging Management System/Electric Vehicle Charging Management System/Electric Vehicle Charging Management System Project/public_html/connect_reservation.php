<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $amountPaid = $_POST['amountPaid'];
    $status = $_POST['status'];

    $sql = "INSERT INTO reservations (rid, start_time, end_time, amount_paid, status)
            VALUES (LEFT(UUID(), 11),'$startTime', '$endTime', $amountPaid, '$status')";

    if (mysqli_query($conn, $sql)) {
        echo "Reservation successful!";
        echo '<br><a href="maintenance.html">Go to Maintenance</a>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
