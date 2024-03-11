<?php
$searchMinPrice = isset($_GET['min-price']) ? $_GET['min-price'] : 0;
$searchMaxPrice = isset($_GET['max-price']) ? $_GET['max-price'] : 500;
$searchActivity = isset($_GET['activity-type']) ? $_GET['activity-type'] : 'all';
$searchCustomer = isset($_GET['customer-type']) ? $_GET['customer-type'] : 'all';

$startDate = isset($_GET['start-date']) ? $_GET['start-date'] : '';
$endDate = isset($_GET['end-date']) ? $_GET['end-date'] : '';

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "southernpearldbms";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database based on search criteria
$query = "SELECT * FROM packages 
          WHERE price BETWEEN $searchMinPrice AND $searchMaxPrice 
          AND (activity = '$searchActivity' OR '$searchActivity' = 'all') 
          AND (customer_type = '$searchCustomer' OR '$searchCustomer' = 'all') 
          AND ('$startDate' BETWEEN booking_start_date AND booking_end_date 
               OR '$endDate' BETWEEN booking_start_date AND booking_end_date 
               OR (booking_start_date <= '$startDate' AND booking_end_date >= '$endDate'))";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    // Display package information
    echo "<div class='package'>";
    echo "<h3>{$row['name']}</h3>";
    echo "<p>Price: {$row['price']} USD</p>";
    echo "<p>Activity: {$row['activity']}</p>";
    echo "</div>";
}

$conn->close();
?>
