<?php
session_start();
$isLoggedIn = isset($_SESSION['Usname']); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleansers - Beauty Skin Care</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .cleansers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
           
        }

        .cleanser-card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            height: 100%; 
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            min-height: 300px; 
            overflow: hidden; 
        }

        .cleanser-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
            display: block; 
        }

        .btn-buy-now {
            display: inline-block;
            padding: 8px 16px;
            background-color: #27cb5b; 
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        .container {
            padding-bottom: 60px; 
        }

        @media (max-width: 768px) {
            .cleansers-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }

        @media (max-width: 576px) {
            .cleansers-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
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
              
            </div>
        </div>
    </header>

    <section class="cleansers-page">
        <div class="container">
            <h2 class="section-title">Shop Cleansers</h2>
            <div class="cleansers-grid">
            <?php
                include 'connect.php';

                $sql = "SELECT * FROM clenser";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="cleanser-card">';
                        echo '<img src="uploads/' . $row['image'] . '" alt="' . $row['Clenser_name'] . '">';
                        echo '<h3>' . $row['Clenser_name'] . '</h3>';
                        echo '<p><strong>Price:</strong> Rs. ' . $row['Clenser_price'] . '</p>';
                        echo '<p><strong>Size:</strong> ' . $row['Clenser_size'] . '</p>';
                        echo '<a href="productDetail.php?id=' . $row['Cl_ID'] . '" class="btn-buy-now">Buy Now</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No cleansers found.</p>';
                }

                mysqli_close($conn);
                ?>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="about.php">About</a></li>
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
