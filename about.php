<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="public/css/components.css">
    <link rel="stylesheet" href="public/css/base.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <title>SURGE Egypt</title>
</head>
<body>

    <section class="sub-page-header">
        <?php require_once __DIR__ . "/src/view/NavBarView.php"; ?>
        <h1>About</h1>
    </section>

    <?php require_once __DIR__ . "/src/view/MobileNavBarView.php"; ?>

    <div id="overlay" onclick="toggleMenu()"></div>
    <script src="public/scripts/sidemenu.js"></script>
    <div class="page-wrapper">
        
        <div class="story-container">
            <div class="text-column">
                <span class="section-label">Since 2017</span>
                <h2 class="main-heading">Our Journey</h2>
                <p>
                    Born from a vision in 2017 and launched in 2023, SURGE is the pride of Dubai. 
                    We spent years perfecting a formula that combines high performance with the highest 
                    standards of quality.
                </p>
                <p>
                    With over 18,600 tests conducted, we ensured that every can delivers a clean, 
                    refreshing boost without the jitteriness found in conventional drinks.
                </p>
            </div>
            <div class="image-column">
                <div class="story-image"></div>
            </div>
        </div>

        <h2 class="main-heading" style="text-align: center;">Why Choose <span class="red-text">SURGE</span>?</h2>
        
        <div class="feature-grid">
            <div class="feature-card">
                <h3 class="feature-title">Premium Blend</h3>
                <p>Formulated with taurine, caffeine, and 100% natural vitamins (B2, B3, B5, B6, B12, and C) sourced from real fruits.</p>
            </div>
            <div class="feature-card">
                <h3 class="feature-title">No Aftertaste</h3>
                <p>A meticulously crafted formula that provides an instant natural boost with zero artificial ingredients and no aftertaste.</p>
            </div>
            <div class="feature-card">
                <h3 class="feature-title">Health First</h3>
                <p>Designed to support mental focus and physical strength without increasing heart rate or causing cardiovascular strain.</p>
            </div>
        </div>

    </div>

    
    <footer>
        <img src="public/image/Surge Main Logo.svg" alt="">
        <div>
            <a href="index.html" class="nav-link ">Home</a>
            <a href="products.html" class="nav-link active">Products</a>
            <a href="news.html" class="nav-link">News</a>
            <a href="distribute.html" class="nav-link">Distribute</a>
            <a href="about.html" class="nav-link">About</a>
            <a href="contact.html" class="nav-link">Contact</a>
        </div>
    </footer>
</body>
</html>