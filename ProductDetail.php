<?php
session_start();
$isLoggedIn = isset($_SESSION['Usname']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .product-container {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            margin: 20px 0;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .product-image {
            flex: 1;
            text-align: center;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .product-details {
            flex: 2;
            padding: 20px;
        }

        .product-details h1 {
            margin-top: 0;
            font-size: 2em;
            color: #343a40;
        }

        .product-details p {
            font-size: 1.1em;
            margin: 10px 0;
        }

        .btn {
            padding: 10px 20px;
            background-color: #27cb5b;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 4px;
            gap: 20px;
        }
        .btn + .btn {
            margin-left: 20px; 
        }

        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
                align-items: center;
            }

            .product-image,
            .product-details {
                flex: none;
                width: 100%;
            }

            .product-details {
                padding: 10px;
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

    <div class="container product-container">
        <?php
        include 'connect.php';

        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $sql = "SELECT * FROM clenser WHERE Cl_ID = $productId";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo '<div class="product-image">';
                echo '<img src="uploads/' . $row['image'] . '" alt="' . $row['Clenser_name'] . '">';
                echo '</div>';
                echo '<div class="product-details">';
                echo '<h1>' . $row['Clenser_name'] . '</h1>';
                echo '<p><strong>Price:</strong> Rs. ' . $row['Clenser_price'] . '</p>';
                echo '<p><strong>Size:</strong> ' . $row['Clenser_size'] . '</p>';
                echo '<button class="btn">Add to Cart</button>';
                echo '<button class="btn">Buy Now</button>';
                echo '</div>';
            } else {
                echo '<p>Product not found.</p>';
            }
        } else {
            echo '<p>No product ID provided.</p>';
        }

        mysqli_close($conn);
        ?>
    </div>

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
