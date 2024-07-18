<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Shop - Products</title>
    <link rel="stylesheet" href="styles2.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Shop Logo" />
        </div>
        <h1>Let's Get This Bread</h1>
        <div class="cart">
            <a href="cart.php"><img src="cart.png" alt="Cart Icon" /></a>
            <span>Welcome, <span id="username">User</span></span>
            <a href="logout.php">Logout</a>
        </div>
    </header>
    
    <main>
        <div class="table-container">
            <table>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <tr>
                    <td><img src="pandecoco.jpg" alt="Product 1"></td>
                    <td>Pan De Coco</td>
                    <td>Filipino soft, sweet yeast buns stuffed with sweetened grated coconut.</td>
                    <td>P50 (Pack)</td>
                    <td><a href="add_to_cart.php?product_id=1" class="buy-now">Buy Now</a></td>
                </tr>
                <tr>
                    <td><img src="pandesal.jpg" alt="Product 2"></td>
                    <td>Pandesal</td>
                    <td>A staple bread roll in the Philippines commonly eaten for breakfast. Made of flour, yeast, sugar, oil, and salt.</td>
                    <td>P20 (Bag)</td>
                    <td><a href="add_to_cart.php?product_id=2" class="buy-now">Buy Now</a></td>
                </tr>
                <tr>
                    <td><img src="garlic.jpg" alt="Product 3"></td>
                    <td>Garlic Bread</td>
                    <td>Bread topped with garlic, buttern and herbs. It is then either grilled until toasted or baked.</td>
                    <td>P80 (Pack/Bag)</td>
                    <td><a href="add_to_cart.php?product_id=3" class="buy-now">Buy Now</a></td>
                </tr>
                <tr>
                    <td><img src="sour.jpg" alt="Product 4"></td>
                    <td>Sourdough Bread</td>
                    <td>A naturally leavened bread that uses a fermented flour and water mixture. Has a tangy flavour and slightly chewy texture.</td>
                    <td>P200</td>
                    <td><a href="add_to_cart.php?product_id=4" class="buy-now">Buy Now</a></td>
                </tr>
                <tr>
                    <td><img src="ens.jpg" alt="Product 5"></td>
                    <td>Ensaymada</td>
                    <td>Localized pastry is a brioche baked with butter and topped with grated cheese and sugar.</td>
                    <td>P300 (box)</td>
                    <td><a href="add_to_cart.php?product_id=5" class="buy-now">Buy Now</a></td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>
