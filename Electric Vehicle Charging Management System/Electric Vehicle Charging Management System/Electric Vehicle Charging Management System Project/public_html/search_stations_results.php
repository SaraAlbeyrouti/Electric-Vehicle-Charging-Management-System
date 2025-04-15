<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST['location'];

    $sql = "SELECT * FROM charging_stations WHERE location = '$location'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<h1>Stations Found:</h1>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>Name: " . $row['sname'] . ", Location: " . $row['location'] . ", Price: " . $row['price'] . "</p>";
            }
        } else {
            echo "<h1>No stations found at the specified location.</h1>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
