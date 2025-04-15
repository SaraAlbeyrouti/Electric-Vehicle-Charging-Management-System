<?php

include('connect.php');

$sql = "SELECT username FROM registered";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row['username'];
    }

    echo json_encode($users);
} else {
    echo json_encode([]);
}

$conn->close();

?>
