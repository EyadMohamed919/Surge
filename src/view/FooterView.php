<?php 
$pagesArray = [
    "index.php"=>'Home',
    "products.php" =>"Products",
    "news.php"=>"News",
    "distribute.php"=>"Distribute",
    "about.php"=>"About",
    "contact.php"=>"Contact",
    "login.php"=>"Login"
];

$pageName = basename($_SERVER['PHP_SELF']);

?>

<footer>
<img src="public/image/LegacyTradeWhiteLogo.svg" alt="">
    <div>
        <a href="<?php echo array_keys($pagesArray)[0]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[0]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[0]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[1]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[1]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[1]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[2]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[2]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[2]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[3]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[3]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[3]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[4]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[4]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[4]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[5]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[5]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[5]; ?></a>
        <a href="<?php echo array_keys($pagesArray)[6]; ?>" class="nav-link <?php echo ($pageName == array_keys($pagesArray)[6]) ? "active" : "" ?>"><?php echo array_values($pagesArray)[6]; ?></a>
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-square-instagram"></i></a>
        <a href=""><i class="fa-brands fa-square-x-twitter"></i></a>
        <a href=""><i class="fa-brands fa-youtube"></i></a>
    </div>
    <img id="eydos" src="public/image/PowerByED1.svg" alt="">
    <img id="eydos1" src="public/image/PowerByED.svg" alt="">

</footer>