<!DOCTYPE html>
<html lang="en">

<head>

    <title>Car Registration</title>
</head>

<body>
    <h1>Car Registration</h1>

    <form action="connect_car.php" method="post">

        <label for="model">Vehicle Model:</label>
        <input type="text" id="model" name="model" required><br><br>

        <label for="year">Year:</label>
        <input type="date" id="year" name="year" required><br><br>

        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand" required><br><br>

        <input type="submit" value="Register Vehicle">
    </form>
</body>

</html>