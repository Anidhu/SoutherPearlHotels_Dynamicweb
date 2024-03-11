<?php
session_start();

if (!isset($_SESSION["admin_loggedin"]) || $_SESSION["admin_loggedin"] !== true) {
    header("location: admin_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, Admin!</h2>
        <nav>
            <ul>
                <li><a href="view_bookings.php">View Bookings</a></li>
                <li><a href="add_booking.php">Add Booking</a></li>
                <li><a href="delete_booking.php">Delete Booking</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
