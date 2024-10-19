<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test_db';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo "<h2>My Profile</h2>";
    echo "<p>Username: " . $user['username'] . "</p>";
    echo "<p>Email: " . $user['email'] . "</p>";
} else {
    echo "User not found.";
}

$conn->close();
?>
