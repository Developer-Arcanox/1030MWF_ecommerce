@extends("layouts.master")

@section("content")
<!-- Hero Carousel -->
<section class="hero-section">
    <div class="container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner rounded-3">
                <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1556905055-8f358a7a47b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Summer Collection 2023</h2>
                        <p>Discover our new arrivals with up to 40% discount</p>
                        <a href="#" class="btn btn-primary btn-lg">Shop Now</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Premium Home Decor</h2>
                        <p>Transform your living space with our exclusive collection</p>
                        <a href="#" class="btn btn-primary btn-lg">Explore</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1556909212-d5b604d0c90d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Limited Time Offer</h2>
                        <p>Get free shipping on all orders over $50 this weekend only</p>
                        <a href="#" class="btn btn-primary btn-lg">Shop the Sale</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Shop by Category</h2>
                <p class="text-muted">Browse our wide selection of products</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="category-img w-100" alt="Furniture">
                    <div class="card-body text-center">
                        <h5 class="card-title">Furniture</h5>
                        <a href="#" class="btn btn-outline-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="category-img w-100" alt="Lighting">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lighting</h5>
                        <a href="#" class="btn btn-outline-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1565538810643-b5bdb714032a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="category-img w-100" alt="Decor">
                    <div class="card-body text-center">
                        <h5 class="card-title">Home Decor</h5>
                        <a href="#" class="btn btn-outline-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Featured Products</h2>
                <p class="text-muted">Our most popular items this season</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-card card h-100">
                    <span class="badge badge-discount badge-pill py-2 px-3">-20%</span>
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="product-img card-img-top" alt="Product 1">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Sofa</span>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Modern Velvet Sofa</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-decoration-line-through text-muted me-2">$599</span>
                                <span class="fw-bold text-primary">$479</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-card card h-100">
                    <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="product-img card-img-top" alt="Product 2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Chair</span>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Minimalist Wooden Chair</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="fw-bold text-primary">$149</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-card card h-100">
                    <span class="badge badge-discount badge-pill py-2 px-3">-15%</span>
                    <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="product-img card-img-top" alt="Product 3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Table</span>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Glass Coffee Table</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-decoration-line-through text-muted me-2">$299</span>
                                <span class="fw-bold text-primary">$254</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-card card h-100">
                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="product-img card-img-top" alt="Product 4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Lamp</span>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <h5 class="card-title">Industrial Floor Lamp</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="fw-bold text-primary">$89</span>
                            </div>
                            <button class="btn btn-sm btn-outline-primary"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-primary btn-lg">View All Products</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">What Our Customers Say</h2>
                <p class="text-muted">Trusted by thousands of happy customers</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded-circle" width="80" alt="Customer">
                        </div>
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="card-text">"The quality of the furniture exceeded my expectations. Delivery was fast and the assembly was straightforward. Will definitely shop here again!"</p>
                        <h6 class="card-title mt-3">Sarah Johnson</h6>
                        <p class="text-muted small">New York, NY</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded-circle" width="80" alt="Customer">
                        </div>
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="card-text">"I love my new coffee table! The glass top is thick and durable, and the metal frame is sturdy. Customer service was very helpful with my questions."</p>
                        <h6 class="card-title mt-3">Michael Chen</h6>
                        <p class="text-muted small">Los Angeles, CA</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80" class="rounded-circle" width="80" alt="Customer">
                        </div>
                        <div class="text-warning mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p class="card-text">"The lamp I ordered is perfect for my living room. It arrived well-packaged and was exactly as shown on the website. Great value for the price!"</p>
                        <h6 class="card-title mt-3">Emily Rodriguez</h6>
                        <p class="text-muted small">Chicago, IL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="newsletter-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="mb-3">Subscribe to Our Newsletter</h2>
                <p class="mb-4">Get the latest updates on new products and upcoming sales</p>
                <form class="row g-2">
                    <div class="col-8">
                        <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button>
                    </div>
                </form>
                <p class="small mt-3">We respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>
    </div>
</section>
@endsection