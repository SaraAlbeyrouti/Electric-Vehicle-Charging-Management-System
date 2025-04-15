<?php

include('connect.php');

$sql = "SELECT location FROM charging_stations";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $stations = array();
    while ($row = $result->fetch_assoc()) {
        $stations[] = $row['location'];
    }

    echo json_encode($stations);
} else {
    echo json_encode([]);
}

$conn->close();

?>