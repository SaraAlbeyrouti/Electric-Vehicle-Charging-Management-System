<?php
$servername = "localhost";
$username = "amartirosyan";
$password = "BTQOgZ";
$dbname = "Group-2";
// $servername = "localhost";
// $username = "root";
// $password = "Cellcell-1234";
// $dbname = "electric_cars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
