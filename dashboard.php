<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['isLoggedIn']))
{
    header("location: login.php");
}
$FName = $_SESSION["userFName"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/dashboard.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <title>SURGE Admin | Dashboard</title>
</head>
<body>

    <nav class="sidebar">
        <div class="sidebar-brand"></div>
        <ul class="nav-links">
            <li><a href="dashboard.php" class="active"><i class="fa-solid fa-gauge"></i> <span>Dashboard</span></a></li>
            <li><a href="adminNews.php"><i class="fa-solid fa-newspaper"></i> <span>News Articles</span></a></li>
            <li><a href="#"><i class="fa-solid fa-envelope"></i> <span>Inquiries</span></a></li>
            <li><a href="#"><i class="fa-solid fa-truck-ramp-box"></i> <span>Distributors</span></a></li>
            <li><a href="#"><i class="fa-solid fa-gear"></i> <span>Settings</span></a></li>
        </ul>
        <div class="logout-area">
            <a href="logout.php" style="color: var(--text-gray); text-decoration: none; padding-left: 1rem;">
                <i class="fa-solid fa-right-from-bracket"></i> <span>Logout</span>
            </a>
        </div>
    </nav>

    <main class="content">
        <header class="top-bar">
            <div class="welcome-msg">
                <h1>Welcome, <?php echo $FName; ?></h1>
                <p>Manage your SURGe ecosystem and news updates.</p>
            </div>
            <div class="user-profile">
                <i class="fa-solid fa-circle-user fa-2xl" style="color: var(--primary-red);"></i>
            </div>
        </header>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-solid fa-paper-plane"></i></div>
                <div class="stat-info">
                    <h3>24</h3>
                    <p>New Inquiries</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-solid fa-handshake"></i></div>
                <div class="stat-info">
                    <h3>12</h3>
                    <p>Partner Requests</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-solid fa-file-pen"></i></div>
                <div class="stat-info">
                    <h3>156</h3>
                    <p>News Articles</p>
                </div>
            </div>
        </div>

        <div class="data-section">
            <div class="section-header">
                <h2>Recent News</h2>
                <button class="btn-new"><i class="fa-solid fa-plus"></i> Add Article</button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Article Title</th>
                        <th>Date Published</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Global Distribution Network Expanding</td>
                        <td>Oct 24, 2023</td>
                        <td><span class="status-pill">Published</span></td>
                        <td class="actions">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>SURGe Partnership Summit 2024</td>
                        <td>Oct 20, 2023</td>
                        <td><span class="status-pill">Draft</span></td>
                        <td class="actions">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="data-section">
            <div class="section-header">
                <h2>Distribution Requests</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Location</th>
                        <th>Request Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>LogiTech Solutions</td>
                        <td>Berlin, DE</td>
                        <td>Bulk Distribution</td>
                        <td><span class="status-pill">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>