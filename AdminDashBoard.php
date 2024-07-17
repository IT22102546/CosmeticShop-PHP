<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="adm.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include "connect.php"; ?>

    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="Logo/logo.png">
            </div>
            <nav>
                <ul>
                    <li><a href="Home.php">Home</a></li>
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

    <main>
        <div id="admin-panel">
            <h3 id="topp">Admin Control Panel</h3>
            <div class="tpcon">
                <h2 class="section-title">Edit and Add Products</h2>

                <div class="food-item">
                    <h5 class="food-title">Cleansers</h5>
                    <div class="food-content">
                        <img src="https://i5.walmartimages.com/asr/d9931209-a11f-417c-843e-348870947f5d.33e9d0ede6a641d3586ad819d485e9de.jpeg" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href='addClensers.php'" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href='Clenser.php'" class="btn" />
                        </div>
                    </div>
                </div>

                <div class="food-item">
                    <h5 class="food-title">Toners</h5>
                    <div class="food-content">
                        <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-toners-1592326445.png?crop=0.498xw:0.997xh;0.384xw,0&resize=640:*" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href=''" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href=''" class="btn" />
                        </div>
                    </div>
                </div>

                <div class="food-item">
                    <h5 class="food-title">Serum</h5>
                    <div class="food-content">
                        <img src="https://1.bp.blogspot.com/-qEtUABJpiv4/Xt6EReFT3dI/AAAAAAAAYF8/6OcUx_f4KkIH0v-FBjfAjd2NNQmYzsM2gCLcBGAsYHQ/s1600/foto%2Bserum%2Bblog.jpg" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href=''" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href=''" class="btn" />
                        </div>
                    </div>
                </div>

                <div class="food-item">
                    <h5 class="food-title">Moisturizer</h5>
                    <div class="food-content">
                        <img src="https://reviewed-com-res.cloudinary.com/image/fetch/s--VkMJxmrx--/b_white,c_limit,cs_srgb,f_auto,fl_progressive.strip_profile,g_center,q_auto,w_972/https://reviewed-production.s3.amazonaws.com/1574364848146/HERO.jpg" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href=''" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href=''" class="btn" />
                        </div>
                    </div>
                </div>

                <div class="food-item">
                    <h5 class="food-title">Acne treatments</h5>
                    <div class="food-content">
                        <img src="https://media.allure.com/photos/600c7df233ba110cf4d8572c/master/pass/lede.jpg" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href=''" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href=''" class="btn" />
                        </div>
                    </div>
                </div>

                <div class="food-item">
                    <h5 class="food-title">Sun Screen</h5>
                    <div class="food-content">
                        <img src="https://nypost.com/wp-content/uploads/sites/2/2021/03/face-sunscreen.jpg?quality=90&strip=all&w=1236&h=820&crop=1" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href=''" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href=''" class="btn" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="tpcon">
                <h2 class="section-title">Add and Edit Skin Concers</h2>
                <div class="food-item">
                    <h5 class="food-title">Urban Facial</h5>
                    <div class="food-content">
                        <img src="http://cdn.shopify.com/s/files/1/0550/0285/7518/products/SKINCARE2_1200x1200.jpg?v=1669935162" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href=''" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href=''" class="btn" />
                        </div>
                    </div>
                </div>
                <div class="food-item">
                    <h5 class="food-title">Brightening Facial</h5>
                    <div class="food-content">
                        <img src="https://1.bp.blogspot.com/-PfUWrkS6P6w/YQrCrqipcAI/AAAAAAAAYns/GeOFdTS-zqkHDGEuSEuD8418BIUCBHszACLcBGAsYHQ/s2048/Scarlett%2BUTAMA.JPG" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href=''" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href=''" class="btn" />
                        </div>
                    </div>
                </div>
                <div class="food-item">
                    <h5 class="food-title">Night Beauty</h5>
                    <div class="food-content">
                        <img src="https://cdn2.stylecraze.com/wp-content/uploads/2019/07/Garnier-Light-Complete-Night-Cream.jpg" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href=''" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href=''" class="btn" />
                        </div>
                    </div>
                </div>
                <div class="food-item">
                    <h5 class="food-title">Acne masks</h5>
                    <div class="food-content">
                        <img src="http://cdn.shopify.com/s/files/1/0550/0285/7518/products/SKINCARE2_1200x1200.jpg?v=1669935162" class="ad4to" />
                        <div class="food-actions">
                            <input type="button" value="Add" onclick="window.location.href=''" class="btn" />
                            <input type="button" value="Edit" onclick="window.location.href=''" class="btn" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
