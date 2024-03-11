<?php
// Database configuration
 define('DB_SERVER','127.0.0.1');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_DATABASE','southernpearldbms');

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
