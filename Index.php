<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile">
                <img src="Picture/IMG_4526.jpg">
                <h1>Lucky Aditya Pratama</h1>
                <p>202143500565</p>
                <div class="social-links">
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
            <?php include 'Home/nav.php'; ?>
        </aside>
        <main class="main-content">
            <div class="content">
                <?php
                if (isset($_GET['page']) && $_GET['page'] == 'about') {
                    include 'Biodata.php';
                } elseif (isset($_GET['page']) && $_GET['page'] == 'portfolio') {
                    include 'portfolio.php';
                } else {
                    echo 'Welcome to my portfolio!';
                }
                ?>
            </div>
        </main>
    </div>
</body>
</html>
