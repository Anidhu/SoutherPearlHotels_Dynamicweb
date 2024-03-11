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
        <section class="search-section">
            <h2>Search Packages</h2>
            <form action="packages.php" method="get">
                <div class="form-group">
                    <label for="min-price">Min Price:</label>
                    <select id="min-price" name="min-price">
                        <option value="0" <?php if(isset($_GET['min-price']) && $_GET['min-price'] == '0') echo 'selected'; ?>>Min</option>
                        <option value="25" <?php if(isset($_GET['min-price']) && $_GET['min-price'] == '25') echo 'selected'; ?>>25 USD</option>
                        <option value="50" <?php if(isset($_GET['min-price']) && $_GET['min-price'] == '50') echo 'selected'; ?>>50 USD</option>
                        <option value="75" <?php if(isset($_GET['min-price']) && $_GET['min-price'] == '75') echo 'selected'; ?>>75 USD</option>
                        <option value="100" <?php if(isset($_GET['min-price']) && $_GET['min-price'] == '100') echo 'selected'; ?>>100 USD</option>
                        <!-- Add more price options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="max-price">Max Price:</label>
                    <select id="max-price" name="max-price">
                        <option value="500" <?php if(isset($_GET['max-price']) && $_GET['max-price'] == '500') echo 'selected'; ?>>Max</option>
                        <option value="150" <?php if(isset($_GET['max-price']) && $_GET['max-price'] == '150') echo 'selected'; ?>>150 USD</option>
                        <option value="200" <?php if(isset($_GET['max-price']) && $_GET['max-price'] == '200') echo 'selected'; ?>>200 USD</option>
                        <option value="250" <?php if(isset($_GET['max-price']) && $_GET['max-price'] == '250') echo 'selected'; ?>>250 USD</option>
                        <option value="300" <?php if(isset($_GET['max-price']) && $_GET['max-price'] == '300') echo 'selected'; ?>>300 USD</option>
                        <!-- Add more price options as needed -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="customer-type">Customer Type:</label>
                    <select id="customer-type" name="customer-type">
                        <option value="all" <?php if(isset($_GET['customer-type']) && $_GET['customer-type'] == 'all') echo 'selected'; ?>>All Customers</option>
                        <option value="local" <?php if(isset($_GET['customer-type']) && $_GET['customer-type'] == 'local') echo 'selected'; ?>>Local Customers</option>
                        <option value="foreign" <?php if(isset($_GET['customer-type']) && $_GET['customer-type'] == 'foreign') echo 'selected'; ?>>Foreign Customers</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </section>

        <section class="packages-section" id="search-results">
            <h2>Available Packages</h2>
            <?php
            // Placeholder for a more comprehensive list of package data
            $packages = [
                ['name' => 'Deluxe Experience Package', 'price' => 150, 'activity' => 'Beach Exploration', 'customer_type' => 'Local', 'room_type' => 'Deluxe'],
                ['name' => 'Surf and Stay Package', 'price' => 100, 'activity' => 'Surfing Adventure', 'customer_type' => 'Local', 'room_type' => 'Superior'],
                ['name' => 'Eco Budget Explorer Package', 'price' => 60, 'activity' => 'Countryside Retreat', 'customer_type' => 'Local', 'room_type' => 'Eco-Budget'],
                ['name' => 'Luxury Spa Retreat', 'price' => 200, 'activity' => 'Spa and Wellness', 'customer_type' => 'Local', 'room_type' => 'Deluxe'],
                ['name' => 'Family Fun Package', 'price' => 125, 'activity' => 'Family Activities', 'customer_type' => 'Local', 'room_type' => 'Superior'],
                ['name' => 'Adventure Seeker Package', 'price' => 90, 'activity' => 'Adventure Sports', 'customer_type' => 'Local', 'room_type' => 'Eco-Budget'],
                ['name' => 'Deluxe Experience Package', 'price' => 300, 'activity' => 'Beach Exploration', 'customer_type' => 'Foreign', 'room_type' => 'Deluxe'],
                ['name' => 'Surf and Stay Package', 'price' => 200, 'activity' => 'Surfing Adventure', 'customer_type' => 'Foreign', 'room_type' => 'Superior'],
                ['name' => 'Eco Budget Explorer Package', 'price' => 160, 'activity' => 'Countryside Retreat', 'customer_type' => 'Foreign', 'room_type' => 'Eco-Budget'],
                ['name' => 'Luxury Spa Retreat', 'price' => 400, 'activity' => 'Spa and Wellness', 'customer_type' => 'Foreign', 'room_type' => 'Deluxe'],
                ['name' => 'Family Fun Package', 'price' => 250, 'activity' => 'Family Activities', 'customer_type' => 'Foreign', 'room_type' => 'Superior'],
                ['name' => 'Adventure Seeker Package', 'price' => 180, 'activity' => 'Adventure Sports', 'customer_type' => 'Foreign', 'room_type' => 'Eco-Budget'],
            ];

            // Process search filter
            $minPrice = isset($_GET['min-price']) ? intval($_GET['min-price']) : 0;
            $maxPrice = isset($_GET['max-price']) ? intval($_GET['max-price']) : 500;
            $customerType = isset($_GET['customer-type']) ? $_GET['customer-type'] : 'all';

            // Filter packages based on search criteria
            $filteredPackages = array_filter($packages, function($package) use ($minPrice, $maxPrice, $customerType) {
                if ($package['price'] >= $minPrice && $package['price'] <= $maxPrice) {
                    if ($customerType === 'all' || $package['customer_type'] === $customerType) {
                        return true;
                    }
                }
                return false;
            });

            if (count($filteredPackages) > 0) {
                foreach ($filteredPackages as $package) {
                    // Display package information
                    echo "<div class='package'>";
                    echo "<h3>{$package['name']}</h3>";
                    echo "<p>Price: {$package['price']} USD</p>";
                    echo "<p>Activity: {$package['activity']}</p>";
                    echo "<p>Customer Type: {$package['customer_type']}</p>";
                    echo "<p>Room Type: {$package['room_type']}</p>";
                    // Add more details as needed
                    echo "</div>";
                }
            } else {
                echo "<p>No packages found matching the search criteria.</p>";
            }
            ?>
        </section>
    </main>
    <footer>
    <div class="social-icons">
                <a href="#" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="#" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
            <p>&copy; COPYRIGHT © 2024 ALL RIGHTS RESERVED BY MERMAID AQUARIUMS™<br>DEVELOPED BY ANIDHU_S
            </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
