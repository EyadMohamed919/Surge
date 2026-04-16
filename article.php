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
    <link rel="shortcut icon" href="public/image/favicon.svg" type="image/x-icon">
    <title>Legacy Trade</title>>
</head>
<body>
    <section class="sub-page-header">
        <?php require_once __DIR__ . "/src/view/NavBarView.php"; ?>
        <h1>News</h1>
    </section>

    <?php require_once __DIR__ . "/src/view/MobileNavBarView.php"; ?>
      
    <div id="overlay" onclick="toggleMenu()"></div>

    <section class="article-section">
        <div style="background-image: url('public/uploads/news/<?php echo $article->getImage(); ?>');"></div>
        <h4><i class="fa-regular fa-calendar-days"></i> <?php echo $article->getDate(); ?></h4>
        <h3><?php echo $article->getTitle(); ?></h3>
        <p><?php echo $article->getDescription(); ?></p>

            <a href="news.php" class="quick-button black-button bright-red-hover">Return to News</a>
    </section>

    

    <?php require_once __DIR__ . "/src/view/FooterView.php"; ?>
</body>
</html>