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

// Fetch items from the database
$sql = "SELECT * FROM furniture";
$result = $conn->query($sql);

// Check for query errors
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buy Products</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   
</head>
<body>
<header>
<nav>
    <ul>
    <li class="dropdown" id="sell-link">Sell
        <div class="dropdown-content">
                <div class="sub-dropdown">
                    <a href="sell_automobile.php">Automobile</a>
                  
                </div>
                <div class="sub-dropdown">
                    <a href="sell_electronics.php">Electronics</a>
                
                </div>
                <a href="sell_furniture.php">Furniture</a>
            </div>             
        </li>        <li class="dropdown" id="restaurant-link">Buy
            <div class="dropdown-content">
                <div class="sub-dropdown">
                    <a href="#">Automobile</a>
                    <div class="sub-dropdown-content">
                        <a href="toyato.php" id="toyato-link">Toyota</a>
                        <a href="Honda.php" id="Honda-link">Honda</a>
                    </div>
                </div>
                <div class="sub-dropdown">
                    <a href="#">Electronics</a>
                    <div class="sub-dropdown-content">
                    <a href="mobile.php" id="phones-link">Phones</a>
                        <a href="laptop.php" id="laptops-link">Laptops</a>
                    </div>
                </div>
                <a href="furniture.php">Furniture</a>
            </div>
        </li>
        <li><a href="cart.php" id="cart-link">Cart</a></li>
        <li><a href="mysale.php" id="mysale-link">Mysale</a></li>


    </ul>
</nav>
<script>
    // Get the current page's filename (e.g., "order.html")
    const currentPage = location.pathname.split('/').pop();

    // Map the filename to the corresponding link ID
    const pageToLinkId = {
        'sell_automobile.php':'sell-link',
       'sell_electronics.php':'sell-link',
       'sell_furniture.php':'sell-link',
        'furniture.php': 'restaurant-link',
        'cart.php': 'cart-link',
        'toyato.php': 'restaurant-link',
        'Honda.php': 'restaurant-link',
        'mobile.php': 'restaurant-link',
        'laptop.php': 'restaurant-link',
    };

    // Get the corresponding link ID for the current page
    const currentLinkId = pageToLinkId[currentPage];

    // Add the "active" class to the current link
    if (currentLinkId) {
        document.getElementById(currentLinkId).classList.add('active');
    }
</script>
       
<nav> 
        <ul>
        <a style="color: white; font-weight: bold; font-size: 16px;" href="index.php">Logout</a>
        </ul>
</nav>
    </header>
    <div class="container">
    <?php
if ($result->num_rows > 0) {
    echo '<div class="container">';
    while ($row = $result->fetch_assoc()) {
        // Display each item in a box
        echo '<div class="item">';
        echo '<img src="' . $row["image_url"] . '" alt="' . $row["name"] . '"><br>';
        echo '<h2>' . $row["name"] . '</h2><br>';
        echo '<p>' . $row["description1"] . '</p><br>';
        echo '<p>' . $row["description2"] . '</p><br>';
        echo '<p>Price: ' . $row["price"] . '</p><br>';
        echo '<form method="post" action="insert.php">';
        
        echo '<input type="hidden" name="item_name" value="' . $row["name"] . '">';
        echo '<input type="hidden" name="item_description1" value="' . $row["description1"] . '">';
        echo '<input type="hidden" name="item_description2" value="' . $row["description2"] . '">';
        echo '<input type="hidden" name="item_price" value="' . $row["price"] . '">';
        echo '<input type="hidden" name="item_image" value="' . $row["image_url"] . '">';

        echo '<input type="submit" name="add_to_cart" value="Add to Cart">';
        echo '</form>';        echo '</div>';
    }
    echo '</div>'; // Close the container
} else {
    echo 'No items available.';
}
?>

    </div>
    <style>
        .container{
        gap:150px;
        }
        img{
            width:200px;
        }
    </style>
</body>
</html>
