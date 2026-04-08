<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURGe Admin | News Manager</title>
    <link rel="stylesheet" href="public/css/adminNews.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="sidebar">
        <div class="sidebar-brand"></div>
        <ul class="nav-links">
            <li><a href="dashboard.php"><i class="fa-solid fa-gauge"></i> <span>Dashboard</span></a></li>
            <li><a href="adminNews.php" class="active"><i class="fa-solid fa-newspaper"></i> <span>News Articles</span></a></li>
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
        <div class="header-flex">
            <div>
                <h1>News Management</h1>
                <p style="color: var(--text-gray);">Compose and archive SURGe news updates</p>
            </div>
            <i class="fa-solid fa-circle-user fa-2xl" style="color: var(--primary-red);"></i>
        </div>

        <div class="form-card">
            <h2 style="margin-bottom: 1.5rem;"><i class="fa-solid fa-pen-nib"></i> Post New Article</h2>
            <form action="process_news.php" method="POST" enctype="multipart/form-data">
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
                <button type="submit" class="publish-btn">
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
                    <tr>
                        <td><img src="https://via.placeholder.com/60x40" class="article-thumb" alt="news"></td>
                        <td><strong>SURGe Logistics Update</strong></td>
                        <td>Oct 24, 2023</td>
                        <td style="color: var(--text-gray);">Expansion into new territories...</td>
                        <td class="actions">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="https://via.placeholder.com/60x40" class="article-thumb" alt="news"></td>
                        <td><strong>Q3 Financial Review</strong></td>
                        <td>Sep 15, 2023</td>
                        <td style="color: var(--text-gray);">Record breaking distribution...</td>
                        <td class="actions">
                            <i class="fa-solid fa-pen-to-square"></i>
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>