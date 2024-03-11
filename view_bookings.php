<?php
include("config.php");

$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bookings</title>
</head>
<body>
    <h2>View Bookings</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Package</th>
            <th>Booking Date</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['telephone']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['package']; ?></td>
            <td><?php echo $row['booking_date']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

