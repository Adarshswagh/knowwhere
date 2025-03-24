<?php
// Enable public caching and start session
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();

// Include configuration for the database connection
include("config.php");

// Sanitize and validate inputs
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$contact = htmlspecialchars($_POST['contact'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

// Validate required fields
if (empty($name) || empty($email) || empty($contact) || empty($message)) {
    die("All fields are required.");
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

// Validate phone number format
if (!preg_match('/^\d{10}$/', $contact)) {
    die("Invalid contact number.");
}

// Insert data into the database
$sql = "INSERT INTO form_submissions (name, email, contact, message) VALUES (?, ?, ?, ?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $contact, $message);

if ($stmt->execute()) {
    echo "Form submitted successfully!"; // Exact message
} else {
    echo "Failed to submit the form.";
}


// Close the statement and connection
$stmt->close();
$con->close();
?>
