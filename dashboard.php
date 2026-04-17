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
require_once __DIR__ . "/src/model/ContactModel.php";
require_once __DIR__ . "/src/model/DistributeModel.php";
require_once __DIR__ . "/src/view/DistributeView.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/adminCommon.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/dashboard.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="public/image/favicon.svg" type="image/x-icon">
    <title>Legacy Group | Dashboard</title>
</head>
<body>

    <?php require_once __DIR__ . "/src/view/SideAdminView.php"; ?>

    <main class="content">
        <header class="top-bar">
            <div class="welcome-msg">
                <h1>Welcome, <?php echo $FName; ?></h1>
                <p>Manage your Legacy Trade ecosystem and news updates.</p>
            </div>
            <div class="user-profile">
                <i class="fa-solid fa-circle-user fa-2xl" style="color: var(--primary-red);"></i>
            </div>
        </header>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-solid fa-paper-plane"></i></div>
                <div class="stat-info">
                    <h3><?php echo ContactModel::getContactCount(); ?></h3>
                    <p>New Inquiries</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><i class="fa-solid fa-handshake"></i></div>
                <div class="stat-info">
                    <h3><?php echo DistributeModel::getLeadCount(); ?></h3>
                    <p>Distribution Requests</p>
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
            <div class="table-container">
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
        </div>

        <div class="data-section">
            <div class="section-header">
                <h2>Distribution Requests</h2>
            </div>
            <div class="table-container">
                <table>
                <thead>
                        <tr>
                            <th>Company</th>
                            <th>Contact Person</th>
                            <th>Contact Details</th>
                            <th>Request Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        DistributeView::fetchTwoDistributeTable();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>