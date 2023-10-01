<!DOCTYPE html>
<html>
<head>
    <title>Sell Form</title>
    <link rel="stylesheet" type="text/css" href="sell_style.css">


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
        </li>
        <li class="dropdown" id="restaurant-link">Buy
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
    <!-- <h1>Enter Item Details</h1> -->
    <form action="sell_insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="item_name" placeholder="Enter car name (Maruthi 800)" required><br><br>

        <label for="description1">Description 1:</label>
        <textarea id="description1" name="item_description1" placeholder="(Model : 2023)"></textarea><br><br>

        <label for="description2">Description 2:</label>
        <textarea id="description2" name="item_description2"  placeholder="(Milage : 20KM)"></textarea><br><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="item_price" required  placeholder="(10 Lakhs)"><br><br>

        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="item_image" required  placeholder="(Toyoto/cruise.jpg)"><br><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>
