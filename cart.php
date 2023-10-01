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
$sql = "SELECT * FROM cart";
$result = $conn->query($sql);


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
    <li class="dropdown" id="restaurant-link">Sell
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
        '#': 'restaurant-link',
        'furniture.php': 'restaurant-link',
        'cart.php': 'cart-link',
        'toyato.php': 'toyato-link',
        'Honda.php': 'Honda-link',
        'mobile.php': 'phones-link',
        'laptop.php': 'laptops-link',
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
    <?php
if ($result->num_rows > 0) {
    echo '<div class="vetti"></div>';
    echo '<div class="container">';
    while ($row = $result->fetch_assoc()) {
        // Display each item in a box
        echo '<div class="item">';
        echo '<img src="' . $row["item_image"] .'"><br>';
        echo '<h2>' . $row["item_name"] . '</h2><br>';
        echo '<p>' . $row["item_description1"] . '</p><br>';
        echo '<p>' . $row["item_description2"] . '</p><br>';
        echo '<p>Price: ' . $row["item_price"] . '</p><br>';
        echo '<input type="submit" name="add_to_cart" onClick="openBuyForm()" value="Buy now"></input>';
        echo '  </div>';
    }
    echo '</div>'; // Close the container
    echo '<script>
    function openBuyForm() {
        var x=prompt("Please enter your mobile number to reach you:");
        if(x)
        alert("Well done we will call u soon!");
    }
    </script>';
    
} else {
    echo 'No items available.';
}
?>



<style>
      .vetti{
        padding:20px;
    }


   </style>



    <style>
        /* Style the container that holds the items */
.container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Three columns */
    grid-gap: 20px; /* Gap between items */
    padding:50px;
}

/* Style each item */
.item {
    border: 1px solid #ccc; /* Border for each item */
    margin-top:20px;

    padding: 60px; /* Padding inside each item */
}

/* Optional: Center-align item content */
.item img, .item h2, .item p, .item button {
    margin: 0 auto;
    text-align: center;
}
.item:hover {
    transform: scale(1.05); /* Scale up by 5% */
}

    </style>
    <style>
    .active {
    text-decoration: underline; /* Highlight color */
    color: #fff; /* Text color on highlight */
}

/* Style for other navigation items (optional) */
nav ul li {
    display: inline;
    margin-right: 20px;
}

</style>
</body>
</html>
