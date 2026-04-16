<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['isLoggedIn']))
{
    header("location: login.php");
}
$FName = $_SESSION["userFName"];

require_once __DIR__ . "/src/view/ContactView.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/image/favicon.svg" type="image/x-icon">
    <title>Legacy Trade</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="public/css/adminContact.css">
</head>
<body>

    <?php require_once __DIR__ . "/src/view/SideAdminView.php"; ?>

    <main class="content">
        <div class="header-flex">
            <div>
                <h1>Contact Inquiries</h1>
                <p style="color: var(--text-gray);">Manage messages sent through the 'Get In Touch' form.</p>
            </div>
            <i class="fa-solid fa-circle-user fa-2xl" style="color: var(--primary-red);"></i>
        </div>

        <div class="inquiry-card">
            <div class="table-header">
                <h3>Incoming Messages</h3>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Sender</th>
                        <th>Message</th>
                        <th>Date Received</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php ContactView::fetchContactTable(); ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>