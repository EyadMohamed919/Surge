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



echo '<nav id="side-menu" class="side-menu">';
foreach ($pagesArray as $key => $value) {
    echo '<a href="' . $key . '">' . $value . '</a>';
}    
echo '</nav>';

?>