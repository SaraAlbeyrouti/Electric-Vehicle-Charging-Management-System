<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST['brand'];

    $sql = "SELECT * FROM vehicles WHERE brand = '$brand'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<h1>Vehicles Found:</h1>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>Brand: " . $row['brand'] . ", Model: " . $row['model'] . ", Year: " . $row['year'] . "</p>";
            }
        } else {
            echo "<h1>No vehicles found with the specified brand.</h1>";
        }

        $countSql = "SELECT brand, COUNT(*) AS number_of_vehicles FROM vehicles WHERE brand = '$brand'";
        $countResult = mysqli_query($conn, $countSql);

        if ($countResult && mysqli_num_rows($countResult) > 0) {
            $countRow = mysqli_fetch_assoc($countResult);
            echo "<p>Number of Vehicles with Brand $brand: " . $countRow['number_of_vehicles'] . "</p>";
        } else {
            echo "Error fetching count: " . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

