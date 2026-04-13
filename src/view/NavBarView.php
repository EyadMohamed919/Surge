<?php 
$pagesArray = [
    "index.php"=>'Home',
    "products.php" =>"Products",
    "news.php"=>"News",
    "distribute.php"=>"Distribute",
    "about.php"=>"About",
    "contact.php"=>"Contact"
];

$pageName = basename($_SERVER['PHP_SELF']);

?>

 
<nav class="main-nav glass-panel">
    <div class="links-container">
        <a href="<?php echo array_keys($pagesArray)[0]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[0]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[0]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[1]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[1]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[1]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[2]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[2]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[2]; ?></a>
    </div>

    <img src="public/image/Surge Main Logo.svg" alt="">

    <div>
        <a href="<?php echo array_keys($pagesArray)[3]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[3]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[3]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[4]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[4]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[4]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[5]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[5]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[5]; ?></a>
    </div>

    <button class="burger-menu" onclick="toggleMenu()">
        <i class="fa-solid fa-bars"></i>
    </button>
</nav>