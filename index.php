<?php 
require_once __DIR__ . "/src/view/NewsView.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Elms+Sans:ital,wght@0,100..900;1,100..900&family=Maven+Pro:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/components.css">
    <link rel="stylesheet" href="public/css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/image/favicon.svg" type="image/x-icon">
    <title>Legacy Trade</title>
</head>
<body>
    <script src="public/scripts/video.js"></script>
    <script src="public/scripts/sidemenu.js"></script>
    <header>
        <?php require_once __DIR__ . "/src/view/NavBarView.php"; ?>

        <?php require_once __DIR__ . "/src/view/MobileNavBarView.php"; ?>
          
        <div id="overlay" onclick="toggleMenu()"></div>






        <div class="header-bottle" id="bottle1"></div>
        <div class="header-bottle" id="bottle2"></div>
        <div class="header-bottle" id="bottle3"></div>

        <div class="header-slogan"></div>
        <div class="header-slogan-1"></div>
        <div class="header-slogan-2"></div>

        <div class="quick-links">
            <a href="disribute.php" class="quick-button glass-panel red-hover">Distribute with Us</a>
            <a href="products.html" class="quick-button glass-panel red-hover">View Products</a>
        </div>
    </header>

    <section class="product-section">
        <h2 class="product-title">SURGE's Drinks</h2>
        <div class="horizontal-container mt-100 m-auto">

            <div class="product-card">
                <div class="product-background" id="productBackground3">

                    <div class="product-img" id="productImg3">
    
                    </div>
                </div>

                <h3>Classic Edition (355 ml)</h3>
                <p>110 Calories</p>
            </div>

            <div class="product-card">
                <div class="product-background" id="productBackground1">

                    <div class="product-img" id="productImg1">
    
                    </div>
                </div>

                <h3>Low Sugar Edition (355 ml)</h3>
                <p>50 Calories</p>
            </div>


            <div class="product-card">
                <div class="product-background" id="productBackground2">

                    <div class="product-img" id="productImg2">
    
                    </div>
                </div>

                <h3>Zero Sugar Edition (355 ml)</h3>
                <p>0 Calories</p>
            </div>
        </div>

        <div class="quick-links">
            <a href="products.html" class="quick-button black-button bright-red-hover">View Details</a>
        </div>
    </section>

    <section class="about-section">
        <h2 class="about-title">What is SURGE?</h2>

        <div class="red-line"></div>
        <div class="horizontal-container m-auto mt-50">
            <p class="left-text-container h-500">
                Founded on a vision in 2017 and officially 
                launched in 2023, SURGE Energy Drink is the 
                result of years of relentless innovation and
                over 18,600 consumer tests. By combining 
                cutting-edge research with real-world feedback, 
                we’ve crafted a beverage that transcends the 
                standard—delivering unmatched quality, performance, 
                and taste for those who demand excellence in every sip.
            </p>

            <video id="aboutVideo" class="about-video"  loop muted playsinline>
                Your browser does not support the video tag.
            </video>

            <div class="about-image"></div>
            <img class="about-image" src="public/image/Surge Main Logo.svg" alt="">
        </div>

        <div class="quick-links">
            <a href="about.html" class="quick-button white-button m-auto black-hover">View Details</a>
        </div>
    </section>


    <section class="news-section">
        <h2 class="news-title">News & Activites</h2>
        <p>Check out the latest events and activites</p>
        <div class="horizontal-container mt-40 mb-40">
            <?php NewsView::fetchFourNews();  ?>
        </div>

        <div class="quick-links">
            <a href="#" class="quick-button black-button bright-red-hover">More News</a>
        </div>
    </section>

    <?php require_once __DIR__ . "/src/view/FooterView.php"; ?>

</body>
</html>