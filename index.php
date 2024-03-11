<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SOUTHERN PEARL HOTELS</title>
    <style>
        .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}
.product img {
            max-width:50%;
            height: auto;
            display: block;
            margin: 0 auto;
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
<section class="hero-section">
    <img src="images/wallpaper.jpg" alt="Aquarium Hero Image">
    <div class="hero-content">
        <a href="packages.php"class="btn">View Prices and Packages</a>
    </div>
</section>

        <section class="featured-products">
            <h2>Featuring</h2>
            <div class="product">
                <img src="images/ui.jpg" alt="Comfortable Accomodation">
                <p><strong>Comfortable Accomodation</strong></p>
            </div>
            <div class="product">
                <img src="images/ui1.jpg" alt="Beach Paradise">
                <p><strong>Beach Paradise</strong></p>
            </div>
            <div class="product">
                <img src="images/ui2.jpg" alt="Vibrant Night Life">
                <p><strong>Vibrant Night Life</strong></p>
            </div>
        </section>
        <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Include the login form here -->
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Include the registration form here -->
                    <form action="register.php" method="post">
                        <div class="form-group">
                            <label for="new_username">Username:</label>
                            <input type="text" class="form-control" id="new_username" name="new_username" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">Password:</label>
                            <input type="password" class="form-control" id="new_password" name="new_password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_new_password">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <section class="about-section">
            <h2>About SOUTHERN PEARL HOTELS</h2>
            <p>Experience luxury and comfort at Southern Pearl Hotels. Located in the heart of a tropical paradise, our hotel offers breathtaking ocean views, world-class amenities, and unparalleled hospitality. Whether you're seeking relaxation on the beach, adventure in the water, or indulgence in gourmet dining, Southern Pearl Hotels is your perfect getaway.</p>
            <a href="about-us.html" class="btn">Learn More</a>
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
</body>
</html>
