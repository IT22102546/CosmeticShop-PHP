<?php
session_start();
$isLoggedIn = isset($_SESSION['Usname']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Skin Care</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
<header>
    <div class="container header-container">
        <div class="logo">
            <img src="Logo/logo.png">
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo $isLoggedIn ? 'CusHome.php' : 'Home.php'; ?>">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="header-buttons">
            <a href="#" class="btn">Cart</a>
        </div>
    </div>
</header>

<section class="about-section">
    <div class="container">
        <h2>About Us</h2>
        <div class="about-content">
            <div class="about-text">
                <h3>Discover a Skinvia Flagship</h3>
                <p>Find your ideal combination of in-office treatments & skincare regimens.</p>
                <a href="#" class="read-more">Read more&gt;&gt;</a>
            </div>
            <div class="about-image">
                <img src="https://media6.ppl-media.com/mediafiles/blogs/Day_cream_24936543e9.jpg" alt="Skinvia Flagship">
            </div>
        </div>
    </div>
</section>

<section class="services-section">
    <div class="container">
        <h2>Lorem Ipsum Dolor Sit Amet</h2>
        <div class="services-content">
            <div class="service">
                <span class="service-icon"></span>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua.</p>
            </div>
            <div class="service">
                <span class="service-icon"></span>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua.</p>
            </div>
            <div class="service">
                <span class="service-icon"></span>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua.</p>
            </div>
            <div class="service">
                <span class="service-icon"></span>
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua.</p>
            </div>
        </div>
        <div class="additional-content">
            <div class="additional-text">
                <h3>Lorem Ipsum Dolor Sit Amet</h3>
                <p>Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua. Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat.</p>
            </div>
            <div class="additional-image">
                <img src="https://cdn.kitsune.tools/v1/5b2761538da2c40504537661/anti-aging-creams-5bf4f8b78b39fd0001a4cd67.png" alt="Service Image">
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container footer-container">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Skinvia is your go-to source for premium skin care products and treatments.</p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">LinkedIn</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Email: info@skinvias.com</p>
            <p>Phone: +94 76 5644323</p>
        </div>
    </div>
</footer>

</body>
</html>
