<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $sql = "SELECT * FROM users WHERE name = '$name'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<h1>Users Found:</h1>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>Name: " . $row['name'] . ", Phone: " . $row['number'] . "</p>";
            }
        } else {
            echo "<h1>No users found with the specified name.</h1>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
