<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Station Details</title>
</head>

<body>
    <h1>Fast Station Details</h1>

    <form action="connect_fast.php" method="post">
        <label for="name">Station Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br><br>
        <label for="charging_speed">Charging Speed:</label>
        <input type="number" id="charging_speed" name="charging_speed" required><br><br>

        <label for="availability">Availability (0 or 1):</label>
        <input type="number" id="availability" name="availability" min="0" max="1" required><br><br>

        <input type="submit" value="Register Station">
    </form>
</body>

</html>
