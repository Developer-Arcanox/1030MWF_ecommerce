<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopNest - Modern Home Decor</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Ecommerce</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="category.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-outline-dark me-2"><i class="fas fa-search"></i></a>
                    <a href="{{ route('login.page') }}" class="btn btn-outline-dark me-2"><i class="fas fa-user"></i></a>
                    <a href="#" class="btn btn-outline-dark position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield("content")

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">Ecommerce</h5>
                    <p>Your one-stop shop for modern home decor and furniture. We offer high-quality products at affordable prices with exceptional customer service.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Shop</h6>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="category.php">All Products</a></li>
                        <li class="mb-2"><a href="#">New Arrivals</a></li>
                        <li class="mb-2"><a href="#">Best Sellers</a></li>
                        <li class="mb-2"><a href="#">Sale Items</a></li>
                        <li class="mb-2"><a href="#">Gift Cards</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold mb-3">Customer Service</h6>
                    <ul class="list-unstyled footer-links">
                        <li class="mb-2"><a href="contact.php">Contact Us</a></li>
                        <li class="mb-2"><a href="#">FAQs</a></li>
                        <li class="mb-2"><a href="#">Shipping Policy</a></li>
                        <li class="mb-2"><a href="#">Returns & Exchanges</a></li>
                        <li class="mb-2"><a href="#">Track Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h6 class="fw-bold mb-3">Contact Info</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> 123 Design Street, New Delhi, 110059</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +91: 9876543210</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> hello@ecommerce.com</li>
                        <li><i class="fas fa-clock me-2"></i> Mon-Fri: 9AM-6PM, Sat: 10AM-4PM</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0">&copy; 2025 Ecommerce. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small mb-0">
                        <a href="#" class="text-decoration-none me-2">Privacy Policy</a>
                        <a href="#" class="text-decoration-none me-2">Terms of Service</a>
                        <a href="#" class="text-decoration-none">Cookie Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>