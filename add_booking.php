<?php
// Database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "southernpearldbms";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validate_input($_POST["name"]);
    $gender = validate_input($_POST["gender"]);
    $telephone = validate_input($_POST["telephone"]);
    $email = validate_input($_POST["email"]);
    $package = validate_input($_POST["package"]);
    $customer_type = validate_input($_POST["customer_type"]);

    // SQL injection prevention
    $name = mysqli_real_escape_string($conn, $name);
    $gender = mysqli_real_escape_string($conn, $gender);
    $telephone = mysqli_real_escape_string($conn, $telephone);
    $email = mysqli_real_escape_string($conn, $email);
    $package = mysqli_real_escape_string($conn, $package);
    $customer_type = mysqli_real_escape_string($conn, $customer_type);

    // Insert data into database
    $sql = "INSERT INTO bookings (name, gender, telephone, email, package, customer_type) VALUES ('$name', '$gender', '$telephone', '$email', '$package', '$customer_type')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking successfully added!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to validate input
function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Booking</title>
</head>
<body>
    <h2>Add Booking</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>
        
        <label for="telephone">Telephone Number:</label><br>
        <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" required><br><br>
        
        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="package">Select Package:</label><br>
        <select id="package" name="package" required>
            <option value="Deluxe Experience Package">Deluxe Experience Package</option>
            <option value="Surf and Stay Package">Surf and Stay Package</option>
            <option value="Eco Budget Explorer Package">Eco Budget Explorer Package</option>
            <option value="Luxury Spa Retreat">Luxury Spa Retreat</option>
            <option value="Family Fun Package">Family Fun Package</option>
            <option value="Adventure Seeker Package">Adventure Seeker Package</option>
        </select><br><br>
        
        <label for="customer_type">Customer Type:</label><br>
        <select id="customer_type" name="customer_type" required>
            <option value="Local">Local</option>
            <option value="Foreign">Foreign</option>
        </select><br><br>

        <input type="submit" value="Add Booking">
    </form>
</body>
</html>
