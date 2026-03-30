<?php
// Set appropriate headers to prevent caching
header("Cache-Control: no-cache, must-revalidate");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restaurant Coupons - MoreValueCoupons.com</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Righteous|Monoton&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

  <style>
    body {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 20px;
      text-align: center;
      color: #333;
    }
    
    /* Modern Scrolling Logo Banner */
    .logo-scroller {
      overflow: hidden;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      padding: 15px 0;
      margin: 20px 0;
      border-radius: 10px;
    }
    
    .logo-scroller-inner {
      display: flex;
      animation: scroll 30s linear infinite;
      width: max-content;
    }
    
    .logo-scroller:hover .logo-scroller-inner {
      animation-play-state: paused;
    }
    
    @keyframes scroll {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    
    .logo-scroller img {
      height: 40px;
      margin: 0 15px;
      border-radius: 5px;
    }
    
    /* Info Section */
    .info-section {
      background: #fff;
      padding: 20px;
      margin: 30px auto;
      max-width: 900px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: left;
      border-radius: 10px;
    }
    
    .info-section h4 {
      margin-bottom: 15px;
      color: #8C2212;
    }
    
    /* Coupon Grid */
    .coupon-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 20px;
      max-width: 1000px;
      margin: 0 auto 40px;
      padding: 20px;
    }
    
    .coupon-card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
      text-align: center;
    }
    
    .coupon-card:hover {
      transform: translateY(-5px);
    }
    
    .coupon-card h3 {
      font-size: 16px;
      margin-bottom: 10px;
      color: #333;
    }
    
    .coupon-card .btn {
      background: #dc3545;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
    }
    
    .coupon-card .btn:hover {
      background: #bb2d3b;
    }
    
    /* Footer */
    footer {
      margin-top: 40px;
      padding: 20px 0;
      background: #333;
      color: white;
    }
    
    /* Navigation */
    .main-nav {
      margin-bottom: 20px;
    }
    
    .main-nav a {
      margin: 0 15px;
      font-weight: bold;
      color: #1e3c72;
      text-decoration: none;
    }
    
    .main-nav a:hover {
      text-decoration: underline;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .logo-scroller img {
        height: 30px;
        margin: 0 10px;
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
  <!-- Logo -->
  <img src="https://morevaluecoupons.com/img/mvc207x75.png" alt="More Value Coupons Logo">

  <!-- Main Navigation -->
  <nav class="main-nav">
    <a href="https://morevaluecoupons.com/index.php">HOME</a> |
    <a href="https://morevaluecoupons.com/codes.php">RESTAURANT SAVINGS</a> |
    <a href="https://morevaluecoupons.com/faq.php">FAQ</a> |
    <a href="https://morevaluecoupons.com/contact.php">CONTACT US</a>
  </nav>

  <!-- Modern Scrolling Logo Banner -->
  <div class="logo-scroller">
    <div class="logo-scroller-inner">
      <!-- Double the logos for seamless scrolling -->
      <img src="https://morevaluecoupons.com/marq/paneram.jpg" alt="Panera">
      <img src="https://morevaluecoupons.com/marq/kfcm.jpg" alt="KFC">
      <img src="https://morevaluecoupons.com/marq/carlm.jpg" alt="Carl's Jr/Hardee's">
      <img src="https://morevaluecoupons.com/marq/tacom.jpg" alt="Taco">
      <img src="https://morevaluecoupons.com/marq/cookoutm.jpg" alt="Cook Out">
      <img src="https://morevaluecoupons.com/marq/bojanglesm.jpg" alt="Bojangles">
      <img src="https://morevaluecoupons.com/marq/qdobam.jpg" alt="Qdoba">
      <img src="https://morevaluecoupons.com/marq/habitm.jpg" alt="The Habit">
      <img src="https://morevaluecoupons.com/marq/burgerkingm.jpg" alt="Burger King">
      <img src="https://morevaluecoupons.com/marq/wendysm.jpg" alt="Wendy's">
      <img src="https://morevaluecoupons.com/marq/peiweim.jpg" alt="Pei Wei">
      <img src="https://morevaluecoupons.com/marq/cicism.jpg" alt="Cicis">
      <img src="https://morevaluecoupons.com/marq/zaxbysm.jpg" alt="Zaxby's">
      <img src="https://morevaluecoupons.com/marq/sheetzm.jpg" alt="Sheetz">
      <img src="https://morevaluecoupons.com/marq/fridaym.jpg" alt="TGIF">
      <img src="https://morevaluecoupons.com/marq/caferiom.jpg" alt="Cafe Rio">
      <img src="https://morevaluecoupons.com/marq/smokeym.jpg" alt="Smokey Bones">
      <img src="https://morevaluecoupons.com/marq/pizzahutm.jpg" alt="Pizza Hut">
      <img src="https://morevaluecoupons.com/marq/ihopm.jpg" alt="IHOP">
      <img src="https://morevaluecoupons.com/marq/longhornm.jpg" alt="LongHorn">
      <!-- Duplicate for seamless loop -->
      <img src="https://morevaluecoupons.com/marq/paneram.jpg" alt="Panera">
      <img src="https://morevaluecoupons.com/marq/kfcm.jpg" alt="KFC">
      <img src="https://morevaluecoupons.com/marq/carlm.jpg" alt="Carl's Jr/Hardee's">
      <img src="https://morevaluecoupons.com/marq/tacom.jpg" alt="Taco">
      <img src="https://morevaluecoupons.com/marq/cookoutm.jpg" alt="Cook Out">
      <img src="https://morevaluecoupons.com/marq/bojanglesm.jpg" alt="Bojangles">
      <img src="https://morevaluecoupons.com/marq/qdobam.jpg" alt="Qdoba">
      <img src="https://morevaluecoupons.com/marq/habitm.jpg" alt="The Habit">
      <img src="https://morevaluecoupons.com/marq/burgerkingm.jpg" alt="Burger King">
      <img src="https://morevaluecoupons.com/marq/wendysm.jpg" alt="Wendy's">
      <img src="https://morevaluecoupons.com/marq/peiweim.jpg" alt="Pei Wei">
      <img src="https://morevaluecoupons.com/marq/cicism.jpg" alt="Cicis">
      <img src="https://morevaluecoupons.com/marq/zaxbysm.jpg" alt="Zaxby's">
      <img src="https://morevaluecoupons.com/marq/sheetzm.jpg" alt="Sheetz">
      <img src="https://morevaluecoupons.com/marq/fridaym.jpg" alt="TGIF">
      <img src="https://morevaluecoupons.com/marq/caferiom.jpg" alt="Cafe Rio">
      <img src="https://morevaluecoupons.com/marq/smokeym.jpg" alt="Smokey Bones">
      <img src="https://morevaluecoupons.com/marq/pizzahutm.jpg" alt="Pizza Hut">
      <img src="https://morevaluecoupons.com/marq/ihopm.jpg" alt="IHOP">
      <img src="https://morevaluecoupons.com/marq/longhornm.jpg" alt="LongHorn">
    </div>
  </div>

  <h2 style="background: #ffd700; padding: 10px; border-radius: 5px; display: inline-block;">FREE COMBO & OTHER VALUABLE DISCOUNTS</h2>

  <!-- Introductory Text -->
  <section class="info-section">
    <h4>Almost like Eating FREE!</h4>
    <p>Enjoy great savings at many of your favorite restaurants. With prices rising and the value of our money decreasing, saving on meals is more important than ever. Our coupons are essentially "free meal" offers – physical coupons sent via US Postal Service for prompt delivery.</p>
    
    <h4>General Information Statement</h4>
    <p>In the US, the fast food sector is a multibillion-dollar industry, anticipated to earn $331 billion this year as it recovers from the global pandemic. Popular brands such as McDonald's, Burger King, Wendy's, Taco Bell, and KFC are found in almost every town. More popular brands are showcased below:</p>
  </section>

  <!-- Contact Info -->
  <section class="info-section" style="text-align: center;">
    <h4>Need to Order Multiple Coupons?</h4>
    <p>If you are ordering more than 2 or 3 different coupons, please reach out <strong>via email or text.</strong> Include your name, address, email address, and details of the products along with the quantities. Invoices are usually sent promptly.</p>
    <p><strong>Email:</strong> morevaluecoupons@gmail.com</p>
    <p><strong>Text:</strong> (910) 555-5555</p>
  </section>

  <p><em>Image resolution reduced for quicker load time and to prevent copying</em></p>
  <img src="https://morevaluecoupons.com/img/collectionimage.jpg" alt="Restaurant Collection" style="max-width:70%; height:auto; border-radius: 10px; margin: 20px 0;">

  <!-- Coupon Grid -->
  <h1>Currently Available</h1>
  <section class="coupon-grid">
    <div class="coupon-card">
      <h3>Kentucky Fried Chicken</h3>
      <p style="color: red; font-weight: bold;">Reduced Price!</p>
      <a class="btn" href="https://morevaluecoupons.com/kfc.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Panera Bread</h3>
      <a class="btn" href="https://morevaluecoupons.com/panera.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Panda Express</h3>
      <a class="btn" href="https://morevaluecoupons.com/panda.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Seven Brew Coffee</h3>
      <a class="btn" href="https://morevaluecoupons.com/7brew.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Olive Garden</h3>
      <a class="btn" href="https://morevaluecoupons.com/ogarden.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Red Lobster</h3>
      <a class="btn" href="https://morevaluecoupons.com/lobster.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>LongHorn Steakhouse</h3>
      <a class="btn" href="https://morevaluecoupons.com/longhorn.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Jack in the Box</h3>
      <a class="btn" href="https://morevaluecoupons.com/jack.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Carl Jr/Hardee's</h3>
      <a class="btn" href="https://morevaluecoupons.com/carl.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Taco Bell</h3>
      <a class="btn" href="https://morevaluecoupons.com/tacobell.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Cook Out</h3>
      <a class="btn" href="https://morevaluecoupons.com/cookout.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Bojangles</h3>
      <a class="btn" href="https://morevaluecoupons.com/bojangles.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>McAlister's</h3>
      <a class="btn" href="https://morevaluecoupons.com/mcalister.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Qdoba</h3>
      <a class="btn" href="https://morevaluecoupons.com/qdoba.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>The Habit</h3>
      <a class="btn" href="https://morevaluecoupons.com/habit.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Burger King</h3>
      <a class="btn" href="https://morevaluecoupons.com/burgerking.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Johnny Rockets</h3>
      <a class="btn" href="https://morevaluecoupons.com/rocket.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Pei Wei</h3>
      <a class="btn" href="https://morevaluecoupons.com/peiwei.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Cicis</h3>
      <a class="btn" href="https://morevaluecoupons.com/cicis.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Zaxby's</h3>
      <a class="btn" href="https://morevaluecoupons.com/zaxbys.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Sheetz</h3>
      <a class="btn" href="https://morevaluecoupons.com/sheetz.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>TGIF</h3>
      <a class="btn" href="https://morevaluecoupons.com/tgif.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Cafe Rio</h3>
      <a class="btn" href="https://morevaluecoupons.com/caferio.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Smokey Bones</h3>
      <a class="btn" href="https://morevaluecoupons.com/smokey.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Pizza Hut</h3>
      <a class="btn" href="https://morevaluecoupons.com/pizzahut.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>Wendy's</h3>
      <a class="btn" href="https://morevaluecoupons.com/wendy.php">Click Here</a>
    </div>
    <div class="coupon-card">
      <h3>IHOP</h3>
      <a class="btn" href="https://morevaluecoupons.com/ihop.php">Click Here</a>
    </div>
  </section>

  <!-- Contact Info -->
  <section class="info-section" style="text-align: center;">
    <h4>Need to Order Multiple Coupons?</h4>
    <p>If you are ordering more than 2 or 3 different coupons, please reach out via email or text. Include your name, address, email address, and details of the products along with the quantities. Invoices are usually sent promptly.</p>
    <p><strong>Email:</strong> morevaluecoupons@gmail.com</p>
    <p><strong>Text:</strong> (910) 555-5555</p>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2026 MoreValueCoupons.com | All Rights Reserved</p>
    <p>
      <a href="https://morevaluecoupons.com/disclaimer.html" style="color: #aaa;">Disclaimer</a> |
      <a href="https://morevaluecoupons.com/privacy.html" style="color: #aaa;">Privacy</a> |
      <a href="https://morevaluecoupons.com/terms.html" style="color: #aaa;">Terms</a> |
      <a href="https://morevaluecoupons.com/contact.php" style="color: #aaa;">Contact Us</a>
    </p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>