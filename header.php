 <!-- Topbar Start -->
 <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>33 Street Kooh-E-Noor, Faisalabad, Pakistan</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    
                    <button class="btn btn-dark" onclick="myFunction()"><i class="bi bi-moon-fill"></i></button>
                    <script>
                        function myFunction() {
                           var element = document.body;
                           element.classList.toggle("dark-mode");
                        }
                        </script>
                        
                </div>
                
            </div>
            <div class="col-lg-5 px-5 text-end">
                
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    
                    <small>+012 345 6789</small>
                    
                    
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                    <div class="">
                        <p>Change Language:</p>
                        <div class="" id="google_translate_element"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<style>
    button.btn.btn-dark {
    border-radius: 30px;
    margin-left: 90px;
}

button.btn.border-danger.padding {
    margin-right: 30px;
}
</style>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top  p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>AutoZone</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a>
            <a href="about.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">About</a>
            <a href="service.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'service.php') ? 'active' : ''; ?>">Services</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.php" class="dropdown-item">Booking</a>
                        <a href="team.php" class="dropdown-item">Team</a>
                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="Contact.php" class="nav-item nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">Contact</a>
                
                    <!-- Cart start -->
                    <div id="cart nav-item nav-link mr-5">
                        <li class="nav-item dropdown">
                           <a class="nav-link" data-toggle="dropdown" href="#">
                            <i id="cart" class="bi bi-cart3"></i> 
                                <p class="total-cart"><span id="totalItems" >0</span></p>
                             <span class="badge badge-danger navbar-badge"></span>
                           </a>
                           
                           <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                             <a href="#" class="dropdown-item">
                               <!-- Message Start -->
                               <div class="media">
                                 <div class="media-body">
                                   
                                       <h2>Cart</h2>
                                       <ul id="cart-items"></ul>
                                       <div class="dropdown-divider"></div>
                                       <button class="btn btn-danger" id="clear-cart"><i class="bi bi-trash3"></i>Clear Cart</button>
                                       <button class="btn btn-success" onclick="redirectToPage()" ><i class="bi bi-cart3"></i>View Cart</button>
                                 </div>
                               </div>
                               <!-- Message End -->
                             </a>
                             </div>
                         </li>
                        </div>
                    <!-- cart end -->
                                            <script>
                        // Function to redirect to another page
                        function redirectToPage() {
                            // Set the desired URL of the page you want to redirect to
                            var targetUrl = "show_cart.php";

                            // Redirect to the target URL
                            window.location.href = targetUrl;
                        }
                        </script>
                    
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2 text-dark"></i>
                                
                            </a>
                            <?php
                                    if (isset($_SESSION['name'])) {
                                        $name = $_SESSION['name'];
                                        ?>
                                            <div class="info">
                                            <a href="#" class="d-block"><?php echo "$name!"; ?></a>
                                        </div>
                                        <?php
                                        //  echo "Welcome, $name!";
                                    } else {
                                        echo "Please log in to view this page.";
                                    }
                                    ?>
                            <ul class="bg-dark dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="text-white dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            <button class="btn border-danger "><a href="login.php" >Log In</a></button>
            <button class="btn border-danger padding"><a href="register.php" >Register<i class="fa fa-arrow-right ms-3"></i></a></button>
        </div>
    </nav>
    <!-- Navbar End -->