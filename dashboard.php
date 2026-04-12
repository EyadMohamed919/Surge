<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['isLoggedIn']))
{
    header("location: login.php");
}
$FName = $_SESSION["userFName"];

require_once __DIR__ . "/src/view/NewsView.php";
require_once __DIR__ . "/src/model/NewsModel.php";
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

    <?php require_once __DIR__ . "/src/view/SideAdminView.php"; ?>

    <main class="content">
        <header class="top-bar">
            <div class="welcome-msg">
                <h1>Welcome, <?php echo $FName; ?></h1>
                <p>Manage your SURGE ecosystem and news updates.</p>
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
                    <h3><?php echo NewsModel::getNumberOfNews(); ?></h3>
                    <p>News Articles</p>
                </div>
            </div>
        </div>

        <div class="data-section">
            <div class="section-header">
                <h2>Recent News</h2>
                <a href="adminNews.php" class="btn-new"><i class="fa-solid fa-plus"></i> Add Article</a>
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
                
                    <?php NewsView::fetchTwoNewsTable(); ?>
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