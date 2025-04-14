<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | ModernShop</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
</head>

<body>
    <div class="register-container">
        <!-- Left Side - Visual Content -->
        <div class="register-left">
            <div class="register-left-content">
                <h1 class="mb-4">Join Our Community!</h1>
                <p class="mb-5">Create an account to unlock personalized shopping experiences and exclusive benefits.</p>

                <ul class="feature-list">
                    <li>
                        <i class="fas fa-tag"></i>
                        <div>
                            <h5>Exclusive Offers</h5>
                            <p>Get access to members-only discounts and promotions</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-shipping-fast"></i>
                        <div>
                            <h5>Faster Checkout</h5>
                            <p>Save your details for quick and easy purchases</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-heart"></i>
                        <div>
                            <h5>Wishlist</h5>
                            <p>Save your favorite items and get notified when they go on sale</p>
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-history"></i>
                        <div>
                            <h5>Order Tracking</h5>
                            <p>Easily track your orders and view purchase history</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Right Side - Registration Form -->
        <div class="register-right">
            <div class="register-form-container">
                <div class="logo">ModernShop</div>
                <h2 class="register-title">Create Your Account</h2>

                <form id="registrationForm" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="firstName" placeholder="Enter your first name" required>
                                <div class="invalid-feedback">Please enter your first name</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" id="lastName" placeholder="Enter your last name" required>
                                <div class="invalid-feedback">Please enter your last name</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                        <div class="invalid-feedback">Please enter a valid email address</div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="password-input-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Create a password" required>
                            <span class="password-toggle" id="togglePassword">
                                <i class="far fa-eye"></i>
                            </span>
                        </div>
                        <div class="password-strength">
                            <div class="password-strength-bar" id="passwordStrengthBar"></div>
                        </div>
                        <ul class="password-requirements" id="passwordRequirements">
                            <li><i class="fas fa-circle requirement-not-met" id="lengthReq"></i> At least 8 characters</li>
                            <li><i class="fas fa-circle requirement-not-met" id="numberReq"></i> Contains a number</li>
                            <li><i class="fas fa-circle requirement-not-met" id="upperReq"></i> Contains uppercase letter</li>
                            <li><i class="fas fa-circle requirement-not-met" id="specialReq"></i> Contains special character</li>
                        </ul>
                        <div class="invalid-feedback">Password must meet all requirements</div>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <div class="password-input-group">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
                            <span class="password-toggle" id="toggleConfirmPassword">
                                <i class="far fa-eye"></i>
                            </span>
                        </div>
                        <div class="invalid-feedback">Passwords do not match</div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Phone Number (Optional)</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
                        <small class="text-muted">For order updates and delivery notifications</small>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="termsCheck" required>
                        <label class="form-check-label" for="termsCheck">
                            I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                        </label>
                        <div class="invalid-feedback">You must agree to the terms and conditions</div>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="newsletterCheck">
                        <label class="form-check-label" for="newsletterCheck">
                            Subscribe to our newsletter for exclusive offers and updates
                        </label>
                    </div>

                    <button type="submit" id="registerSubmitBtn" class="btn btn-register mb-3">Create Account</button>

                    <div class="divider">or sign up with</div>

                    <button type="button" class="social-register-btn btn-google">
                        <i class="fab fa-google"></i> Google
                    </button>

                    <button type="button" class="social-register-btn btn-facebook">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </button>

                    <div class="register-footer">
                        Already have an account? <a href="{{ route('login.page') }}">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/register.js') }}"></script>
</body>

</html>