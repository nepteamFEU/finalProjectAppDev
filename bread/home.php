<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Shop - Bread Talks Funny</title>
    <link rel="stylesheet" href="styles.css">
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
        <section class="image-container">
            <img src="breads1.jpg" class="wiggle" alt="Bakery Items" />
            <img src="breads2.jpg" class="wiggle" alt="Bakery Items" />
            <img src="breads3.jpg" class="wiggle" alt="Bakery Items" />
        </section>
        <div class="shop-name">
            <h2>Absolute Bakery Hype</h2>
        </div>
        <section class="image-container">
            <img src="cust4.jpeg" class="wiggle" alt="Bakery Items" />
            <img src="cust6.jpg" class="wiggle" alt="Bakery Items" />
            <img src="cust5.jpeg" class="wiggle" alt="Bakery Items" />
        </section>
        <div class="shop-button">
            <a href="products.php"><button>Shop now!</button></a>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>
