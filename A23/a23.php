<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$userName = $_POST['userName'];
$password = $_POST['password'];

// Validation rules
if (strlen($fullName) > 40) {
    die("Error: Full Name must be up to 40 characters long.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid Email Address.");
}

if (!preg_match("/^[a-zA-Z]+[0-9]+$/", $userName)) {
    die("Error: Username must start with a letter followed by a number.");
}

if (strlen($password) < 8) {
    die("Error: Password length must be more than eight characters.");
}

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO users (full_name, email, user_name, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $fullName, $email, $userName, $password);

// Execute the statement
if ($stmt->execute()) {
    echo "User registered successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$stmt->close();
$conn->close();
?>

