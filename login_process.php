<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default XAMPP/WAMP username
$password = "";     // Default password is empty
$dbname = "user_registration"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$user = $_POST['username'];
$pass = $_POST['password'];

// Check user credentials
$sql = "SELECT * FROM users WHERE username='$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        echo "Login successful!";
    } else {
        echo "Invalid password!";
    }
} else {
    echo "No such user found!";
}

// Close connection
$conn->close();
?>
