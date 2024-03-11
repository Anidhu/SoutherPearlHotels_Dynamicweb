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

// Define available packages
$packages = [
    ['name' => 'Deluxe Experience Package', 'price' => 150, 'activity' => 'Beach Exploration', 'customer_type' => 'Local', 'room_type' => 'Deluxe'],
    ['name' => 'Surf and Stay Package', 'price' => 100, 'activity' => 'Surfing Adventure', 'customer_type' => 'Local', 'room_type' => 'Superior'],
    ['name' => 'Eco Budget Explorer Package', 'price' => 60, 'activity' => 'Countryside Retreat', 'customer_type' => 'Local', 'room_type' => 'Eco-Budget'],
    ['name' => 'Luxury Spa Retreat', 'price' => 200, 'activity' => 'Spa and Wellness', 'customer_type' => 'Local', 'room_type' => 'Deluxe'],
    ['name' => 'Family Fun Package', 'price' => 125, 'activity' => 'Family Activities', 'customer_type' => 'Local', 'room_type' => 'Superior'],
    ['name' => 'Adventure Seeker Package', 'price' => 90, 'activity' => 'Adventure Sports', 'customer_type' => 'Local', 'room_type' => 'Eco-Budget'],
    ['name' => 'Deluxe Experience Package', 'price' => 300, 'activity' => 'Beach Exploration', 'customer_type' => 'Foreign', 'room_type' => 'Deluxe'],
    ['name' => 'Surf and Stay Package', 'price' => 200, 'activity' => 'Surfing Adventure', 'customer_type' => 'Foreign', 'room_type' => 'Superior'],
    ['name' => 'Eco Budget Explorer Package', 'price' => 120, 'activity' => 'Countryside Retreat', 'customer_type' => 'Foreign', 'room_type' => 'Eco-Budget'],
    ['name' => 'Luxury Spa Retreat', 'price' => 400, 'activity' => 'Spa and Wellness', 'customer_type' => 'Foreign', 'room_type' => 'Deluxe'],
    ['name' => 'Family Fun Package', 'price' => 250, 'activity' => 'Family Activities', 'customer_type' => 'Foreign', 'room_type' => 'Superior'],
    ['name' => 'Adventure Seeker Package', 'price' => 180, 'activity' => 'Adventure Sports', 'customer_type' => 'Foreign', 'room_type' => 'Eco-Budget']
];

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validate_input($_POST["name"]);
    $gender = validate_input($_POST["gender"]);
    $phone = validate_input($_POST["phone"]);
    $email = validate_input($_POST["email"]);
    $package = validate_input($_POST["package"]);
    $customer_type = validate_input($_POST["customer_type"]);

    // SQL injection prevention
    $name = mysqli_real_escape_string($conn, $name);
    $gender = mysqli_real_escape_string($conn, $gender);
    $phone = mysqli_real_escape_string($conn, $phone);
    $email = mysqli_real_escape_string($conn, $email);
    $package = mysqli_real_escape_string($conn, $package);
    $customer_type = mysqli_real_escape_string($conn, $customer_type);

    // Insert data into database
    $sql = "INSERT INTO bookings (name, gender, telephone, email, package, customer_type) VALUES ('$name', '$gender', '$phone', '$email', '$package', '$customer_type')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking successfully made!');</script>";
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
    <link rel="stylesheet" href="style.css">
    <title>SOUTHERN PEARL HOTELS</title>
</head>
<body>
    <header>
        <h1>Welcome to SOUTHERN PEARL HOTELS</h1>
        <nav>
            <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="packages.php">Prices and Packages</a></li>
        <li class="nav-item"><a class="nav-link" href="book.php">Book Now</a></li>
        <li class="nav-item"><a class="nav-link" href="activities.php">Activities</a></li>
        <li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="admin_login.php">Admin Login</a></li>
            </ul>
            <div class="login-register-btns">
                <a class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
                <a class="nav-link" data-toggle="modal" data-target="#registerModal">Register</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="booking-section">
            <h2>Book Now</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="phone">Telephone Number:</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="package">Select Package:</label>
                    <select id="package" name="package" required>
                        <?php foreach ($packages as $pkg) { ?>
                            <option value="<?php echo $pkg['name']; ?>"><?php echo $pkg['name']; ?> - <?php echo $pkg['price']; ?> USD</option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="customer_type">Customer Type:</label>
                    <select id="customer_type" name="customer_type" required>
                        <option value="Local">Local</option>
                        <option value="Foreign">Foreign</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
        </section>
    </main>
    <footer>
        <div class="social-icons">
            <a href="#" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a>
        </div>
        <p>&copy; COPYRIGHT © 2024 ALL RIGHTS RESERVED BY MERMAID AQUARIUMS™<br>DEVELOPED BY ANIDHU_S</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
