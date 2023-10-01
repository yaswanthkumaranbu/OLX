<?php
// Database connection details (modify these as per your database setup)
$host = "localhost";
$username = "root";
$password = "";
$database = "olx";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get item details from the form
    $itemName = $_POST["item_name"];
    $itemDescription1 = $_POST["item_description1"];
    $itemDescription2 = $_POST["item_description2"];
    $itemPrice = $_POST["item_price"];
    $itemImage = $_POST["item_image"];

    // Insert the item into the "cart" table
    $insertSql = "INSERT INTO sell (name, description1, description2, price, image_url) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertSql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}


    // Use "d" for binding the item_price parameter as a numeric value
    $stmt->bind_param("sssss", $itemName, $itemDescription1, $itemDescription2,$itemPrice, $itemImage);

    if ($stmt->execute()) {
        // Item added to cart successfully
        echo "<script>alert('Item added for sale!')
        window.location.href='Mysale.php';
        </script>";
    } else {
        echo "Error adding item to cart: " . $stmt->error;
    }
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
