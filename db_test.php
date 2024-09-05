<?php
// Database credentials
$servername = "localhost";
$username = "root";  // default username for XAMPP/WAMP
$password = "";      // leave blank unless you set a password
$dbname = "user_registration"; // The database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
