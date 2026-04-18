<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/base.css">
    <link rel="stylesheet" href="public/css/product.css">
    <link rel="stylesheet" href="public/css/components.css">
    <script src="https://kit.fontawesome.com/c19e8a164c.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="public/image/favicon.svg" type="image/x-icon">
    <title>Legacy Group</title>
</head>
<body>
    <section class="sub-page-header">
        <?php require_once __DIR__ . "/src/view/NavBarView.php"; ?>
        <h1>Products</h1>
    </section>

    <?php require_once __DIR__ . "/src/view/MobileNavBarView.php"; ?>
      
    <div id="overlay" onclick="toggleMenu()"></div>

    <section class="partner-section">
        <h2>Our Official Partners</h2>
        <div></div>
    </section>

    <section class="info-section">
        <h2>What's inside a SURGE can?</h2>
        <div class="info-container">
            <div class="info-box">
                <h3>GOOD FOR HEALTH</h3>
                <p>Unlike many conventional energy drinks, SURGE Energy Drink is thoughtfully formulated to provide natural energy without increasing heart rate. Our unique blend supports sustained vitality through fruit-based vitamins and balanced ingredients, avoiding artificial stimulants. SURGE delivers a smooth, steady boost that enhances performance and focus — without jitteriness or cardiovascular strain.</p>
            </div>
            <div class="faq-container">
    
                <details>
                    <summary>Vitamin C <i class="fa-solid fa-angle-down"></i></summary>
                    <div class="info-panel">
                        A powerful antioxidant included in our multivitamin blend to support your immune system and help <span class="highlight-text">fuel your body</span> with maximum energy.
                    </div>
                    </details>
                
                    <details>
                    <summary>B-Vitamin Complex (B2, B3, B5, B6, B12) <i class="fa-solid fa-angle-down"></i></summary>
                    <div class="info-panel">
                        These essential vitamins work together to convert nutrients into energy and <span class="highlight-text">elevate your brain's performance</span> to the next level.
                    </div>
                    </details>
                
                    <details>
                    <summary>Taurine <i class="fa-solid fa-angle-down"></i></summary>
                    <div class="info-panel">
                        Each can contains <span class="highlight-text">1000mg of Taurine</span>, an amino acid that supports neurological development and helps regulate water and mineral levels in the blood.
                    </div>
                    </details>
                
                    <details>
                    <summary>Caffeine <i class="fa-solid fa-angle-down"></i></summary>
                    <div class="info-panel">
                        With <span class="highlight-text">75mg per serving</span>, our caffeine content is precisely balanced to reduce fatigue and improve focus without the extreme jitters.
                    </div>
                    </details>
                
                    <details>
                    <summary>Zero Sugar / Low Sugar Options <i class="fa-solid fa-angle-down"></i></summary>
                    <div class="info-panel">
                        Our <strong>Prime</strong> and <strong>Zero Sugar</strong> editions are carefully crafted to provide an invigorating boost <span class="highlight-text">without blood sugar spikes</span> or excess calories.
                    </div>
                    </details>
                
            </div>
        </div>
    </section>


    <section class="product-section">

        <!-- PRIME EDITION -->
        <div class="product-container pl-20">
            <div id="image1" class="product-img mr-20"></div>
            <div id="details1" class="product-details left-border-radius-40">
                <h2>SURGE PRIME EDITION</h2>
                <h3>Redefining Energy, Prioritizing Wellness</h3>
                <p>Elevate Your Performance SURGE Prime Edition is a refined blend expertly 
                    crafted to fuel your body with maximum energy and elevate your brain's 
                    performance. By significantly reducing sugar levels, we’ve created a 
                    healthier source of vitality that supports a balanced lifestyle without 
                    compromising on flavor.</p>


                <table class="stats-table">
                    <tr>
                        <td class="label">Energy</td>
                        <td class="value">50 kcal </td>
                    </tr>
                    <tr>
                        <td class="label">Caffeine</td>
                        <td class="value">75 mg </td>
                    </tr>
                    <tr>
                        <td class="label">Taurine</td>
                        <td class="value">1000 mg </td>
                    </tr>
                    <tr>
                        <td class="label">Total Sugar</td>
                        <td class="value class="highlight"">12.5 g (Low Sugar)</td>
                    </tr>
                    <tr>
                        <td class="label">Vitamins</td>
                        <td class="value">C, B2, B3, B5, B6, B12</td>
                    </tr>
                    </table>
            </div>
        </div>


        <!-- ZERO SUGAR -->
        <div class="product-container pr-20 row-reverse">
            <div id="image2" class="product-img ml-20"></div>
            <div id="details2" class="product-details right-border-radius-40">
                <h2>SURGE ZERO SUGAR</h2>
                <h3>Zero Calories, Absolute Power</h3>
                <p>
                    Our formula is carefully crafted without any added sugars, providing a clean and sustained energy boost 
                    without the excess calories or blood sugar spikes. Ideal for health-conscious individuals, 
                    this sugar-free option integrates seamlessly into active, mindful lifestyles. 
                    With no compromise on flavor, our blend delivers an invigorating boost that’s better for your body.
                </p>
        
                <table class="stats-table">
                    <tr>
                        <td class="label">Energy</td>
                        <td class="value">0 kcal</td> </tr>
                    <tr>
                        <td class="label">Caffeine</td>
                        <td class="value">75 mg</td> </tr>
                    <tr>
                        <td class="label">Taurine</td>
                        <td class="value">1000 mg</td> </tr>
                    <tr>
                        <td class="label">Total Sugar</td>
                        <td class="value highlight">0 g (Zero Sugar)</td> </tr>
                    <tr>
                        <td class="label">Vitamins</td>
                        <td class="value">C, B2, B3, B5, B6, B12</td> </tr>
                </table>
            </div>
        </div>


        <!-- CLASSIC EDITION -->
        <div class="product-container pl-20">
            <div id="image3" class="product-img mr-20"></div>
            <div id="details3" class="product-details left-border-radius-40">
                <h2>SURGE CLASSIC EDITION</h2>
                <h3>The Original Powerhouse</h3>
                <p>
                    The ultimate energy experience designed to fuel your body with maximum energy and elevate your 
                    brain's performance to the next level. SURGE Classic is enriched with an essential 
                    multivitamin complex and a high-performance formula to ensure you stay sharp and energized 
                    throughout the day. It is the signature blend for those who push their limits.
                </p>
        
                <table class="stats-table">
                    <tr>
                        <td class="label">Energy</td>
                        <td class="value">112.5 kcal</td> </tr>
                    <tr>
                        <td class="label">Caffeine</td>
                        <td class="value">75 mg</td> </tr>
                    <tr>
                        <td class="label">Taurine</td>
                        <td class="value">1000 mg</td> </tr>
                    <tr>
                        <td class="label">Total Sugar</td>
                        <td class="value">27.5 g</td> </tr>
                    <tr>
                        <td class="label">Vitamins</td>
                        <td class="value">C, B2, B3, B5, B6, B12</td> </tr>
                </table>
            </div>
        </div>
    </section>

    <?php require_once __DIR__ . "/src/view/FooterView.php"; ?>

    <script src="public/scripts/video.js"></script>
    <script src="public/scripts/sidemenu.js"></script>
</body>
</html>