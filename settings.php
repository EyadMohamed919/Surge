<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['isLoggedIn']))
{
    header("location: login.php");
}
$FName = $_SESSION["userFName"];

require_once __DIR__ . "/src/view/UserView.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/image/favicon.svg" type="image/x-icon">
    <title>Legacy Group</title>
    <link rel="stylesheet" href="public/css/adminNews.css">
    <link rel="stylesheet" href="public/css/adminCommon.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once __DIR__ . "/src/view/SideAdminView.php"; ?>

    <main class="content">
        <div class="header-flex">
            <div>
                <h1>User Management</h1>
                <p style="color: var(--text-gray);">Add new user</p>
            </div>
            <i class="fa-solid fa-circle-user fa-2xl" style="color: var(--primary-red);"></i>
        </div>

        <div class="form-card">
            <h2 style="margin-bottom: 1.5rem;"><i class="fa-solid fa-pen-nib"></i> Add User</h2>
            
            <form action="src/router/UserRouter.php" method="POST" enctype="multipart/form-data">
                <div class="form-grid"> 
                    <div class="form-group">
                        <label for="title">First Name</label>
                        <input  type="text" id="title" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Last Name</label>
                        <input  type="text" id="date" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group full-width">
                        <label for="image">Email</label>
                        <input  type="email" name="email" placeholder="example@legacygroup.com" required>
                    </div>
                    <div class="form-group full-width">
                        <label for="description">Password</label>
                        <input  type="password" name="password" placeholder="*******" required>
                    </div>
                </div>

                <button type="submit" name="addUser" class="publish-btn">
                    <i class="fa-solid fa-paper-plane"></i> Add User
                </button>
            </form>

            
        </div>

        <div class="history-section">
            <div class="section-title">Current Admin Users</div>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        UserView::fetchAllUsers();
                        ?>                    
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</body>
</html>