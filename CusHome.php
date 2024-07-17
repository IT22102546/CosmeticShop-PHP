<?php
session_start();
$isLoggedIn = isset($_SESSION['Usname']);
$username = $isLoggedIn ? $_SESSION['Usname'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Skin Care</title>
    <link rel="stylesheet" href="styles.css">
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
                <?php if ($isLoggedIn): ?>
                    <li>Welcome, <?php echo htmlspecialchars($username); ?>!</li>
                    <a href="logout.php" class="btn">Log Out</a>
                <?php else: ?>
                    <a href="login.php" class="btn">Log In</a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <section class="main-banner">
        <div class="container banner-container">
            <div class="banner-content">
                <h2>Care For Your Skin, Care For Your Beauty</h2>
                <p>Sulosowshadham is a distinguished brand in the cosmetic industry, renowned for its commitment to natural beauty and sustainable practices. With a philosophy centered around harnessing the power of nature, Sulosowshadham offers a wide range of products that cater to diverse skin types and beauty needs. </p>
                <a href="#" class="btn">Read more</a>
            </div>
            <div class="banner-image">
                <img src="https://img.freepik.com/premium-photo/beautiful-woman-with-face-cream-skin-protection-skin-care-spa-young-female-holds-moisturizing-cream-smiling-natural-makeup_231834-968.jpg" alt="Beauty">
            </div>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <h2 class="section-title">Shop by Hair care</h2>
            <div class="product-slider">
                <div class="product-item">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Ubtan Facial">
                    <h3>Shampoo</h3>
                </div>
                <div class="product-item">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Brightening Facial">
                    <h3>Conditioners</h3>
                </div>
                <div class="product-item">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Night Beauty">
                    <h3>Hair Masks</h3>
                </div>
                <div class="product-item">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Acne Mask">
                    <h3>Serum for Hair</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <h2 class="section-title">Shop by Skin Care</h2>
            <div class="category-slider">
                <div class="category-item">
                <a href="Customerclenser.php">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Cleansers">
                    <h3>Cleansers</h3>
                </a>
                </div>
                <div class="category-item">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Toners">
                    <h3>Toners</h3>
                </div>
                <div class="category-item">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Serums">
                    <h3>Serums</h3>
                </div>
                <div class="category-item">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Moisturizer">
                    <h3>Moisturizer</h3>
                </div>
                <div class="category-item">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Acne Treatment">
                    <h3>Acne Treatment</h3>
                </div>
                <div class="category-item">
                    <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Sun Screen">
                    <h3>Sun Screen</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-content">
    <div class="container">
        <div class="featured-text">
            <h2>Sustainable and Ethical Practices</h2>
            <p>Sulosowshadham is deeply committed to sustainability. The brand emphasizes eco-friendly packaging, cruelty-free testing, and ethical sourcing of ingredients. By prioritizing these practices, Sulosowshadham aims to reduce its environmental footprint and promote a more responsible approach to beauty. </p>
        </div>
        <div class="featured-image">
            <img src="https://img.freepik.com/free-photo/front-view-woman-with-beauty-product-concept_23-2148734946.jpg" alt="Featured Image">
        </div>
    </div>
</section>

<section class="product-grid">
    <div class="container">
        <div class="product-item-grid">
            <div class="product-item">
                <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Product">
                <h3>Lipsticks</h3>
                <p>03/12/12</p>
                <a href="#" class="btn-read-more">Read More</a>
            </div>
            <div class="product-item">
                <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Product">
                <h3>Eye Shadows</h3>
                <p>03/12/12</p>
                <a href="#" class="btn-read-more">Read More</a>
            </div>
            <div class="product-item">
                <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Product">
                <h3>Foundations</h3>
                <p>03/12/12</p>
                <a href="#" class="btn-read-more">Read More</a>
            </div>
            <div class="product-item">
                <img src="https://www.rollingstone.com/wp-content/uploads/2022/11/creme-de-la-mer-sale.png" alt="Product">
                <h3>Lipsticks</h3>
                <p>03/12/12</p>
                <a href="#" class="btn-read-more">Read More</a>
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
