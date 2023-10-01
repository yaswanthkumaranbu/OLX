<?php
session_start();

// Function to generate a unique user ID (you may use a more robust method in a real application)
function generateUniqueUserID() {
    return uniqid(); // Generates a unique ID based on the current timestamp
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulated user registration process
    // You would typically collect user data such as username, password, email, etc.

    // Generate a unique user ID
    $user_id = generateUniqueUserID();

    // Store user ID in the session
    $_SESSION['user_id'] = $user_id;

    // Get the 'uname' variable from the POST data
    $name = $_POST["uname"];

    // Redirect to 'first.php' with 'name' as a query parameter
    header("Location: first.php?name=" . urlencode($name));
    exit();
}
?>
