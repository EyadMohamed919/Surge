<?php 
require_once __DIR__ . "/src/model/NewsModel.php";
$NewsModel = new NewsModel();
$article = $NewsModel->getNewsById($_GET["id"]);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/article.css">
    <link rel="stylesheet" href="public/css/components.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <title>SURGE | News</title>
</head>
<body>
    <section class="sub-page-header">
        <nav class="main-nav glass-panel">
            <div class="links-container">
                <a href="index.html" class="nav-link ">Home</a>
                <a href="products.html" class="nav-link active">Products</a>
                <a href="news.html" class="nav-link">News</a>
            </div>

            <img src="public/image/Surge Main Logo.svg" alt="">

            <div>
                <a href="distribute.html" class="nav-link">Distribute</a>
                <a href="about.html" class="nav-link">About</a>
                <a href="contact.html" class="nav-link ">Contact</a>
            </div>

            <button class="burger-menu" onclick="toggleMenu()">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>
        <h1>News</h1>
    </section>

    <!-- Sidemenu -->
    <nav id="side-menu" class="side-menu">
        <!-- <button class="close-btn" onclick="toggleMenu()"><i class="fa-regular fa-circle-xmark"></i></button> -->
        <a href="index.html">Home</a>
        <a href="products.html">Products</a>
        <a href="distribute.html">Distribute</a>
        <a href="#">News</a>
        <a href="contact.html">Contact</a>
        <a href="#">About</a>
    </nav>
      
    <div id="overlay" onclick="toggleMenu()"></div>

    <section class="article-section">
        <div style="background-image: url('public/uploads/news/<?php echo $article->getImage(); ?>');"></div>
        <h4><i class="fa-regular fa-calendar-days"></i> <?php echo $article->getDate(); ?></h4>
        <h3><?php echo $article->getTitle(); ?></h3>
        <p><?php echo $article->getDescription(); ?></p>

            <a href="index.php" class="quick-button black-button bright-red-hover">Return to Homepage</a>
    </section>

    

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