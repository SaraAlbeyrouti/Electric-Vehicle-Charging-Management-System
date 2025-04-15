<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Details</title>
</head>

<body>
    <h1>Bike Details</h1>

    <form action="connect_bike.php" method="post">

        <label for="model">Bike Model:</label>
        <input type="text" id="model" name="model" required><br><br>

        <label for="year">Year:</label>
        <input type="date" id="year" name="year" required><br><br>

        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand" required><br><br>

        <input type="submit" value="Register Bike">
    </form>
</body>

</html>
