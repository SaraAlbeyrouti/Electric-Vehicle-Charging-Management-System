<?php

include('connect.php');

$sql = "SELECT brand FROM vehicles";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $vehicles = array();
    while ($row = $result->fetch_assoc()) {
        $vehicles[] = $row['brand'];
    }

    echo json_encode($vehicles);
} else {
    echo json_encode([]);
}

$conn->close();

?>
