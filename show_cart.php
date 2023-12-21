<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">


    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <?php
    session_start();

    include "header.php";
    ?>

   

    <!-- Cart Items -->
    <div class="container mt-4">
        <h2>Cart</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                        <td> New car</td>
                        <td>75,0000</td>
                        <td>1</td>
                        <td>
                            <a href="cart.php?remove_from_cart=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm">Remove</a>
                        </td>
                    </tr>
            </tbody>
        </table>
<?php  
$total_price = '750000' ;
?>
        <h4>Total Price: $75,0000</h4>

     
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
            <div class="form-group">
                <label for="email">Total Bill:</label>
                <input type="number" class="form-control" name="total" value="<?php echo $total_price; ?>" required>
            </div>
            <button type="submit" name="checkout" class="btn btn-primary">Checkout</button>
        </form>
    </div>
       <br><br>
    </div>

    <?php
    include "footer.php";
    ?>
  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->    <!-- Template Javascript -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>
        
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="js/main.js"></script>
    <script src="js/cart-toggle.js"></script>
    <script src="js/Add-to-cart.js"></script>
</body>
</html>
