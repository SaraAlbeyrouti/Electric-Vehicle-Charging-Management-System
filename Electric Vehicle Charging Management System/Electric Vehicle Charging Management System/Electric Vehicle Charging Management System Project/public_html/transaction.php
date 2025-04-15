<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
</head>

<body>
    <h1>Make a Transaction</h1>

    <form action="connect_transaction.php" method="post">
        <label for="startTime">Start Time:</label>
        <input type="time" id="startTime" name="startTime" required><br><br>

        <label for="endTime">End Time:</label>
        <input type="time" id="endTime" name="endTime" required><br><br>

        <label for="amountPaid">Amount Paid:</label>
        <input type="number" id="amountPaid" name="amountPaid" required><br><br>

        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required><br><br>


        <input type="submit" value="Make Reservation">
    </form>
</body>

</html>