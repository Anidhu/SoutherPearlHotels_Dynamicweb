<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SOUTHERN PEARL HOTELS</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columns with equal width */
            gap: 20px; /* Gap between gallery items */
            margin-top: 20px; /* Add space above the gallery */

        }
        .activity-category {
            text-align: center;
        }
        .activity-title {
            font-weight: bold;
        }
        
    </style>
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
    <div class="container">
        <div class="activity-category">
            <img src="images/ui3.png" alt="Beach Exploration">
            <p class="activity-title"><strong>Beach Exploration</strong></p>
        </div>
        <div class="activity-category">
            <img src="images/ui4.png" alt="Surfing Adventure">
            <p class="activity-title"><strong>Surfing Adventure</strong></p>
        </div>
        <div class="activity-category">
            <img src="images/ui5.png" alt="Spa and Wellness">
            <p class="activity-title"><strong>Spa and Wellness</strong></p>
        </div>
        <div class="activity-category">
            <img src="images/ui6.png" alt="Snorkeling">
            <p class="activity-title"><strong>Snorkeling</strong></p>
        </div>
        <div class="activity-category">
            <img src="images/ui7.png" alt="Scuba Diving">
            <p class="activity-title"><strong>Scuba Diving</strong></p>
        </div>
        <div class="activity-category">
            <img src="images/ui8.png" alt="Glass Bottom Boat Rides">
            <p class="activity-title"><strong>Glass Bottom Boat Rides</strong></p>
        </div>
        <div class="activity-category">
            <img src="images/ui9.png" alt="Birthday Parties">
            <p class="activity-title"><strong>Birthday Parties</strong></p>
        </div>
        <div class="activity-category">
            <img src="images/ui10.png" alt="Office Year-End Parties">
            <p class="activity-title"><strong>Office Year-End Parties</strong></p>
        </div>
        <div class="activity-category">
            <img src="images/ui11.png" alt="Coral Watching">
            <p class="activity-title"><strong>Coral Watching</strong></p>
    </div>
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
</body>
</html>
