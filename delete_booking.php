<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM bookings WHERE id=$id";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Booking</title>
</head>
<body>
    <h2>Delete Booking</h2>
    <form action="delete_booking.php" method="post">
        <label for="id">Booking ID:</label>
        <input type="text" id="id" name="id" required><br>
        <button type="submit">Delete Booking</button>
    </form>
</body>
</html>
