<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url('first.jpg')no-repeat center center fixed;
    -webkit-background-size: cover;

    font-family: sans-serif;
}
        /* Style for the welcome message */
        .welcome {
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            padding: 10px; /* Add padding to the welcome message */
            border-radius: 5px; /* Rounded corners for the welcome message */
            color:white;
        }

        /* Center the link containers on the page */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh; /* Vertically center content */
           
        }

        /* Style each link container */
        .link-container {
            background-color: #f5f5f5;
            border: 2px solid #ddd;
            padding: 20px; /* Increase padding for larger size */
            display: inline-block;
            border-radius: 5px;
            margin: 10px; /* Add margin for spacing between containers */
        }

        /* Style the links */
        .link-container a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            font-size: 24px; /* Increase font size for larger text */
        }

        /* Change link color on hover */
        .link-container a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    // Check if the 'name' query parameter is set in the URL
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo '<div class="welcome">Welcome, ' . htmlspecialchars($name) . '!</div>';
    }
    ?>

    <div class="container">
        <div class="link-container">
            <a href="toyato.php">Buy</a>
        </div>
        <div class="link-container">
            <a href="sell_automobile.php">Sale</a>
        </div>
    </div>
</body>
</html>
