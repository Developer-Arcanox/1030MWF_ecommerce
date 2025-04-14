<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ModernShop</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <div class="login-container">
        <!-- Left Side - Visual Content -->
        <div class="login-left">
            <div class="login-left-content">
                <h1 class="mb-4">Welcome Back!</h1>
                <p class="mb-5">Login to access your personalized shopping experience, wishlist, and order history.</p>

                <ul class="feature-list">
                    <li>
                        <i class="fas fa-bolt"></i>
                        <div>
                            <h5>Fast Checkout</h5>
                            <p>Save your payment details for faster purchases</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-heart"></i>
                        <div>
                            <h5>Wishlist</h5>
                            <p>Save your favorite items for later</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-history"></i>
                        <div>
                            <h5>Order History</h5>
                            <p>Track your previous orders and reorder easily</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="login-right">
            <div class="login-form-container">
                <div class="logo">ModernShop</div>
                <h2 class="login-title">Sign in to your account</h2>

                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="password-input-group">
                            <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                            <span class="password-toggle" id="togglePassword">
                                <i class="far fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn btn-login mb-3">Sign In</button>

                    <div class="divider">or continue with</div>

                    <button type="button" class="social-login-btn btn-google">
                        <i class="fab fa-google"></i> Google
                    </button>

                    <button type="button" class="social-login-btn btn-facebook">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </button>

                    <div class="login-footer">
                        Don't have an account? <a href="{{ route('register.page') }}">Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>

</html>