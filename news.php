<?php require_once __DIR__ . "/src/view/NewsView.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/news.css">
    <link rel="stylesheet" href="public/css/components.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <title>SURGE | News</title>
</head>
<body>
    <section class="sub-page-header">
        <?php require_once __DIR__ . "/src/view/NavBarView.php"; ?>
        <h1>News</h1>
    </section>

    <?php require_once __DIR__ . "/src/view/MobileNavBarView.php"; ?>
      
    <div id="overlay" onclick="toggleMenu()"></div>

    <section class="news-section">
        <h2 class="news-title">News & Activites</h2>
        <p>Check out the latest events and activites</p>
        <div class="scrollable-container">
            <?php NewsView::fetchNewsRecycler(); ?>
        </div>

    </section>

    <?php require_once __DIR__ . "/src/view/FooterView.php"; ?>

    <script src="public/scripts/video.js"></script>
    <script src="public/scripts/sidemenu.js"></script>
</body>
</html>