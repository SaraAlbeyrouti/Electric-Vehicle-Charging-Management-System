<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    $sql = "SELECT * FROM registered WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<h1>Registered User Found:</h1>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>Name: " . $row['name'] . ", Username: " . $row['username'] . ", Phone Number: " . $row['number'] . "</p>";
            }
        } else {
            echo "<h1>No registered user found with the specified username.</h1>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
