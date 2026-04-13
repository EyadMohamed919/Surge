<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['isLoggedIn']))
{
    header("location: login.php");
}
$FName = $_SESSION["userFName"];

require_once __DIR__ . "/src/view/DistributeView.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURGE Admin | Distribution Leads</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/adminDistribute.css">
</head>
<body>

    <?php require_once __DIR__ . "/src/view/SideAdminView.php"; ?>

    <main class="content">
        <div class="header-flex">
            <div>
                <h1>Distribution Leads</h1>
                <p style="color: var(--text-gray);">Manage partnership applications and B2B requests</p>
            </div>
            <div class="user-meta">
                <span style="margin-right: 15px; color: var(--text-gray);">Admin Panel</span>
                <i class="fa-solid fa-circle-user fa-2xl" style="color: var(--primary-red);"></i>
            </div>
        </div>

        <div class="lead-card">
            <div class="table-header">
                <h3>Active Applications</h3>
                <div class="table-tools">
                    <button class="action-btn"><i class="fa-solid fa-download"></i> Export CSV</button>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Contact Person</th>
                        <th>Contact Details</th>
                        <th>Message</th>
                        <th>Request Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    DistributeView::fetchDistributeTable();
                    ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>