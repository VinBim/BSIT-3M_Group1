<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // If user is not logged in, redirect to login page
    header('Location: login.php');
    exit();
}

// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test_db';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

// Retrieve user data using the session user ID
$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the user info
    $user = $result->fetch_assoc();
    echo "<h2>My Profile</h2>";
    echo "<p>Username: " . $user['username'] . "</p>";
    echo "<p>Email: " . $user['email'] . "</p>";
    // Password is excluded from this output for security reasons
} else {
    echo "User not found.";
}

$conn->close();
?>
