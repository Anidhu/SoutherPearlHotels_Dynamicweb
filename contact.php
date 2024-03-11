<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SOUTHERN PEARL HOTELS - Contact</title>
    <style>
        .contact-section {
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form input[type="tel"],
        form input[type="email"],
        form select,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        form input[type="submit"]:hover {
            background-color: #555;
        }

        .error-message {
            color: red;
            margin-top: 5px;
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
        </nav>
    </header>
    <main>
        <section class="contact-section">
            <h2>Contact Us</h2>
            <form id="contactForm" method="post" onsubmit="return validateForm()">
                <label for="customerName">Customer Name:</label>
                <input type="text" id="customerName" name="customerName" required placeholder="Ex: Anidhu Shajana">

                <label for="phoneNumber">Telephone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" placeholder="Ex: 0725905270" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com)" placeholder="Ex: yourname@gmail.com" required>

                <label for="inquiryType">Inquiry Type:</label>
                <select id="inquiryType" name="inquiryType" required>
                    <option value="general">General Inquiry</option>
                    <option value="product">Product Information</option>
                    <option value="support">Customer Support</option>
                </select>

                <label for="message">Message (at least 6 words):</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <input type="submit" name="submit" value="Submit">
            </form>
        </section>
    </main>
    <footer>
        <div class="social-icons">
            <a href="#" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a>
        </div>
        <p>&copy; COPYRIGHT © 2024 ALL RIGHTS RESERVED BY SOUTHERN PEARL HOTELS<br>DEVELOPED BY ANIDHU_S</p>
    </footer>

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

    // Form submission handling
    if (isset($_POST['submit'])) {
        $customerName = $_POST['customerName'];
        $phoneNumber = $_POST['phoneNumber'];
        $email = $_POST['email'];
        $inquiryType = $_POST['inquiryType'];
        $message = $_POST['message'];

        // Insert data into the database
        $sql = "INSERT INTO contact (customerName, phoneNumber, email, inquiryType, message)
        VALUES ('$customerName', '$phoneNumber', '$email', '$inquiryType', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Your message has been submitted successfully! We will get back to you soon.');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close database connection
    $conn->close();
    ?>

<script>
        function validateForm() {
            var customerName = document.getElementById("customerName").value;
            var phoneNumber = document.getElementById("phoneNumber").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;
            
            if (customerName.trim() == "") {
                alert("Please enter your name");
                return false;
            }
            if (!(/^\d{10}$/.test(phoneNumber))) {
                alert("Please enter a valid 10-digit phone number");
                return false;
            }
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                alert("Please enter a valid email address");
                return false;
            }
            if (message.trim().split(/\s+/).length < 6) {
                alert("Message should contain at least 6 words");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>