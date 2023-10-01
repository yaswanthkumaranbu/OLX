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
$sql = "SELECT * FROM sell";
$result = $conn->query($sql);




// if(isset($GET['button_pressed'])){
//     $id=$D=GET['id'];
//     $sql1 = "Delete from sell where id='$id'";
// $result = $conn->query($sql1);
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buy Products</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 
</style>
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
        'mysale.php':'mysale-link',

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
    echo '<div class="vetti"';
    echo '</div>';
    echo '<div class="container">';
    while ($row = $result->fetch_assoc()) {
        // Display each item in a box
        echo '<div class="item">';
        echo '<img src="' . $row["image_url"] .'"><br>';
        echo '<h2>' . $row["name"] . '</h2><br>';
        echo '<p>' . $row["description1"] . '</p><br>';
        echo '<p>' . $row["description2"] . '</p><br>';
        echo '<p>Price: ' . $row["price"] . '</p><br>';
   



        echo '  </div>';
   
     
    }
 
    
} else {
    echo 'No items available.';
}

?>



<style>
    .vetti{
        padding:20px;
    }
    .container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Three columns */
    grid-gap: 20px; /* Gap between items */
    padding:50px;
    
}
    /* Style for items */
    .item {
        display: inline-block;
        margin: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        text-align: center;
        width: 200px;
    }

    .item img {
        max-width: 100%;
        height: auto;
    }

    .item h2 {
        font-size: 18px;
        margin: 10px 0;
    }

    .item p {
        font-size: 14px;
        margin: 5px 0;
    }

    .item button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
    }

    .item button:hover {
        background-color: #0056b3;
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
