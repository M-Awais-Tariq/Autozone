<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php
    session_start();

    // Process checkout
    if (isset($_POST['checkout'])) {
        // Perform the necessary steps to complete the checkout process
        // ...

        // Clear the cart
        $_SESSION['cart'] = array();

        // Redirect to thank you page or order confirmation page
        header("Location: thank_you.php");
        exit();
    }
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Store</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="cart.php">
                    <i class="fas fa-shopping-cart"></i> Cart
                    <span class="badge badge-pill badge-primary">
                        <?php echo count($_SESSION['cart']); ?>
                    </span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Checkout Form -->
    <div class="container mt-4">
        <h2>Checkout</h2>
        <form method="post" action="thank_you.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" name="address" rows="3" required></textarea>
            </div>
            <button type="submit" name="checkout" class="btn btn-primary">Checkout</button>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>
