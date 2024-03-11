<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SOUTHERN PEARL HOTELS - FAQ</title>
    <style>
        .answer {
    display: none; /* Initially hide the answers */
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
        <section class="faq-section">
            <h2>Frequently Asked Questions</h2>

            <!-- Question 1 -->
            <div class="faq-item">
                <h3>What types of activities are available at Southern Pearl Hotel?</h3>
                <button class="toggle-answer">+</button>
                <p class="answer">Southern Pearl Hotel offers various activities such as beach exploration, surfing adventure, spa and wellness treatments, snorkeling, scuba diving, and glass-bottom boat rides.</p>
            </div>

            <!-- Question 2 -->
            <div class="faq-item">
                <h3>Can I organize special events at Southern Pearl Hotel?</h3>
                <button class="toggle-answer">+</button>
                <p class="answer">Yes, Southern Pearl Hotel provides ample space for hosting special events like birthday parties, office year-end parties, and other gatherings.</p>
            </div>

            <!-- Question 3 -->
            <div class="faq-item">
                <h3>What types of rooms are available at Southern Pearl Hotel?</h3>
                <button class="toggle-answer">+</button>
                <p class="answer">Southern Pearl Hotel offers 6 Deluxe Rooms, 5 Superior Rooms, and 6 Eco Budget Rooms, all facing the beautiful Hikkaduwa beach.</p>
            </div>

            <!-- Question 4 -->
            <div class="faq-item">
                <h3>How often should I clean my room during my stay?</h3>
                <button class="toggle-answer">+</button>
                <p class="answer">Housekeeping services are provided regularly to ensure a comfortable and clean stay. You can request room cleaning as needed.</p>
            </div>

            <!-- Question 5 -->
            <div class="faq-item">
                <h3>Are there dining options available at Southern Pearl Hotel?</h3>
                <button class="toggle-answer">+</button>
                <p class="answer">Yes, Southern Pearl Hotel offers dining facilities with a variety of culinary delights to cater to your taste preferences.</p>
            </div>

            <!-- Question 6 -->
            <div class="faq-item">
                <h3>Can I book tours and excursions through Southern Pearl Hotel?</h3>
                <button class="toggle-answer">+</button>
                <p class="answer">Yes, Southern Pearl Hotel can arrange tours and excursions to explore the local attractions and experiences.</p>
            </div>

            <!-- Add more questions based on the hotel's services -->

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

    <script>
        // JavaScript code for toggling answers
       document.addEventListener('DOMContentLoaded', function () {
    // Get all buttons with class "toggle-answer"
    var toggleButtons = document.querySelectorAll('.toggle-answer');

    // Loop through each button and add a click event listener
    toggleButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            // Find the corresponding answer element
            var answer = this.nextElementSibling;

            // Toggle the visibility of the answer
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
                this.textContent = '+';
            } else {
                answer.style.display = 'block';
                this.textContent = '-';
            }
        });
    });
});
    </script>
</body>
</html>
