<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/distribute.css">
    <link rel="stylesheet" href="public/css/components.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="public/image/favicon.svg" type="image/x-icon">
    <title>Legacy Group</title>
</head>
<body>
    <section class="sub-page-header">
        <?php require_once __DIR__ . "/src/view/NavBarView.php"; ?>
        <h1>Distribute</h1>
    </section>

    <?php require_once __DIR__ . "/src/view/MobileNavBarView.php"; ?>
      
    <div id="overlay" onclick="toggleMenu()"></div>

    <section class="form-section">
        <div class="form-description">
            <p>Join our mission to redefine the energy drink market. 
                We are looking for dedicated partners to help deliver 
                our premium, vitamin-enriched energy experience to a wider community.</p>

            <p id="mobile">Join our mission to redefine the energy drink market.</p>
        </div>


        <div class="horizontal-container w-100-percent">
            <div class="form-image">
    
            </div>
            <form action="src/router/DistributeRouter.php" method="post">
                <h2>Distribute with Us</h2>
                <div class="form-divider">
                    <div class="form-group">
                        <input type="text" name="fname" placeholder="First Name" required>
                        <label for="fname">First Name</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" placeholder="Last Name" required>
                        <label for="lname">Last Name</label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-group">
                    <input type="phone" name="phone" placeholder="Phone" required>
                    <label for="phone">Phone</label>
                </div>

                <div class="form-group">
                    <input type="text" name="cname" placeholder="Company Name" required>
                    <label for="cname">Company Name</label>
                </div>

                <div class="form-group">
                    <input type="url" name="cwebsite" placeholder="example.com" required>
                    <label for="cwebsite">Company Website</label>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="" cols="30" rows="3" placeholder="Message" required></textarea>
                </div>

                <button name="addDistribute">Submit</button>
            </form>
        </div>
    </section>

    <?php require_once __DIR__ . "/src/view/FooterView.php"; ?>

    <script src="public/scripts/sidemenu.js"></script>
    <?php 
        if(isset($_GET["status"]))
        {
            if($_GET["status"] == "success")
            {
                echo "
                <script>
                    alert('Form Submitted successfully');
                </script>
                ";
            }
            else
            {
                echo "
                <script>
                    alert('Failed to Submit Form');
                </script>
                ";
            }
        }
    ?>
</body>
</html>
