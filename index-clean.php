<?php
// MVC Website Tune-Up - Cleaned & Modernized Index Page
// Project: MVC Website Tune-Up

// Simple cache control
header("Cache-Control: max-age=3600, must-revalidate");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Value Coupons - Save on Lowe's, Home Depot & More!</title>
    <meta name="description" content="Get instant access to coupons from Lowe's, Home Depot, and top retailers. Save big on your next purchase!">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 (Modern) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #1e3c72;
            --secondary: #2a5298;
            --accent: #ffd700;
            --dark: #333;
            --light: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 80px;
        }
        
        /* Navigation */
        .navbar {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .nav-link {
            color: white !important;
            font-weight: 500;
        }
        
        /* Hero Banner */
        .hero-banner {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 40px 20px;
            text-align: center;
            border-radius: 15px;
            margin: 20px 0;
        }
        
        .hero-banner h1 {
            font-size: 2rem;
            margin-bottom: 15px;
        }
        
        .hero-banner .btn-warning {
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 25px;
        }
        
        /* Coupon Cards */
        .coupon-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        
        .coupon-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .coupon-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .coupon-card a {
            text-decoration: none;
            color: var(--dark);
        }
        
        .coupon-card .discount-badge {
            background: #ffd700;
            color: #1e3c72;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 10px;
        }
        
        /* Info Box */
        .info-box {
            background-color: #fff9c4;
            padding: 20px;
            border-radius: 10px;
            margin: 30px 0;
            border-left: 4px solid #ffd700;
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 30px 0;
            margin-top: 50px;
        }
        
        footer a {
            color: #ccc;
            text-decoration: none;
            margin: 0 10px;
        }
        
        footer a:hover {
            color: white;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            body {
                padding-top: 60px;
            }
            
            .hero-banner h1 {
                font-size: 1.5rem;
            }
            
            .coupon-card {
                margin-bottom: 20px;
            }
        }
    </style>
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B1REKMBKX0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-B1REKMBKX0');
    </script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="https://morevaluecoupons.com">
            <i class="fas fa-tags"></i> More Value Coupons
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="https://morevaluecoupons.com/index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="https://morevaluecoupons.com/codes.php">Restaurant Savings</a></li>
                <li class="nav-item"><a class="nav-link" href="https://morevaluecoupons.com/faq.php">FAQ</a></li>
                <li class="nav-item"><a class="nav-link" href="https://morevaluecoupons.com/contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Banner - FREE Hotel Card -->
<div class="hero-banner">
    <div class="container">
        <h1>🎁 FREE Hotel Savings Card — Save $500 on Hotels!</h1>
        <p class="lead mb-4">Claim your free hotel savings card — over 1,000,000 hotels worldwide accept it! No purchase required.</p>
        <a href="https://morevaluecoupons.com/hotel-savings-page.html" class="btn btn-warning btn-lg">
            🎁 Claim Your Free Card Now
        </a>
    </div>
</div>

<!-- Main Content -->
<main class="container my-5">
    
    <!-- Info Box -->
    <div class="info-box">
        <h4><i class="fas fa-star text-warning"></i> Unlock Exclusive Savings!</h4>
        <p class="mb-0">Get instant access to a wide range of coupons from top retailers like Lowe's, Home Depot, and more! With our vast collection of coupons, you'll discover endless opportunities to save big on your next purchase. Start shopping smart and stretch your budget further with us!</p>
    </div>
    
    <!-- Lowe's Coupons -->
    <h2 class="mb-4"><i class="fas fa-home"></i> Lowe's Coupons</h2>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="coupon-card">
                <a href="https://morevaluecoupons.com/20perlowes.php">
                    <img src="https://morevaluecoupons.com/img/20perrewards.jpg" alt="20% Off Lowe's" class="img-fluid">
                    <div class="discount-badge">20% OFF</div>
                    <p class="mb-0">Lowe's InStore/Online<br><small>MyLowe's Reward Card Required</small></p>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="coupon-card">
                <a href="https://morevaluecoupons.com/lowes10pernolimit.php">
                    <img src="https://morevaluecoupons.com/img/10perNLreward.jpg" alt="10% Off Lowe's" class="img-fluid">
                    <div class="discount-badge">10% OFF</div>
                    <p class="mb-0">No Limit Coupon<br><small>Instore/Online</small></p>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="coupon-card">
                <a href="https://morevaluecoupons.com/lowes1020both.php">
                    <img src="https://morevaluecoupons.com/img/10off20.jpg" alt="$10 Off $20 Lowe's" class="img-fluid">
                    <div class="discount-badge">$10 OFF</div>
                    <p class="mb-0">$10 Off $20<br><small>InStore/Online</small></p>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="coupon-card">
                <a href="https://morevaluecoupons.com/20offpro.php">
                    <img src="https://morevaluecoupons.com/img/20100pro.jpg" alt="$20 Off Lowe's Pro" class="img-fluid">
                    <div class="discount-badge">$20 OFF</div>
                    <p class="mb-0">$100 Lowe's For Pros<br><small>Online/InStore</small></p>
                </a>
            </div>
        </div>
    </div>
    
    <div class="row g-4 mt-2">
        <div class="col-md-6 col-lg-3">
            <div class="coupon-card">
                <a href="https://morevaluecoupons.com/20offlowesboth.php">
                    <img src="https://morevaluecoupons.com/img/20100instore.jpg" alt="$20 Off Lowe's" class="img-fluid">
                    <div class="discount-badge">$20 OFF</div>
                    <p class="mb-0">$100 Lowe's Printable<br><small>InStore</small></p>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Home Depot Coupons -->
    <h2 class="mb-4 mt-5"><i class="fas fa-tools"></i> Home Depot Coupons</h2>
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="coupon-card">
                <a href="https://morevaluecoupons.com/hddecor.php">
                    <img src="https://morevaluecoupons.com/img/hddecor.jpg" alt="$10 Off Home Depot" class="img-fluid">
                    <div class="discount-badge">$10 OFF</div>
                    <p class="mb-0">Home Depot Home Decor<br><small>Online Coupon</small></p>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="coupon-card">
                <a href="https://morevaluecoupons.com/5off50.php">
                    <img src="https://morevaluecoupons.com/img/hd550.jpg" alt="$5 Off Home Depot" class="img-fluid">
                    <div class="discount-badge">$5 OFF</div>
                    <p class="mb-0">$50 Off Home Depot<br><small>InStore Printable</small></p>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="coupon-card">
                <a href="https://morevaluecoupons.com/hd25200.php">
                    <img src="https://morevaluecoupons.com/img/hd25200.jpg" alt="$25 Off Home Depot" class="img-fluid">
                    <div class="discount-badge">$25 OFF</div>
                    <p class="mb-0">$200 Off Home Depot<br><small>InStore Printable</small></p>
                </a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="coupon-card">
                <a href="https://morevaluecoupons.com/hd10off100.php">
                    <img src="https://morevaluecoupons.com/img/hd10.100.jpg" alt="$10 Off Home Depot" class="img-fluid">
                    <div class="discount-badge">$10 OFF</div>
                    <p class="mb-0">$100 Off Home Depot<br><small>InStore Printable</small></p>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Important Info -->
    <div class="info-box mt-5">
        <h4><i class="fas fa-info-circle text-primary"></i> Important Information</h4>
        <p class="mb-2"><strong>Your business is much appreciated!</strong> Every effort is made to provide 100% usable coupons & customer satisfaction.</p>
        <p class="mb-2"><strong>Fast Delivery:</strong> Coupons are sent within seconds after you order to the email address associated with your payment.</p>
        <p class="mb-0"><strong>Coupon Expiration:</strong> Plan to use them within 2 days of purchase. You are paying for our time and prompt service, not the actual coupons themselves.</p>
    </div>
    
</main>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p class="mb-3">
            <a href="https://morevaluecoupons.com/disclaimer.html">Disclaimer</a> |
            <a href="https://morevaluecoupons.com/privacy.html">Privacy</a> |
            <a href="https://morevaluecoupons.com/terms.html">Terms</a> |
            <a href="https://morevaluecoupons.com/contact.php">Contact Us</a>
        </p>
        <p class="mb-0">&copy; 2026 morevaluecoupons.com | All Rights Reserved</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>