<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test_db';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	
	if (!preg_match('/^[a-zA-Z0-9]{3,20}$/', $username)) {
		die('Must have no special characters and cannot contain spaces.');
	}
	
    if (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password)) {
        die('Password must be at least 8 characters long, include a letter, a number, and a special character.');
    }

	$sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "Username or email already exists.";
	} else {
		$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

		if ($conn->query($sql) === TRUE) {
			echo "Sign up successful!";
		} else {
			echo "Error: " . $conn->error;
		}
	}
}

$conn->close();
?>
