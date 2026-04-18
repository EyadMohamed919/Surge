<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/contact.css">
    <link rel="stylesheet" href="public/css/components.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="public/image/favicon.svg" type="image/x-icon">
    <title>Legacy Group</title>
</head>
<body>
    <section class="sub-page-header">
        <?php require_once __DIR__ . "/src/view/NavBarView.php"; ?>
        <h1>Contact Us</h1>
    </section>

    <?php require_once __DIR__ . "/src/view/MobileNavBarView.php"; ?>
      
    <div id="overlay" onclick="toggleMenu()"></div>

    <section class="contact-section">
        <div class="form-description">
            <p>SURGE is committed to excellence in every can. If you need 
                assistance or have inquiries regarding our innovative 
                formulations, please use the form below to contact our support team.</p>

            <p id="mobile">If you need assistance or have inquiries regarding our innovative formulations, please use the form below to contact our support team.</p>
        </div>

        <div class="contact-container">
            <form action="src/router/ContactRouter.php" method="post">
                <h2>Get In Touch</h2>
                <hr>
                <div class="form-divider">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Full Name">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="phone" name="phone" placeholder="Phone">
                    <label for="phone">Phone</label>
                </div>


                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="" cols="30" rows="3" placeholder="Message"></textarea>
                </div>

                <button name="addContact">Submit</button>
            </form>

            <div class="contact-box">
                <div class="contact-card">
                    <h2>Contact Information</h2>
                    <hr>

                    <div>
                        <p><i class="fa-solid fa-phone"></i> +20116758841</p>
                        <p><i class="fa-solid fa-location-dot"></i> Sheikh Zayed, Giza</p>
                    </div>

                    <p><i class="fa-solid fa-at"></i> surgeenergy@gmail.com</p>
                </div>


                <div class="contact-card">
                    <h2>Business Hours</h2>
                    <hr>

                    <div id="hours">
                        <h3><p>SUN - THU</p> 10AM - 4PM</h3>
                        <h3><p>FRI - SAT</p> 12PM - 5PM</h3>
                    </div>

                </div>
            </div>


        </div>


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3568.259835964993!2d31.002639537231314!3d30.02068034229321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585b0525c31285%3A0xe916bcf3ee2db2ad!2sArkan%20Plaza!5e0!3m2!1sen!2seg!4v1775396216879!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
