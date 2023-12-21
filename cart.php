<!DOCTYPE html>
<html>
<head>
    <title>Add to Cart Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php
    session_start();
    // Initialize cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add product to cart
    if (isset($_POST['add_to_cart'])) {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_quantity = $_POST['product_quantity'];

        $product = array(
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'quantity' => $product_quantity
        );

        // Add product to cart
        array_push($_SESSION['cart'], $product);
    }

    // Remove product from cart
    if (isset($_GET['remove_from_cart'])) {
        $product_id = $_GET['remove_from_cart'];

        // Search for the product in the cart
        foreach ($_SESSION['cart'] as $key => $product) {
            if ($product['id'] == $product_id) {
                // Remove the product from the cart
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
    ?>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Store</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="show_cart.php">
                    <i class="fas fa-shopping-cart"></i> Cart
                    <span class="badge badge-pill badge-primary">
                        <?php echo count($_SESSION['cart']); ?>
                    </span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Product List -->
    <div class="container mt-4">
        <h2>Product List</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="product1.jpg" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Price: $10</p>
                        <form method="post">
                            <input type="hidden" name="product_id" value="1">
                            <input type="hidden" name="product_name" value="Product 1">
                            <input type="hidden" name="product_price" value="10">
                            <div class="form-group">
                                <label for="quantity">Quantity:</label>
                                <input type="number" class="form-control" name="product_quantity" value="1" min="1">
                            </div>
                            <button type="submit" name="add_to_cart" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Add more products here -->
        </div>
    </div>

    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>
