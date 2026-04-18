<?php
/**
 * Page: About Us
 * Brand: Legacy Group for Trade LLC
 * Project: SURGE Egypt Official Agency
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="public/css/components.css">
    <link rel="stylesheet" href="public/css/base.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="public/image/favicon.svg" type="image/x-icon">
    <title>Legacy Trade</title>
</head>
<body>

    <?php require_once __DIR__ . "/src/view/NavBarView.php"; ?>
    <section class="sub-page-header">
        <h1>About Us</h1>
    </section>

    <?php require_once __DIR__ . "/src/view/MobileNavBarView.php"; ?>

    <div id="overlay" onclick="toggleMenu()"></div>
    <script src="public/scripts/sidemenu.js"></script>
    <div class="page-wrapper">
        
        <div class="story-container">
            <div class="text-column">
                <span class="section-label">Established 2026</span>
                <h2 class="main-heading">A New Era of Trade</h2>
                <p>
                    Founded in 2026, <strong>Legacy Group for Trade LLC</strong> was born from a commitment to excellence and a vision to bring the world’s most innovative products to the Egyptian market. We specialize in identifying premium brands that align with our core values of quality, integrity, and performance.
                </p>
                <p>
                    As the official agency and primary trader of <strong>SURGE</strong> in Egypt, we represent a legacy of precision. Our operations are built on the same high standards that led to the creation of SURGE, ensuring every product we distribute meets the rigorous expectations of our clients.
                </p>
            </div>
            <div class="image-column">
                <div class="story-image"></div>
            </div>
        </div>

        <h2 class="main-heading" style="text-align: center;">Why Partner with <span class="red-text">Legacy Group</span>?</h2>
        
        <div class="feature-grid">
            <div class="feature-card">
                <h3 class="feature-title">Strategic Distribution</h3>
                <p>We leverage a sophisticated logistics network to ensure our portfolio of products reaches every corner of the region with efficiency and care.</p>
            </div>
            <div class="feature-card">
                <h3 class="feature-title">Official Agency</h3>
                <p>As an authorized representative, we provide a direct link between global manufacturers and the Egyptian market, guaranteeing 100% authenticity.</p>
            </div>
            <div class="feature-card">
                <h3 class="feature-title">Expanding Portfolio</h3>
                <p>Beyond our flagship energy line, we are dedicated to sourcing diverse products that empower the modern lifestyle and drive market growth.</p>
            </div>
        </div>

    </div>

    <?php require_once __DIR__ . "/src/view/FooterView.php"; ?>
</body>
</html>