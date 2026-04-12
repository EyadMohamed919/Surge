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
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="company-name">Nexus Logistics</span>
                            <a href="https://nexus-example.com" class="website-link" target="_blank">nexus-example.com</a>
                        </td>
                        <td>John Doe</td>
                        <td>
                            <div class="contact-info"><i class="fa-solid fa-envelope"></i> j.doe@nexus.com</div>
                            <div class="contact-info"><i class="fa-solid fa-phone"></i> +1 555-0123</div>
                        </td>
                        <td><div class="message-preview">Interested in regional distribution for the West coast...</div></td>
                        <td><span class="status-badge">New</span></td>
                        <td>
                            <button class="action-btn" title="View Full Message"><i class="fa-solid fa-eye"></i></button>
                            <button class="action-btn" title="Delete"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </main>

</body>
</html>