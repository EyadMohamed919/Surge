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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURGE Admin | News Manager</title>
    <link rel="stylesheet" href="public/css/adminNews.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once __DIR__ . "/src/view/SideAdminView.php"; ?>

    <main class="content">
        <div class="header-flex">
            <div>
                <h1>News Management</h1>
                <p style="color: var(--text-gray);">Compose and archive SURGE news updates</p>
            </div>
            <i class="fa-solid fa-circle-user fa-2xl" style="color: var(--primary-red);"></i>
        </div>

        <div class="form-card">
            <h2 style="margin-bottom: 1.5rem;"><i class="fa-solid fa-pen-nib"></i> Post New Article</h2>
            
            <form action="src/router/NewsRouter.php" method="POST" enctype="multipart/form-data">
                <div class="form-grid"> 
                    <div class="form-group">
                        <label for="title">Article Title</label>
                        <input type="text" id="title" name="title" placeholder="e.g. New Distribution Center Opening" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Publish Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="form-group full-width">
                        <label for="image">Featured Picture</label>
                        <input type="file" id="image" name="image" accept="image/*" required>
                    </div>
                    <div class="form-group full-width">
                        <label for="description">Short Description</label>
                        <textarea id="description" name="description" rows="5" placeholder="Write the article content here..." required></textarea>
                    </div>
                </div>
                <button type="submit" name="addNews" class="publish-btn">
                    <i class="fa-solid fa-paper-plane"></i> Publish Article
                </button>
            </form>
        </div>

        <div class="history-section">
            <div class="section-title">Published Articles History</div>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Preview</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    NewsView::fetchNewsTable();
                    ?>                    
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>