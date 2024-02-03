<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auto Parts & Car Repair</title>
    <link rel="stylesheet" href="../assets/homepage.css">
</head>

<body>
    <header>
        <div class="headeri">
            <img src="../assets/images/logo.png" height="50px">
            <div class="name">
                <p>Auto Parts & Car Repair</p>
            </div>
        </div>
        <ul>
            <li><a style="text-decoration:none; color: black;" href="aboutus.php">About Us</a></li>
            <li><a style="text-decoration:none; color: black;" href="ContactUs.php">Contact Us</a></li>
            <li><a style="text-decoration:none; color: black;" href="news.php">News</a></li>
            <li><a style="text-decoration:none; color: black;" href="order.php">Orders</a></li>
            <li><a style="text-decoration:none; color: black;" href="login.php">Log In</a></li>

        </ul>
    </header>
    <main>
        <div class="bgfoto" id="bgfotoDiv" style="background-image: url(../assets/images/autogarage.png); background-size: 100% 100%;">
            <input type="text" placeholder="Search" style="height: 20px;">
            <button class="butoni_bg"><img src="../assets/images/search.png" alt=""></button>
        </div>
        <div class="artikujt" id="services">
            <h3>Articles & Services</h3>
        </div>
        <div class="fotografit">
            <?php 
                include_once '../models/article.php';

                $article = new Article();

                $articles = $article->getArticles();

                foreach($articles as $article){ ?> 
                    <div class="rubrika">
                        <img src="../<?php echo $article["image"] ?>" alt="" class="img">
                        <div class="pershkrimi">
                            <p><?php echo $article["title"] ?></p>
                        </div>
                    </div>
                <?php
                }
            ?>
        </div> 
    </main>
    <footer>
        <div class="b">
            <h2>Info</h2>
            <h2>Our Brand Cars</h2>
            <div class="bb">
                <a href=""><img src="../assets/images/audilogo.png" alt="audilogo"></a>
                <a href=""><img src="../assets/images/bmwlogo.png" alt="bmwlogo"></a>
                <a href=""><img src="../assets/images/mercedes-logo.png" alt="mercedes-logo"></a>
                <a href=""><img src="../assets/images/porsche-logo.png" alt="porsche-logo"></a>
                <a href=""><img src="../assets/images/bentley.png" alt="bentley"></a>
            </div>
        </div>
        <div class="footermain">
            <div class="footerleft">
                <p>At the top of the page you can get information on the location of our garage, contact methods and everything else you need.
                    Come to us and feel happy with your car</p>
            </div>
            <div class="footercenter">
                <p>Audi</p>
                <p>BMW</p>
                <p>Mercedes-Benz</p>
                <p>Porsche</p>
                <p>Bentley</p>
            </div>
            <div class="footerright">
                <p>Terms of use</p>
                <p>Privacy Policy</p>
            </div>
        </div>
        <div class="fundi">
            <p>Copyright 2023 Auto Parts & Car Repair Company. All rights reserved.</p>
            <p>Designed by Us</p>
        </div>
    </footer>
</body>
</html>