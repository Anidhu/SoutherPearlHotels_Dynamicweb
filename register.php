<?php
session_start();

// Include the database configuration file
include("config.php");

// Initialize variables
$username = $phone = $email = $password = $confirm_password = "";
$username_err = $phone_err = $email_err = $password_err = $confirm_password_err = $register_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $user_type = trim($_POST["user_type"]);
    $username = trim($_POST["username"]);
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
}

    // Validate input
    if (empty($username)) {
        $username_err = "Please enter a username.";
    }

    if (empty($phone)) {
        $phone_err = "Please enter a phone number.";
    } elseif (!preg_match("/^07\d{8}$/", $phone)) {
        $phone_err = "Invalid phone number format. Should start with 07 and have 10 digits.";
    }

    if (empty($email)) {
        $email_err = "Please enter an email address.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email address format.";
    }

    if (empty($password)) {
        $password_err = "Please enter a password.";
    } elseif (strlen($password) < 6) {
        $password_err = "Password must be at least 6 characters.";
    }

    if (empty($confirm_password)) {
        $confirm_password_err = "Please confirm your password.";
    } elseif ($password != $confirm_password) {
        $confirm_password_err = "Passwords do not match.";
    }
    $check_username_sql = "SELECT id FROM tbregistration WHERE username = '$username'";
    $check_email_sql = "SELECT id FROM tbregistration WHERE email = '$email'";

    $result_username = $conn->query($check_username_sql);
    $result_email = $conn->query($check_email_sql);

    if ($result_username->num_rows > 0) {
        $username_err = "Username already exists.";
    }

    if ($result_email->num_rows > 0) {
        $email_err = "Email address already exists.";
    }

    // Check for input errors before processing the registration

if (empty($username_err) && empty($phone_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
    // Perform SQL query to insert new user into users table
    $sql = "INSERT INTO tbregistration (username, phone, email, password, user_type) VALUES ('$username', '$phone', '$email', '$password', '$user_type')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful

        // Fetch the newly inserted user's ID
        $user_id = $conn->insert_id;

        // Insert into login table
        $login_sql = "INSERT INTO tblogin (user_id, username, password) VALUES ('$user_id', '$username', '$password')";
        $conn->query($login_sql);
        $conn->query($login_sql);

        // Set session variables for the logged-in user
        $_SESSION["username"] = $username;
        $_SESSION["user_type"] = $user_type;
        header("Location: index.php");
    } else {
        // Registration failed
        $register_err = "Error: " . $conn->error;
    }
}
// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Tourist Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Register</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
            <label for="user_type">User Type:</label>
            <select class="form-control" id="user_type" name="user_type" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="username" name="username" value="<?php echo $username; ?>" required>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                <span class="invalid-feedback"><?php echo $phone_err; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?php echo $email; ?>" required>
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="password" name="password" required>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" id="confirm_password" name="confirm_password" required>
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>

        <?php
        // Display registration error, if any
        if (!empty($register_err)) {
            echo '<div class="alert alert-danger">' . $register_err . '</div>';
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
