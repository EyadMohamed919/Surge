<?php
$pageName = basename($_SERVER['PHP_SELF']);
$pagesArray = [
    "dashboard.php"=>'<i class="fa-solid fa-gauge"></i> <span>Dashboard</span>', 
    "adminNews.php"=>'<i class="fa-solid fa-newspaper"></i> <span>News Articles</span>',
    "adminDistribute.php"=>'<i class="fa-solid fa-truck-ramp-box"></i> <span>Distributors</span>',
    "adminContact.php"=>'<i class="fa-solid fa-envelope"></i> <span>Inquiries</span>',
    "settings.php"=>'<i class="fa-solid fa-gear"></i> <span>Settings</span>'
];

echo '<nav class="sidebar">
<input type="checkbox" id="nav-toggle" style="display: none;">
<label for="nav-toggle" class="hamburger">
    <i class="fa-solid fa-bars"></i>
</label>

<div class="sidebar-brand"></div>
<ul class="nav-links">';
foreach ($pagesArray as $page => $value) {
    if($pageName == $page)
    {
        echo '<li><a class="active" href="' . $page . '">' . $value .  '</a>';
    }
    else
    {
        echo '<li><a href="' . $page . '">' . $value .  '</a>';
    }
}

echo '
</ul>
        <div class="logout-area">
            <a href="logout.php" style="color: var(--text-gray); text-decoration: none; padding-left: 1rem;">
                <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
            </a>
        </div>
    </nav>
'
?>