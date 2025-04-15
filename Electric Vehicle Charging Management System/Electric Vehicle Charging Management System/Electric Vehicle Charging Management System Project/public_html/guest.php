<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Registration</title>
</head>

<body>
    <div class="container">
        <h2>Register Here</h2>
        <form action="connect_guest.php" method="post" autocomplete="off">
            <div class="registration">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="registration">
                <label for="number">Phone Number:</label>
                <input type="tel" id="number" name="number" required>
            </div>
            <div class="registration">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>

</html>