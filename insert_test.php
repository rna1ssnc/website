<?php
// Database connection details
$servername = "localhost";
$username = "root";  // Default username
$password = "";      // Default password is empty
$dbname = "user_registration"; // The database you created earlier

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert a test user into the 'users' table
$sql = "INSERT INTO users (username, email, password) VALUES ('test_user', 'test@example.com', '" . password_hash('password123', PASSWORD_DEFAULT) . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
